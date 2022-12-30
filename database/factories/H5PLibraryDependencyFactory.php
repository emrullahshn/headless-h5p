<?php

namespace Alsay\LaravelH5P\Database\Factories;

use Alsay\LaravelH5P\Models\H5PLibrary;
use Alsay\LaravelH5P\Models\H5PLibraryDependency;
use Illuminate\Database\Eloquent\Factories\Factory;

class H5PLibraryDependencyFactory extends Factory
{
    protected $model = H5PLibraryDependency::class;

    public function definition()
    {
        return [
            'library_id' => H5PLibrary::factory(),
            'required_library_id' => H5PLibrary::factory(),
            'dependency_type' => $this->faker->randomElement(['editor', 'preloaded'])
        ];
    }
}
