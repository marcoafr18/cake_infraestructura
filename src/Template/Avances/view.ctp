<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avance $avance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avance'), ['action' => 'edit', $avance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avance'), ['action' => 'delete', $avance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avances view large-9 medium-8 columns content">
    <h3><?= h($avance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($avance->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagen') ?></th>
            <td><?= h($avance->imagen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imagen Dir') ?></th>
            <td><?= h($avance->imagen_dir) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proyecto') ?></th>
            <td><?= $avance->has('proyecto') ? $this->Html->link($avance->proyecto->id, ['controller' => 'Proyectos', 'action' => 'view', $avance->proyecto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $avance->has('user') ? $this->Html->link($avance->user->id, ['controller' => 'Users', 'action' => 'view', $avance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($avance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($avance->modified) ?></td>
        </tr>
    </table>
</div>
