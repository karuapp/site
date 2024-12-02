<?php

return [
    'name' => 'Marketplace',
'email' => [
    'store_new_order_title' => 'Aviso sobre nuevo pedido',
    'store_new_order_description' => 'Enviar correo electrónico al dueño de la tienda cuando se realiza un pedido',
    'verify_vendor_title' => 'Verificar vendedor',
    'verify_vendor_description' => 'Enviar correo electrónico al administrador cuando un vendedor se registra',
    'pending_product_approval_title' => 'Aprobación de productos pendiente',
    'pending_product_approval_description' => 'Enviar correo electrónico al administrador cuando un vendedor publica sus productos',
    'vendor_account_approved_title' => 'Cuenta de vendedor aprobada',
    'vendor_account_approved_description' => 'Enviar correo electrónico al vendedor cuando su cuenta es aprobada',
    'product_approved_title' => 'Producto aprobado',
    'product_approved_description' => 'Enviar correo electrónico al vendedor cuando su producto es aprobado',
    'withdrawal_approved_title' => 'Retiro aprobado',
    'withdrawal_approved_description' => 'Enviar correo electrónico al vendedor cuando se aprueba su solicitud de retiro',
],
'current_balance' => 'Saldo actual',
'settings' => [
    'name' => 'Configuraciones',
    'title' => 'Configuraciones para el marketplace',
    'description' => 'Configurar la tarifa de comisión',
    'fee_per_order' => 'Tarifa por pedido (%), sugerencia: 2 o 3',
    'default_commission_fee' => 'Tarifa de comisión predeterminada (%), sugerencia: 2 o 3',
    'enable_commission_fee_for_each_category' => '¿Activar tarifa de comisión para cada categoría?',
    'categories' => 'Categorías',
    'select_categories' => 'Seleccionar categorías..',
    'commission_fee' => 'Tarifa de comisión (%)',
    'commission_fee_by_category' => 'Tarifa de comisión por categoría (%)',
    'fee_withdrawal' => 'Tarifa de retiro (Monto fijo)',
    'check_valid_signature' => 'Verificar firma válida en ganancias del vendedor',
    'verify_vendor' => 'Verificación de vendedor (El vendedor solo puede publicar sus productos después de ser verificado)',
    'enable_product_approval' => 'Habilitar aprobación de productos',
    'hide_store_phone_number' => '¿Ocultar el número de teléfono de la tienda?',
    'hide_store_email' => '¿Ocultar el correo electrónico de la tienda?',
    'allow_vendor_manage_shipping' => '¿Permitir que el vendedor gestione el envío?',
    'commission_fee_each_category_fee_name' => 'Tarifa de comisión de la configuración de comisión :key',
    'commission_fee_each_category_name' => 'Categorías de la configuración de comisión :key',
    'add_new' => 'Agregar nuevo',
],
'theme_options' => [
    'name' => 'Marketplace',
    'description' => 'Opciones de tema para Marketplace',
    'logo_vendor_dashboard' => 'Logotipo en el panel del vendedor (Por defecto es el logotipo principal)',
],
'store_name' => 'Nombre de la tienda',
'store_email' => 'Correo electrónico de la tienda',
'store_phone' => 'Teléfono de la tienda',
'product_name' => 'Nombre del producto',
'product_url' => 'URL del producto',
'withdrawal_amount' => 'Monto de retiro',
'helpers' => [
    'customer_status' => 'Si cambias el estado a algo diferente a ":status", la tienda de este vendedor también cambiará a ":store"',
    'store_status' => 'Si cambias el estado a algo diferente a ":status", la cuenta de esta tienda también cambiará a ":customer"',
],
'tables' => [
    'earnings' => 'Ganancias',
    'products_count' => 'Cantidad de productos',
],
'vendors' => 'Vendedores',
'payout_payment_methods' => [
    'bank_transfer' => 'Transferencia bancaria',
    'paypal' => 'PayPal',
    ],
];