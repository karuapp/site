<?php

return [
    'settings' => [
    'title' => 'Configuración de inicio de sesión social',
    'description' => 'Configurar opciones de inicio de sesión social',
    'facebook' => [
        'title' => 'Configuración de inicio de sesión de Facebook',
        'description' => 'Habilitar/deshabilitar y configurar credenciales de la aplicación para iniciar sesión con Facebook',
        'app_id' => 'ID de la aplicación',
        'app_secret' => 'Secreto de la aplicación',
        'helper' => 'Por favor, ve a https://developers.facebook.com para crear una nueva aplicación y actualizar el ID de la aplicación, el Secreto de la aplicación. La URL de devolución es :callback',
    ],
    'google' => [
        'title' => 'Configuración de inicio de sesión de Google',
        'description' => 'Habilitar/deshabilitar y configurar credenciales de la aplicación para iniciar sesión con Google',
        'app_id' => 'ID de la aplicación',
        'app_secret' => 'Secreto de la aplicación',
        'helper' => 'Por favor, ve a https://console.developers.google.com/apis/dashboard para crear una nueva aplicación y actualizar el ID de la aplicación, el Secreto de la aplicación. La URL de devolución es :callback',
    ],
    'github' => [
        'title' => 'Configuración de inicio de sesión de Github',
        'description' => 'Habilitar/deshabilitar y configurar credenciales de la aplicación para iniciar sesión con Github',
        'app_id' => 'ID de la aplicación',
        'app_secret' => 'Secreto de la aplicación',
        'helper' => 'Por favor, ve a https://github.com/settings/developers para crear una nueva aplicación y actualizar el ID de la aplicación, el Secreto de la aplicación. La URL de devolución es :callback',
    ],
    'linkedin' => [
        'title' => 'Configuración de inicio de sesión de Linkedin',
        'description' => 'Habilitar/deshabilitar y configurar credenciales de la aplicación para iniciar sesión con Linkedin',
        'app_id' => 'ID de la aplicación',
        'app_secret' => 'Secreto de la aplicación',
        'helper' => 'Por favor, ve a https://www.linkedin.com/developers/apps/new para crear una nueva aplicación y actualizar el ID de la aplicación, el Secreto de la aplicación. La URL de devolución es :callback',
    ],
    'enable' => '¿Habilitar?',
],
'menu' => 'Inicio de sesión social',
];
