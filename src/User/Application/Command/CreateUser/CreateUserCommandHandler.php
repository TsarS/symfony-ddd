<?php

declare(strict_types=1);

namespace App\User\Application\Command\CreateUser;

use App\Shared\Application\Command\CommandHandlerInterface;
use App\User\Domain\Entity\User;
use App\User\Domain\Repository\UserRepositoryInterface;


class CreateUserCommandHandler implements CommandHandlerInterface
{
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @return string UserId
     */
    public function __invoke(CreateUserCommand $createUserCommand): string
    {
      #  $user = $this->userFactory->create($createUserCommand->email, $createUserCommand->password);
       $user = new User('123','23423','234');
        $this->userRepository->add($user);

        return $user->getId();
    }
}
