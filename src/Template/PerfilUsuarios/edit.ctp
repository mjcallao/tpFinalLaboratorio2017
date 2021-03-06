<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PerfilUsuario $perfilUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $perfilUsuario->id_perfil],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perfilUsuario->id_perfil)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Perfil Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perfilUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($perfilUsuario) ?>
    <fieldset>
        <legend><?= __('Edit Perfil Usuario') ?></legend>
        <?php
            echo $this->Form->control('nombre_perfil');
            echo $this->Form->control('descripcion_perfil');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
