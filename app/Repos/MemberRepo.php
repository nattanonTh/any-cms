<?php

namespace App\Repos;

use App\Models\Member;

class MemberRepo
{
    protected $member;

    public function __construct(Member $member)
    {
        $this->member = $member;
    }

    public function create(array $values): Member
    {
        return $this->member->create($values);
    }

    public function findOrFail(int $id): Member
    {
        return $this->member->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $member = $this->findOrFail($id);

        return $member->update($values);
    }

    public function delete(int $id): bool
    {
        $member = $this->findOrFail($id);

        return $member->delete();
    }
}
