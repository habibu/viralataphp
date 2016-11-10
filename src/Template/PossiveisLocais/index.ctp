<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Possiveis Locai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="possiveisLocais index large-9 medium-8 columns content">
    <h3><?= __('Possiveis Locais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idPossiveisLocais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idCidade_Cidade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($possiveisLocais as $possiveisLocai): ?>
            <tr>
                <td><?= $this->Number->format($possiveisLocai->idPossiveisLocais) ?></td>
                <td><?= h($possiveisLocai->nome) ?></td>
                <td><?= $this->Number->format($possiveisLocai->longitude) ?></td>
                <td><?= $this->Number->format($possiveisLocai->latitude) ?></td>
                <td><?= $this->Number->format($possiveisLocai->idCidade_Cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $possiveisLocai->idPossiveisLocais]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $possiveisLocai->idPossiveisLocais]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $possiveisLocai->idPossiveisLocais], ['confirm' => __('Are you sure you want to delete # {0}?', $possiveisLocai->idPossiveisLocais)]) ?>
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
