<?php

use App\Models\Writer;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writers = [
            "Brad Meltzer",
            "Tom King",
            "Scott Snyder",
            "Geoff Johns",
            "Brian Michael Bendis",
            "Paul Dini",
            "Louise Simonson",
            "Richard Donner",
            "Marv Wolfman",
            "Peter J. Tomasi",
            "Dan Jurgens",
            "Jerry Siegel",
            "Paul Levitz"
        ];

        foreach ($writers as $writer) {
            $new = new Writer();
            $new->fullname = $writer;
            $new->save();
        }
    }
}
