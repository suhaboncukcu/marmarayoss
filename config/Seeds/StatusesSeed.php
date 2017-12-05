<?php
use Migrations\AbstractSeed;

/**
 * Statuses seed.
 */
class StatusesSeed extends AbstractSeed
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
                'name' => 'pending',
            ],
            [
                'id' => '2',
                'name' => 'in progress',
            ],
            [
                'id' => '3',
                'name' => 'shipped',
            ],
            [
                'id' => '4',
                'name' => 'canceled',
            ],
        ];

        $table = $this->table('statuses');
        $table->insert($data)->save();
    }
}
