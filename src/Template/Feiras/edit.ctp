<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feira->idFeira],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feira->idFeira)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Feiras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="feiras form large-9 medium-8 columns content">
    <?= $this->Form->create($feira) ?>
    <fieldset>
        <legend><?= __('Edit Feira') ?></legend>
        <?php
            echo $this->Form->input('nomeFeira');
            echo $this->Form->input('dataInicio');
            echo $this->Form->input('dataEncerramento');
            echo $this->Form->input('numeroanimais');
            echo $this->Form->input('animaisAdotados');
            echo $this->Form->input('longitude');
            echo $this->Form->input('latitude');
            echo $this->Form->input('idCidade_Cidade');
            echo $this->Form->input('idpossiveis_locais_PossiveisLocais');
            echo $this->Form->input('ativo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
