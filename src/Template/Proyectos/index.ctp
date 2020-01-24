<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proyecto[]|\Cake\Collection\CollectionInterface $proyectos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proyectos index large-9 medium-8 columns content">
    <h3><?= __('Proyectos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('accion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('monto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anticipo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primeraEstimacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('segundaEstimacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaInicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaFin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <tr>
                <td><?= $this->Number->format($proyecto->id) ?></td>
                <td><?= h($proyecto->nombre) ?></td>
                <td><?= h($proyecto->accion) ?></td>
                <td><?= $this->Number->format($proyecto->monto) ?></td>
                <td><?= $this->Number->format($proyecto->anticipo) ?></td>
                <td><?= $this->Number->format($proyecto->primeraEstimacion) ?></td>
                <td><?= $this->Number->format($proyecto->segundaEstimacion) ?></td>
                <td><?= h($proyecto->fechaInicio) ?></td>
                <td><?= h($proyecto->fechaFin) ?></td>
                <td><?= h($proyecto->created) ?></td>
                <td><?= h($proyecto->modified) ?></td>
                <td><?= $proyecto->has('programa') ? $this->Html->link($proyecto->programa->id, ['controller' => 'Programas', 'action' => 'view', $proyecto->programa->id]) : '' ?></td>
                <td><?= $proyecto->has('user') ? $this->Html->link($proyecto->user->id, ['controller' => 'Users', 'action' => 'view', $proyecto->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proyecto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proyecto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proyecto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proyecto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
