<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call(LanguageSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(NovelTypeSeeder::class);
        $this->call(AuthorSeeder::class);

        $this->call(NovelSeeder::class);

        $this->call(GenreNovelSeeder::class);
        $this->call(NovelTagSeeder::class);

        $this->call(SourceSeeder::class);
        $this->call(LanguageSourceSeeder::class);
        $this->call(NovelSourceSeeder::class);
    }
}
