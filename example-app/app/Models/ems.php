<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ems extends Model
{
    use HasFactory;
    protected $table = "employe";
    protected $primaryKey = "id";
}
