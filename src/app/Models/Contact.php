<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Departmentモデルのデータを関連付ける
     */
    public function department()
    {
        return $this->belongsTo('Department::class');
    }

    /**
     * モデルの複数代入可能な属性
     *
     * @var string[]
     */
    protected $fillable = [
        'department_id',
        'name',
        'email',
        'content',
        'age',
        'gender',
    ];
}
