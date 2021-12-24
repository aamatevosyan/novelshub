<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use JsonException;

class BaseSeeder extends Seeder
{
    /**
     * @throws JsonException
     */
    protected static function getJson($filename)
    {
        return json_decode(file_get_contents(database_path("data/$filename.json")), true, 512, JSON_THROW_ON_ERROR);
    }
}
