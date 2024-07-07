<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsentementSigne extends Model
{
    use HasFactory;

    protected $table="consentements_signes";

    protected $guarded = ["create_at","updated_at"];
}
