<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChatControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function a_guest_can_see_all_the_chats()
    {
        // Arrange
        $chats = factory(\App\Chat::class, 10)->create();

        // Act
        $response = $this->get(route('chat.index'));

        // Assert
        $response->assertStatus(200);
        foreach ($chats as $chat) {
            $response->assertSee($chat->title);
        }
    }
    /** @test */
    public function it_sees_chats_author()
    {
        // Arrange
        $chats = factory(\App\Chat::class, 10)->create();

        // Act
        $response = $this->get(route('chat.index'));

        // Assert
        $response->assertStatus(200);
        foreach ($chats as $chat) {
            $response->assertSee($chat->title);
            $response->assertSee(
                e($chat->user->name)
            );
        }
    }
    /** @test */
    public function a_registered_user_can_see_all_the_chats()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $this->userSignIn($user);
        $chats = factory(\App\Chat::class, 10)->create();

        // Act
        $response = $this->get(route('chat.index'));

        // Assert
        $response->assertStatus(200);
        foreach ($chats as $chat) {
            $response->assertSee($chat->title);
        }
    }
    /** @test */
    public function a_guest_cannot_see_the_creation_form()
    {
        // Act
        $response = $this->get(route('chat.create'));

        // Assert
        $response->assertRedirect('/login');
    }
    /** @test */
    public function a_guest_cannot_create_chats()
    {
        // Act
        $response = $this->chat(route('chat.store'));

        // Assert
        $response->assertRedirect('/login');
    }
    /** @test */
    public function a_registered_user_can_create_chats()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $this->userSignIn($user);
        // Act
        $response = $this->chat(route('chat.store'), [
            'title' => 'Titulo',
            'description' => 'Descripción',
            'url' => 'http://gpopoteur.com'
        ]);

        // Assert
        $chat = \App\Chat::first();
        $this->assertSame(\App\Chat::count(), 1);
        $this->assertSame($user->id, $chat->user_id);
    }
    /** @test */
    public function only_author_can_edit_chat()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $chat = factory(\App\Chat::class)->create(['user_id' => $user->id]);
        $this->userSignIn($user);

        // Act
        $response = $this->put(route('chat.update', ['chat' => $chat->id]), [
            'title' => 'editado',
            'description' => 'editado',
            'url' => 'http://gpopoteur.com',
        ]);

        // Assert
        $chat = \App\Chat::first();
        $this->assertSame($chat->title, 'editado');
        $this->assertSame($chat->description, 'editado');
        $this->assertSame($chat->url, 'http://gpopoteur.com');
    }
    /** @test */
    public function if_not_author_cannot_edit_chat()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $chat = factory(\App\Chat::class)->create();
        $this->userSignIn($user);

        // Act
        $response = $this->put(route('chat.update', ['chat' => $chat->id]), [
            'title' => 'editado',
            'description' => 'editado',
            'url' => 'http://gpopoteur.com',
        ]);

        // Assert
        $chat = \App\Chat::first();
        $this->assertNotSame($chat->title, 'editado');
        $this->assertNotSame($chat->description, 'editado');
        $this->assertNotSame($chat->url, 'http://gpopoteur.com');
    }
    /** @test */
    public function only_author_can_delete_chat()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $chat = factory(\App\Chat::class)->create(['user_id' => $user->id]);
        $this->userSignIn($user);
        // Act
        $this->delete(route('chat.destroy', ['chat' => $chat->id]));
        $response = $this->get(route('chat.index'));

        // Assert
        $response->assertDontSee($chat->title);

        $chat = $chat->fresh();
        $this->assertNull($chat);
    }
    /** @test */
    public function if_not_author_cannot_delete_chat()
    {
        // Arrange
        $user = factory(\App\User::class)->create();
        $chat = factory(\App\Chat::class)->create();
        $this->userSignIn($user);
        // Act
        $this->delete(route('chat.destroy', ['chat' => $chat->id]));
        $response = $this->get(route('chat.index'));

        // Assert
        $response->assertSee($chat->title);

        $chat = $chat->fresh();
        $this->assertNotNull($chat);
    }
}
