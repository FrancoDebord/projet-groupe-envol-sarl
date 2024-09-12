<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GE_PaysDestination extends Model
{
    use HasFactory;

    protected $table = "ge_pays_destinations";

    protected $guarded = ["created_at","updated_at"];
}
