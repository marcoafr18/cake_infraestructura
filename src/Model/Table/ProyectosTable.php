<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Proyectos Model
 *
 * @property \App\Model\Table\ProgramasTable&\Cake\ORM\Association\BelongsTo $Programas
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\AvancesTable&\Cake\ORM\Association\HasMany $Avances
 *
 * @method \App\Model\Entity\Proyecto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Proyecto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Proyecto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Proyecto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Proyecto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProyectosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('proyectos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Programas', [
            'foreignKey' => 'programa_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Avances', [
            'foreignKey' => 'proyecto_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('accion')
            ->maxLength('accion', 100)
            ->requirePresence('accion', 'create')
            ->notEmptyString('accion');

        $validator
            ->numeric('monto')
            ->requirePresence('monto', 'create')
            ->notEmptyString('monto');

        $validator
            ->numeric('anticipo')
            ->requirePresence('anticipo', 'create')
            ->notEmptyString('anticipo');

        $validator
            ->numeric('primeraEstimacion')
            ->requirePresence('primeraEstimacion', 'create')
            ->notEmptyString('primeraEstimacion');

        $validator
            ->numeric('segundaEstimacion')
            ->requirePresence('segundaEstimacion', 'create')
            ->notEmptyString('segundaEstimacion');

        $validator
            ->date('fechaInicio')
            ->requirePresence('fechaInicio', 'create')
            ->notEmptyDate('fechaInicio');

        $validator
            ->date('fechaFin')
            ->requirePresence('fechaFin', 'create')
            ->notEmptyDate('fechaFin');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['programa_id'], 'Programas'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
