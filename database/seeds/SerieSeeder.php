<?php

use App\Models\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $series = ['Action Comics', 'American Vampire 1976', 'Aquaman', 'Batgirl',  'Batman', 'Batman Beyond', 'Batman/Superman',  'Batman/Superman Annual',  'Batman: The Joker War Zone', 'Batman: Three Jokers', 'Batman: White Knight Presents: Harley Quinn', 'Catwoman'];


        foreach ($series as $serie) {
            $new = new Serie();
            $new->name = $serie;
            $new->slug = Str::slug($serie);
            $new->save();
        }
    }
}
