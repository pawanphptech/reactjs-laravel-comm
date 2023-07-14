<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder {
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run() {
    Rating::factory()
      ->count(50)
      ->create();
  }
}
