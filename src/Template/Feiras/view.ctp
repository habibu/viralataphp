<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feira'), ['action' => 'edit', $feira->idFeira]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feira'), ['action' => 'delete', $feira->idFeira], ['confirm' => __('Are you sure you want to delete # {0}?', $feira->idFeira)]) ?> </li>
        <li><?= $this->Html->link(__('List Feiras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feira'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feiras view large-9 medium-8 columns content">
    <h3><?= h($feira->idFeira) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('NomeFeira') ?></th>
            <td><?= h($feira->nomeFeira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdFeira') ?></th>
            <td><?= $this->Number->format($feira->idFeira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numeroanimais') ?></th>
            <td><?= $this->Number->format($feira->numeroanimais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AnimaisAdotados') ?></th>
            <td><?= $this->Number->format($feira->animaisAdotados) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($feira->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($feira->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCidade Cidade') ?></th>
            <td><?= $this->Number->format($feira->idCidade_Cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idpossiveis Locais PossiveisLocais') ?></th>
            <td><?= $this->Number->format($feira->idpossiveis_locais_PossiveisLocais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataInicio') ?></th>
            <td><?= h($feira->dataInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataEncerramento') ?></th>
            <td><?= h($feira->dataEncerramento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $feira->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
