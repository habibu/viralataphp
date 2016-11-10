<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prontuarios Model
 *
 * @method \App\Model\Entity\Prontuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Prontuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Prontuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Prontuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Prontuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Prontuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Prontuario findOrCreate($search, callable $callback = null)
 */
class ProntuariosTable extends Table
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

        $this->table('prontuarios');
        $this->displayField('idProntuario');
        $this->primaryKey('idProntuario');
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
            ->integer('idProntuario')
            ->allowEmpty('idProntuario', 'create');

        $validator
            ->allowEmpty('registroAntiRabica');

        $validator
            ->allowEmpty('registroMultipla');

        $validator
            ->allowEmpty('registroCastracao');

        $validator
            ->allowEmpty('controleParasitas');

        $validator
            ->date('dataControleParasitas')
            ->allowEmpty('dataControleParasitas');

        $validator
            ->allowEmpty('veterinarioResponsavelControleParasitas');

        $validator
            ->date('dataRegistro')
            ->allowEmpty('dataRegistro');

        $validator
            ->allowEmpty('patologia');

        $validator
            ->boolean('deformidade')
            ->allowEmpty('deformidade');

        $validator
            ->integer('idAnimal_Animal')
            ->requirePresence('idAnimal_Animal', 'create')
            ->notEmpty('idAnimal_Animal');

        return $validator;
    }
}
