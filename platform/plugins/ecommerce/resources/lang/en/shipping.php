<?php

return [
    'name' => 'Reglas de envío',
'shipping' => 'Envío',
'title' => 'Título',
'amount' => 'Cantidad',
'enable' => 'Habilitar',
'enabled' => 'Habilitado',
'disable' => 'Deshabilitar',
'disabled' => 'Deshabilitado',
'create_shipping' => 'Crear un envío',
'edit_shipping' => 'Editar envío :code',
'status' => 'Estado',
'shipping_methods' => 'Métodos de envío',
'create_shipping_method' => 'Crear método de envío',
'edit_shipping_method' => 'Editar método de envío',
'add_shipping_region' => 'Agregar región de envío',
'country' => 'País',
'state' => 'Estado',
'city' => 'Ciudad',
'address' => 'Dirección',
'phone' => 'Teléfono',
'email' => 'Correo electrónico',
'zip_code' => 'Código postal',
'methods' => [
    'default' => 'Predeterminado',
],
'statuses' => [
    'not_approved' => 'No aprobado',
    'approved' => 'Aprobado',
    'pending' => 'Pendiente',
    'arrange_shipment' => 'Organizar envío',
    'ready_to_be_shipped_out' => 'Listo para ser enviado',
    'picking' => 'Recogiendo',
    'delay_picking' => 'Retrasar recogida',
    'picked' => 'Recogido',
    'not_picked' => 'No recogido',
    'delivering' => 'Entregando',
    'delivered' => 'Entregado',
    'not_delivered' => 'No entregado',
    'audited' => 'Auditado',
    'canceled' => 'Cancelado',
],
'cod_statuses' => [
    'pending' => 'Pendiente',
    'completed' => 'Completado',
],
'delete' => 'Eliminar',
'shipping_rules' => 'Reglas de envío',
'shipping_rules_description' => 'Reglas para calcular la tarifa de envío.',
'select_country' => 'Seleccionar país',
'add_shipping_rule' => 'Agregar regla de envío',
'delete_shipping_rate' => 'Eliminar tarifa de envío para la zona',
'delete_shipping_rate_confirmation' => '¿Estás seguro de que deseas eliminar <strong class="region-price-item-label"></strong> de esta área de envío?',
'delete_shipping_area' => 'Eliminar área de envío',
'delete_shipping_area_confirmation' => '¿Estás seguro de que deseas eliminar el área de envío <strong class="region-item-label"></strong>?',
'add_shipping_fee_for_area' => 'Agregar tarifa de envío para la zona',
'confirm' => 'Confirmar',
'save' => 'Guardar',
'greater_than' => 'Mayor que',
'type' => 'Tipo',
'shipping_rule_name' => 'Nombre de la regla de envío',
'shipping_fee' => 'Tarifa de envío',
'cancel' => 'Cancelar',
'based_on_weight' => 'Basado en el peso del producto (:unit)',
'based_on_price' => 'Basado en el precio del producto',
'shipment_canceled' => 'Envío cancelado',
'at' => 'En',
'cash_on_delivery' => 'Contra reembolso (COD)',
'update_shipping_status' => 'Actualizar estado de envío',
'update_cod_status' => 'Actualizar estado de COD',
'history' => 'Historial',
'shipment_information' => 'Información del envío',
'order_number' => 'Número de orden',
'shipping_method' => 'Método de envío',
'select_shipping_method' => 'Seleccionar método de envío',
'cod_status' => 'Estado de COD',
'shipping_status' => 'Estado de envío',
'customer_information' => 'Información del cliente',
'sku' => 'SKU',
'change_status_confirm_title' => 'Confirmar <span class="shipment-status-label"></span> ?',
'change_status_confirm_description' => '¿Estás seguro de que deseas confirmar <span class="shipment-status-label"></span> para este envío?',
'accept' => 'Aceptar',
'weight_unit' => 'Peso (:unit)',
'updated_at' => 'Última actualización',
'cod_amount' => 'Cantidad contra reembolso (COD)',
'cancel_shipping' => 'Cancelar envío',
'shipping_address' => 'Dirección de envío',
'packages' => 'Paquetes',
'edit' => 'Editar',
'fee' => 'Tarifa',
'note' => 'Nota',
'finish' => 'Finalizar',
'shipping_fee_cod' => 'Tarifa de envío/COD',
'send_confirmation_email_to_customer' => 'Enviar correo electrónico de confirmación al cliente',
'form_name' => 'Nombre',
'changed_shipping_status' => 'Estado de envío cambiado a: :status. Actualizado por: %user_name%',
'order_confirmed_by' => 'Orden confirmada por %user_name%',
'shipping_canceled_by' => 'Envío cancelado por %user_name%',
    'update_shipping_status_success' => '¡Estado de envío actualizado con éxito!',
'update_cod_status_success' => '¡Se actualizó con éxito el estado de COD del envío!',
'updated_cod_status_by' => 'Se actualizó el estado de COD a :status. Actualizado por: %user_name%',
'all' => 'Todos',
'error_when_adding_new_region' => '¡Hubo un error al agregar una nueva región!',
'delivery' => 'Entrega',
'adjustment_price_of' => 'Precio de ajuste de :key',
'warehouse' => 'Almacén',
'delivery_note' => 'Nota de entrega',
'shipments' => 'Envíos',
'order_id' => 'ID de orden',
'not_available' => 'No disponible',
'shipping_amount' => 'Cantidad de envío',
'additional_shipment_information' => 'Información adicional del envío',
'shipping_company_name' => 'Nombre de la compañía de envíos',
'tracking_id' => 'ID de seguimiento',
'tracking_link' => 'Enlace de seguimiento',
'estimate_date_shipped' => 'Fecha estimada de envío',
'date_shipped' => 'Fecha de envío',
'add_note' => 'Agregar nota...',
'view_order' => 'Ver orden :order_id',
'rule' => [
    'types' => [
        'based_on_weight' => 'Basado en el peso del producto (:unit)',
        'based_on_price' => 'Basado en el precio del producto',
        'based_on_zipcode' => 'Basado en el código postal',
        'based_on_location' => 'Basado en la ubicación',
        'unavailable' => 'No disponible',
    ],
    'item' => [
        'name' => 'Ítems de reglas de envío',
        'edit' => 'Editar ítem',
        'create' => 'Crear nuevo ítem',
        'delete' => 'Eliminar ítem de regla de envío',
        'confirmation' => '¿Seguro que deseas eliminar el ítem de regla de envío <strong class="item-label"></strong>?',
        'load_data_table' => 'Cargar tabla de datos (:total)',
        'tables' => [
            'shipping_rule' => 'Regla de envío',
            'country' => 'País',
            'state' => 'Estado',
            'city' => 'Ciudad',
            'zip_code' => 'Código postal',
            'adjustment_price' => 'Precio de ajuste',
            'is_enabled' => '¿Está habilitado?',
        ],
        'forms' => [
            'country' => 'País',
            'country_placeholder' => 'País',
            'state' => 'Estado',
            'state_placeholder' => 'Estado',
            'city' => 'Ciudad',
            'city_placeholder' => 'Ciudad',
            'zip_code' => 'Código postal',
            'zip_code_placeholder' => 'Código postal',
            'adjustment_price' => 'Precio de ajuste',
            'adjustment_price_placeholder' => 'Precio de ajuste',
            'is_enabled' => '¿Está habilitado?',
            'shipping_rule' => 'Regla de envío',
            'no_shipping_rule' => 'No hay regla de envío',
        ],
        'bulk-import' => [
            'menu' => 'Importación masiva de ítems de reglas de envío',
            'greater_than_or_equal' => 'Solo se aceptan números o decimales y deben ser mayores o iguales a :min.',
            'less_than_or_equal' => 'Solo se aceptan números o decimales y deben ser menores o iguales a :max.',
            'between' => 'Solo se aceptan números o decimales y deben estar entre :min y :max.',
            'overwrite' => 'Sobrescribir',
            'add_new' => 'Agregar nuevo',
            'skip' => 'Omitir',
        ],
    ],
    'select_type' => 'Seleccionar tipo',
    'cannot_create_rule_type_for_this_location' => 'No se puede crear el tipo de regla ":type" en esta ubicación!',
    ],
];
