<?php
// ELIMINAR un archivo del Servidor

// Datos de conexion
$ftpHost = 'ftp.midominioweb.com';
$ftpUsername = 'usuarioftp';
$ftpPassword = '*****';

// Establecemos la conexíon constante - Stream
$ftp_Stream = ftp_connect($ftpHost) or die('No se a podido establecer la conexión');

// Nos Logeamos al servidor FTP
$ftpLogin = ftp_login($ftp_Stream, $ftpUsername, $ftpPassword);

// Rutas Locales y Remotas del directorio de archivos
$localFilePath = 'index.php';
$remoteFilePath = 'pubic_html/index.php';

// Logica para Eliminar un Archivo del Servidor
if(ftp_delete($ftp_Stream, $localFilePath, $remoteFilePath, FTP_BINARY)){
    echo "Se a eliminado el archivo $localFilePath de forma exitosa";
} else {
    echo "Error al eliminar el archivo $localFilePath":
}

// Cerramos la Conexión
ftp_close($ftp_Stream)