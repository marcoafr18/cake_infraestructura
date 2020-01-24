<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('first_name', 'string', ['limit' => 100,]);
        $table->addColumn('last_name', 'string', ['limit' => 100,]);
        $table->addColumn('email', 'string');
        $table->addColumn('password', 'string');
        $table->addColumn('role', 'enum', ['values' => 'admin, user']);
        $table->addColumn('created', 'datetime', ['default' => null,'null' => false,]);
        $table->addColumn('modified', 'datetime', ['default' => null, 'null' => false,]);
        $table->create();
    }
}
