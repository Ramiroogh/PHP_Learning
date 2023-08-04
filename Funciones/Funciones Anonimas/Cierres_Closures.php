<?php
// Las funciones anonimas, por lo general sirven para tareas muy pequeñas
// Dentro de Scope Locales de otras funciones

function reemplaza_espacios ($texto) {
    return str_replace ($coincidencias[1], ' ', '&nbsp;').' ';
    };
    return preg_replace_callback ('/( +) /', $reemplazo, $texto);
}