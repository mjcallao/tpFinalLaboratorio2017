<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mascota->id_mascota],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id_mascota)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mascotas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mascotas form large-9 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Edit Mascota') ?></legend>
        <?php
            echo $this->Form->control('id_cliente');
            echo $this->Form->control('id_especie');
            echo $this->Form->control('fecha_nac_mascota');
            echo $this->Form->control('sexo');
            echo $this->Form->control('comentario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
