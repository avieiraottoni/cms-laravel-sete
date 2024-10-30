<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use Notifiable;
    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}
