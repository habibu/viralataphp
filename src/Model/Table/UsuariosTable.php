<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Usuarios Model
 *
 * @method \App\Model\Entity\Usuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Usuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Usuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Usuario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Usuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Usuario findOrCreate($search, callable $callback = null)
 */
class UsuariosTable extends Table
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

        $this->table('usuarios');
        $this->displayField('idUsuario');
        $this->primaryKey('idUsuario');
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
            ->integer('idUsuario')
            ->allowEmpty('idUsuario', 'create');

        $validator
            ->allowEmpty('nome');

        $validator
            ->allowEmpty('login')
            ->add('login', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('senha');

        $validator
            ->date('dataNascimento')
            ->allowEmpty('dataNascimento');

        $validator
            ->allowEmpty('cpfCnpj')
            ->add('cpfCnpj', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('emp_nomeFantasia');

        $validator
            ->allowEmpty('emp_razaoSocial');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('rg');

        $validator
            ->allowEmpty('tipoAcesso');

        $validator
            ->allowEmpty('tipoPessoa');

        $validator
            ->allowEmpty('telefoneCelular');

        $validator
            ->allowEmpty('foto');

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
        $rules->add($rules->isUnique(['login']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['cpfCnpj']));

        return $rules;
    }
}
