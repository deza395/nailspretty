<?php

namespace Database\Seeders;
use App\Models\Image;
use App\Models\Service;

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services =Service::factory(1)->create();

        foreach($services as $service){
            Image::factory(1)->create([
                'imageable_id'=>$service->id,
                'imageable_type'=>Service::class
            ]);
        }
    }
}
