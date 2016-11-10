<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $historicoFeiraAnimai->idHistoricoFeiraAnimal],
                ['confirm' => __('Are you sure you want to delete # {0}?', $historicoFeiraAnimai->idHistoricoFeiraAnimal)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Historico Feira Animais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="historicoFeiraAnimais form large-9 medium-8 columns content">
    <?= $this->Form->create($historicoFeiraAnimai) ?>
    <fieldset>
        <legend><?= __('Edit Historico Feira Animai') ?></legend>
        <?php
            echo $this->Form->input('idFeira_Feira');
            echo $this->Form->input('idAnimal_Animal');
            echo $this->Form->input('dataRegistro');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
