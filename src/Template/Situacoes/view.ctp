<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Situaco'), ['action' => 'edit', $situaco->idSituacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Situaco'), ['action' => 'delete', $situaco->idSituacao], ['confirm' => __('Are you sure you want to delete # {0}?', $situaco->idSituacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Situacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="situacoes view large-9 medium-8 columns content">
    <h3><?= h($situaco->idSituacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($situaco->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdSituacao') ?></th>
            <td><?= $this->Number->format($situaco->idSituacao) ?></td>
        </tr>
    </table>
</div>
