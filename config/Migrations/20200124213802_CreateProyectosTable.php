<?php
use Migrations\AbstractMigration;

class CreateProyectosTable extends AbstractMigration
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
        $table = $this->table('proyectos');
        $table->addColumn('nombre', 'string', ['limit' => 100,]);
        $table->addColumn('accion', 'string', ['limit' => 100,]);
        $table->addColumn('monto', 'float');
        $table->addColumn('anticipo', 'float');
        $table->addColumn('primeraEstimacion', 'float');
        $table->addColumn('segundaEstimacion', 'float');
        $table->addColumn('fechaInicio', 'date');
        $table->addColumn('fechaFin', 'date');
        $table->addColumn('created', 'datetime', ['default' => null,'null' => false,]);
        $table->addColumn('modified', 'datetime', ['default' => null, 'null' => false,]);
        $table->addColumn('programa_id', 'integer');
        $table->addColumn('user_id', 'integer');
        $table->create();


        $table = $this->table('programas');
        $table->addColumn('programa', 'string', ['limit' => 100,]);
        $table->addColumn('descripcion', 'string', ['limit' => 100,]);
        $table->addColumn('created', 'datetime', ['default' => null,'null' => false,]);
        $table->addColumn('modified', 'datetime', ['default' => null, 'null' => false,]);
        $table->addColumn('user_id', 'integer');
        $table->create();

        $table = $this->table('avances');
        $table->addColumn('descripcion', 'string', ['limit' => 100,]);
        $table->addColumn('imagen', 'string');
        $table->addColumn('imagen_dir', 'string');
        $table->addColumn('created', 'datetime', ['default' => null,'null' => false,]);
        $table->addColumn('modified', 'datetime', ['default' => null, 'null' => false,]);
        $table->addColumn('proyecto_id', 'integer');
        $table->addColumn('user_id', 'integer');
        $table->create();

    }
}
