<?php

declare(strict_types=1);

namespace App\User\Domain\Entity;


final class User
{


    public function __construct(
        private readonly string $id,
        private readonly string $email,
        private readonly string $password)
    {

    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        return [
            'ROLE_USER',
        ];
    }



}
