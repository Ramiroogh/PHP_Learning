# -> "operador de objeto o flecha"
El operador => se utiliza para asociar una clave (generalmente un string) con un valor en un array. Se utiliza principalmente para crear arrays asociativos, donde cada elemento tiene una clave única que se usa para acceder al valor correspondiente.

``` php
$miArray = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ocupacion" => "Desarrollador"
);

echo $miArray["nombre"];  // Accediendo al valor usando la clave "nombre"
```