<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders'; // Указываем имя таблицы, если оно отличается от стандартного
    public $timestamps = false;
}
