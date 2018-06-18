<?php

use Illuminate\Database\Seeder;
use App\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Document::truncate();
        factory(Document::class, 12)->create();
    }
}
