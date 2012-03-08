<?php

class Cargo extends AppModel {

    var $name = 'Cargo';
    var $displayField = 'NOMBRE';

    /**
     *  Relaciones
     */
    var $hasMany = 'Asignacion';
    var $belongsTo = 'Sueldo';

}

?>
