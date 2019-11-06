<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChatTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function chat_determines_its_author()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $chat = factory(\App\Chat::class)->create([
            'user_id' => $user->id
        ]);
        $chatByAnotherUser = factory(\App\Chat::class)->create();
        // Act
        $chatByAuthor = $chat->wasCreatedBy($user);
        $chatByAnotherAuthor = $chatByAnotherUser->wasCreatedBy($user);

        // Assert
        $this->assertTrue($chatByAuthor);
        $this->assertFalse($chatByAnotherAuthor);
    }
    /** @test */
    public function chat_determines_its_author_if_null_return_false()
    {
        // Arrange
        $chat = factory(\App\Chat::class)->create();
        // Act
        $chatByAuthor = $chat->wasCreatedBy(null);

        // Assert
        $this->assertFalse($chatByAuthor);
    }
}
