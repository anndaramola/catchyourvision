<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\EventType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventType::query()->insert([
            [
                'name' => 'workshops',
                'description' => 'Workshop',
            ]
        ]);
        Event::query()->insert([
            [
                'event_name' => 'Catch Your Vision 12/07',
                'event_description' => 'Catch Your Vision',
                'start_date' => Carbon::parse('2024-12-07T02:21:53+00:00')->toDateString(),
                'end_date' => Carbon::parse('2024-12-07T02:21:53+00:00')->toDateString(),
                'start_time' => Carbon::parse('2024-12-07T02:21:53+00:00')->toDateString(),
                'end_time' => Carbon::parse('2024-12-07T02:21:53+00:00')->toDateString(),
                'creator_id' => 1,
            ],
            [
                'event_name' => 'Catch Your Vision 12/08',
                'event_description' => 'Catch Your Vision',
                'start_date' => Carbon::parse('2024-12-08T02:21:53+00:00')->toDateString(),
                'end_date' => Carbon::parse('2024-12-08T02:21:53+00:00')->toDateString(),
                'start_time' => Carbon::parse('2024-12-08T02:21:53+00:00')->toDateString(),
                'end_time' => Carbon::parse('2024-12-08T02:21:53+00:00')->toDateString(),
                'creator_id' => 1,
            ],
            [
                'event_name' => 'Catch Your Vision 12/14',
                'event_description' => 'Catch Your Vision',
                'start_date' => Carbon::parse('2024-12-14T02:21:53+00:00')->toDateString(),
                'end_date' => Carbon::parse('2024-12-14T02:21:53+00:00')->toDateString(),
                'start_time' => Carbon::parse('2024-12-14T02:21:53+00:00')->toDateString(),
                'end_time' => Carbon::parse('2024-12-14T02:21:53+00:00')->toDateString(),
                'creator_id' => 1,
            ],
            [
                'event_name' => 'Catch Your Vision 12/15',
                'event_description' => 'Catch Your Vision',
                'start_date' => Carbon::parse('2024-12-15T02:21:53+00:00')->toDateString(),
                'end_date' => Carbon::parse('2024-12-15T02:21:53+00:00')->toDateString(),
                'start_time' => Carbon::parse('2024-12-15T02:21:53+00:00')->toDateString(),
                'end_time' => Carbon::parse('2024-12-15T02:21:53+00:00')->toDateString(),
                'creator_id' => 1,
            ],
            [
                'event_name' => 'Catch Your Vision 12/28',
                'event_description' => 'Catch Your Vision',
                'start_date' => Carbon::parse('2024-12-28T02:21:53+00:00')->toDateString(),
                'end_date' => Carbon::parse('2024-12-28T02:21:53+00:00')->toDateString(),
                'start_time' => Carbon::parse('2024-12-28T02:21:53+00:00')->toDateString(),
                'end_time' => Carbon::parse('2024-12-28T02:21:53+00:00')->toDateString(),
                'creator_id' => 1,
            ],
        ]);
    }
}
