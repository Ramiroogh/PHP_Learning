Una propiedad/método static de una clase puede ser accedida/o sin crear un objeto de esa Clase.

Se accede a una propiedad/método estética/o utilizando el operador de resolucién de émbito :: entre el nombre de la Clase y el nombre de la propiedad/método.

por ejemplo:
``` php
<?php
class myClass {
    static $myStaticProperty = 42;
}
echo myClass::$myStaticProperty;
?>
```
+ La palabra clave Self, es necesaria para acceder a una propiedad static desde un metodo static en una definicion de clase.

por ejemplo:
``` php
<?php
class myClass {
    static $myProperty = 42;
    static function myMethod() {
echo self::$myProperty;

    }
}
myClass::myMethod();
?>
```
IMPORTANTE: Los objetos de una clase no pueden acceder a propiedades static en la clase, pero si pueden acceder a metodos static.