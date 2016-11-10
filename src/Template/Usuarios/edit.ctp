<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuario->idUsuario],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="usuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($usuario) ?>
    <fieldset>
        <legend><?= __('Edit Usuario') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('login');
            echo $this->Form->input('senha');
            echo $this->Form->input('dataNascimento', ['empty' => true]);
            echo $this->Form->input('cpfCnpj');
            echo $this->Form->input('emp_nomeFantasia');
            echo $this->Form->input('emp_razaoSocial');
            echo $this->Form->input('email');
            echo $this->Form->input('rg');
            echo $this->Form->input('tipoAcesso');
            echo $this->Form->input('tipoPessoa');
            echo $this->Form->input('telefoneCelular');
            echo $this->Form->input('foto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
