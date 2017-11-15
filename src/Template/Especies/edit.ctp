<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especy $especy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $especy->id_especie],
                ['confirm' => __('Are you sure you want to delete # {0}?', $especy->id_especie)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Especies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="especies form large-9 medium-8 columns content">
    <?= $this->Form->create($especy) ?>
    <fieldset>
        <legend><?= __('Edit Especy') ?></legend>
        <?php
            echo $this->Form->control('nombre_especie');
            echo $this->Form->control('descripcion_especie');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
