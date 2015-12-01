<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='user';

    protected $fillable=['name','price','desc'];

}
