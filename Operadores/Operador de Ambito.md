# Operador de Ámbito ::
Tambien llamado "Resolución de Ámbito" o de **Alcance**, se utiliza principalmente para trabajar con miembros estáticos de una clase.

En la programación orientada a objetos (POO), las clases son plantillas que definen cómo deben comportarse los objetos que se crean a partir de ellas. Una clase puede contener propiedades (variables) y métodos (funciones) para operar en esas propiedades. En PHP, las clases pueden tener miembros estáticos, que son propiedades o métodos que pertenecen a la clase en sí misma, no a las instancias individuales de esa clase.

+ La sintaxis :: en PHP se utiliza para acceder a los miembros estáticos de una clase. Esto permite que interactúes con la clase y sus miembros **sin necesidad de crear una instancia de la misma**. En lugar de eso, trabajas directamente con la clase como una entidad.

Aquí tienes un ejemplo más completo para ilustrar esto:

``` php
class MathUtility {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Uso de los métodos estáticos de la clase MathUtility
$result1 = MathUtility::add(5, 3); // Llamada al método estático add()
$result2 = MathUtility::multiply(4, 6); // Llamada al método estático multiply()

echo "Resultado de la suma: " . $result1 . "<br>";
echo "Resultado de la multiplicación: " . $result2 . "<br>";

```
En este ejemplo:

Hemos definido la clase MathUtility que contiene dos métodos estáticos: add() y multiply().
+ Estos métodos no necesitan una instancia de la clase para ser utilizados.

Luego, hemos utilizado los métodos estáticos de la clase sin crear una instancia. Hemos llamado al método add() para sumar dos números y al método multiply() para multiplicar dos números.

+ Utilizamos la sintaxis :: para acceder a los métodos estáticos. MathUtility::add(5, 3) significa que estamos llamando al método add() de la clase MathUtility.

En resumen, la sintaxis :: es una forma de acceder a miembros estáticos de una clase en PHP. Esto te permite organizar y utilizar funcionalidades comunes sin la necesidad de crear instancias de la clase. Los métodos y propiedades estáticos son útiles cuando deseas crear funcionalidades que pertenecen directamente a la clase en lugar de a objetos individuales.