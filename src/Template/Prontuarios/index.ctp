<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prontuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prontuarios index large-9 medium-8 columns content">
    <h3><?= __('Prontuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idProntuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registroAntiRabica') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registroMultipla') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registroCastracao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('controleParasitas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataControleParasitas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('veterinarioResponsavelControleParasitas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataRegistro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('patologia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deformidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idAnimal_Animal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prontuarios as $prontuario): ?>
            <tr>
                <td><?= $this->Number->format($prontuario->idProntuario) ?></td>
                <td><?= h($prontuario->registroAntiRabica) ?></td>
                <td><?= h($prontuario->registroMultipla) ?></td>
                <td><?= h($prontuario->registroCastracao) ?></td>
                <td><?= h($prontuario->controleParasitas) ?></td>
                <td><?= h($prontuario->dataControleParasitas) ?></td>
                <td><?= h($prontuario->veterinarioResponsavelControleParasitas) ?></td>
                <td><?= h($prontuario->dataRegistro) ?></td>
                <td><?= h($prontuario->patologia) ?></td>
                <td><?= h($prontuario->deformidade) ?></td>
                <td><?= $this->Number->format($prontuario->idAnimal_Animal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prontuario->idProntuario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prontuario->idProntuario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prontuario->idProntuario], ['confirm' => __('Are you sure you want to delete # {0}?', $prontuario->idProntuario)]) ?>
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
