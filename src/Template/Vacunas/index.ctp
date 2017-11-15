<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vacuna[]|\Cake\Collection\CollectionInterface $vacunas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vacuna'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vacunas index large-9 medium-8 columns content">
    <h3><?= __('Vacunas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_vacunas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_vacuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dosis_vacuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_vacuna') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vacunas as $vacuna): ?>
            <tr>
                <td><?= $this->Number->format($vacuna->id_vacunas) ?></td>
                <td><?= h($vacuna->nombre_vacuna) ?></td>
                <td><?= h($vacuna->dosis_vacuna) ?></td>
                <td><?= h($vacuna->descripcion_vacuna) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vacuna->id_vacunas]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vacuna->id_vacunas]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vacuna->id_vacunas], ['confirm' => __('Are you sure you want to delete # {0}?', $vacuna->id_vacunas)]) ?>
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
