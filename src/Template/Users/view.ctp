<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avances'), ['controller' => 'Avances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avance'), ['controller' => 'Avances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programas'), ['controller' => 'Programas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programa'), ['controller' => 'Programas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyectos'), ['controller' => 'Proyectos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyecto'), ['controller' => 'Proyectos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($user->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avances') ?></h4>
        <?php if (!empty($user->avances)): ?>
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
            <?php foreach ($user->avances as $avances): ?>
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
        <h4><?= __('Related Programas') ?></h4>
        <?php if (!empty($user->programas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Programa') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->programas as $programas): ?>
            <tr>
                <td><?= h($programas->id) ?></td>
                <td><?= h($programas->programa) ?></td>
                <td><?= h($programas->descripcion) ?></td>
                <td><?= h($programas->created) ?></td>
                <td><?= h($programas->modified) ?></td>
                <td><?= h($programas->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programas', 'action' => 'view', $programas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programas', 'action' => 'edit', $programas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programas', 'action' => 'delete', $programas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proyectos') ?></h4>
        <?php if (!empty($user->proyectos)): ?>
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
            <?php foreach ($user->proyectos as $proyectos): ?>
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
