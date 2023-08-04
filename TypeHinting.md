# Type Hinting

PHP es un lenguaje de programación débilmente tipado, lo que significa que las variables __no tienen un tipo de dato específico y pueden cambiar de tipo durante la ejecución del programa.__ Sin embargo, a partir de PHP 7.0, se introdujo la característica de "type hinting" o "declaración de tipo" que permite especificar explícitamente los tipos de datos que se esperan en los parámetros de una función y en su valor de retorno.
+ Esto proporciona cierto nivel de control y seguridad en la manipulación de datos al hacer cumplir ciertos tipos esperados.

El type hinting se puede aplicar a cuatro tipos principales de datos:

1. Tipos escalares: Puedes especificar tipos escalares como string, int, float y bool.

2. Tipos de clases o interfaces: Puedes especificar una clase o una interfaz como tipo de parámetro para asegurarte de que solo se pasen objetos de esa clase o clases que implementen esa interfaz.

3. Tipos de array: A partir de PHP 7.1, puedes especificar el tipo de datos que se espera dentro de un array.

4. Tipos nulos: A partir de PHP 7.1, puedes permitir explícitamente valores nulos con el tipo de datos null.

Ejemplo de type hinting en parámetros de entrada:

``` php
class Persona {
    public $nombre;
    public $edad;
}

function saludar(Persona $persona) {
    return "Hola, " . $persona->nombre . ". Tienes " . $persona->edad . " años.";
}

$usuario = new Persona();
$usuario->nombre = "Juan";
$usuario->edad = 30;

echo saludar($usuario); // Output: Hola, Juan. Tienes 30 años.
```
En este ejemplo, la función saludar() especifica que el parámetro $persona debe ser de tipo Persona, lo que asegura que solo se pasen objetos de la clase Persona.

Ejemplo de type hinting en valor de retorno:

``` php
function sumar(int $a, int $b): int {
    return $a + $b;
}

$resultado = sumar(5, 3);
echo $resultado; // Output: 8
```
En este ejemplo, la función sumar() especifica que debe devolver un valor de tipo int, lo que garantiza que el resultado de la suma sea un entero.

El type hinting es una característica útil que te ayuda a mejorar la robustez y claridad de tu código, ya que PHP emitirá un error si se intenta llamar a una función con tipos de datos incorrectos, lo que facilita la depuración y evita problemas con datos inesperados. Sin embargo, debes tener en cuenta que el type hinting no convierte automáticamente los valores a los tipos especificados, simplemente comprueba si los tipos son correctos y emite errores si no coinciden.