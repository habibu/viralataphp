<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Moradia'), ['action' => 'edit', $tipoMoradia->idTipoMoradia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Moradia'), ['action' => 'delete', $tipoMoradia->idTipoMoradia], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoMoradia->idTipoMoradia)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Moradias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Moradia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoMoradias view large-9 medium-8 columns content">
    <h3><?= h($tipoMoradia->idTipoMoradia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($tipoMoradia->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdTipoMoradia') ?></th>
            <td><?= $this->Number->format($tipoMoradia->idTipoMoradia) ?></td>
        </tr>
    </table>
</div>
