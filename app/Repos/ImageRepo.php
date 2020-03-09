<?php

namespace App\Repos;

use App\Models\Image;

class ImageRepo
{
    protected $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function create(array $values): Image
    {
        return $this->image->create($values);
    }

    public function findOrFail(int $id): Image
    {
        return $this->image->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $image = $this->findOrFail($id);

        return $image->update($values);
    }

    public function delete(int $id): bool
    {
        $image = $this->findOrFail($id);

        return $image->delete();
    }
}
