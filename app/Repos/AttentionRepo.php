<?php

namespace App\Repos;

use App\Models\Attention;

class AttentionRepo
{
    protected $attention;

    public function __construct(Attention $attention)
    {
        $this->attention = $attention;
    }

    public function create(array $values): Attention
    {
        return $this->attention->create($values);
    }

    public function findOrFail(int $id): Attention
    {
        return $this->attention->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $attention = $this->findOrFail($id);

        return $attention->update($values);
    }

    public function delete(int $id): bool
    {
        $attention = $this->findOrFail($id);

        return $attention->delete();
    }
}
