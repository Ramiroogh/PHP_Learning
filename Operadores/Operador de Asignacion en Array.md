# => "operador de asignación en array"
El operador -> se utiliza para acceder a propiedades y métodos de un objeto en programación orientada a objetos (OOP).
### Instancia
Cuando tienes una instancia de una clase (un objeto), puedes usar -> para acceder a sus propiedades (variables) y métodos (funciones) públicos.
`` php
class MiClase {
    public $propiedad = "Hola desde la propiedad";

    public function miMetodo() {
        return "Hola desde el método";
    }
}

$objeto = new MiClase();
echo $objeto->propiedad;  // Accediendo a una propiedad
echo $objeto->miMetodo(); // Llamando a un método
```
