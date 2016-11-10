<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Adotantes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adotantes form large-9 medium-8 columns content">
    <?= $this->Form->create($adotante) ?>
    <fieldset>
        <legend><?= __('Add Adotante') ?></legend>
        <?php
            echo $this->Form->input('rendaFamiliar');
            echo $this->Form->input('criancasEmCasa');
            echo $this->Form->input('quantidadeanimais');
            echo $this->Form->input('reputacao');
            echo $this->Form->input('idUsuario_Usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
