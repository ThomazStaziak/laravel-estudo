<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $directors = factory(App\Director::class, 10)->create();

        foreach ($directors as $key => $value) {
          factory(App\Movie::class)->times(5)->create([
            'director_id' => $value->id
          ]);
        }

        $atores = factory(App\Actor::class)->times(5)->create();

        // foreach ($filmes as $key => $value) {
        //   $value->actors()->sync($atores->random(3));
        // }

    }
}
