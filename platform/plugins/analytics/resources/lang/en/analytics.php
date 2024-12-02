<?php

return [
    'sessions' => 'Sesiones',
'visitors' => 'Visitantes',
'pageviews' => 'Páginas vistas',
'bounce_rate' => 'Tasa de rebote',
'page_session' => 'Páginas/Sesión',
'avg_duration' => 'Duración promedio',
'percent_new_session' => 'Porcentaje de nuevas sesiones',
'new_users' => 'Nuevos visitantes',
'visits' => 'visitas',
'views' => 'vistas',
'property_id_not_specified' => 'Debe proporcionar un ID de vista válido. El documento aquí: <a href="https://support.google.com/analytics/answer/9539598#find-G-ID" target="_blank">https://support.google.com/analytics/answer/9539598#find-G-ID</a>',
'credential_is_not_valid' => 'Las credenciales de Analytics no son válidas. El documento aquí: <a href="https://docs.botble.com/cms/master/plugin-analytics" target="_blank">https://support.google.com/analytics/answer/9539598#find-G-ID</a>',
'start_date_can_not_before_end_date' => 'La fecha de inicio :start_date no puede ser posterior a la fecha de finalización :end_date',
'wrong_configuration' => 'Para ver analytics, necesitará obtener un ID de cliente de Google Analytics y agregarlo a su configuración. <br /> También necesita datos de credenciales JSON. <br /> El documento aquí: <a href="https://support.google.com/analytics/answer/9539598#find-G-ID" target="_blank">https://support.google.com/analytics/answer/9539598#find-G-ID</a>',

'settings' => [
    'title' => 'Google Analytics',
    'description' => 'Configurar credenciales para Google Analytics',
    'tracking_code' => 'ID de seguimiento',
    'tracking_code_placeholder' => 'Ejemplo: GA-12586526-8',
    'view_id' => 'ID de vista para UA',
    'view_id_description' => 'ID de vista de Google Analytics (UA)',
    'analytics_property_id' => 'ID de propiedad para GA4',
    'analytics_property_id_description' => 'ID de propiedad de Google Analytics (GA4)',
    'json_credential' => 'Credenciales de cuenta de servicio',
    'json_credential_description' => 'Credenciales de cuenta de servicio',
    'type' => 'Tipo',
    'ua_description' => 'Universal Analytics',
    'ga4_description' => 'Google Analytics 4 (GA4)',
],

'widget_analytics_page' => 'Páginas más visitadas',
'widget_analytics_browser' => 'Principales navegadores',
'widget_analytics_referrer' => 'Principales referentes',
'widget_analytics_general' => 'Analítica del sitio',
];
