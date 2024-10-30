<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'category_id',
        'name',
        'descreption',
        'exclusive'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function category(){

        return $this->belongsTo(Category::class);
    }
}
