<?php

namespace Tests\Helper;

use App\Models\User;

trait TestHelper
{
    public function login(): User
    {
        $user = factory(User::class)->make();
        $this->actingAs($user);

        return $user;
    }
}
