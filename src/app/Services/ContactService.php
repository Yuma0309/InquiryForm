<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepositoryInterface;

/**
 * Contactモデルに関するビジネスロジックを実装するためのサービスクラス
 */
class ContactService implements ContactServiceInterface
{
    /**
     * ContactRepositoryInterfaceのインスタンス
     *
     * @var ContactRepositoryInterface
     */
    protected $contactRepository;

    /**
     * 新しいContactServiceインスタンスの生成
     *
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @inheritDoc
     */
    public function getAll()
    {
        return $this->contactRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getDepartmentNames()
    {
        return $this->contactRepository->getDepartmentNames();
    }

    /**
     * @inheritDoc
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender)
    {
        return $this->contactRepository->createContact($department_id, $name, $email, $content, $age, $gender);
    }
}
