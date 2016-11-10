<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Moradia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoMoradias index large-9 medium-8 columns content">
    <h3><?= __('Tipo Moradias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idTipoMoradia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoMoradias as $tipoMoradia): ?>
            <tr>
                <td><?= $this->Number->format($tipoMoradia->idTipoMoradia) ?></td>
                <td><?= h($tipoMoradia->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoMoradia->idTipoMoradia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoMoradia->idTipoMoradia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoMoradia->idTipoMoradia], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoMoradia->idTipoMoradia)]) ?>
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
