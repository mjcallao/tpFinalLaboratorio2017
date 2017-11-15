<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mascota'), ['action' => 'edit', $mascota->id_mascota]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mascota'), ['action' => 'delete', $mascota->id_mascota], ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id_mascota)]) ?> </li>
        <li><?= $this->Html->link(__('List Mascotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mascota'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mascotas view large-9 medium-8 columns content">
    <h3><?= h($mascota->id_mascota) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($mascota->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comentario') ?></th>
            <td><?= h($mascota->comentario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Mascota') ?></th>
            <td><?= $this->Number->format($mascota->id_mascota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Cliente') ?></th>
            <td><?= $this->Number->format($mascota->id_cliente) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Especie') ?></th>
            <td><?= $this->Number->format($mascota->id_especie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nac Mascota') ?></th>
            <td><?= h($mascota->fecha_nac_mascota) ?></td>
        </tr>
    </table>
</div>
