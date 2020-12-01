<?php

use Illuminate\Database\Seeder;

class BombsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bombs')->insert(
            [
              [
        'book_name'=>'読めばみるみるいいことが起こる習慣',
        'price'=>'2000',
        'stocks'=>'20',
        'created_at'=>now(),
        'updated_at'=>now(), 
          ],
        ]
     );
    }
}
