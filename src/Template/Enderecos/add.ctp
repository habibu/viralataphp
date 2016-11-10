<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enderecos form large-9 medium-8 columns content">
    <?= $this->Form->create($endereco) ?>
    <fieldset>
        <legend><?= __('Add Endereco') ?></legend>
        <?php
            echo $this->Form->input('rua');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('cep');
            echo $this->Form->input('areaMoradia');
            echo $this->Form->input('tipoEndereco');
            echo $this->Form->input('bairro');
            echo $this->Form->input('telefone');
            echo $this->Form->input('ativo');
            echo $this->Form->input('idUsuario_Usuario');
            echo $this->Form->input('idCidade_Cidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
