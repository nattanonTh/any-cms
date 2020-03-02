<?php

namespace App\Repos;

use App\Models\Video;

class VideoRepo
{
    protected $blog;

    public function __construct(Video $video)
    {
        $this->video = $video;
    }

    public function create(array $values): Video
    {
        return $this->video->create($values);
    }

    public function findOrFail(int $id): Video
    {
        return $this->video->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $video = $this->findOrFail($id);

        return $video->update($values);
    }

    public function delete(int $id): bool
    {
        $video = $this->findOrFail($id);

        return $video->delete();
    }
}
