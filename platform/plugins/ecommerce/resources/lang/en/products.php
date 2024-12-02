<?php

return [
    'name' => 'Productos',
'create' => 'Nuevo producto',
'create_product_type' => [
    'physical' => 'Nuevo producto físico',
    'digital' => 'Nuevo producto digital',
],
'edit' => 'Editar producto - :name',
'form' => [
    'name' => 'Nombre',
    'name_placeholder' => 'Nombre del producto (Máximo 120 caracteres)',
    'description' => 'Descripción',
    'description_placeholder' => 'Breve descripción del producto (Máximo 400 caracteres)',
    'categories' => 'Categorías',
    'content' => 'Contenido',
    'price' => 'Precio',
    'quantity' => 'Cantidad',
    'brand' => 'Marca',
    'width' => 'Ancho',
    'height' => 'Altura',
    'weight' => 'Peso',
    'date' => [
        'start' => 'Desde la fecha',
        'end' => 'Hasta la fecha',
    ],
    'image' => 'Imágenes',
    'collections' => 'Colecciones de productos',
    'labels' => 'Etiquetas',
    'price_sale' => 'Precio de venta',
    'product_type' => [
        'title' => 'Tipo de producto',
    ],
    'product' => 'Producto',
    'total' => 'Total',
    'sub_total' => 'Subtotal',
    'shipping_fee' => 'Tarifa de envío',
    'discount' => 'Descuento',
    'options' => 'Opciones',
    'shipping' => [
        'height' => 'Altura',
        'length' => 'Longitud',
        'title' => 'Envío',
        'weight' => 'Peso',
        'wide' => 'Ancho',
    ],
    'barcode' => 'Código de barras (ISBN, UPC, GTIN, etc.) ',
    'barcode_placeholder' => 'Ingrese el código de barras',
    'cost_per_item' => 'Costo por artículo',
    'cost_per_item_placeholder' => 'Ingrese el costo por artículo',
    'cost_per_item_helper' => "Los clientes no verán este precio.",
    'stock' => [
        'allow_order_when_out' => 'Permitir que el cliente realice el pago cuando este producto esté fuera de stock',
        'in_stock' => 'En stock',
        'out_stock' => 'Fuera de stock',
        'title' => 'Estado de stock',
    ],
    'storehouse' => [
        'no_storehouse' => 'Sin gestión de almacén',
        'storehouse' => 'Con gestión de almacén',
        'title' => 'Almacén',
        'quantity' => 'Cantidad',
    ],
    'tax' => 'Impuesto',
    'taxes' => 'Impuestos',
    'is_default' => 'Es predeterminado',
    'action' => 'Acción',
    'restock_quantity' => 'Cantidad de reposición',
    'remain' => 'Quedan',
    'choose_discount_period' => 'Elegir período de descuento',
    'cancel' => 'Cancelar',
    'no_results' => '¡Sin resultados!',
    'value' => 'Valor',
    'attribute_name' => 'Nombre del atributo',
    'add_more_attribute' => 'Agregar más atributos',
    'continue' => 'Continuar',
    'add_new_attributes' => 'Agregar nuevos atributos',
    'add_new_attributes_description' => 'Agregar nuevos atributos ayuda a que el producto tenga muchas opciones, como tamaño o color.',
    'create_product_variations' => ':link para crear variaciones del producto!',
    'tags' => 'Etiquetas',
    'write_some_tags' => 'Escribe algunas etiquetas',
    'variation_existed' => 'Esta variación ya existe.',
    'no_attributes_selected' => '¡No se han seleccionado atributos!',
    'added_variation_success' => 'Variación agregada con éxito!',
    'updated_variation_success' => 'Variación actualizada con éxito!',
    'created_all_variation_success' => 'Todas las variaciones creadas con éxito!',
    'updated_product_attributes_success' => 'Atributos del producto actualizados con éxito!',
    'stock_status' => 'Estado de stock',
    'auto_generate_sku' => '¿Generar SKU automáticamente?',
    'featured_image' => 'Imagen destacada (opcional)',
    'product_id' => 'ID del producto',
],
'price' => 'Precio',
'quantity' => 'Cantidad',
'type' => 'Tipo',
'image' => 'Miniatura',
'sku' => 'SKU (Unidad de mantenimiento de stock)',
'variation_sku' => 'SKU de la variación',
'brand' => 'Marca',
    'cannot_delete' => 'No se pudo eliminar el producto',
'product_deleted' => 'Producto eliminado',
'product_collections' => 'Colecciones de productos',
'products' => 'Productos',
'menu' => 'Productos',
'control' => [
    'button_add_image' => 'Agregar imagen',
],
'price_sale' => 'Precio de venta',
'price_group_title' => 'Gestión de precios del producto',
'store_house_group_title' => 'Gestión de almacén',
'shipping_group_title' => 'Gestión de envío',
'overview' => 'Visión general',
'attributes' => 'Atributos',
'product_has_variations' => 'El producto tiene variaciones',
'manage_products' => 'Gestionar productos',
'add_new_product' => 'Agregar un nuevo producto',
'start_by_adding_new_product' => 'Empieza agregando nuevos productos.',
'edit_this_product' => 'Editar este producto',
'delete' => 'Eliminar',
'related_products' => 'Productos relacionados',
'cross_selling_products' => 'Productos de venta cruzada',
'up_selling_products' => 'Productos de venta ascendente',
'grouped_products' => 'Productos agrupados',
'search_products' => 'Buscar productos',
'selected_products' => 'Productos seleccionados',
'edit_variation_item' => 'Editar',
'variations_box_description' => 'Haz clic en "Editar atributo" para agregar/eliminar atributos de la variación o haz clic en "Agregar nueva variación" para añadir una variación.',
'save_changes' => 'Guardar cambios',
'continue' => 'Continuar',
'edit_attribute' => 'Editar atributo',
'select_attribute' => 'Seleccionar atributo',
'add_new_variation' => 'Agregar nueva variación',
'edit_variation' => 'Editar variación',
'generate_all_variations' => 'Generar todas las variaciones',
'generate_all_variations_confirmation' => '¿Estás seguro de que deseas generar todas las variaciones para este producto?',
'delete_variation' => '¿Eliminar variación?',
'delete_variation_confirmation' => '¿Estás seguro de que deseas eliminar esta variación? Esta acción no se puede deshacer.',
'delete_variations_confirmation' => '¿Estás seguro de que deseas eliminar esas variaciones? Esta acción no se puede deshacer.',
'product_create_validate_name_required' => 'Por favor, ingresa el nombre del producto',
'product_create_validate_sale_price_max' => 'El descuento debe ser menor que el precio original',
'product_create_validate_cost_per_item_max' => 'El costo por artículo debe ser menor que el precio original',
'product_create_validate_sale_price_required_if' => 'Debe ingresar un descuento cuando quieras programar una promoción',
'product_create_validate_end_date_after' => 'La fecha de finalización debe ser después de la fecha de inicio',
'product_create_validate_start_date_required_if' => 'La fecha de inicio del descuento no puede dejarse en blanco cuando se selecciona la programación',
'product_create_validate_sale_price' => 'Los descuentos no pueden dejarse en blanco cuando se selecciona la programación',
'stock_statuses' => [
    'in_stock' => 'En stock',
    'out_of_stock' => 'Fuera de stock',
    'on_backorder' => 'En espera',
],
'stock_status' => 'Estado de stock',
'processing' => 'Procesando...',
'delete_selected_variations' => 'Eliminar variaciones seleccionadas',
'delete_variations' => 'Eliminar variaciones',
'category' => 'Categoría',
'product_price_flash_sale_warning' => 'Este producto está en oferta flash <strong>:name</strong>, por lo que su precio es <strong>:price</strong>.',
'product_price_discount_warning' => 'Este producto está en descuento <strong>:name</strong>, por lo que su precio es <strong>:price</strong>.',
'product_image' => 'Imagen del producto',
'product_name' => 'Nombre del producto',
'types' => [
    'physical' => 'Físico',
    'digital' => 'Digital',
],
'digital_attachments' => [
    'title' => 'Adjuntos digitales',
    'add' => 'Agregar adjunto',
    'file_name' => 'Nombre del archivo',
    'file_size' => 'Tamaño del archivo',
    'unsaved' => 'No guardado',
    ],
];