<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear usuario</h2>
        </div>
    <?= $this->Form->create($user) ?>
        <fieldset>
            <?php
                echo $this->Form->input('first_name', ['label' => 'Nombre']);
                echo $this->Form->input('last_name', ['label' => 'Apellidos']);
                echo $this->Form->input('email', ['label' => 'Correo Electrónio']);
                echo $this->Form->input('password', ['label' => 'Contraseña']);
                echo $this->Form->input('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario']], ['label' => 'Rol']);
                echo $this->Form->input('active', ['label' => 'Activo']);
            ?>
        </fieldset>
        <?= $this->Form->button('Crear') ?>
        <?= $this->Form->end() ?>
    </div>
</div>