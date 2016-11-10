<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cidades index large-9 medium-8 columns content">
    <h3><?= __('Cidades') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idCidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cidades as $cidade): ?>
            <tr>
                <td><?= $this->Number->format($cidade->idCidade) ?></td>
                <td><?= h($cidade->nome) ?></td>
                <td><?= h($cidade->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cidade->idCidade]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cidade->idCidade]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cidade->idCidade], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->idCidade)]) ?>
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
