<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solicitacao Adoco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitacaoAdocoes index large-9 medium-8 columns content">
    <h3><?= __('Solicitacao Adocoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idSolicitacaoAdocao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataSolicitacaoAdocao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAdotante_Adotante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAnimal_Animal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUsuario_Usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idFeira_Feira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idstatus_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitacaoAdocoes as $solicitacaoAdoco): ?>
            <tr>
                <td><?= $this->Number->format($solicitacaoAdoco->idSolicitacaoAdocao) ?></td>
                <td><?= h($solicitacaoAdoco->dataSolicitacaoAdocao) ?></td>
                <td><?= $this->Number->format($solicitacaoAdoco->idAdotante_Adotante) ?></td>
                <td><?= $this->Number->format($solicitacaoAdoco->idAnimal_Animal) ?></td>
                <td><?= $this->Number->format($solicitacaoAdoco->idUsuario_Usuario) ?></td>
                <td><?= $this->Number->format($solicitacaoAdoco->idFeira_Feira) ?></td>
                <td><?= $this->Number->format($solicitacaoAdoco->idstatus_status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solicitacaoAdoco->idSolicitacaoAdocao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitacaoAdoco->idSolicitacaoAdocao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitacaoAdoco->idSolicitacaoAdocao], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacaoAdoco->idSolicitacaoAdocao)]) ?>
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
