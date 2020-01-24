<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programa $programa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Programa'), ['action' => 'edit', $programa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Programa'), ['action' => 'delete', $programa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programas view large-9 medium-8 columns content">
    <h3><?= h($programa->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Programa') ?></th>
            <td><?= h($programa->programa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($programa->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($programa->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($programa->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($programa->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($programa->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avances') ?></h4>
        <?php if (!empty($programa->avances)): ?>
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
            <?php foreach ($programa->avances as $avances): ?>
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
    <div class="related">
        <h4><?= __('Related Proyectos') ?></h4>
        <?php if (!empty($programa->proyectos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Accion') ?></th>
                <th scope="col"><?= __('Monto') ?></th>
                <th scope="col"><?= __('Anticipo') ?></th>
                <th scope="col"><?= __('PrimeraEstimacion') ?></th>
                <th scope="col"><?= __('SegundaEstimacion') ?></th>
                <th scope="col"><?= __('FechaInicio') ?></th>
                <th scope="col"><?= __('FechaFin') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Programa Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($programa->proyectos as $proyectos): ?>
            <tr>
                <td><?= h($proyectos->id) ?></td>
                <td><?= h($proyectos->nombre) ?></td>
                <td><?= h($proyectos->accion) ?></td>
                <td><?= h($proyectos->monto) ?></td>
                <td><?= h($proyectos->anticipo) ?></td>
                <td><?= h($proyectos->primeraEstimacion) ?></td>
                <td><?= h($proyectos->segundaEstimacion) ?></td>
                <td><?= h($proyectos->fechaInicio) ?></td>
                <td><?= h($proyectos->fechaFin) ?></td>
                <td><?= h($proyectos->created) ?></td>
                <td><?= h($proyectos->modified) ?></td>
                <td><?= h($proyectos->programa_id) ?></td>
                <td><?= h($proyectos->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proyectos', 'action' => 'view', $proyectos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proyectos', 'action' => 'edit', $proyectos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proyectos', 'action' => 'delete', $proyectos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proyectos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
