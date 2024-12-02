<?php

return [
    'title' => 'Configuraciones',
'email_setting_title' => 'Configuración de correo electrónico',
'general' => [
'theme' => 'Tema',
'description' => 'Configuración de información del sitio',
'title' => 'General',
'general_block' => 'Información general',
'rich_editor' => 'Editor enriquecido',
'site_title' => 'Título del sitio',
'admin_email' => 'Correo electrónico del administrador',
'seo_block' => 'Configuración de SEO',
'seo_title' => 'Título de SEO',
'seo_description' => 'Descripción de SEO',
'webmaster_tools_block' => 'Herramientas para webmasters de Google',
'placeholder' => [
'site_title' => 'Título del sitio (máximo 120 caracteres)',
'admin_email' => 'Correo electrónico del administrador',
'seo_title' => 'Título de SEO (máximo 120 caracteres)',
'seo_description' => 'Descripción de SEO (máximo 120 caracteres)',
'google_analytics' => 'Google Analytics',
],
'cache_admin_menu' => '¿Caché del menú de administración?',
'enable_send_error_reporting_via_email' => '¿Habilitar envío de informes de error por correo electrónico?',
'time_zone' => 'Zona horaria',
'default_admin_theme' => 'Tema de administración predeterminado',
'enable_change_admin_theme' => '¿Habilitar cambio de tema de administración?',
'enable' => 'Habilitar',
'disable' => 'Deshabilitar',
'enable_cache' => '¿Habilitar caché?',
'disable_cache_in_the_admin_panel' => '¿Desactivar caché en el panel de administración?',
'cache_time' => 'Tiempo de caché (minutos)',
'enable_cache_site_map' => '¿Habilitar caché del mapa del sitio?',
'cache_time_site_map' => 'Tiempo de caché del mapa del sitio (minutos)',
'admin_logo' => 'Logo de administrador',
'admin_favicon' => 'Favicon de administrador',
'admin_title' => 'Título de administrador',
'admin_title_placeholder' => 'Título que se muestra en la pestaña del navegador',
'cache_block' => 'Caché',
'admin_appearance_title' => 'Apariencia de administración',
'admin_appearance_description' => 'Configuración de la apariencia de administración como editor, idioma...',
'seo_block_description' => 'Configuración del título del sitio, descripción meta del sitio, palabras clave del sitio para optimizar el SEO',
'webmaster_tools_description' => 'Google Webmaster Tools (GWT) es software gratuito que te ayuda a gestionar el aspecto técnico de tu sitio web',
'cache_description' => 'Configurar la caché del sistema para optimizar la velocidad',
'yes' => 'Sí',
'no' => 'No',
'show_on_front' => 'Tu página de inicio muestra',
'select' => '— Seleccionar —',
'show_site_name' => '¿Mostrar el nombre del sitio después del título de la página, separado con "-"?',
'locale' => 'Idioma del sitio',
'locale_direction' => 'Dirección del idioma del sitio frontal',
'admin_locale_direction' => 'Dirección del idioma de administración',
'admin_login_screen_backgrounds' => 'Fondos de pantalla de la pantalla de inicio de sesión (~1366x768)',
'minutes' => 'minutos',
],
'email' => [
'subject' => 'Asunto',
'content' => 'Contenido',
'title' => 'Configuración para plantillas de correo electrónico',
'description' => 'Plantilla de correo electrónico que utiliza HTML y variables del sistema.',
'reset_to_default' => 'Restablecer a los valores predeterminados',
'back' => 'Volver a la configuración',
'reset_success' => 'Restablecimiento a los valores predeterminados exitoso',
'confirm_reset' => '¿Confirmar restablecimiento de la plantilla de correo electrónico?',
'confirm_message' => '¿Realmente deseas restablecer esta plantilla de correo electrónico a los valores predeterminados?',
'continue' => 'Continuar',
'sender_name' => 'Nombre del remitente',
'sender_name_placeholder' => 'Nombre',
'sender_email' => 'Correo electrónico del remitente',
'mailer' => 'Remitente',
'port' => 'Puerto',
'port_placeholder' => 'Ejemplo: 587',
'host' => 'Anfitrión',
'host_placeholder' => 'Ejemplo: smtp.gmail.com',
'username' => 'Nombre de usuario',
'username_placeholder' => 'Nombre de usuario para iniciar sesión en el servidor de correo',
'password' => 'Contraseña',
'password_placeholder' => 'Contraseña para iniciar sesión en el servidor de correo',
'encryption' => 'Cifrado',
'mail_gun_domain' => 'Dominio',
'mail_gun_domain_placeholder' => 'Dominio',
'mail_gun_secret' => 'Secreto',
'mail_gun_secret_placeholder' => 'Secreto',
'mail_gun_endpoint' => 'Punto final',
'mail_gun_endpoint_placeholder' => 'Punto final',
'log_channel' => 'Canal de registro',
'sendmail_path' => 'Ruta de sendmail',
'encryption_placeholder' => 'Cifrado: ssl o tls',

'ses_key' => 'Clave',
'ses_key_placeholder' => 'Clave',
'ses_secret' => 'Secreto',
'ses_secret_placeholder' => 'Secreto',
'ses_region' => 'Región',
'ses_region_placeholder' => 'Región',

'postmark_token' => 'Token',
'postmark_token_placeholder' => 'Token',

        'template_title' => 'Plantillas de correo electrónico',
'template_description' => 'Plantillas base para todos los correos electrónicos',
'template_header' => 'Encabezado de la plantilla de correo electrónico',
'template_header_description' => 'Plantilla para el encabezado de los correos electrónicos',
'template_footer' => 'Pie de la plantilla de correo electrónico',
'template_footer_description' => 'Plantilla para el pie de los correos electrónicos',
'default' => 'Predeterminado',
'using_queue_to_send_mail' => 'Usar cola de trabajos para enviar correos electrónicos (debe configurar la cola primero https://laravel.com/docs/queues#supervisor-configuration)',
],
'media' => [
'title' => 'Medios',
'driver' => 'Controlador',
'description' => 'Configuraciones para medios',
'aws_access_key_id' => 'ID de clave de acceso de AWS',
'aws_secret_key' => 'Clave secreta de AWS',
'aws_default_region' => 'Región predeterminada de AWS',
'aws_bucket' => 'Bucket de AWS',
'aws_url' => 'URL de AWS',
'aws_endpoint' => 'Punto de conexión de AWS (Opcional)',
'do_spaces_access_key_id' => 'ID de clave de acceso de DO Spaces',
'do_spaces_secret_key' => 'Clave secreta de DO Spaces',
'do_spaces_default_region' => 'Región predeterminada de DO Spaces',
'do_spaces_bucket' => 'Bucket de DO Spaces',
'do_spaces_endpoint' => 'Punto de conexión de DO Spaces',
'do_spaces_cdn_enabled' => '¿Se habilitó CDN de DO Spaces?',
'media_do_spaces_cdn_custom_domain' => 'Dominio personalizado de CDN de DO Spaces',
'media_do_spaces_cdn_custom_domain_placeholder' => 'https://tu-domino-personalizado.com',
'wasabi_access_key_id' => 'ID de clave de acceso de Wasabi',
'wasabi_secret_key' => 'Clave secreta de Wasabi',
'wasabi_default_region' => 'Región predeterminada de Wasabi',
'wasabi_bucket' => 'Bucket de Wasabi',
'wasabi_root' => 'Raíz de Wasabi',
'default_placeholder_image' => 'Imagen de marcador de posición predeterminada',
'enable_chunk' => '¿Habilitar carga de archivos en fragmentos?',
'chunk_size' => 'Tamaño del fragmento (bytes)',
'chunk_size_placeholder' => 'Predeterminado: 1048576 ~ 1 MB',
'max_file_size' => 'Tamaño máximo del archivo en fragmentos (MB)',
'max_file_size_placeholder' => 'Predeterminado: 1048576 ~ 1 GB',
'enable_watermark' => '¿Habilitar marca de agua?',
'watermark_source' => 'Imagen de marca de agua',
'watermark_size' => 'Tamaño de la marca de agua (%)',
'watermark_size_placeholder' => 'Predeterminado: 10 (%)',
'watermark_opacity' => 'Opacidad de la marca de agua (%)',
'watermark_opacity_placeholder' => 'Predeterminado: 70 (%)',
'watermark_position' => 'Posición de la marca de agua',
'watermark_position_x' => 'Posición X de la marca de agua',
'watermark_position_y' => 'Posición Y de la marca de agua',
'watermark_position_top_left' => 'Arriba a la izquierda',
'watermark_position_top_right' => 'Arriba a la derecha',
'watermark_position_bottom_left' => 'Abajo a la izquierda',
'watermark_position_bottom_right' => 'Abajo a la derecha',
'watermark_position_center' => 'Centro',
'turn_off_automatic_url_translation_into_latin' => '¿Desactivar la traducción automática de URL a latín?',
'bunnycdn_hostname' => 'Nombre de host',
'bunnycdn_zone' => 'Nombre de la zona (El nombre de su zona de almacenamiento)',
'bunnycdn_key' => 'Contraseña de acceso FTP y API (La contraseña de acceso API de la zona de almacenamiento)',
'bunnycdn_region' => 'Región (La región de la zona de almacenamiento)',
'optional' => 'Opcional',
'sizes' => 'Tamaños de miniaturas de medios',
'media_sizes_helper' => 'Establecer ancho o alto en 0 si solo desea recortar por ancho o alto. Necesita hacer clic en "Generar miniaturas" para aplicar cambios.',
'width' => 'Ancho',
'height' => 'Altura',
'default_size_value' => 'Predeterminado: :size',
'all' => 'Todo',
'media_folders_can_add_watermark' => 'Agregar marca de agua a las imágenes en carpetas:',
'max_upload_filesize' => 'Tamaño máximo de carga de archivos (MB)',
'max_upload_filesize_placeholder' => 'Predeterminado: :size, debe ser menor que :size.',
'max_upload_filesize_helper' => 'Su servidor permite cargar archivos máximo :size, puede cambiar este valor para limitar el tamaño de carga de archivos.',
'image_processing_library' => 'Biblioteca de procesamiento de imágenes',
],
'license' => [
'purchase_code' => 'Código de compra',
'buyer' => 'Comprador',
],
'field_type_not_exists' => 'Este tipo de campo no existe',
'save_settings' => 'Guardar configuraciones',
'template' => 'Plantilla',
'description' => 'Descripción',
'enable' => 'Habilitar',
'send' => 'Enviar',
'test_email_description' => 'Para enviar un correo electrónico de prueba, asegúrese de haber actualizado la configuración para enviar correos electrónicos.',
'test_email_input_placeholder' => 'Ingrese el correo electrónico al que desea enviar el correo electrónico de prueba.',
'test_email_modal_title' => 'Enviar un correo electrónico de prueba',
'test_send_mail' => 'Enviar correo de prueba',
'test_email_send_success' => '¡Correo electrónico enviado con éxito!',
'locale_direction_ltr' => 'De izquierda a derecha',
'locale_direction_rtl' => 'De derecha a izquierda',
'saving' => 'Guardando...',
'emails_warning' => 'Puede agregar hasta :count correos electrónicos',
'email_add_more' => 'Agregar más',
'generate' => 'Generar',
'generate_thumbnails' => 'Generar miniaturas',
'generate_thumbnails_success' => 'Generar miniaturas con éxito. ¡Se generaron :count archivos!',
'generate_thumbnails_error' => 'No podemos regenerar miniaturas para estos archivos :count archivos!',
'generate_thumbnails_description' => '¿Estás seguro de que deseas volver a generar miniaturas para todas las imágenes? Tomará tiempo, así que POR FAVOR, NO abandones esta página, espera hasta que termine.',
'enable_chunk_description' => 'La carga de archivos en fragmentos se utiliza para cargar archivos de gran tamaño.',
'watermark_description' => 'ADVERTENCIA: La marca de agua solo se agrega a las imágenes nuevas cargadas, no se agregará a las imágenes existentes. Desactivar la marca de agua no eliminará la marca de agua de las imágenes existentes.',
'submit' => 'Enviar',
'back' => 'Atrás',
'enter_sample_value' => 'Ingrese valores de muestra para la prueba',
'preview' => 'Vista previa',
];