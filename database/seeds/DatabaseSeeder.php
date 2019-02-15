<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'cache',
            'jobs',
            'sessions',
        ]);

        $this->call(AuthTableSeeder::class);
        $this->call(CourseSeed::class);
        $this->call(QuestionsSeed::class);
        $this->call(ConfigSeeder::class);
        $this->call(SliderSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(SponsorSeeder::class);
        $this->call(FaqSeeder::class);

        Model::reguard();
    }
}
