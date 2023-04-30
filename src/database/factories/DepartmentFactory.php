<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private static $sequence = 1;
    
    public function definition()
    {
        return [
            'name' => '部署'.self::$sequence++, // 部署{num}：numには連番で数値が入る
            'manager_name' => $this->faker->name, // 姓名
            'created_at' => $this->faker->dateTime('now'), //現在までYmdHis
            'updated_at' => $this->faker->dateTime('now'), //現在までYmdHis
            'deleted_at' => $this->faker->dateTime('now'), //現在までYmdHis
        ];
    }
}
