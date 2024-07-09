<?php

namespace App\Models;

use Codedge\Fpdf\Fpdf\Fpdf;

class CustomFPDF extends Fpdf
{
    function Header(){

        // $page_width = $this->GetPageWidth();

        $this->SetFont("Courier");
        //  // Logo
        // $this->Cell(10,10,asset("assets/fpdf-docs/header.jpg"));
        // $this->Image(asset("assets/logo/logo_envol.png"),10,6,50);
    }

      /**
     * Alternative to utf8_decode
     */
    function utf8_to_iso8859_1(string $string): string
    {
        $s = (string) $string;
        $len = \strlen($s);

        for ($i = 0, $j = 0; $i < $len; ++$i, ++$j) {
            switch ($s[$i] & "\xF0") {
                case "\xC0":
                case "\xD0":
                    $c = (\ord($s[$i] & "\x1F") << 6) | \ord($s[++$i] & "\x3F");
                    $s[$j] = $c < 256 ? \chr($c) : '?';
                    break;

                case "\xF0":
                    ++$i;
                    // no break

                case "\xE0":
                    $s[$j] = '?';
                    $i += 2;
                    break;

                default:
                    $s[$j] = $s[$i];
            }
        }

        return substr($s, 0, $j);
    }

     // Page footer
     function Footer()
     {
        $page_width = $this->GetPageWidth();
        // Logo
    //    $this->Image(asset("assets/fpdf-docs/footer.jpg"),10,6,50);

         // Position at 1.5 cm from bottom
         $this->SetY(-15);
         // Arial italic 8
         $this->SetFont('Arial', 'I', 8);
         // Page number
         $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' of {nb}', 0, 0, 'C');
     }
     
    function CheckPageBreak($h)
    {
        // If the height h would cause an overflow, add a new page immediately
        if ($this->GetY() + $h > $this->PageBreakTrigger)
        {

            $this->AddPage($this->CurOrientation);
            // $this->SetXY(5,70); 

            return true;
        }

        return false;
    }


    /**
     * MultiCell with alignment as in Cell.
     * @param float $w
     * @param float $h
     * @param string $text
     * @param mixed $border
     * @param int $ln
     * @param string $align
     * @param boolean $fill
     */
    function MultiAlignCell($w, $h, $text, $border = 0, $ln = 0, $align = 'L', $fill = false)
    {
        // Store reset values for (x,y) positions
        $x = $this->GetX() + $w;
        $y = $this->GetY();

        // Make a call to FPDF's MultiCell
        $this->MultiCell($w, $h, $this->utf8_to_iso8859_1($text), $border, $align, $fill);

        // Reset the line position to the right, like in Cell
        if ($ln == 0) {
            $this->SetXY($x, $y);
        }
    }

    //Cell with horizontal scaling if text is too wide
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);

        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;

        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max(strlen($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }

        //Pass on to Cell method
        $this->Cell($w,$h,$this->utf8_to_iso8859_1($txt),$border,$ln,$align,$fill,$link);

        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }

    //Cell with horizontal scaling only if necessary
    function CellFitScale($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$this->utf8_to_iso8859_1($txt),$border,$ln,$align,$fill,$link,true,false);
    }

    //Cell with horizontal scaling always
    function CellFitScaleForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$this->utf8_to_iso8859_1($txt),$border,$ln,$align,$fill,$link,true,true);
    }

    //Cell with character spacing only if necessary
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$this->utf8_to_iso8859_1($txt),$border,$ln,$align,$fill,$link,false,false);
    }

    //Cell with character spacing always
    function CellFitSpaceForce($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        //Same as calling CellFit directly
        $this->CellFit($w,$h,$this->utf8_to_iso8859_1($txt),$border,$ln,$align,$fill,$link,false,true);
    }

    // Better table
function ImprovedTable($header, $data)
{
    // Column widths
    // $w = array(40, 35, 40, 45);
    $w = array(20, 120, 20);
    // Header
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$this->utf8_to_iso8859_1($header[$i]),1,0,'C');
    $this->Ln();
    // Data
    foreach($data as $row)
    {
        $this->Cell($w[0],12,$row["numero"],'LR');
        $this->MultiAlignCell($w[1],12,$this->utf8_to_iso8859_1($row["declaration"]),'LR');
        $this->Cell($w[1],12,$this->utf8_to_iso8859_1($row["reponse"]),'LR');
        $this->Ln();
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}

// Colored table
function FancyTable($header, $data)
{
    // Colors, line width and bold font
    $this->SetFillColor(255,0,0);
    $this->SetTextColor(255);
    $this->SetDrawColor(128,0,0);
    $this->SetLineWidth(.3);
    $this->SetFont('','B');
    // Header
    $w = array(20, 120, 20);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$this->utf8_to_iso8859_1($header[$i]),1,0,'C',true);
    $this->Ln();
    // Color and font restoration
    $this->SetFillColor(224,235,255);
    $this->SetTextColor(0);
    $this->SetFont('');
    // Data
    $fill = false;
    foreach($data as $row)
    {
        $this->Cell($w[0],20,$row["numero"],'LR',0,'L',$fill);
        $this->MultiAlignCell($w[1],20,$row["declaration"],'LR',0,'L',$fill);
        $this->Cell($w[1],20,$row["reponse"],'LR',0,'L',$fill);
        $this->Ln();
        $fill = !$fill;
    }
    // Closing line
    $this->Cell(array_sum($w),0,'','T');
}
}   
