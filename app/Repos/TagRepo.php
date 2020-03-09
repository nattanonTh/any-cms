<?php

namespace App\Repos;

use App\Models\Tag;

class TagRepo
{
    protected $tag;

    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function create(array $values): Tag
    {
        return $this->tag->create($values);
    }

    public function findOrFail(int $id): Tag
    {
        return $this->tag->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $tag = $this->findOrFail($id);

        return $tag->update($values);
    }

    public function delete(int $id): bool
    {
        $tag = $this->findOrFail($id);

        return $tag->delete();
    }
}
