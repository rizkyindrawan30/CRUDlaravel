<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jekel extends Model
{
    use HasFactory;
    protected $table = "jekels";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'jenis_kelamin'];
}
