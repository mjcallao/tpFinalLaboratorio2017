<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especy $especy
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Especy'), ['action' => 'edit', $especy->id_especie]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Especy'), ['action' => 'delete', $especy->id_especie], ['confirm' => __('Are you sure you want to delete # {0}?', $especy->id_especie)]) ?> </li>
        <li><?= $this->Html->link(__('List Especies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Especy'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="especies view large-9 medium-8 columns content">
    <h3><?= h($especy->id_especie) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Especie') ?></th>
            <td><?= h($especy->nombre_especie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Especie') ?></th>
            <td><?= h($especy->descripcion_especie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Especie') ?></th>
            <td><?= $this->Number->format($especy->id_especie) ?></td>
        </tr>
    </table>
</div>
