<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Historico Feira Animai'), ['action' => 'edit', $historicoFeiraAnimai->idHistoricoFeiraAnimal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Historico Feira Animai'), ['action' => 'delete', $historicoFeiraAnimai->idHistoricoFeiraAnimal], ['confirm' => __('Are you sure you want to delete # {0}?', $historicoFeiraAnimai->idHistoricoFeiraAnimal)]) ?> </li>
        <li><?= $this->Html->link(__('List Historico Feira Animais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Historico Feira Animai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="historicoFeiraAnimais view large-9 medium-8 columns content">
    <h3><?= h($historicoFeiraAnimai->idHistoricoFeiraAnimal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdHistoricoFeiraAnimal') ?></th>
            <td><?= $this->Number->format($historicoFeiraAnimai->idHistoricoFeiraAnimal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdFeira Feira') ?></th>
            <td><?= $this->Number->format($historicoFeiraAnimai->idFeira_Feira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAnimal Animal') ?></th>
            <td><?= $this->Number->format($historicoFeiraAnimai->idAnimal_Animal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataRegistro') ?></th>
            <td><?= h($historicoFeiraAnimai->dataRegistro) ?></td>
        </tr>
    </table>
</div>
