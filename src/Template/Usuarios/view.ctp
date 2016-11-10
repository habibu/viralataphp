<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idUsuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->idUsuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($usuario->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($usuario->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CpfCnpj') ?></th>
            <td><?= h($usuario->cpfCnpj) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp NomeFantasia') ?></th>
            <td><?= h($usuario->emp_nomeFantasia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emp RazaoSocial') ?></th>
            <td><?= h($usuario->emp_razaoSocial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($usuario->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoAcesso') ?></th>
            <td><?= h($usuario->tipoAcesso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoPessoa') ?></th>
            <td><?= h($usuario->tipoPessoa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TelefoneCelular') ?></th>
            <td><?= h($usuario->telefoneCelular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($usuario->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario') ?></th>
            <td><?= $this->Number->format($usuario->idUsuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataNascimento') ?></th>
            <td><?= h($usuario->dataNascimento) ?></td>
        </tr>
    </table>
</div>
