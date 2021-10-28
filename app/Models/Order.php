<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['name','userId','statusId','categoryId','faultId','customerNote'];
    public function ordersDetails(){
        return $this->hasMany(OrderDetail::class);
    }
}
