<?php

use Illuminate\Database\Seeder;

class FrameworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('framework')->insert([
            [ 'category' => 'PHP', 'name' => 'Laravel' ],
            [ 'category' => 'PHP', 'name' => 'Symfony' ],
            [ 'category' => 'PHP', 'name' => 'CakePHP' ],
            [ 'category' => 'PHP', 'name' => 'zend framework' ],
            [ 'category' => 'PHP', 'name' => 'codeigniter' ],
            [ 'category' => 'PHP', 'name' => 'Phalcon' ],
            [ 'category' => 'PHP', 'name' => 'FuelPHP' ],
            [ 'category' => 'PHP', 'name' => 'Slim' ],
            [ 'category' => 'PHP', 'name' => 'Yii' ],
            [ 'category' => 'PHP', 'name' => 'Silex' ],
            [ 'category' => 'PHP', 'name' => 'Flight' ],
            [ 'category' => 'PHP', 'name' => 'BEAR.Sunday' ],
            [ 'category' => 'PHP', 'name' => 'Ethna' ],
            [ 'category' => 'Javascript', 'name' => 'React' ],
            [ 'category' => 'Javascript', 'name' => 'AngularJS' ],
            [ 'category' => 'Javascript', 'name' => 'Vue.js' ],
            [ 'category' => 'Javascript', 'name' => 'Backbone.js' ],
            [ 'category' => 'Javascript', 'name' => 'jQuery' ],
            [ 'category' => 'Javascript', 'name' => 'Knockout.js' ],
            [ 'category' => 'Python', 'name' => 'Django' ],
            [ 'category' => 'Python', 'name' => 'Bottle' ],
            [ 'category' => 'Python', 'name' => 'Flask' ],
            [ 'category' => 'Python', 'name' => 'Tornado' ]
        ]);
    }
}
