<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    /**
     * Contactモデルのデータを関連付ける
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
