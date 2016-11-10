<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adotante'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adotantes index large-9 medium-8 columns content">
    <h3><?= __('Adotantes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idAdotante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rendaFamiliar') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criancasEmCasa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidadeanimais') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reputacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUsuario_Usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adotantes as $adotante): ?>
            <tr>
                <td><?= $this->Number->format($adotante->idAdotante) ?></td>
                <td><?= $this->Number->format($adotante->rendaFamiliar) ?></td>
                <td><?= $this->Number->format($adotante->criancasEmCasa) ?></td>
                <td><?= $this->Number->format($adotante->quantidadeanimais) ?></td>
                <td><?= $this->Number->format($adotante->reputacao) ?></td>
                <td><?= $this->Number->format($adotante->idUsuario_Usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adotante->idAdotante]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adotante->idAdotante]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adotante->idAdotante], ['confirm' => __('Are you sure you want to delete # {0}?', $adotante->idAdotante)]) ?>
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
