<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'client_id' => '1',
            'event_title' => 'Evento Teste',
            'event_description' => 'descrição do evento com muitas palavras, tô enrolando aqui é isso',
            'event_local' => 'Rua sei lá o que 7 setembro',
            'event_date' => '2024-02-10',
            'event_hour' => '14',
            'event_classification' => '5',
            'event_social_media_link' => 'https://web.whatsapp.com/',
        ]);
    }
}
