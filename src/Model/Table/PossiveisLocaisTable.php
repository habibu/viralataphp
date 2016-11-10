<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PossiveisLocais Model
 *
 * @method \App\Model\Entity\PossiveisLocai get($primaryKey, $options = [])
 * @method \App\Model\Entity\PossiveisLocai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PossiveisLocai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PossiveisLocai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PossiveisLocai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PossiveisLocai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PossiveisLocai findOrCreate($search, callable $callback = null)
 */
class PossiveisLocaisTable extends Table
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

        $this->table('possiveis_locais');
        $this->displayField('idPossiveisLocais');
        $this->primaryKey('idPossiveisLocais');
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
            ->integer('idPossiveisLocais')
            ->allowEmpty('idPossiveisLocais', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->numeric('longitude')
            ->allowEmpty('longitude');

        $validator
            ->numeric('latitude')
            ->allowEmpty('latitude');

        $validator
            ->integer('idCidade_Cidade')
            ->allowEmpty('idCidade_Cidade');

        return $validator;
    }
}
