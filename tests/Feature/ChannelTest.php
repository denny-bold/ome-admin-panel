<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class ChannelTest extends TestCase
{
    public function test_channel_index_requires_auth()
    {
        $this->get('/channels')->assertRedirect('/login');
    }
}
