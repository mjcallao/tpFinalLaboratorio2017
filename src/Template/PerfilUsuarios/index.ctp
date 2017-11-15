<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfilUsuario[]|\Cake\Collection\CollectionInterface $perfilUsuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perfil Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfilUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Perfil Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_perfil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_perfil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_perfil') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfilUsuarios as $perfilUsuario): ?>
            <tr>
                <td><?= $this->Number->format($perfilUsuario->id_perfil) ?></td>
                <td><?= h($perfilUsuario->nombre_perfil) ?></td>
                <td><?= h($perfilUsuario->descripcion_perfil) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perfilUsuario->id_perfil]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfilUsuario->id_perfil]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfilUsuario->id_perfil], ['confirm' => __('Are you sure you want to delete # {0}?', $perfilUsuario->id_perfil)]) ?>
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
