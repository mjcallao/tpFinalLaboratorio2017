<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id_usuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id_usuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id_usuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id_usuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($usuario->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Usuario') ?></th>
            <td><?= h($usuario->nombre_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($usuario->id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Perfil') ?></th>
            <td><?= $this->Number->format($usuario->id_perfil) ?></td>
        </tr>
    </table>
</div>
