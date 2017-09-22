<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Order extends Model
{
  protected $dates = ['data'];
  protected $table = 'teste-polvo.orders';
}