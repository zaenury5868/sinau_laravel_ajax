<?php

namespace Database\Seeders;
use App\Models\Pegawai;

use Carbon\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Pegawai::factory()->count(20)->create();
    }
}
