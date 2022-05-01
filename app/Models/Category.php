<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // table associate with the model
    protected $table = 'categories';

    // primary key 

    protected $primaryKey = 'id';

    // fillable 

    protected $fillable  = ['name'];
    public function category(){
        return $this->hasMany(Category::class);
    }
}
