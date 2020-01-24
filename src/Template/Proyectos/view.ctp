<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto $proyecto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proyecto'), ['action' => 'edit', $proyecto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proyecto'), ['action' => 'delete', $proyecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proyecto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proyectos view large-9 medium-8 columns content">
    <h3><?= h($proyecto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($proyecto->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Accion') ?></th>
            <td><?= h($proyecto->accion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= $proyecto->has('programa') ? $this->Html->link($proyecto->programa->id, ['controller' => 'Programas', 'action' => 'view', $proyecto->programa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $proyecto->has('user') ? $this->Html->link($proyecto->user->id, ['controller' => 'Users', 'action' => 'view', $proyecto->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proyecto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Monto') ?></th>
            <td><?= $this->Number->format($proyecto->monto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Anticipo') ?></th>
            <td><?= $this->Number->format($proyecto->anticipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PrimeraEstimacion') ?></th>
            <td><?= $this->Number->format($proyecto->primeraEstimacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SegundaEstimacion') ?></th>
            <td><?= $this->Number->format($proyecto->segundaEstimacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaInicio') ?></th>
            <td><?= h($proyecto->fechaInicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaFin') ?></th>
            <td><?= h($proyecto->fechaFin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($proyecto->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($proyecto->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avances') ?></h4>
        <?php if (!empty($proyecto->avances)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Imagen') ?></th>
                <th scope="col"><?= __('Imagen Dir') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Proyecto Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proyecto->avances as $avances): ?>
            <tr>
                <td><?= h($avances->id) ?></td>
                <td><?= h($avances->descripcion) ?></td>
                <td><?= h($avances->imagen) ?></td>
                <td><?= h($avances->imagen_dir) ?></td>
                <td><?= h($avances->created) ?></td>
                <td><?= h($avances->modified) ?></td>
                <td><?= h($avances->proyecto_id) ?></td>
                <td><?= h($avances->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Avances', 'action' => 'view', $avances->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Avances', 'action' => 'edit', $avances->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Avances', 'action' => 'delete', $avances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avances->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
