<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorpsMetier extends Model
{
    use HasFactory;

    protected $table="corps_metiers";

    protected $guarded = ["created_at","updated_at"];
}
