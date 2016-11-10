<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Acompanhamento'), ['action' => 'edit', $acompanhamento->idAcompanhamento]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Acompanhamento'), ['action' => 'delete', $acompanhamento->idAcompanhamento], ['confirm' => __('Are you sure you want to delete # {0}?', $acompanhamento->idAcompanhamento)]) ?> </li>
        <li><?= $this->Html->link(__('List Acompanhamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Acompanhamento'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="acompanhamentos view large-9 medium-8 columns content">
    <h3><?= h($acompanhamento->idAcompanhamento) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('StatusAcompanhamento') ?></th>
            <td><?= h($acompanhamento->statusAcompanhamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAcompanhamento') ?></th>
            <td><?= $this->Number->format($acompanhamento->idAcompanhamento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario Usuario') ?></th>
            <td><?= $this->Number->format($acompanhamento->idUsuario_Usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdSolicitacaoAdocao SolicitacaoAdocao') ?></th>
            <td><?= $this->Number->format($acompanhamento->idSolicitacaoAdocao_SolicitacaoAdocao) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Comentario') ?></h4>
        <?= $this->Text->autoParagraph(h($acompanhamento->comentario)); ?>
    </div>
</div>
