<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `districts` (`id`, `province_id`, `city_id`, `name`, `created_at`, `updated_at`) VALUES
        (1, 21, 1, 'Arongan Lambalek', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (2, 21, 1, 'Bubon', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (3, 21, 1, 'Johan Pahlawan', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (4, 21, 1, 'Kaway XVI', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (5, 21, 1, 'Meureubo', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (6, 21, 1, 'Pante Ceureumen (Pantai Ceuremen)', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (7, 21, 1, 'Panton Reu', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (8, 21, 1, 'Samatiga', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (9, 21, 1, 'Sungai Mas', '2019-08-29 13:00:56', '2019-08-29 13:00:56'),
        (10, 21, 1, 'Woyla', '2019-08-29 13:00:56', '2019-08-29 13:00:56');
        ");
    }
}
