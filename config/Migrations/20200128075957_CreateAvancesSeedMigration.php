<?php
use Migrations\AbstractMigration;

class CreateAvancesSeedMigration extends AbstractMigration
{
   public function up()
   {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('Avances', 200, [
            'descripcion' => function() use ($faker) {
                return $faker->paragraf($nbSentences = 3, $variableNbSentences = true);

            }
        ]);
   }
}
