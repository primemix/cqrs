<?php

declare(strict_types=1);

namespace App\Model\User\Entity\User;

use DateTimeImmutable;

class User
{
    private $id;
    private $date;
    private $email;
    private $passwordHash;

    public function __construct(
        Id $id,
        DateTimeImmutable $date,
        Email $email,
        string $hash)
    {
        $this->id = $id;
        $this->date = $date;
        $this->email = $email;
        $this->passwordHash = $hash;
    }

    public function getId(): Id
    {
        return $this->id;
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->date;
    }

    public function getEmail(): Email
    {
        return $this->email;
    }

    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }
}
