<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna $vacuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vacuna'), ['action' => 'edit', $vacuna->id_vacunas]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vacuna'), ['action' => 'delete', $vacuna->id_vacunas], ['confirm' => __('Are you sure you want to delete # {0}?', $vacuna->id_vacunas)]) ?> </li>
        <li><?= $this->Html->link(__('List Vacunas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vacuna'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vacunas view large-9 medium-8 columns content">
    <h3><?= h($vacuna->id_vacunas) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Vacuna') ?></th>
            <td><?= h($vacuna->nombre_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dosis Vacuna') ?></th>
            <td><?= h($vacuna->dosis_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Vacuna') ?></th>
            <td><?= h($vacuna->descripcion_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vacunas') ?></th>
            <td><?= $this->Number->format($vacuna->id_vacunas) ?></td>
        </tr>
    </table>
</div>
