<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acompanhamento'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="acompanhamentos index large-9 medium-8 columns content">
    <h3><?= __('Acompanhamentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idAcompanhamento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUsuario_Usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idSolicitacaoAdocao_SolicitacaoAdocao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('statusAcompanhamento') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($acompanhamentos as $acompanhamento): ?>
            <tr>
                <td><?= $this->Number->format($acompanhamento->idAcompanhamento) ?></td>
                <td><?= $this->Number->format($acompanhamento->idUsuario_Usuario) ?></td>
                <td><?= $this->Number->format($acompanhamento->idSolicitacaoAdocao_SolicitacaoAdocao) ?></td>
                <td><?= h($acompanhamento->statusAcompanhamento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $acompanhamento->idAcompanhamento]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acompanhamento->idAcompanhamento]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acompanhamento->idAcompanhamento], ['confirm' => __('Are you sure you want to delete # {0}?', $acompanhamento->idAcompanhamento)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
