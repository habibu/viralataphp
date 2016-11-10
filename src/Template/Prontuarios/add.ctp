<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prontuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prontuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($prontuario) ?>
    <fieldset>
        <legend><?= __('Add Prontuario') ?></legend>
        <?php
            echo $this->Form->input('registroAntiRabica');
            echo $this->Form->input('registroMultipla');
            echo $this->Form->input('registroCastracao');
            echo $this->Form->input('controleParasitas');
            echo $this->Form->input('dataControleParasitas', ['empty' => true]);
            echo $this->Form->input('veterinarioResponsavelControleParasitas');
            echo $this->Form->input('dataRegistro', ['empty' => true]);
            echo $this->Form->input('patologia');
            echo $this->Form->input('deformidade');
            echo $this->Form->input('idAnimal_Animal');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
