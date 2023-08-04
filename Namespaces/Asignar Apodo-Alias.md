# Asignar un Apodo/Alias a un namespace

Para asignarle un alias a un namespace en PHP, puedes utilizar la palabra clave use. Esto te permite crear un nombre corto (alias) para un espacio de nombres largo y utilizarlo de manera más conveniente en tu código.
Para asignarle un alias a este espacio de nombres largo, puedes usar la palabra clave **use**, seguida del namespace completo y el alias deseado:

``` php
use MiProyecto\MiEspacioDeNombres\Largo as MiAlias;
```
En este caso, hemos creado un alias MiAlias para el espacio de nombres largo MiProyecto\MiEspacioDeNombres\Largo.

Ahora puedes utilizar el alias MiAlias en lugar del namespace completo en tu código:
``` php
$objeto = new MiAlias\MiClase();
```
De esta manera, has creado un atajo para acceder a las clases y elementos dentro del espacio de nombres largo utilizando el alias que definiste.

+ El uso de alias es especialmente útil cuando estás trabajando con espacios de nombres largos o cuando deseas evitar escribir el camino completo repetidamente. También puede ser útil cuando estás utilizando clases de bibliotecas externas y deseas asignarles nombres más cortos y legibles en tu propio código.