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
        $contact_data = array (
            0 =>
                array (
                    'name' => 'short_text',
                    'value' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet ipsum dolor sit amet, consectetuer adipiscing elit.',
                    'status' => 1,
                ),
            1 =>
                array (
                    'name' => 'primary_address',
                    'value' => ' Last Vegas, 120 Graphic Street, US',
                    'status' => 1,
                ),
            2 =>
                array (
                    'name' => 'secondary_address',
                    'value' => 'Califorinia, 88 Design Street, US',
                    'status' => 1,
                ),
            3 =>
                array (
                    'name' => 'primary_phone',
                    'value' => '(100) 3434 55666',
                    'status' => 1,
                ),
            4 =>
                array (
                    'name' => 'secondary_phone',
                    'value' => '(20) 3434 9999',
                    'status' => 1,
                ),
            5 =>
                array (
                    'name' => 'primary_email',
                    'value' => 'info@geniuscourse.com',
                    'status' => 1,
                ),
            6 =>
                array (
                    'name' => 'secondary_email',
                    'value' => 'mail@genius.info',
                    'status' => 1,
                ),
            7 =>
                array (
                    'name' => 'location_on_map',
                    'value' => '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.122954730373!2d70.75464901494634!3d22.27333179950189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cbb6403a06d1%3A0xa1b96fed244312fd!2sEYUVA+Technologies!5e0!3m2!1sen!2sin!4v1550551719110\' width=\'800\' height=\'600\' frameborder=\'0\' style=\'border:0\' allowfullscreen></iframe>',
                    'status' => 1,
                ),
        );
        $contact_data = json_encode($contact_data);
        $data = [
            'theme_layout' => 1,
            'font_color' => 'default',
            'layout_type' => 'wide',
            'counter' => '1',
            'total_students' => '1M+',
            'total_courses' => '1K+',
            'total_teachers' => '200+',
            'logo_b_image' => 'logo-black-text.png',
            'logo_w_image' => 'logo-white-text.png',
            'logo_white_image' => 'logo-white-image.png',
            'logo_popup' => 'popup-logo.jpg',
            'favicon_image' => 'popup-logo.jpg',
            'contact_data' => $contact_data,
        ];

        foreach ($data as $key => $value) {
            $key = str_replace('__', '.', $key);
            $config = \App\Models\Config::firstOrCreate(['key' => $key]);
            $config->value = $value;
            $config->save();
        }
    }
}
