<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionServiceInscription extends Model
{
    use HasFactory;

    protected $table="options_services_inscriptions";

    protected $guarded = ["created_at","updated_at"];
}
