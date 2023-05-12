<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $fillable = [ 'category_name', 'data'];
}