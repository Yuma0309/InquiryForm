<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->nullable(false); // 部署ID
            $table->string('name', 20)->nullable(false); // 部署名
            $table->string('manager_name', 20)->nullable(); // マネージャー名
            $table->datetime('created_at')->nullable(); // 作成日時
            $table->datetime('updated_at')->nullable(); // 更新日時
            $table->datetime('deleted_at')->nullable(); // 削除日時
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}