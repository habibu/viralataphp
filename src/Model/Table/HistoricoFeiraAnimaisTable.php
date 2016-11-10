<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * HistoricoFeiraAnimais Model
 *
 * @method \App\Model\Entity\HistoricoFeiraAnimai get($primaryKey, $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\HistoricoFeiraAnimai findOrCreate($search, callable $callback = null)
 */
class HistoricoFeiraAnimaisTable extends Table
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

        $this->table('historico_feira_animais');
        $this->displayField('idHistoricoFeiraAnimal');
        $this->primaryKey('idHistoricoFeiraAnimal');
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
            ->integer('idHistoricoFeiraAnimal')
            ->allowEmpty('idHistoricoFeiraAnimal', 'create');

        $validator
            ->integer('idFeira_Feira')
            ->allowEmpty('idFeira_Feira');

        $validator
            ->integer('idAnimal_Animal')
            ->allowEmpty('idAnimal_Animal');

        $validator
            ->dateTime('dataRegistro')
            ->requirePresence('dataRegistro', 'create')
            ->notEmpty('dataRegistro');

        return $validator;
    }
}
