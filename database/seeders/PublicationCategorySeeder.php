<?php

namespace Database\Seeders;

use App\Models\PublicationCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PublicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publication_categories')->Delete();

        $data = array(
            0 =>
            array(
                'en_title' => 'Audit Report',
                'sw_title' => 'Riport ya ukaguzi',
                'slug' => 'audit-report',
                'en_details' => 'Audit Report',
                'sw_details' => 'Riport ya ukaguzi',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            1 =>
            array(
                'en_title' => 'Publication',
                'sw_title' => 'Chapisho',
                'slug' => 'publication',
                'en_details' => 'Publication',
                'sw_details' => 'Chapisho',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            // 2 =>
            // array(
            //     'en_title' => 'Audit Report',
            //     'sw_title' => 'Riport ya ukaguzi',
            //     'slug' => 'audit-report',
            //     'en_details' => 'Audit Report',
            //     'sw_details' => 'Riport ya ukaguzi',
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now(),
            // ),
        );

        foreach ($data as $item) {

            PublicationCategory::create($item);
        }
    }
}
