<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna $vacuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vacuna->id_vacunas],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vacuna->id_vacunas)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vacunas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vacunas form large-9 medium-8 columns content">
    <?= $this->Form->create($vacuna) ?>
    <fieldset>
        <legend><?= __('Edit Vacuna') ?></legend>
        <?php
            echo $this->Form->control('nombre_vacuna');
            echo $this->Form->control('dosis_vacuna');
            echo $this->Form->control('descripcion_vacuna');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
