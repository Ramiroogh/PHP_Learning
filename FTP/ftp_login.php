<?php
// FTP LOGIN

// Creamos variables con los datos del servidor FTP y nuestros datos de acceso
// Estos datos se pueden configurar en el Manager de nuestro servidor
$ftpHost = 'ftp.midominioweb.com';
$ftpUsername = 'usuarioftp';
$ftpPassword = '*****';

// Establecemos la conexion don el servidor
$connId = ftp_connect($ftpHost) or die("No se pudo conectar a $ftpHost");

// Si la conexion se establece, tratamos de hacer login con nuestros datos
if(@ftp_login($connId, $ftpUsername, $ftpPassword)){
    echo "Conectado como $ftpUsername@$ftpHost";
} else {
    echo "No se a podido establecer la conexion con @ftpUsername";
}

// Una vez terminado, cerrramos la conexión
ftp_close($connId);

?>