<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);



        factory(App\Group::class, 3)->create();
        factory(App\Level::class)->create(['name' => 'Master']);
        factory(App\Level::class)->create(['name' => 'Blogeros']);
        factory(App\Level::class)->create(['name' => 'Colaboradores']);

        factory(App\User::class, 5)->create()->each(function ($user) {
            $profile = $user->profile()->save(factory(App\Profile::class)->make());
            $profile->location()->save(factory(App\Location::class)->make());
            $user->groups()->attach($this->array(rand(1, 3)));
            $user->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/90/90/'
            ]));
        });

        App\User::Create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('#Bjork3552')
        ]);
        Role::create([
            'name'    => 'Admin',
            'slug'    => 'admin',
            'special' => 'all-access'
        ]);

        factory(App\Chatuser::class, 5)->create();

        factory(App\Chat::class, 5)->create();

        factory(App\Category::class, 4)->create();
        factory(App\Tag::class, 12)->create();

        factory(App\Post::class, 10)->create()->each(function ($post) {
            $post->image()->save(factory(App\Image::class)->make());
            $post->tags()->attach($this->array(rand(1, 3)));
            $number_comments = rand(1, 6);
            for ($i = 0; $i < $number_comments; $i++) {
                $post->comments()->save(factory(App\Comment::class)->make());
            }
        });
        factory(App\Video::class, 10)->create()->each(function ($video) {
            $video->image()->save(factory(App\Image::class)->make());
            $video->tags()->attach($this->array(rand(1, 3)));
            $number_comments = rand(1, 3);
            for ($i = 0; $i < $number_comments; $i++) {
                $video->comments()->save(factory(App\Comment::class)->make());
            }
        });
    }
    public function array($max)
    {
        $values = [];
        for ($i = 1; $i < $max; $i++) {
            $values[] = $i;
        }
        return $values;
    }
}
