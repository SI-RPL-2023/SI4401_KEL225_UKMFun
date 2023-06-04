<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";
    protected $primaryKey = "id_event";

    protected $fillable = [
        'id_ukm',
        'nama_ukm',
        'nama_event',
        'tanggal',
        'waktu',
        'deskripsi',
        'poster',
    ];
}
