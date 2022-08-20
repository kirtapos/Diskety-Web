\<?php


use Phinx\Seed\AbstractSeed;

class Diskety extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'id' => 0,
                'name' => 'DOS',
                'type' => 'System',
                'capacity' => 1200000
                
            ],
            [
                'id' => 2,
                'name' => 'Prince',
                'type' => 'Game',
                'capacity' => 1400000
            ],
        ];

        $posts = $this->table('diskety');
        $posts->insert($data)
                ->save();

    }
}



