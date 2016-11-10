<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animais'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="animais form large-9 medium-8 columns content">
    <?= $this->Form->create($animai) ?>
    <fieldset>
        <legend><?= __('Add Animai') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('dataNascimento', ['empty' => true]);
            echo $this->Form->input('raca');
            echo $this->Form->input('cor');
            echo $this->Form->input('especie');
            echo $this->Form->input('pelagem');
            echo $this->Form->input('deformidade');
            echo $this->Form->input('porte');
            echo $this->Form->input('resenha');
            echo $this->Form->input('dataCadastro', ['empty' => true]);
            echo $this->Form->input('foto');
            echo $this->Form->input('localidadeLongitude');
            echo $this->Form->input('localidadeLatitude');
            echo $this->Form->input('idSituacao_Situacao');
            echo $this->Form->input('idFeira_Feira');
            echo $this->Form->input('codigoAnimal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
