<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipo Moradias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoMoradias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoMoradia) ?>
    <fieldset>
        <legend><?= __('Add Tipo Moradia') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
