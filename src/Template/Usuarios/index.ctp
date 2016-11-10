<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarios index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idUsuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataNascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpfCnpj') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_nomeFantasia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_razaoSocial') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoAcesso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoPessoa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefoneCelular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->idUsuario) ?></td>
                <td><?= h($usuario->nome) ?></td>
                <td><?= h($usuario->login) ?></td>
                <td><?= h($usuario->senha) ?></td>
                <td><?= h($usuario->dataNascimento) ?></td>
                <td><?= h($usuario->cpfCnpj) ?></td>
                <td><?= h($usuario->emp_nomeFantasia) ?></td>
                <td><?= h($usuario->emp_razaoSocial) ?></td>
                <td><?= h($usuario->email) ?></td>
                <td><?= h($usuario->rg) ?></td>
                <td><?= h($usuario->tipoAcesso) ?></td>
                <td><?= h($usuario->tipoPessoa) ?></td>
                <td><?= h($usuario->telefoneCelular) ?></td>
                <td><?= h($usuario->foto) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->idUsuario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->idUsuario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
