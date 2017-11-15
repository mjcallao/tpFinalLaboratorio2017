<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RegistroVacuna[]|\Cake\Collection\CollectionInterface $registroVacunas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registro Vacuna'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registroVacunas index large-9 medium-8 columns content">
    <h3><?= __('Registro Vacunas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_reg_vacuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_mascota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_vacuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_vacuna') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valida_hasta') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registroVacunas as $registroVacuna): ?>
            <tr>
                <td><?= $this->Number->format($registroVacuna->id_reg_vacuna) ?></td>
                <td><?= $this->Number->format($registroVacuna->id_mascota) ?></td>
                <td><?= $this->Number->format($registroVacuna->id_vacuna) ?></td>
                <td><?= h($registroVacuna->fecha_vacuna) ?></td>
                <td><?= h($registroVacuna->valida_hasta) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registroVacuna->id_reg_vacuna]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registroVacuna->id_reg_vacuna]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registroVacuna->id_reg_vacuna], ['confirm' => __('Are you sure you want to delete # {0}?', $registroVacuna->id_reg_vacuna)]) ?>
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
