<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'content'
    ];

    public function users(){

        return $this->belongsTo(User::class);
    }
}
