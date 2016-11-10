<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Moradia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="moradias index large-9 medium-8 columns content">
    <h3><?= __('Moradias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idMoradia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAdotante_Adotante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idTipoMoradia_TipoMoradia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idEndereco_Endereco') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($moradias as $moradia): ?>
            <tr>
                <td><?= $this->Number->format($moradia->idMoradia) ?></td>
                <td><?= $this->Number->format($moradia->idAdotante_Adotante) ?></td>
                <td><?= $this->Number->format($moradia->idTipoMoradia_TipoMoradia) ?></td>
                <td><?= $this->Number->format($moradia->idEndereco_Endereco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $moradia->idMoradia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $moradia->idMoradia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $moradia->idMoradia], ['confirm' => __('Are you sure you want to delete # {0}?', $moradia->idMoradia)]) ?>
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
