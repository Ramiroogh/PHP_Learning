<?php
// SUBIR un fichero por medio de FTP

// Datos de Sesion
$ftpHost = 'ftp.midominio.com';
$ftpUsername = 'usuarioftp';
$ftpPassword = '*****';

// Establecer la Conexion por medio de FTP
// La variable de conexion, tambien se la conoce como $ftp_Stream
$connId = ftp_connect($ftpHost) or die('No se pudo establecer la conexion');

// Acceso al Ftp con nuestros datos de Usuario
$ftpLogin = ftp_login($connId, $ftpUsername, $ftpPassword);

// Definir las URL 'Locales y Remotas'
$localFilePath = 'index.php';
$remoteFilePath = 'public_html/index.php';

// Logica para Subir un archivo con FTP put()
if(ftp_put($connId, $remoteFilePath, $localFilePath, FTP_ASCCI)){
    echo "Archivo transferido con éxito - $localFilePath";
} else {
    echo "Error, no se a enviado el Archivo $localFilePath";
}

// Cerramos la Conexión
ftp_close($connId)