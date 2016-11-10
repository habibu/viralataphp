<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adotantes Model
 *
 * @method \App\Model\Entity\Adotante get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adotante newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adotante[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adotante|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adotante patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adotante[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adotante findOrCreate($search, callable $callback = null)
 */
class AdotantesTable extends Table
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

        $this->table('adotantes');
        $this->displayField('idAdotante');
        $this->primaryKey('idAdotante');
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
            ->integer('idAdotante')
            ->allowEmpty('idAdotante', 'create');

        $validator
            ->numeric('rendaFamiliar')
            ->allowEmpty('rendaFamiliar');

        $validator
            ->integer('criancasEmCasa')
            ->allowEmpty('criancasEmCasa');

        $validator
            ->integer('quantidadeanimais')
            ->allowEmpty('quantidadeanimais');

        $validator
            ->integer('reputacao')
            ->allowEmpty('reputacao');

        $validator
            ->integer('idUsuario_Usuario')
            ->requirePresence('idUsuario_Usuario', 'create')
            ->notEmpty('idUsuario_Usuario');

        return $validator;
    }
}
