<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id_cliente]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id_cliente], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id_cliente)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id_cliente) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= h($cliente->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Cliente') ?></th>
            <td><?= h($cliente->nombre_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Cliente') ?></th>
            <td><?= h($cliente->apellido_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Cliente') ?></th>
            <td><?= h($cliente->email_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Cliente') ?></th>
            <td><?= h($cliente->telefono_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion Cliente') ?></th>
            <td><?= h($cliente->direccion_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cliente') ?></th>
            <td><?= $this->Number->format($cliente->id_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento Cliente') ?></th>
            <td><?= h($cliente->fecha_nacimiento_cliente) ?></td>
        </tr>
    </table>
</div>
