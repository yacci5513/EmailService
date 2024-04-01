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
        // 회원 테이블
        // 회원id, 이메일, 비밀번호, 이름, 연락처, 알림수신여부, 권한, 생성일, 수정일, 삭제일
        Schema::create('users', function (Blueprint $table) {
            $table->id('u_id');
            $table->string('u_email');
            $table->string('u_pw');
            $table->string('u_name')->nullable()->default(NULL);
            $table->string('u_tel', 11)->nullable()->default(NULL);
            $table->boolean('u_agree_alarm')->default(true);
            $table->integer('u_role')->default(3);
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
        Schema::dropIfExists('users');
    }
};
