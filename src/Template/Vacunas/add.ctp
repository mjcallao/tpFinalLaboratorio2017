<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna $vacuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vacunas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vacunas form large-9 medium-8 columns content">
    <?= $this->Form->create($vacuna) ?>
    <fieldset>
        <legend><?= __('Add Vacuna') ?></legend>
        <?php
            echo $this->Form->control('nombre_vacuna');
            echo $this->Form->control('dosis_vacuna');
            echo $this->Form->control('descripcion_vacuna');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
