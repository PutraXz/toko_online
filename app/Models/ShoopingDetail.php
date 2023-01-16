<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoopingDetail extends Model
{
    use HasFactory;
    public function product(){
        return $this->belongsTo(Products::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $table = 'shooping_details';
    protected $primaryKey = 'id';
    protected $fillable = ['product_id', 'user_id', 'status', 'shooping_id', 'jumlah', 'jumlah_harga'];
}
