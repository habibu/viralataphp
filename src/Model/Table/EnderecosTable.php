<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Enderecos Model
 *
 * @method \App\Model\Entity\Endereco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Endereco newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Endereco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Endereco|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Endereco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Endereco findOrCreate($search, callable $callback = null)
 */
class EnderecosTable extends Table
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

        $this->table('enderecos');
        $this->displayField('idEndereco');
        $this->primaryKey('idEndereco');
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
            ->integer('idEndereco')
            ->allowEmpty('idEndereco', 'create');

        $validator
            ->allowEmpty('rua');

        $validator
            ->integer('numero')
            ->allowEmpty('numero');

        $validator
            ->allowEmpty('complemento');

        $validator
            ->allowEmpty('cep');

        $validator
            ->numeric('areaMoradia')
            ->allowEmpty('areaMoradia');

        $validator
            ->allowEmpty('tipoEndereco');

        $validator
            ->allowEmpty('bairro');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->boolean('ativo')
            ->allowEmpty('ativo');

        $validator
            ->integer('idUsuario_Usuario')
            ->requirePresence('idUsuario_Usuario', 'create')
            ->notEmpty('idUsuario_Usuario');

        $validator
            ->integer('idCidade_Cidade')
            ->requirePresence('idCidade_Cidade', 'create')
            ->notEmpty('idCidade_Cidade');

        return $validator;
    }
}
