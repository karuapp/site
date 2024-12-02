<?php

return [
    'settings' => [
    'title' => 'Optimizar la velocidad de la página',
    'description' => 'Minimizar la salida HTML, incorporar CSS, eliminar comentarios...',
    'enable' => '¿Habilitar optimización de velocidad de la página?',
],
'collapse_white_space' => 'Colapsar espacios en blanco',
'collapse_white_space_description' => 'Este filtro reduce los bytes transmitidos en un archivo HTML eliminando espacios en blanco innecesarios.',
'elide_attributes' => 'Ocultar atributos',
'elide_attributes_description' => 'Este filtro reduce el tamaño de transferencia de los archivos HTML eliminando atributos de las etiquetas cuando el valor especificado es igual al valor predeterminado para ese atributo. Esto puede ahorrar una cantidad moderada de bytes y hacer que el documento sea más compresible al canonizar las etiquetas afectadas.',
'inline_css' => 'CSS en línea',
'inline_css_description' => 'Este filtro transforma el atributo "style" en línea de las etiquetas en clases moviendo el CSS a la cabecera.',
'insert_dns_prefetch' => 'Insertar DNS prefetch',
'insert_dns_prefetch_description' => 'Este filtro inyecta etiquetas en la cabecera para permitir que el navegador realice un prefetching DNS.',
'remove_comments' => 'Eliminar comentarios',
'remove_comments_description' => 'Este filtro elimina comentarios en HTML, JS y CSS. Reduce el tamaño de transferencia de los archivos HTML al eliminar los comentarios. Dependiendo del archivo HTML, este filtro puede reducir significativamente la cantidad de bytes transmitidos en la red.',
'remove_quotes' => 'Eliminar comillas',
'remove_quotes_description' => 'Este filtro elimina comillas innecesarias de los atributos HTML. Aunque son necesarias según las diversas especificaciones de HTML, los navegadores permiten su omisión cuando el valor de un atributo está compuesto por un cierto conjunto de caracteres (alfanuméricos y algunos caracteres de puntuación).',
'defer_javascript' => 'Diferir JavaScript',
'defer_javascript_description' => 'Diferir la ejecución de JavaScript en el HTML. Si es necesario cancelar el diferimiento en algún script, use data-pagespeed-no-defer como atributo del script para cancelar el diferimiento.',
];
