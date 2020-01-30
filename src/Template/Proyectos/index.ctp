<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Usuarios</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nombre', ['Nombre']) ?></th>
                <th><?= $this->Paginator->sort('monto', ['Monto']) ?></th>
                <th><?= $this->Paginator->sort('anticipo', ['Anticipo']) ?></th>
                <th><?= $this->Paginator->sort('primeraEstimacion', ['Primera Estimación']) ?></th>
                <th><?= $this->Paginator->sort('segundaEstimacion', ['Segunda Estimación']) ?></th>
                <th><?= $this->Paginator->sort('fechaInicio', ['Fecha de Inicio']) ?></th>
                <th><?= $this->Paginator->sort('fechaFin', ['Fecha Fin']) ?></th>
                <th><?= $this->Paginator->sort('programa_id', ['Programa']) ?></th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($proyectos as $proyecto): ?>
            <tr>
                <td><?= $this->Number->format($proyecto->id) ?></td>
                <td><?= h($proyecto->nombre) ?></td>
                <td><?= h($proyecto->monto) ?></td>
                <td><?= h($proyecto->anticipo) ?></td>
                <td><?= h($proyecto->primeraEstimacion) ?></td>
                <td><?= h($proyecto->segundaEstimacion) ?></td>
                <td><?= h($proyecto->fechaInicio) ?></td>
                <td><?= h($proyecto->fechaFin) ?></td>
                <td><?= $proyecto->has('programa') ? $this->Html->link($proyecto->programa->programa, ['controller' => 'Programas', 'action' => 'view', $proyecto->programa->id]) : '' ?></td>
                <td>
                    <?= $this->Html->link('Ver', ['action' => 'view', $proyecto->id], ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $proyecto->id], ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $proyecto->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
            </tbody>
            </table>
        </div>

        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
