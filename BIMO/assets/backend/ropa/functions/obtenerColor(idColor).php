<?php
// Función para obtener el nombre del color según el ID del color
function obtenerColor($idColor)
{
    // Tu lógica para obtener el nombre del color según el ID del color
    // Aquí deberías realizar una consulta a la base de datos o utilizar un arreglo predefinido
    // En este ejemplo, asumiremos que tienes un arreglo predefinido llamado $colores donde los índices son los IDs de los colores y los valores son los nombres de los colores
    $colores = array(
        1 => 'negro',
        2 => 'azul',
        3 => 'gris',
        4 => 'beige'
        // Agrega más colores según sea necesario
    );

    // Verificar si el ID del color existe en el arreglo
    if (array_key_exists($idColor, $colores)) {
        return $colores[$idColor];
    } else {
        return 'color-desconocido'; // Devolver un valor predeterminado en caso de que el color no esté definido
    }
}
?>