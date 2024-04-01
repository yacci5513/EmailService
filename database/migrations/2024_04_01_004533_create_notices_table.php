<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 공지사항 테이블
        // 공지id, 회원id, 제목, 내용, 유효일, 생성일, 수정일, 삭제일
        Schema::create('notices', function (Blueprint $table) {
            $table->id('n_id');

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')
                ->references('u_id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->string('n_title');
            $table->string('n_content');
            $table->date('n_expiration_at')->default(NULL);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
};
