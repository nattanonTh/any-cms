<?php

namespace App\Repos;

use App\Models\Banner;

class BannerRepo
{
    protected $banner;

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    public function create(array $values): Banner
    {
        return $this->banner->create($values);
    }

    public function findOrFail(int $id): Banner
    {
        return $this->banner->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $banner = $this->findOrFail($id);

        return $banner->update($values);
    }

    public function delete(int $id): bool
    {
        $Banner = $this->findOrFail($id);

        return $Banner->delete();
    }
}
