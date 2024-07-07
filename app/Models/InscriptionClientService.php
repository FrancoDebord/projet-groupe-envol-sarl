<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscriptionClientService extends Model
{
    use HasFactory;

    protected $table="inscriptions_clients_services";

    protected $guarded = ["created_at","updated_at"];
}
