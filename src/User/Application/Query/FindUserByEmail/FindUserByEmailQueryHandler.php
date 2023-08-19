<?php

declare(strict_types=1);

namespace App\User\Application\Query\FindUserByEmail;

use App\Shared\Application\Query\QueryHandlerInterface;
use App\User\Domain\Repository\UserRepositoryInterface;
use App\User\Application\DTO\UserDTO;


class FindUserByEmailQueryHandler implements QueryHandlerInterface
{
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    public function __invoke(FindUserByEmailQuery $query): UserDTO
    {
        $user = $this->userRepository->findByEmail($query->email);

        if (!$user) {
            throw new \Exception('User not found');
        }

        return new UserDTO($user->getId());
    }
}
