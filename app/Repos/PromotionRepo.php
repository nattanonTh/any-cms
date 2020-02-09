<?php

namespace App\Repos;

use App\Models\Promotion;

class PromotionRepo
{
    protected $promotion;

    public function __construct(Promotion $promotion)
    {
        $this->promotion = $promotion;
    }

    public function create(array $values): Promotion
    {
        return $this->promotion->create($values);
    }

    public function findOrFail(int $id): Promotion
    {
        return $this->promotion->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $promotion = $this->findOrFail($id);

        return $promotion->update($values);
    }

    public function delete(int $id): bool
    {
        $promotion = $this->findOrFail($id);

        return $promotion->delete();
    }
}
