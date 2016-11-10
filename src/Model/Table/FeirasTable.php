<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Feiras Model
 *
 * @method \App\Model\Entity\Feira get($primaryKey, $options = [])
 * @method \App\Model\Entity\Feira newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Feira[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Feira|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Feira patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Feira[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Feira findOrCreate($search, callable $callback = null)
 */
class FeirasTable extends Table
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

        $this->table('feiras');
        $this->displayField('idFeira');
        $this->primaryKey('idFeira');
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
            ->integer('idFeira')
            ->allowEmpty('idFeira', 'create');

        $validator
            ->allowEmpty('nomeFeira');

        $validator
            ->dateTime('dataInicio')
            ->requirePresence('dataInicio', 'create')
            ->notEmpty('dataInicio');

        $validator
            ->dateTime('dataEncerramento')
            ->allowEmpty('dataEncerramento');

        $validator
            ->integer('numeroanimais')
            ->allowEmpty('numeroanimais');

        $validator
            ->integer('animaisAdotados')
            ->allowEmpty('animaisAdotados');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->integer('idCidade_Cidade')
            ->allowEmpty('idCidade_Cidade');

        $validator
            ->integer('idpossiveis_locais_PossiveisLocais')
            ->allowEmpty('idpossiveis_locais_PossiveisLocais');

        $validator
            ->boolean('ativo')
            ->allowEmpty('ativo');

        return $validator;
    }
}
