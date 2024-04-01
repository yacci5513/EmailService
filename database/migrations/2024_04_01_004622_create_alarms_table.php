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
        // 알림 테이블
        // 알림id, 공지id, 회원id, 수신자 email, 생성일, 수정일, 삭제일
        Schema::create('alarms', function (Blueprint $table) {
            $table->id('a_id');
            

            $table->unsignedBigInteger('n_id');
            $table->foreign('n_id')
                ->references('n_id')
                ->on('notices')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('u_id');
            $table->foreign('u_id')
                ->references('u_id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('a_to_email');
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
        Schema::dropIfExists('alarms');
    }
};
