<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avance $avance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avances form large-9 medium-8 columns content">
    <?= $this->Form->create($avance) ?>
    <fieldset>
        <legend><?= __('Edit Avance') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
            echo $this->Form->control('imagen');
            echo $this->Form->control('imagen_dir');
            echo $this->Form->control('proyecto_id', ['options' => $proyectos]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
