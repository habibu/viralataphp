<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Animai'), ['action' => 'edit', $animai->idAnimal]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Animai'), ['action' => 'delete', $animai->idAnimal], ['confirm' => __('Are you sure you want to delete # {0}?', $animai->idAnimal)]) ?> </li>
        <li><?= $this->Html->link(__('List Animais'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Animai'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="animais view large-9 medium-8 columns content">
    <h3><?= h($animai->idAnimal) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($animai->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raca') ?></th>
            <td><?= h($animai->raca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cor') ?></th>
            <td><?= h($animai->cor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especie') ?></th>
            <td><?= h($animai->especie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pelagem') ?></th>
            <td><?= h($animai->pelagem) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Porte') ?></th>
            <td><?= h($animai->porte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foto') ?></th>
            <td><?= h($animai->foto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CodigoAnimal') ?></th>
            <td><?= h($animai->codigoAnimal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAnimal') ?></th>
            <td><?= $this->Number->format($animai->idAnimal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LocalidadeLongitude') ?></th>
            <td><?= $this->Number->format($animai->localidadeLongitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LocalidadeLatitude') ?></th>
            <td><?= $this->Number->format($animai->localidadeLatitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdSituacao Situacao') ?></th>
            <td><?= $this->Number->format($animai->idSituacao_Situacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdFeira Feira') ?></th>
            <td><?= $this->Number->format($animai->idFeira_Feira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataNascimento') ?></th>
            <td><?= h($animai->dataNascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataCadastro') ?></th>
            <td><?= h($animai->dataCadastro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deformidade') ?></th>
            <td><?= $animai->deformidade ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Resenha') ?></h4>
        <?= $this->Text->autoParagraph(h($animai->resenha)); ?>
    </div>
</div>
