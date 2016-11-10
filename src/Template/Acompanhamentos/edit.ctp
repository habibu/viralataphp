<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $acompanhamento->idAcompanhamento],
                ['confirm' => __('Are you sure you want to delete # {0}?', $acompanhamento->idAcompanhamento)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Acompanhamentos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="acompanhamentos form large-9 medium-8 columns content">
    <?= $this->Form->create($acompanhamento) ?>
    <fieldset>
        <legend><?= __('Edit Acompanhamento') ?></legend>
        <?php
            echo $this->Form->input('idUsuario_Usuario');
            echo $this->Form->input('idSolicitacaoAdocao_SolicitacaoAdocao');
            echo $this->Form->input('statusAcompanhamento');
            echo $this->Form->input('comentario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
