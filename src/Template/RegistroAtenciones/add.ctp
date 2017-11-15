<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroAtencione $registroAtencione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Registro Atenciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registroAtenciones form large-9 medium-8 columns content">
    <?= $this->Form->create($registroAtencione) ?>
    <fieldset>
        <legend><?= __('Add Registro Atencione') ?></legend>
        <?php
            echo $this->Form->control('id_mascota');
            echo $this->Form->control('fecha');
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
