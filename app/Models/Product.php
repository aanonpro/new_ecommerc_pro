<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable =[
        'category_id',
        'name','slug','description',
        'original_price','selling_price','image',
        'quantity','tax','status','trending','meta_title',
        'meta_keywords','meta_description','created_by'
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
