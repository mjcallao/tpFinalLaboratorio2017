<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Especy[]|\Cake\Collection\CollectionInterface $especies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Especy'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="especies index large-9 medium-8 columns content">
    <h3><?= __('Especies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_especie') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($especies as $especy): ?>
            <tr>
                <td><?= $this->Number->format($especy->id_especie) ?></td>
                <td><?= h($especy->nombre_especie) ?></td>
                <td><?= h($especy->descripcion_especie) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $especy->id_especie]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $especy->id_especie]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $especy->id_especie], ['confirm' => __('Are you sure you want to delete # {0}?', $especy->id_especie)]) ?>
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
