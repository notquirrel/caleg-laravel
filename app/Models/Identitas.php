<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    protected $table = 'caleg';
    protected $primaryKey = 'id';
    protected $fillable = [
        "nama",
        "visi",
        "misi",
        "afiliasi",
        "image",
        "afiliasi_image ",
    ];
}
