<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Stream;

class StreamTest extends TestCase
{
    public function test_stream_index_requires_auth()
    {
        $this->get('/streams')->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_streams()
    {
        $user = User::factory()->create();
        $this->actingAs($user)
             ->get('/streams')
             ->assertStatus(200);
    }
}
