<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('userId')->index();//buraya bunu kaydeden kişinin id si gelecek buda ya kasadaki yada müşterinin kendisi olacak
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('statusId')->index()->default('1');//default olarak beklemede olacak
            $table->foreign('statusId')->references('id')->on('statuses')->onDelete('cascade');

            $table->unsignedBigInteger('categoryId')->index();
            $table->foreign('categoryId')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('faultId')->index()->default('1');//eğer arıza türü belirtilmezse genel alanına eklenecek
            $table->foreign('faultId')->references('id')->on('faults')->onDelete('cascade');

            $table->text('customerNote')->nullable();
            $table->integer('isRead')->nullable()->default('0');

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
        Schema::dropIfExists('orders');
    }
}
