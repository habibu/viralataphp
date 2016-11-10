<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitacao Adoco'), ['action' => 'edit', $solicitacaoAdoco->idSolicitacaoAdocao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitacao Adoco'), ['action' => 'delete', $solicitacaoAdoco->idSolicitacaoAdocao], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacaoAdoco->idSolicitacaoAdocao)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitacao Adocoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitacao Adoco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitacaoAdocoes view large-9 medium-8 columns content">
    <h3><?= h($solicitacaoAdoco->idSolicitacaoAdocao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('IdSolicitacaoAdocao') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idSolicitacaoAdocao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAdotante Adotante') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idAdotante_Adotante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdAnimal Animal') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idAnimal_Animal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario Usuario') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idUsuario_Usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdFeira Feira') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idFeira_Feira) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idstatus Status') ?></th>
            <td><?= $this->Number->format($solicitacaoAdoco->idstatus_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DataSolicitacaoAdocao') ?></th>
            <td><?= h($solicitacaoAdoco->dataSolicitacaoAdocao) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($solicitacaoAdoco->descricao)); ?>
    </div>
</div>
