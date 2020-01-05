<?php

namespace App\Repos;

use App\Models\Blog;

class BlogRepo
{
    protected $blog;

    public function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }

    public function create(array $values): Blog
    {
        return $this->blog->create($values);
    }

    public function findOrFail(int $id): Blog
    {
        return $this->blog->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $blog = $this->findOrFail($id);

        return $blog->update($values);
    }

    public function delete(int $id): bool
    {
        $blog = $this->findOrFail($id);

        return $blog->delete();
    }
}
