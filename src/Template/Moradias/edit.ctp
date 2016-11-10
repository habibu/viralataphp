<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $moradia->idMoradia],
                ['confirm' => __('Are you sure you want to delete # {0}?', $moradia->idMoradia)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Moradias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="moradias form large-9 medium-8 columns content">
    <?= $this->Form->create($moradia) ?>
    <fieldset>
        <legend><?= __('Edit Moradia') ?></legend>
        <?php
            echo $this->Form->input('idAdotante_Adotante');
            echo $this->Form->input('idTipoMoradia_TipoMoradia');
            echo $this->Form->input('idEndereco_Endereco');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
