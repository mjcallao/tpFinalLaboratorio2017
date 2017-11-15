<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroVacuna $registroVacuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Registro Vacunas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registroVacunas form large-9 medium-8 columns content">
    <?= $this->Form->create($registroVacuna) ?>
    <fieldset>
        <legend><?= __('Add Registro Vacuna') ?></legend>
        <?php
            echo $this->Form->control('id_mascota');
            echo $this->Form->control('id_vacuna');
            echo $this->Form->control('fecha_vacuna');
            echo $this->Form->control('valida_hasta');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
