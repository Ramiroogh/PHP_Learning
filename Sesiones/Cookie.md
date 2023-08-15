# Cookies

+ Concepto
Una cookie es un pequeño fragmento de información que el servidor web envía al navegador del usuario y que se almacena en el lado del cliente. Las cookies se utilizan para mantener datos persistentes entre distintas solicitudes HTTP. Pueden contener información como preferencias del usuario, datos de inicio de sesión, historial de navegación, etc.

Diferencias con Sesiones:

Las cookies se almacenan en el lado del cliente (en el navegador), mientras que las sesiones se almacenan en el lado del servidor.
Las cookies son útiles para mantener información entre diferentes visitas del usuario, mientras que las sesiones se utilizan para mantener información durante la misma visita del usuario.

Las cookies tienen un límite en cuanto a la cantidad de datos que pueden contener y están sujetas a la configuración del navegador del usuario. Las sesiones generalmente pueden manejar más datos.

Usos: Las cookies son ideales para:
+ Recordar preferencias de usuario.
+ Mantener el estado de inicio de sesión.
+ Rastrear la actividad del usuario para análisis.

Metodología de Aplicación: En PHP, para establecer una cookie, puedes usar la función setcookie(). Aquí hay un ejemplo:

``` php
// Establecer una cookie que expira en 7 días
setcookie("usuario", "juanito", time() + (7 * 24 * 60 * 60));

// Recuperar el valor de la cookie
$usuario = $_COOKIE["usuario"];
```