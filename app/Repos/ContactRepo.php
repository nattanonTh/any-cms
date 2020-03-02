<?php

namespace App\Repos;

use App\Models\Contact;

class ContactRepo
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function create(array $values): Contact
    {
        return $this->contact->create($values);
    }

    public function findOrFail(int $id): Contact
    {
        return $this->contact->findOrFail($id);
    }

    public function update(int $id, array $values): bool
    {
        $contact = $this->findOrFail($id);

        return $contact->update($values);
    }

    public function delete(int $id): bool
    {
        $contact = $this->findOrFail($id);

        return $contact->delete();
    }
}
