<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Reportar Avance</h2>
        </div>
    <?= $this->Form->create($avance, ['type' => 'file'], ['novalidate']) ?>
        <fieldset>
            <?= $this->element('avances/fields') ?>
        </fieldset>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>
    </div>
</div>