<div class="well">
<h2><?= $proyecto->nombre ?></h2>
    <br>
    <dl>
        <dt>Accion</dt>
        <dd>
            <?= $proyecto->accion ?>
            &nbsp;
        </dd>
        <br>

        <dt>Monto</dt>
        <dd>
            <?= $proyecto->monto ?>
            &nbsp;
        </dd>
        <br>

        <dt>Anticipo</dt>
        <dd>
            <?= $proyecto->anticipo ?>
            &nbsp;
        </dd>
        <br>

        <dt>Primera Estimación</dt>
        <dd>
            <?= $proyecto->primeraEstimacion ?>
            &nbsp;
        </dd>
        <br>

        <dt>Segunda Estimación</dt>
        <dd>
            <?= $proyecto->segundaEstimacion ?>
            &nbsp;
        </dd>
        <br>

        <dt>Fecha de Inicio</dt>
        <dd>
            <?= $proyecto->fechaInicio ?>
            &nbsp;
        </dd>
        <br>
        <dt>Fecha de Fin</dt>
        <dd>
            <?= $proyecto->fechaFin ?>
            &nbsp;
        </dd>
        <br>



        <!--<dt>Creado</dt>
        <dd>
            <?//= $genero->created->nice() ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?//= $genero->modified->nice() ?>
            &nbsp;
        </dd>-->
    </dl>
    <div class="row">
        <div class="col-md-8">
            <div class="page-header">
            <?php if (!empty($proyecto->avances)): ?>
            <h4>Relación de Artistas</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                <thead>
                <tr>
                <th><?= 'id' ?></th>
                <th><?= 'Descripción' ?></th>
                 <th><?= 'Foto' ?></th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($proyecto->avances as $avances): ?>
                <tr>
                    <td><?= $this->Number->format($avances->id) ?></td>
                    <td><?= h($avances->descripcion) ?></td>
                    <th><?= $this->Html->image('../' . str_replace('\\', '/', $avances->imagen_dir) . 'thumbnail-' . $avances->imagen) ?></th>

                    <td>
                        <?= $this->Html->link('Ver', ['controller' => 'Avances', 'action' => 'view', $avances->id], ['class' => 'btn btn-sm btn-info']) ?>
                        <!--<?= $this->Html->link('Editar', ['controller' => 'Avances', 'action' => 'edit', $avances->id], ['class' => 'btn btn-sm btn-primary']) ?>
                        <?= $this->Form->postLink('Eliminar', ['controller' => 'Avances', 'action' => 'delete', $avances->id], ['confirm' => 'Eliminar usuario ?', 'class' => 'btn btn-sm btn-danger']) ?>-->
                    </td>
                </tr>
            <?php endforeach; ?>
                </tbody>
                </table>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>

