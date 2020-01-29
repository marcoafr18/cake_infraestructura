<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
//use Cake\Filesystem\Folder;
//use Cake\Filesystem\File;

/**
 * Avances Model
 *
 * @property \App\Model\Table\ProyectosTable&\Cake\ORM\Association\BelongsTo $Proyectos
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Avance get($primaryKey, $options = [])
 * @method \App\Model\Entity\Avance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Avance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Avance|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avance saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Avance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Avance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Avance findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AvancesTable extends Table
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

        $this->setTable('avances');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Proyectos', [
            'foreignKey' => 'proyecto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);

        $this->addBehavior('Proffer.Proffer', [
            'imagen' => [    // The name of your upload field
                'root' => WWW_ROOT  . 'files', // Customise the root upload folder here, or leave blank to use the default
                'dir' => 'imagen_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [
                    'square' => ['w' => 200, 'h' => 200, 'crop' => true, 'jpeg_quality' => 100],   // Define the size and prefix of your thumbnails
                    //'portrait' => ['w' => 100, 'h' => 300, 'crop' => true],     // Crop will crop the image as well as resize it
                ],
                'thumbnailMethod' => 'gd'  // Options are Imagick, Gd or Gmagick
            ]
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
            ->scalar('descripcion')
            ->maxLength('descripcion', 100)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->provider('proffer', 'Proffer\Model\Validation\ProfferrRules')

            //Set the thumnail resize dimensions
            /*->add('imagen', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 300, 'h' => 300],
                    'max' => ['w' => 1500, 'h' => 1500]
                ]],
                'message' => 'La imagen no tiene correctas dimensiones.',
                'provider' => 'proffer'
            ])*/
            ->add('imagen', 'extension', [
                'rule' => ['extension', ['jpeg', 'png', 'jpg']],
                'message' => 'La imagen no tiene una correcta estensión',
            ])
            ->add('imagen', 'fileSize', [
                'rule' => ['fileSize', '<=', '1MB'],
                'message' => 'La imagen no debe exceder de 1MB.',
            ])
            /*->add('imagen', 'mimeType', [
                'rule' => ['mimeTipe', ['image/jpeg', 'image/png']],
                'message' => 'La Imagen no tiene un correcto formato.'
            ])*/
            ->requirePresence('imagen', 'create')
            ->notEmptyFile('imagen');

        /*$validator
            ->scalar('imagen_dir')
            ->maxLength('imagen_dir', 255)
            ->requirePresence('imagen_dir', 'create')
            ->notEmptyFile('imagen_dir');*/

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
        $rules->add($rules->existsIn(['proyecto_id'], 'Proyectos'));
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
