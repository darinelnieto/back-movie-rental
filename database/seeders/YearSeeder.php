<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Year;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Year::create(['year' => '2001']);
        Year::create(['year' => '2002']);
        Year::create(['year' => '2003']);
        Year::create(['year' => '2004']);
        Year::create(['year' => '2005']);
        Year::create(['year' => '2006']);
        Year::create(['year' => '2007']);
        Year::create(['year' => '2008']);
        Year::create(['year' => '2009']);
        Year::create(['year' => '2010']);
        Year::create(['year' => '2011']);
        Year::create(['year' => '2012']);
        Year::create(['year' => '2013']);
        Year::create(['year' => '2014']);
        Year::create(['year' => '2015']);
        Year::create(['year' => '2016']);
        Year::create(['year' => '2017']);
        Year::create(['year' => '2018']);
        Year::create(['year' => '2019']);
        Year::create(['year' => '2020']);
        Year::create(['year' => '2021']);
        Year::create(['year' => '2022']);
        Year::create(['year' => '2023']);
    }
}
