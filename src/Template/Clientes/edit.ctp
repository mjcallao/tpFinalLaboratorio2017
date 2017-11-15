<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id_cliente],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id_cliente)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->control('dni');
            echo $this->Form->control('nombre_cliente');
            echo $this->Form->control('apellido_cliente');
            echo $this->Form->control('email_cliente');
            echo $this->Form->control('telefono_cliente');
            echo $this->Form->control('direccion_cliente');
            echo $this->Form->control('fecha_nacimiento_cliente');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
