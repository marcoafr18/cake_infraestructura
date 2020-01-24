<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proyectos form large-9 medium-8 columns content">
    <?= $this->Form->create($proyecto) ?>
    <fieldset>
        <legend><?= __('Add Proyecto') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('accion');
            echo $this->Form->control('monto');
            echo $this->Form->control('anticipo');
            echo $this->Form->control('primeraEstimacion');
            echo $this->Form->control('segundaEstimacion');
            echo $this->Form->control('fechaInicio');
            echo $this->Form->control('fechaFin');
            echo $this->Form->control('programa_id', ['options' => $programas]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
