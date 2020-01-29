<?php
    echo $this->Form->input('descripcion', ['type' => 'textarea', 'label' => 'Descripción']);
    echo $this->Form->input('imagen', ['type' => 'file', 'class' => 'Form-control', 'label' => 'Foto (Tamaño máximo: 1MB)']);
?>