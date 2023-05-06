<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Contact;
use App\Models\Department;

/**
 * Contactリポジトリ実装クラス
 */
class ContactRepository implements ContactRepositoryInterface
{
    /**
    * @inheritDoc
    */
    public function getAll()
    {
        return Contact::all();
    }

    /**
    * @inheritDoc
    */
    public function getDepartmentNames()
    {
        return Department::pluck('name', 'id');
    }

    /**
    * @inheritDoc
    */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender)
    {
        return Contact::create([
            'department_id' => $department_id,
            'name' => $name,
            'email' => $email,
            'content' => $content,
            'age' => $age,
            'gender' => $gender,
        ]);
    }
}
