# Sesiones

+ Concepto
Una sesión en PHP es una manera de almacenar información en el servidor para un usuario específico durante la duración de su visita. Permite mantener datos entre diferentes páginas sin tener que enviar la información de ida y vuelta entre el cliente y el servidor en cada solicitud.

Diferencias con Cookies:

Las sesiones almacenan datos en el servidor, por lo que son más seguras para datos sensibles.
Las sesiones no tienen el límite de tamaño que tienen las cookies.
Las sesiones generalmente se destruyen después de un período de inactividad o cuando el usuario cierra el navegador.

Usos: Las sesiones son útiles para:

+ Mantener el estado de inicio de sesión.
+ Almacenar información temporal durante la navegación del usuario.
+ Mantener carritos de compras en tiendas en línea.

Metodología de Aplicación: En PHP, las sesiones se gestionan con las funciones session_start(), $_SESSION y session_destroy(). Aquí hay un ejemplo:

``` php
// Iniciar una sesión
session_start();

// Establecer valores en la sesión
$_SESSION["usuario"] = "pepito";

// Recuperar valores de la sesión
$usuario = $_SESSION["usuario"];

// Destruir la sesión
session_destroy();
```