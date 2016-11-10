<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Historico Feira Animai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="historicoFeiraAnimais index large-9 medium-8 columns content">
    <h3><?= __('Historico Feira Animais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idHistoricoFeiraAnimal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idFeira_Feira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAnimal_Animal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataRegistro') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($historicoFeiraAnimais as $historicoFeiraAnimai): ?>
            <tr>
                <td><?= $this->Number->format($historicoFeiraAnimai->idHistoricoFeiraAnimal) ?></td>
                <td><?= $this->Number->format($historicoFeiraAnimai->idFeira_Feira) ?></td>
                <td><?= $this->Number->format($historicoFeiraAnimai->idAnimal_Animal) ?></td>
                <td><?= h($historicoFeiraAnimai->dataRegistro) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $historicoFeiraAnimai->idHistoricoFeiraAnimal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $historicoFeiraAnimai->idHistoricoFeiraAnimal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $historicoFeiraAnimai->idHistoricoFeiraAnimal], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoFeiraAnimai->idHistoricoFeiraAnimal)]) ?>
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
