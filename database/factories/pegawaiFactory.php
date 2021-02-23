<?php

namespace Database\Factories;
use app\Models\Pegawai;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class pegawaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pegawai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pegawai' => $this->faker->name,
            'jenis-kelamin' => "",
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->secondaryAddress

        ];
    }
}
