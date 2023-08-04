# FTP (File Transfer Protocol)
Es un protocolo de red utilizado para __transferir archivos entre un cliente y un servidor a través de una red__, como Internet. Es un método estándar para cargar y descargar archivos en un servidor web y ha sido ampliamente utilizado durante muchos años para administrar sitios web y transferir archivos entre sistemas.

FTP es especialmente útil para gestionar archivos en un servidor web, lo que incluye subir y descargar archivos, editar y eliminar archivos y directorios, y cambiar los permisos de archivos, entre otras operaciones.

En el contexto de WordPress, FTP puede ser útil para diversas situaciones:

#### Instalación y actualización de plugins y temas:
 Cuando deseas instalar o actualizar un plugin o tema desde el propio panel de administración de WordPress, el sistema puede requerir permisos adicionales para acceder y modificar los archivos del servidor. En algunos casos, si WordPress no puede acceder directamente al sistema de archivos, puede solicitar credenciales de FTP para realizar estas operaciones.

#### Respaldo y restauración de archivos:
Si necesitas realizar copias de seguridad de los archivos del sitio WordPress o restaurar archivos de copias de seguridad, FTP te permite acceder a los archivos en el servidor para realizar estas tareas.

#### Transferencia de archivos personalizados:
Como desarrollador, puedes utilizar FTP para cargar y transferir archivos personalizados, como imágenes, scripts o archivos de configuración, que pueden ser necesarios para tu sitio.

Es importante mencionar que en algunos entornos de alojamiento y configuraciones de servidores, el acceso directo a los archivos del servidor mediante FTP puede no ser necesario o puede estar desactivado por razones de seguridad. __Algunos proveedores de alojamiento web ofrecen interfaces alternativas o herramientas para realizar las tareas mencionadas anteriormente directamente desde el panel de administración de WordPress.__

Si deseas implementar FTP con PHP para WordPress, puedes hacer uso de las funciones de PHP que ofrecen soporte para FTP, como las siguientes:

ftp_connect(): Establece una conexión FTP con un servidor.
ftp_login(): Inicia sesión en el servidor FTP.
ftp_put(): Carga un archivo en el servidor.
ftp_get(): Descarga un archivo del servidor.
ftp_delete(): Elimina un archivo en el servidor.
ftp_nlist(): Obtiene una lista de archivos en un directorio en el servidor.
ftp_close(): Cierra la conexión FTP.

---
Es importante tener en cuenta que el uso de FTP en PHP puede requerir ciertos permisos y configuraciones en el servidor para que funcione correctamente. Además, debes tener cuidado con la seguridad al manejar credenciales de FTP, ya que una mala implementación podría comprometer la integridad y la seguridad de tu sitio web. Siempre es recomendable seguir las mejores prácticas de seguridad y utilizar métodos seguros de manejo de credenciales, como almacenarlas de forma segura y no compartir información confidencial en código fuente.