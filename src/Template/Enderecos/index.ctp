<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Endereco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enderecos index large-9 medium-8 columns content">
    <h3><?= __('Enderecos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idEndereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rua') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('complemento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('areaMoradia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoEndereco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ativo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUsuario_Usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idCidade_Cidade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enderecos as $endereco): ?>
            <tr>
                <td><?= $this->Number->format($endereco->idEndereco) ?></td>
                <td><?= h($endereco->rua) ?></td>
                <td><?= $this->Number->format($endereco->numero) ?></td>
                <td><?= h($endereco->complemento) ?></td>
                <td><?= $this->Number->format($endereco->cep) ?></td>
                <td><?= $this->Number->format($endereco->areaMoradia) ?></td>
                <td><?= h($endereco->tipoEndereco) ?></td>
                <td><?= h($endereco->bairro) ?></td>
                <td><?= h($endereco->telefone) ?></td>
                <td><?= h($endereco->ativo) ?></td>
                <td><?= $this->Number->format($endereco->idUsuario_Usuario) ?></td>
                <td><?= $this->Number->format($endereco->idCidade_Cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $endereco->idEndereco]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $endereco->idEndereco]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $endereco->idEndereco], ['confirm' => __('Are you sure you want to delete # {0}?', $endereco->idEndereco)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
