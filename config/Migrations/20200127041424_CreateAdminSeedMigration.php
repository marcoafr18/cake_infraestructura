<?php
use Migrations\AbstractMigration;
use Cake\Auth\DefaultPasswordHasher;

class CreateAdminSeedMigration extends AbstractMigration
{
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('Users', 1, [
            'first_name'=>'Marco',
            'last_name' => 'Flores',
            'email' => 'marco@marco.com',
            'password' => 'secret',
            'role' => 'admin',
            'active' => 1,
            'created' => function() use ($faker){
                return $faker->dateTimeBetween($starDate = 'now', $endDate = 'now');
            },
            'modified' => function() use ($faker){
                return $faker->dateTimeBetween($starDate = 'now', $endDate = 'now');
            }
        ]);

        $populator->execute();
    }
}
