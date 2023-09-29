# Self - referencia a miembros estáticos (propiedades y métodos) dentro de una clase

La palabra clave self en PHP se utiliza para hacer referencia a miembros estáticos (propiedades y métodos) dentro de una clase. Es una forma de acceder a estos miembros sin necesidad de crear una instancia de la clase. Aquí tienes un ejemplo para ilustrar su uso:
``` php
class MiClase {
    public static $propiedad_estatica = "Soy una propiedad estática";

    public static function metodo_estatico() {
        return "Soy un método estático";
    }
}

// Accediendo a una propiedad estática utilizando self::
echo MiClase::$propiedad_estatica;

// Accediendo a un método estático utilizando self::
echo MiClase::metodo_estatico();
```
+ En este ejemplo, self::$propiedad_estatica se refiere a la propiedad estática $propiedad_estatica de la clase MiClase. Del mismo modo, self::metodo_estatico() se refiere al método estático metodo_estatico() de la clase MiClase.

Es importante notar que self se refiere a la definición de la clase en la que se encuentra. No está vinculado a una instancia específica de la clase, por lo que no puedes acceder a propiedades o métodos no estáticos con self a menos que estés dentro de un contexto estático. Además, **self se usa dentro de la propia clase y no puede ser utilizado desde fuera de la clase** para acceder a miembros estáticos.
``` php
class MiClase {
    public static $propiedad_estatica = "Soy una propiedad estática";

    public function obtenerPropiedadEstatica() {
        // Esto generará un error, ya que $this no es válido en un contexto estático.
        return self::$propiedad_estatica;
    }
}

$objeto = new MiClase();
echo $objeto->obtenerPropiedadEstatica();  // Esto funciona correctamente
```
En resumen, self es una palabra clave que se utiliza para acceder a miembros estáticos dentro de una clase. Te permite referenciar propiedades y métodos estáticos sin necesidad de crear una instancia de la clase.

### Diferencia entre 'self y ::'
+ **self** es una palabra clave que se utiliza dentro de una clase para hacer referencia a la propia clase. Se utiliza principalmente para acceder a propiedades y métodos estáticos de la clase actual. Por ejemplo, si tienes una propiedad estática llamada $nombre dentro de una clase, puedes acceder a ella utilizando self::$nombre.

+ **::** es el operador de resolución de ámbito en PHP. Se utiliza para acceder a elementos estáticos de una clase, como propiedades y métodos estáticos, sin necesidad de crear una instancia de la clase . Por ejemplo, si tienes una clase llamada MiClase con un método estático llamado miMetodo, puedes acceder a él utilizando MiClase::miMetodo().

En resumen, self se utiliza para hacer referencia a la propia clase dentro de la clase, mientras que :: se utiliza para acceder a elementos estáticos de una clase desde fuera de la clase.