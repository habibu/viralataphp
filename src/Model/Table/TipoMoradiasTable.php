<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoMoradias Model
 *
 * @method \App\Model\Entity\TipoMoradia get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoMoradia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoMoradia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoMoradia|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoMoradia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoMoradia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoMoradia findOrCreate($search, callable $callback = null)
 */
class TipoMoradiasTable extends Table
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

        $this->table('tipo_moradias');
        $this->displayField('idTipoMoradia');
        $this->primaryKey('idTipoMoradia');
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
            ->integer('idTipoMoradia')
            ->allowEmpty('idTipoMoradia', 'create');

        $validator
            ->allowEmpty('descricao');

        return $validator;
    }
}
