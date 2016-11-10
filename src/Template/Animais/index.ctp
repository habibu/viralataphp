<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Animai'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animais index large-9 medium-8 columns content">
    <h3><?= __('Animais') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idAnimal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataNascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pelagem') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deformidade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('porte') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataCadastro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('foto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localidadeLongitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('localidadeLatitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idSituacao_Situacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idFeira_Feira') ?></th>
                <th scope="col"><?= $this->Paginator->sort('codigoAnimal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animais as $animai): ?>
            <tr>
                <td><?= $this->Number->format($animai->idAnimal) ?></td>
                <td><?= h($animai->nome) ?></td>
                <td><?= h($animai->dataNascimento) ?></td>
                <td><?= h($animai->raca) ?></td>
                <td><?= h($animai->cor) ?></td>
                <td><?= h($animai->especie) ?></td>
                <td><?= h($animai->pelagem) ?></td>
                <td><?= h($animai->deformidade) ?></td>
                <td><?= h($animai->porte) ?></td>
                <td><?= h($animai->dataCadastro) ?></td>
                <td><?= h($animai->foto) ?></td>
                <td><?= $this->Number->format($animai->localidadeLongitude) ?></td>
                <td><?= $this->Number->format($animai->localidadeLatitude) ?></td>
                <td><?= $this->Number->format($animai->idSituacao_Situacao) ?></td>
                <td><?= $this->Number->format($animai->idFeira_Feira) ?></td>
                <td><?= h($animai->codigoAnimal) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $animai->idAnimal]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $animai->idAnimal]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $animai->idAnimal], ['confirm' => __('Are you sure you want to delete # {0}?', $animai->idAnimal)]) ?>
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
