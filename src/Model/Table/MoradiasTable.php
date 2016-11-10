<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Moradias Model
 *
 * @method \App\Model\Entity\Moradia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Moradia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Moradia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Moradia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Moradia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Moradia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Moradia findOrCreate($search, callable $callback = null)
 */
class MoradiasTable extends Table
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

        $this->table('moradias');
        $this->displayField('idMoradia');
        $this->primaryKey('idMoradia');
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
            ->integer('idMoradia')
            ->allowEmpty('idMoradia', 'create');

        $validator
            ->integer('idAdotante_Adotante')
            ->requirePresence('idAdotante_Adotante', 'create')
            ->notEmpty('idAdotante_Adotante');

        $validator
            ->integer('idTipoMoradia_TipoMoradia')
            ->allowEmpty('idTipoMoradia_TipoMoradia');

        $validator
            ->integer('idEndereco_Endereco')
            ->allowEmpty('idEndereco_Endereco');

        return $validator;
    }
}
