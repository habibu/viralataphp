<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Animais Model
 *
 * @method \App\Model\Entity\Animai get($primaryKey, $options = [])
 * @method \App\Model\Entity\Animai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Animai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Animai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Animai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Animai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Animai findOrCreate($search, callable $callback = null)
 */
class AnimaisTable extends Table
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

        $this->table('animais');
        $this->displayField('idAnimal');
        $this->primaryKey('idAnimal');
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
            ->integer('idAnimal')
            ->allowEmpty('idAnimal', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->date('dataNascimento')
            ->allowEmpty('dataNascimento');

        $validator
            ->allowEmpty('raca');

        $validator
            ->allowEmpty('cor');

        $validator
            ->allowEmpty('especie');

        $validator
            ->allowEmpty('pelagem');

        $validator
            ->boolean('deformidade')
            ->allowEmpty('deformidade');

        $validator
            ->allowEmpty('porte');

        $validator
            ->allowEmpty('resenha');

        $validator
            ->date('dataCadastro')
            ->allowEmpty('dataCadastro');

        $validator
            ->allowEmpty('foto');

        $validator
            ->numeric('localidadeLongitude')
            ->allowEmpty('localidadeLongitude');

        $validator
            ->numeric('localidadeLatitude')
            ->allowEmpty('localidadeLatitude');

        $validator
            ->integer('idSituacao_Situacao')
            ->allowEmpty('idSituacao_Situacao');

        $validator
            ->integer('idFeira_Feira')
            ->allowEmpty('idFeira_Feira');

        $validator
            ->allowEmpty('codigoAnimal')
            ->add('codigoAnimal', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['codigoAnimal']));

        return $rules;
    }
}
