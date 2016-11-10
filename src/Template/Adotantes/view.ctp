<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adotante'), ['action' => 'edit', $adotante->idAdotante]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adotante'), ['action' => 'delete', $adotante->idAdotante], ['confirm' => __('Are you sure you want to delete # {0}?', $adotante->idAdotante)]) ?> </li>
        <li><?= $this->Html->link(__('List Adotantes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adotante'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adotantes view large-9 medium-8 columns content">
    <h3><?= h($adotante->idAdotante) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdAdotante') ?></th>
            <td><?= $this->Number->format($adotante->idAdotante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RendaFamiliar') ?></th>
            <td><?= $this->Number->format($adotante->rendaFamiliar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CriancasEmCasa') ?></th>
            <td><?= $this->Number->format($adotante->criancasEmCasa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidadeanimais') ?></th>
            <td><?= $this->Number->format($adotante->quantidadeanimais) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reputacao') ?></th>
            <td><?= $this->Number->format($adotante->reputacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario Usuario') ?></th>
            <td><?= $this->Number->format($adotante->idUsuario_Usuario) ?></td>
        </tr>
    </table>
</div>
