<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Situacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="situacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($situaco) ?>
    <fieldset>
        <legend><?= __('Add Situaco') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
