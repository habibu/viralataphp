<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Moradia'), ['action' => 'edit', $moradia->idMoradia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Moradia'), ['action' => 'delete', $moradia->idMoradia], ['confirm' => __('Are you sure you want to delete # {0}?', $moradia->idMoradia)]) ?> </li>
        <li><?= $this->Html->link(__('List Moradias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Moradia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="moradias view large-9 medium-8 columns content">
    <h3><?= h($moradia->idMoradia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdMoradia') ?></th>
            <td><?= $this->Number->format($moradia->idMoradia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAdotante Adotante') ?></th>
            <td><?= $this->Number->format($moradia->idAdotante_Adotante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdTipoMoradia TipoMoradia') ?></th>
            <td><?= $this->Number->format($moradia->idTipoMoradia_TipoMoradia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEndereco Endereco') ?></th>
            <td><?= $this->Number->format($moradia->idEndereco_Endereco) ?></td>
        </tr>
    </table>
</div>
