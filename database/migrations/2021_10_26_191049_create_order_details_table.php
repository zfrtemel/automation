<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('orderId')->index();
            $table->foreign('orderId')->references('id')->on('orders')->onDelete('cascade');

            $table->string('processNote');

            $table->unsignedBigInteger('userId')->index();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
            //işlem yapan kişilerin id si girilecek bu alana
            //birden fazla kere işlem yapılabileceği için bu alan ilişkili olarak ayrıldı,
            //teslim alındı
            //temizlik yapıldı vs vs böylelikle müşteri ürününde yapılan işlemleri görebilir
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
