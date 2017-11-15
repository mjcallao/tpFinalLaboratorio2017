<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroAtencione[]|\Cake\Collection\CollectionInterface $registroAtenciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registro Atencione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registroAtenciones index large-9 medium-8 columns content">
    <h3><?= __('Registro Atenciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_reg_atencion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_mascota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registroAtenciones as $registroAtencione): ?>
            <tr>
                <td><?= $this->Number->format($registroAtencione->id_reg_atencion) ?></td>
                <td><?= h($registroAtencione->id_mascota) ?></td>
                <td><?= h($registroAtencione->fecha) ?></td>
                <td><?= $this->Number->format($registroAtencione->descripcion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registroAtencione->id_reg_atencion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registroAtencione->id_reg_atencion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registroAtencione->id_reg_atencion], ['confirm' => __('Are you sure you want to delete # {0}?', $registroAtencione->id_reg_atencion)]) ?>
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
