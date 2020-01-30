<?php
    echo $this->Form->input('descripcion', ['type' => 'textarea', 'label' => 'Descripción']);
    echo $this->Form->input('imagen', ['type' => 'file', 'class' => 'filestyle', 'data-btnClass' => 'btn-primary', 'data-buttonText' => 'Examinar']);
?>