<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_imgs', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('product_id');
            $table->string('img_fullname', 255);   // 예: room0.jpg
            $table->string('img_path', 255)->nullable(); // 예: products/1/
            $table->string('save_status', 1)->default('Y');

            $table->timestamps();

            // 외래키
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete('cascade'); // 제품 삭제 -> 이미지 전체 삭제
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_imgs');
    }
};
