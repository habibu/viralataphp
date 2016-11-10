<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitacaoAdoco->idSolicitacaoAdocao],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacaoAdoco->idSolicitacaoAdocao)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Solicitacao Adocoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="solicitacaoAdocoes form large-9 medium-8 columns content">
    <?= $this->Form->create($solicitacaoAdoco) ?>
    <fieldset>
        <legend><?= __('Edit Solicitacao Adoco') ?></legend>
        <?php
            echo $this->Form->input('dataSolicitacaoAdocao', ['empty' => true]);
            echo $this->Form->input('descricao');
            echo $this->Form->input('idAdotante_Adotante');
            echo $this->Form->input('idAnimal_Animal');
            echo $this->Form->input('idUsuario_Usuario');
            echo $this->Form->input('idFeira_Feira');
            echo $this->Form->input('idstatus_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
