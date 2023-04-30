<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // 問い合わせID（Key：PK、型：BigIntegerを付ける必要あり）
            $table->unsignedBigInteger('department_id'); // 問い合わせ先の部署ID：外部キー
            $table->string('name', 20); // 名前
            $table->string('email', 255); // メールアドレス
            $table->string('content', 1000); // 内容
            $table->integer('age')->nullable(); // 年齢
            $table->integer('gender')->nullable(); // 性別
            $table->datetime('created_at')->nullable(); // 作成日時
            $table->datetime('updated_at'); // 更新日時

            $table->foreign('department_id')->references('id')->on('departments'); // 外部キー制約をつける
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
