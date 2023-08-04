# Handler Files - PHP

Lista de funciones en PHP relacionadas con la manipulación de archivos, junto con una breve descripción de su significado y uso:

fopen: Abre un archivo o URL para lectura o escritura.
Uso: $archivo = fopen('archivo.txt', 'r');

fclose: Cierra un archivo abierto.
Uso: fclose($archivo);

fread: Lee el contenido de un archivo abierto.
Uso: $contenido = fread($archivo, filesize('archivo.txt'));

fwrite: Escribe datos en un archivo abierto.
Uso: fwrite($archivo, 'Hola, mundo!');

fgets: Lee una línea de un archivo abierto.
Uso: $linea = fgets($archivo);

file: Lee un archivo y lo almacena en un array (una línea por elemento).
Uso: $lineas = file('archivo.txt');

file_get_contents: Lee el contenido completo de un archivo en una cadena.
Uso: $contenido = file_get_contents('archivo.txt');

file_put_contents: Escribe una cadena en un archivo.
Uso: file_put_contents('archivo.txt', 'Contenido nuevo');

fgetcsv: Lee una línea de un archivo CSV y la interpreta como una matriz.
Uso: $datos = fgetcsv($archivo);

fputcsv: Escribe una matriz en un archivo CSV.
Uso: fputcsv($archivo, $datos);

feof: Comprueba si se ha alcanzado el final de un archivo.
Uso: if (feof($archivo)) { /* fin del archivo */ }

rewind: Reinicia el puntero de lectura/escritura de un archivo al inicio.
Uso: rewind($archivo);

rename: Cambia el nombre de un archivo o directorio.
Uso: rename('antiguo.txt', 'nuevo.txt');

unlink: Elimina un archivo.
Uso: unlink('archivo.txt');

mkdir: Crea un nuevo directorio.
Uso: mkdir('nuevo_directorio');

rmdir: Elimina un directorio.
Uso: rmdir('directorio_vacio');

is_file: Verifica si un archivo existe.
Uso: if (is_file('archivo.txt')) { /* existe */ }

is_dir: Verifica si es un directorio.
Uso: if (is_dir('directorio')) { /* es un directorio */ }

file_exists: Verifica si un archivo o directorio existe.
Uso: if (file_exists('archivo.txt')) { /* existe */ }

copy: Copia un archivo.
Uso: copy('origen.txt', 'destino.txt');