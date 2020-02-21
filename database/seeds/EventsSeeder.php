<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            ['name' => 'Event #1', 'description' => 'Event #1 description', 'status' => \App\Models\Event::STATUS_ACTIVE, 'start' => '2020-02-20 12:13:14', 'price' => '12.50'],
            ['name' => 'Event #2', 'description' => 'Event #2 description', 'status' => \App\Models\Event::STATUS_PENDING, 'start' => '2020-02-20 11:13:12', 'price' => '10'],
            ['name' => 'Event #3', 'description' => 'Event #3 description', 'status' => \App\Models\Event::STATUS_ARCHIVED, 'start' => '2019-02-20 11:13:12', 'price' => null],
            ['name' => 'Event #4', 'description' => 'Event #4 description', 'status' => \App\Models\Event::STATUS_ACTIVE, 'start' => '2020-02-20 11:13:12', 'price' => '5'],
        ];

        foreach ($events as $event) {
            DB::table('events')->insert([
                'name'        => $event['name'],
                'image'       => $event['image'] ?? null,
                'description' => $event['description'],
                'status'      => $event['status'],
                'start'       => $event['start'],
                'price'       => $event['price'],
                'created_at'  => \Illuminate\Support\Carbon::now(),
            ]);
        }
    }
}
