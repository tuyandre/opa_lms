<?php

use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'theme_layout' => 1,
            'font_color' => 'default',
            'layout_type' => 'wide',
            'counter' => '1',
            'total_students' => '1M+',
            'total_courses' => '1K+',
            'total_teachers' => '200+'
        ];

        foreach ($data as $key => $value) {
            $key = str_replace('__', '.', $key);
            $config = \App\Models\Config::firstOrCreate(['key' => $key]);
            $config->value = $value;
            $config->save();
        }
    }
}
