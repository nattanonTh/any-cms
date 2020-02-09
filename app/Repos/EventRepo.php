<?php

namespace App\Repos;

use App\Models\Event;
use Illuminate\Database\Eloquent\Collection;

class EventRepo
{
    protected $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function create(array $values): Event
    {
        return $this->event->create($values);
    }

    public function findOrFail(int $id): Event
    {
        return $this->event->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $event = $this->findOrFail($id);

        return $event->update($values);
    }

    public function delete(int $id): bool
    {
        $event = $this->findOrFail($id);

        return $event->delete();
    }

    public function all(): Collection
    {
        return Event::all();
    }
}
