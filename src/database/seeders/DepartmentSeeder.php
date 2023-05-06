<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * データベースのシードを実行
     *
     * @return void
     */
    public function run()
    {
        Department::factory()->count(10)->create(); // ダミーデータを10レコード作成
    }
}
