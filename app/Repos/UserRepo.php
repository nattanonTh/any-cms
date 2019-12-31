<?php

namespace App\Repos;

use App\Models\User;

class UserRepo
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function create(array $values): User
    {
        return $this->user->create($values);
    }

    public function findOrFail(int $id): User
    {
        return $this->user->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $user = $this->findOrFail($id);

        return $user->update($values);
    }

    public function delete(int $id): bool
    {
        $user = $this->findOrFail($id);

        return $user->delete();
    }
}
