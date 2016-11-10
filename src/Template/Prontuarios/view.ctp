<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prontuario'), ['action' => 'edit', $prontuario->idProntuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prontuario'), ['action' => 'delete', $prontuario->idProntuario], ['confirm' => __('Are you sure you want to delete # {0}?', $prontuario->idProntuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Prontuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prontuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prontuarios view large-9 medium-8 columns content">
    <h3><?= h($prontuario->idProntuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('RegistroAntiRabica') ?></th>
            <td><?= h($prontuario->registroAntiRabica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistroMultipla') ?></th>
            <td><?= h($prontuario->registroMultipla) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RegistroCastracao') ?></th>
            <td><?= h($prontuario->registroCastracao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ControleParasitas') ?></th>
            <td><?= h($prontuario->controleParasitas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('VeterinarioResponsavelControleParasitas') ?></th>
            <td><?= h($prontuario->veterinarioResponsavelControleParasitas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Patologia') ?></th>
            <td><?= h($prontuario->patologia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdProntuario') ?></th>
            <td><?= $this->Number->format($prontuario->idProntuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAnimal Animal') ?></th>
            <td><?= $this->Number->format($prontuario->idAnimal_Animal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataControleParasitas') ?></th>
            <td><?= h($prontuario->dataControleParasitas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataRegistro') ?></th>
            <td><?= h($prontuario->dataRegistro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deformidade') ?></th>
            <td><?= $prontuario->deformidade ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
