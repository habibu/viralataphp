<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="status index large-9 medium-8 columns content">
    <h3><?= __('Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idstatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($status as $status): ?>
            <tr>
                <td><?= $this->Number->format($status->idstatus) ?></td>
                <td><?= h($status->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $status->idstatus]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $status->idstatus]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $status->idstatus], ['confirm' => __('Are you sure you want to delete # {0}?', $status->idstatus)]) ?>
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
