<?php

return [
    'cache_management' => 'Gestión de caché',
    'cache_commands' => 'Comandos de limpieza de caché',
    'commands' => [
        'clear_cms_cache' => [
            'title' => 'Limpiar toda la caché de CMS',
            'description' => 'Limpiar el caché de CMS: caché de la base de datos, bloques estáticos... Ejecute este comando cuando no vea los cambios después de actualizar datos.',
            'success_msg' => 'Caché limpiada',
        ],
        'refresh_compiled_views' => [
            'title' => 'Actualizar vistas compiladas',
            'description' => 'Limpiar vistas compiladas para que estén actualizadas.',
            'success_msg' => 'Vista de caché actualizada',
        ],
        'clear_config_cache' => [
            'title' => 'Limpiar caché de configuración',
            'description' => 'Puede que necesite actualizar la caché de configuración cuando realice cambios en el entorno de producción.',
            'success_msg' => 'Caché de configuración limpiada',
        ],
        'clear_route_cache' => [
            'title' => 'Limpiar caché de rutas',
            'description' => 'Limpiar la caché de enrutamiento.',
            'success_msg' => 'La caché de rutas ha sido limpiada',
        ],
        'clear_log' => [
            'title' => 'Limpiar registro',
            'description' => 'Limpiar archivos de registro del sistema',
            'success_msg' => 'El registro del sistema ha sido limpiado',
        ],
    ],
];
