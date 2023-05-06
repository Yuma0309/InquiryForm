<?php

namespace App\Services;

/**
 * お問い合わせサービスのインターフェース
 */
interface ContactServiceInterface
{
    /**
     * すべてのお問い合わせを取得する
     *
     * @return Collection
     */
    public function getAll();

    /**
     * すべての部署名を取得する
     *
     * @return array
     */
    public function getDepartmentNames();

    /**
     * お問い合わせを作成する
     * @return int $department_id お問い合わせ部署id
     * @param string $name 名前
     * @param string $email メールアドレス
     * @param string $content 内容
     * @param int $age 年齢
     * @return int $gender 性別 1:男性 2:女性 3:その他
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender);
}
