<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroVacuna $registroVacuna
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registro Vacuna'), ['action' => 'edit', $registroVacuna->id_reg_vacuna]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registro Vacuna'), ['action' => 'delete', $registroVacuna->id_reg_vacuna], ['confirm' => __('Are you sure you want to delete # {0}?', $registroVacuna->id_reg_vacuna)]) ?> </li>
        <li><?= $this->Html->link(__('List Registro Vacunas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registro Vacuna'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registroVacunas view large-9 medium-8 columns content">
    <h3><?= h($registroVacuna->id_reg_vacuna) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Reg Vacuna') ?></th>
            <td><?= $this->Number->format($registroVacuna->id_reg_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Mascota') ?></th>
            <td><?= $this->Number->format($registroVacuna->id_mascota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vacuna') ?></th>
            <td><?= $this->Number->format($registroVacuna->id_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Vacuna') ?></th>
            <td><?= h($registroVacuna->fecha_vacuna) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valida Hasta') ?></th>
            <td><?= h($registroVacuna->valida_hasta) ?></td>
        </tr>
    </table>
</div>
