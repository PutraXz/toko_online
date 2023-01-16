<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function shooping_detail(){
        return $this->hasMany(ShoopingDetail::class);
    }
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'file', 'price', 'description', 'category', 'slug', 'stock'];
}
