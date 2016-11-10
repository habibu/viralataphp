<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Endereco'), ['action' => 'edit', $endereco->idEndereco]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Endereco'), ['action' => 'delete', $endereco->idEndereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->idEndereco)]) ?> </li>
        <li><?= $this->Html->link(__('List Enderecos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enderecos view large-9 medium-8 columns content">
    <h3><?= h($endereco->idEndereco) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Rua') ?></th>
            <td><?= h($endereco->rua) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($endereco->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TipoEndereco') ?></th>
            <td><?= h($endereco->tipoEndereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($endereco->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($endereco->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEndereco') ?></th>
            <td><?= $this->Number->format($endereco->idEndereco) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= $this->Number->format($endereco->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= $this->Number->format($endereco->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AreaMoradia') ?></th>
            <td><?= $this->Number->format($endereco->areaMoradia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario Usuario') ?></th>
            <td><?= $this->Number->format($endereco->idUsuario_Usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdCidade Cidade') ?></th>
            <td><?= $this->Number->format($endereco->idCidade_Cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $endereco->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
