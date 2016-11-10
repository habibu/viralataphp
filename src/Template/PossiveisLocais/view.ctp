<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Possiveis Locai'), ['action' => 'edit', $possiveisLocai->idPossiveisLocais]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Possiveis Locai'), ['action' => 'delete', $possiveisLocai->idPossiveisLocais], ['confirm' => __('Are you sure you want to delete # {0}?', $possiveisLocai->idPossiveisLocais)]) ?> </li>
        <li><?= $this->Html->link(__('List Possiveis Locais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Possiveis Locai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="possiveisLocais view large-9 medium-8 columns content">
    <h3><?= h($possiveisLocai->idPossiveisLocais) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($possiveisLocai->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdPossiveisLocais') ?></th>
            <td><?= $this->Number->format($possiveisLocai->idPossiveisLocais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($possiveisLocai->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($possiveisLocai->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCidade Cidade') ?></th>
            <td><?= $this->Number->format($possiveisLocai->idCidade_Cidade) ?></td>
        </tr>
    </table>
</div>
