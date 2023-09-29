"Alta cohesión" y "bajo acoplamiento" son dos principios fundamentales de la programación orientada a objetos y la arquitectura de software que se utilizan para crear sistemas más mantenibles, flexibles y escalables. Aquí tienes una explicación de ambos conceptos y ejemplos en PHP:

## Alta Cohesión:
La alta cohesión se refiere a la medida en que las responsabilidades de un módulo o clase están estrechamente relacionadas y enfocadas en una tarea específica. En otras palabras, un módulo o clase cohesionado hace una cosa y la hace bien. Un alto nivel de cohesión es deseable porque facilita la comprensión, el mantenimiento y la reutilización del código.

## Bajo Acoplamiento:
El bajo acoplamiento se refiere a la medida en que las clases o módulos en un sistema interactúan entre sí de manera independiente. Un sistema con bajo acoplamiento es más flexible y menos propenso a errores, ya que los cambios en una parte del sistema tienen menos impacto en otras partes. Reducir el acoplamiento implica desacoplar componentes, minimizando las dependencias entre ellos.

Ejemplo con Problema de Alta Cohesión y Bajo Acoplamiento en PHP:

Supongamos que estamos desarrollando un sistema de gestión de empleados y tenemos una clase Empleado que maneja tanto la gestión de datos del empleado como la generación de informes. Esto sería un problema de falta de cohesión y alto acoplamiento, ya que una sola clase está haciendo demasiado.

``` php
class Empleado {
    private $nombre;
    private $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularSalario() {
        // Cálculos del salario
    }

    public function generarInforme() {
        // Generar informe
    }
}
```
+ Solución con Alta Cohesión y Bajo Acoplamiento en PHP:

En lugar de tener una clase Empleado que maneja todo, podemos dividir las responsabilidades en clases separadas con alta cohesión y bajo acoplamiento. Por ejemplo, podríamos tener una clase Empleado que se encargue de los datos del empleado y otra clase GeneradorInforme que se encargue de generar informes.

``` php
class Empleado {
    private $nombre;
    private $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularSalario() {
        // Cálculos del salario
    }
}

class GeneradorInforme {
    public function generarInforme(Empleado $empleado) {
        // Generar informe utilizando los datos del empleado
    }
}
```
En este ejemplo, hemos separado las responsabilidades de manera más cohesiva y hemos reducido el acoplamiento entre las clases Empleado y GeneradorInforme. Ahora, cada clase tiene una tarea clara y específica, lo que facilita la comprensión y el mantenimiento del código, y permite cambios en una clase sin afectar a la otra.