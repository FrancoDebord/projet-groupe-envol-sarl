<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GE_Team extends Model
{
    use HasFactory;

    protected $table="ge_teams";
    protected $guarded = ['created_at',"updated_at"];
}
