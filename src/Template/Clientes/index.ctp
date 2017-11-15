<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientes index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento_cliente') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
            <tr>
                <td><?= $this->Number->format($cliente->id_cliente) ?></td>
                <td><?= h($cliente->dni) ?></td>
                <td><?= h($cliente->nombre_cliente) ?></td>
                <td><?= h($cliente->apellido_cliente) ?></td>
                <td><?= h($cliente->email_cliente) ?></td>
                <td><?= h($cliente->telefono_cliente) ?></td>
                <td><?= h($cliente->direccion_cliente) ?></td>
                <td><?= h($cliente->fecha_nacimiento_cliente) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cliente->id_cliente]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cliente->id_cliente]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cliente->id_cliente], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id_cliente)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
