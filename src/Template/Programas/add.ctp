<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programas form large-9 medium-8 columns content">
    <?= $this->Form->create($programa) ?>
    <fieldset>
        <legend><?= __('Add Programa') ?></legend>
        <?php
            echo $this->Form->control('programa');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('user_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
