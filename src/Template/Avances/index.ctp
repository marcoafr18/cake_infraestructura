<div class="row">
    <div class="col-md-12">
    	<div class="page-header">
    		<h2>
    			Mi lista
    			<?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' => 'Avances', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
    		</h2>
    	</div>
		<ul class="list-group">
			<?php foreach ($avances as $avance): ?>
			<li class="list-group-item">
				<h4 class="list-group-item-heading"><?= h($avance->descripcion) ?></h4>
				<p>
					<strong class="text-info">
						<small>
							<?= $this->Html->link($avance->imagen, null, ['target' => '_blank']) ?>
						</small>
					</strong>
				</p>
				<p class="list-group-item-text">
					<?= h($avance->descripcion) ?>
				</p>
				<br>
				<?= $this->Html->link('Editar', ['controller' => 'Bookmarks', 'action' => 'edit', $avance->id], ['class' => 'btn btn-sm btn-primary']) ?>
				<?= $this->Form->postLink('Eliminar', ['controller' => 'Bookmarks', 'action' => 'delete', $avance->id], ['confirm' => 'Eliminar enlace ?', 'class' => 'btn btn-sm btn-danger']) ?>
			</li>
			<?php endforeach ?>
		</ul>
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