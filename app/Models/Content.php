<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = "contents";
    protected $primaryKey = "id_content";

    protected $fillable = [
        'id_ukm',
        'nama_ukm', 	
        'deskripsi', 	
        'logo', 	
        'jumbotron', 	
        'visi', 	
        'misi', 	
        'galeri'
    ];
}   
