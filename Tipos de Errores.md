# Errores PHP
PHP tiene varios tipos de errores que pueden ocurrir durante la ejecución de un programa. Estos errores se dividen en diferentes categorías según su gravedad y su impacto en el flujo de ejecución del programa. Aquí te explico los tipos de errores más comunes en PHP, junto con una descripción detallada de cada uno:

+ Parse Error (Error de análisis):

Descripción: Este error ocurre cuando el intérprete de PHP no puede analizar correctamente el código fuente debido a errores de sintaxis. Por lo general, se generan al escribir instrucciones incorrectas o mal estructuradas en el código.
Ejemplo:
``` php
echo "Hola mundo"
```
Solución: Verifica la sintaxis de tu código, asegurándote de que todos los paréntesis, comas, puntos y comas, llaves, etc., estén en su lugar correcto.

+ Fatal Error (Error fatal):

Descripción: Los errores fatales ocurren cuando el programa encuentra una situación que impide que el script continúe ejecutándose. Puede ser causado por problemas como la llamada a una función no definida, una división por cero o un acceso a una propiedad no existente.
Ejemplo:
``` php
$resultado = 10 / 0;
```
Solución: Identifica la causa del error y corrige el problema subyacente. Asegúrate de manejar adecuadamente situaciones que puedan generar errores fatales.

+ Warning (Advertencia):

Descripción: Las advertencias son errores menos graves que los errores fatales. A menudo, se generan cuando ocurren situaciones inesperadas, como la división por cero o el uso de una variable no definida.
Ejemplo:
``` php
$numero = $x + $y;
```
Solución: Asegúrate de que todas las variables estén inicializadas antes de usarlas y verifica si hay operaciones que puedan causar advertencias.

+ Notice (Aviso):

Descripción: Los avisos son notificaciones sobre problemas potenciales en el código, como el acceso a una variable que no está definida. Son menos críticos que las advertencias y los errores fatales.
Ejemplo:
``` php
echo $variableNoDefinida;
```
Solución: Define y asigna valores a todas las variables antes de usarlas para evitar los avisos.

+ Deprecated (Obsoleto):

Descripción: Estos mensajes indican que una función, método o característica específica se ha vuelto obsoleta y se eliminará en futuras versiones de PHP. Se recomienda utilizar una alternativa en su lugar.
Ejemplo:
``` php
mysql_connect("localhost", "usuario", "contraseña");
```
Solución: Utiliza una alternativa más actualizada, como mysqli o PDO, en lugar de funciones obsoletas.

+ Exception (Excepción):

Descripción: Las excepciones son errores que se generan en situaciones excepcionales o inusuales, como cuando se intenta acceder a un archivo que no existe. Permiten un manejo más controlado de errores en comparación con los errores fatales.
Ejemplo:
``` php
try {
    $archivo = fopen("archivo_no_existente.txt", "r");
} catch (Exception $e) {
    echo "Ocurrió una excepción: " . $e->getMessage();
}
```
Solución: Utiliza bloques try y catch para capturar y manejar excepciones, permitiendo que el programa continúe ejecutándose de manera controlada.
Otro dato importante, getMessage() lo que hace es, enviar un mensaje de que fue lo que ocurrio en el error, es similar al Console.log de javascript, en este caso, con la funcion getMessage() se muestra el objeto del error.
También podemos agregar getCode().

Es importante comprender estos tipos de errores para poder diagnosticar y solucionar problemas en tu código PHP de manera efectiva. Además, el uso de técnicas de manejo de errores, como bloques try y catch para excepciones, te permitirá crear aplicaciones más robustas y fiables.