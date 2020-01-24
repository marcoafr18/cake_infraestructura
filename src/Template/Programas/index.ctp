<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa[]|\Cake\Collection\CollectionInterface $programas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programas index large-9 medium-8 columns content">
    <h3><?= __('Programas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programas as $programa): ?>
            <tr>
                <td><?= $this->Number->format($programa->id) ?></td>
                <td><?= h($programa->programa) ?></td>
                <td><?= h($programa->descripcion) ?></td>
                <td><?= h($programa->created) ?></td>
                <td><?= h($programa->modified) ?></td>
                <td><?= $this->Number->format($programa->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programa->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programa->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->id)]) ?>
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
