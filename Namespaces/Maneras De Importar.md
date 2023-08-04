# Maneras de Importar namespaces
Aca hay algunas fomras basicas y las mas comunes a la hora de importar namespaces en nuestro codigo:

+ Importar un namespace completo:
``` php
use MiProyecto\MiEspacioDeNombres\Largo;

$objeto = new Largo\MiClase();
// Se utiliza directamente el espacio de nombres "Largo"
```
+ Importar un namespace y asignar un alias:
``` php
use MiProyecto\MiEspacioDeNombres\Largo as MiAlias;

$objeto = new MiAlias\MiClase();
// Se utiliza el alias "MiAlias" en lugar del espacio de nombres completo
```
+ Importar una clase específica de un namespace:
``` php
use MiProyecto\MiEspacioDeNombres\Largo\MiClase;

$objeto = new MiClase();
// Se utiliza directamente la clase importada "MiClase"
```
+ Importar varias clases de un namespace:
``` php
use MiProyecto\MiEspacioDeNombres\Largo\{ClaseA, ClaseB, ClaseC};

$objetoA = new ClaseA();
$objetoB = new ClaseB();
$objetoC = new ClaseC();
// Se utilizan directamente las clases importadas
```
+ Importar y utilizar clases estáticas:
``` php
use MiProyecto\MiEspacioDeNombres\Largo\MiClaseEstatica;

$valor = MiClaseEstatica::metodoEstatico();
// Se utiliza un método estático de la clase importada
```
+ Importar un namespace global:
``` php
use global MiProyecto\MiEspacioDeNombres\Largo;

$objeto = new Largo\MiClase();
// Se utiliza directamente el espacio de nombres "Largo" sin barra invertida inicial
```
+ Utilizar Fully Qualified Name (FQN):
``` php
$objeto = new \MiProyecto\MiEspacioDeNombres\Largo\MiClase();
// Se utiliza el FQN para acceder a la clase directamente
```
+ Importar una función de un namespace:
``` php
use function MiProyecto\MiEspacioDeNombres\Largo\miFuncion;

$resultado = miFuncion();
// Se utiliza la función importada "miFuncion"
```
+ Importar una función y asignar un alias:
``` php
use function MiProyecto\MiEspacioDeNombres\Largo\miFuncion as funcionAlias;

$resultado = funcionAlias();
// Se utiliza el alias "funcionAlias" en lugar de la función completa
```
+ Importar una constante de un namespace:
``` php
use const MiProyecto\MiEspacioDeNombres\Largo\MI_CONSTANTE;

$valor = MI_CONSTANTE;
// Se utiliza la constante importada "MI_CONSTANTE"
```
+ Importar una constante y asignar un alias:
``` php
use const MiProyecto\MiEspacioDeNombres\Largo\MI_CONSTANTE as CONSTANTE_ALIAS;

$valor = CONSTANTE_ALIAS;
// Se utiliza el alias "CONSTANTE_ALIAS" en lugar de la constante completa
```