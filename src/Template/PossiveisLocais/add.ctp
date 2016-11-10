<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Possiveis Locais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="possiveisLocais form large-9 medium-8 columns content">
    <?= $this->Form->create($possiveisLocai) ?>
    <fieldset>
        <legend><?= __('Add Possiveis Locai') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('longitude');
            echo $this->Form->input('latitude');
            echo $this->Form->input('idCidade_Cidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
