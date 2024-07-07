<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteInformationLue extends Model
{
    use HasFactory;

    protected $table="note_informations_lue";

    protected $guarded = ["create_at","updated_at"];
}
