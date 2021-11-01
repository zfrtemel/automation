<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable=['processNote','orderId','userId'];
/**
 * Get the order associated with the OrderDetail
 *
 * @return \IlluminaOrder\Database\Eloquent\Relations\HasOne
 */
public function order()
{
    return $this->hasOne(Order::class, 'id', 'orderId');
}

}
