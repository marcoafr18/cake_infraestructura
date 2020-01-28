<?php
    echo $this->Form->input('first_name', ['label' => 'Nombre']);
    echo $this->Form->input('last_name', ['label' => 'Apellidos']);
    echo $this->Form->input('email', ['label' => 'Correo Electrónio']);
    echo $this->Form->input('password', ['label' => 'Contraseña', 'value' => '']);
    echo $this->Form->input('role', ['options' => ['admin' => 'Administrador', 'user' => 'Usuario']], ['label' => 'Rol']);
    echo $this->Form->input('active', ['label' => 'Activo']);
?>