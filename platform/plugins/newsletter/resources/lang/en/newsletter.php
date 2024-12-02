<?php

return [
    'name' => 'Boletines informativos',
'settings' => [
    'email' => [
        'templates' => [
            'title' => 'Boletín informativo',
            'description' => 'Configurar plantillas de correo electrónico para boletines informativos',
            'to_admin' => [
                'title' => 'Correo electrónico enviado al administrador',
                'description' => 'Plantilla para enviar correo electrónico al administrador',
            ],
            'to_user' => [
                'title' => 'Correo electrónico enviado al usuario',
                'description' => 'Plantilla para enviar correo electrónico al suscriptor',
            ],
        ],
    ],
    'title' => 'Boletín informativo',
    'description' => 'Configuración para boletines informativos (envío automático de correos electrónicos de boletines informativos a SendGrid, Mailchimp, etc. cuando alguien se registra en el boletín en el sitio web).',
    'mailchimp_api_key' => 'Clave de API de Mailchimp',
    'mailchimp_list_id' => 'ID de lista de Mailchimp',
    'mailchimp_list' => 'Lista de Mailchimp',
    'sendgrid_api_key' => 'Clave de API de Sendgrid',
    'sendgrid_list_id' => 'ID de lista de Sendgrid',
    'sendgrid_list' => 'Lista de Sendgrid',
    'enable_newsletter_contacts_list_api' => '¿Habilitar la API de lista de contactos de boletines informativos?',
],
'statuses' => [
    'subscribed' => 'Suscrito',
    'unsubscribed' => 'No suscrito',
    ],
];
