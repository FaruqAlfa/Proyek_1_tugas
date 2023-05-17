<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table="staff"; 
    public $timestamps= false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nama_staff',
        'no_telepon',
    ];
}
