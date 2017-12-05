<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'name' => 'Plastik',
            ],
            [
                'id' => '2',
                'name' => 'Sentetik',
            ],
            [
                'id' => '3',
                'name' => 'Karbon-Fiber',
            ],
            [
                'id' => '4',
                'name' => 'Kauçuk',
            ],
            [
                'id' => '5',
                'name' => 'Silikon',
            ],
            [
                'id' => '6',
                'name' => 'Tahta',
            ],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
