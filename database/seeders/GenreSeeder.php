<?php

namespace Database\Seeders;

use App\Models\Genre;

class GenreSeeder extends ModelSeeder
{
    public function getModelClass(): string
    {
        return Genre::class;
    }
}
