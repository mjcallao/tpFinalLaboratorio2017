<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota[]|\Cake\Collection\CollectionInterface $mascotas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mascota'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mascotas index large-9 medium-8 columns content">
    <h3><?= __('Mascotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_mascota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nac_mascota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comentario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mascotas as $mascota): ?>
            <tr>
                <td><?= $this->Number->format($mascota->id_mascota) ?></td>
                <td><?= $this->Number->format($mascota->id_cliente) ?></td>
                <td><?= $this->Number->format($mascota->id_especie) ?></td>
                <td><?= h($mascota->fecha_nac_mascota) ?></td>
                <td><?= h($mascota->sexo) ?></td>
                <td><?= h($mascota->comentario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mascota->id_mascota]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mascota->id_mascota]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mascota->id_mascota], ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id_mascota)]) ?>
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
