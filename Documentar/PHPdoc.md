# ¿ Qué es PHPDoc?
PHPDoc es una convención de documentación en PHP utilizada para documentar el código fuente de manera estructurada. Proporciona información sobre las funciones, métodos, clases, propiedades y más dentro de un proyecto PHP. Los comentarios PHPDoc se utilizan para ayudar a otros desarrolladores a entender cómo se usa y cómo funciona el código, y también son valiosos para generar documentación automática utilizando herramientas como PHPDocumentor.

### Algunas etiquetas mas comunes y utilizadas:

+ **@param**: Esta etiqueta se usa para describir los parámetros de una función o método. Aquí hay un ejemplo:
``` php
/**
 * Suma dos números enteros.
 *
 * @param int $a El primer número.
 * @param int $b El segundo número.
 *
 * @return int La suma de los dos números.
 */
function sum($a, $b) {
    return $a + $b;
}
```
+ **@return**: Esta etiqueta se utiliza para describir el tipo de valor que devuelve una función o método.
``` php
/**
 * Obtiene el nombre completo de una persona.
 *
 * @param string $nombre El nombre de la persona.
 * @param string $apellido El apellido de la persona.
 *
 * @return string El nombre completo de la persona.
 */
function obtenerNombreCompleto($nombre, $apellido) {
    return $nombre . ' ' . $apellido;
}
```
+ **@var**: Se usa para describir el tipo de una propiedad de clase.
``` php
/**
 * Un ejemplo de clase con una propiedad documentada.
 */
class MiClase {
    /**
     * @var string El nombre de la instancia de la clase.
     */
    public $nombre;
}
```
+ **@throws**: Describe las excepciones que puede arrojar una función o método.
``` php
/**
 * Divide dos números.
 *
 * @param float $dividendo El número que se va a dividir.
 * @param float $divisor El número por el cual se va a dividir.
 *
 * @return float El resultado de la división.
 *
 * @throws InvalidArgumentException Si el divisor es igual a cero.
 */
function dividir($dividendo, $divisor) {
    if ($divisor == 0) {
        throw new InvalidArgumentException("El divisor no puede ser cero.");
    }
    return $dividendo / $divisor;
}

```
+ **@var, @property, y @method**: Se utilizan para documentar propiedades y métodos de clases, especialmente en clases que siguen el modelo de programación orientada a objetos.
``` php
/**
 * Clase que representa un producto.
 */
class Producto {
    /**
     * @var string El nombre del producto.
     */
    public $nombre;

    /**
     * @var float El precio del producto.
     */
    public $precio;

    /**
     * Calcula el precio con impuestos incluidos.
     *
     * @param float $impuesto El impuesto a aplicar (como un porcentaje).
     *
     * @return float El precio con impuestos incluidos.
     */
    public function calcularPrecioConImpuestos($impuesto) {
        return $this->precio * (1 + ($impuesto / 100));
    }
}
```
+ **@see**: Se utiliza para enlazar a otra parte del código o a recursos externos relacionados con el código documentado.
``` php
/**
 * Clase que representa una conexión a una base de datos.
 *
 * @see https://example.com/documentacion-de-conexion
 */
class ConexionBaseDatos {
    // ...
}
```

Estas son solo algunas de las etiquetas más comunes que se utilizan en PHPDoc. Puedes combinar y utilizar estas etiquetas según sea necesario para documentar de manera efectiva tu código PHP y hacerlo más comprensible para otros desarrolladores y para herramientas de generación de documentación.