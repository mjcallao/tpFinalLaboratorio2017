<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfilUsuario $perfilUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfil Usuario'), ['action' => 'edit', $perfilUsuario->id_perfil]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfil Usuario'), ['action' => 'delete', $perfilUsuario->id_perfil], ['confirm' => __('Are you sure you want to delete # {0}?', $perfilUsuario->id_perfil)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfil Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfil Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfilUsuarios view large-9 medium-8 columns content">
    <h3><?= h($perfilUsuario->id_perfil) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre Perfil') ?></th>
            <td><?= h($perfilUsuario->nombre_perfil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Perfil') ?></th>
            <td><?= h($perfilUsuario->descripcion_perfil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Perfil') ?></th>
            <td><?= $this->Number->format($perfilUsuario->id_perfil) ?></td>
        </tr>
    </table>
</div>
