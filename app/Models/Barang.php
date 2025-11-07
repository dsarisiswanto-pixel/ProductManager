<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Barang extends Model
{
    use HasFactory, Notifiable;
    protected $table = "product";
    protected $guarded = ['id'];
    public $timestamps = false;
}
