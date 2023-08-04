# Fully Qualified Name (FQN)

Un Fully Qualified Name (FQN) se refiere al nombre completo y único de una clase, función, constante u otro elemento dentro de un espacio de nombres.
+ El FQN incluye tanto **el nombre del espacio de nombres como el nombre del elemento en sí**. Esto proporciona una forma precisa de referirse a un elemento específico incluso cuando hay nombres similares en diferentes espacios de nombres.

El formato de un FQN es el siguiente:

``` php
\<Namespace>\NombreElemento
```
Aquí, <Namespace> es el nombre del espacio de nombres y NombreElemento es el nombre del elemento en ese espacio de nombres. El \ inicial indica que el camino comienza desde la raíz de los espacios de nombres.

Por ejemplo, considera el siguiente escenario:
``` php
namespace MiProyecto;

class MiClase {
    // ...
}
```
El FQN para la clase MiClase en el espacio de nombres MiProyecto sería:

``` php
\MiProyecto\MiClase
```
Usar un FQN es útil cuando estás trabajando fuera del espacio de nombres donde se encuentra el elemento que deseas utilizar.
+ Esto es especialmente cierto si deseas evitar tener que importar o utilizar la sentencia use para cada referencia.

Por ejemplo, si estás en un espacio de nombres diferente y deseas utilizar MiClase, puedes hacerlo usando el FQN:
``` php
namespace OtroProyecto;

$objeto = new \MiProyecto\MiClase();
```
Al usar el FQN, no es necesario importar la clase con use, lo que puede ser conveniente en situaciones donde solo necesitas utilizar la clase ocasionalmente.

En resumen, el Fully Qualified Name (FQN) te permite referirte de manera única a elementos específicos dentro de un espacio de nombres sin importar en qué parte del código te encuentres. Esto es especialmente útil cuando trabajas con elementos de espacios de nombres diferentes o **cuando deseas evitar importaciones innecesarias.**