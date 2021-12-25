<?php

namespace Database\Seeders;

use App\Models\Author;

class AuthorSeeder extends ModelSeeder
{
    public function getModelClass(): string
    {
        return Author::class;
    }
}
