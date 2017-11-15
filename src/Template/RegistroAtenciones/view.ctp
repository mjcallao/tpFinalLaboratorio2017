<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroAtencione $registroAtencione
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registro Atencione'), ['action' => 'edit', $registroAtencione->id_reg_atencion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registro Atencione'), ['action' => 'delete', $registroAtencione->id_reg_atencion], ['confirm' => __('Are you sure you want to delete # {0}?', $registroAtencione->id_reg_atencion)]) ?> </li>
        <li><?= $this->Html->link(__('List Registro Atenciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registro Atencione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registroAtenciones view large-9 medium-8 columns content">
    <h3><?= h($registroAtencione->id_reg_atencion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Mascota') ?></th>
            <td><?= h($registroAtencione->id_mascota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Reg Atencion') ?></th>
            <td><?= $this->Number->format($registroAtencione->id_reg_atencion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= $this->Number->format($registroAtencione->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($registroAtencione->fecha) ?></td>
        </tr>
    </table>
</div>
