<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class opteam extends Model
{
    protected $table='opteam_tabel';
    protected $primaryKey='id';
    protected $fillable=['name','email','address'];
    use HasFactory;
}
