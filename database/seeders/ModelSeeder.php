<?php

namespace Database\Seeders;

use Arr;
use DB;
use Illuminate\Database\Eloquent\Model;
use JetBrains\PhpStorm\Pure;
use JsonException;

abstract class ModelSeeder extends BaseSeeder
{
    /**
     * @return string
     */
    abstract public function getModelClass(): string;

    /**
     * @return Model
     */
    public function getModelClassInstance(): Model
    {
        $modelClass = $this->getModelClass();

        return with(new $modelClass);
    }

    /**
     * @return string
     */
    public function getJsonFileName(): string
    {
        return $this->getModelClassInstance()->getTable();
    }

    /**
     * @throws JsonException
     */
    public function getData(): array
    {
        $fileName = $this->getJsonFileName();

        return static::getJson($fileName);
    }

    /**
     * @return array
     */
    abstract public function getDistinctKeys(): array;

    /**
     * @param  array  $data
     * @param  array  $keys
     * @return array
     */
    #[Pure] public function getDistinctData(array $data, array $keys): array
    {
        return Arr::only($data, $keys);
    }

    /**
     * @param  array  $data
     * @return Model
     */
    public function updateOrCreate(array $data): Model
    {
        $keys = $this->getDistinctKeys();
        $modelClass = $this->getModelClass();

        if (!$keys) {
            return $modelClass::create($data);
        }

        return $modelClass::updateOrCreate(
            $this->getDistinctData($data, $keys),
            $data
        );

    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        DB::transaction(
            fn() => collect($this->getData())
                ->each(fn(array $data) => $this->updateOrCreate($data))
        );
    }
}
