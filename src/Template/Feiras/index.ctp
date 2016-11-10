<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feira'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feiras index large-9 medium-8 columns content">
    <h3><?= __('Feiras') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idFeira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nomeFeira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataEncerramento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numeroanimais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('animaisAdotados') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idCidade_Cidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idpossiveis_locais_PossiveisLocais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feiras as $feira): ?>
            <tr>
                <td><?= $this->Number->format($feira->idFeira) ?></td>
                <td><?= h($feira->nomeFeira) ?></td>
                <td><?= h($feira->dataInicio) ?></td>
                <td><?= h($feira->dataEncerramento) ?></td>
                <td><?= $this->Number->format($feira->numeroanimais) ?></td>
                <td><?= $this->Number->format($feira->animaisAdotados) ?></td>
                <td><?= $this->Number->format($feira->longitude) ?></td>
                <td><?= $this->Number->format($feira->latitude) ?></td>
                <td><?= $this->Number->format($feira->idCidade_Cidade) ?></td>
                <td><?= $this->Number->format($feira->idpossiveis_locais_PossiveisLocais) ?></td>
                <td><?= h($feira->ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feira->idFeira]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feira->idFeira]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feira->idFeira], ['confirm' => __('Are you sure you want to delete # {0}?', $feira->idFeira)]) ?>
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
