<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cidade'), ['action' => 'edit', $cidade->idCidade]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cidade'), ['action' => 'delete', $cidade->idCidade], ['confirm' => __('Are you sure you want to delete # {0}?', $cidade->idCidade)]) ?> </li>
        <li><?= $this->Html->link(__('List Cidades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cidade'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cidades view large-9 medium-8 columns content">
    <h3><?= h($cidade->idCidade) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cidade->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($cidade->estado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCidade') ?></th>
            <td><?= $this->Number->format($cidade->idCidade) ?></td>
        </tr>
    </table>
</div>
