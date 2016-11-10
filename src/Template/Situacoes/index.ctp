<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Situaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="situacoes index large-9 medium-8 columns content">
    <h3><?= __('Situacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idSituacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($situacoes as $situaco): ?>
            <tr>
                <td><?= $this->Number->format($situaco->idSituacao) ?></td>
                <td><?= h($situaco->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $situaco->idSituacao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $situaco->idSituacao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $situaco->idSituacao], ['confirm' => __('Are you sure you want to delete # {0}?', $situaco->idSituacao)]) ?>
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
