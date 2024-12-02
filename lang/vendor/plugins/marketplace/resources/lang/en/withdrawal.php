<?php

return [
    'name' => 'Retiros',
'edit' => 'Editar retiro',
'statuses' => [
    'pending' => 'Pendiente',
    'processing' => 'Procesando',
    'completed' => 'Completado',
    'canceled' => 'Cancelado',
    'refused' => 'Rechazado',
],
'amount' => 'Cantidad',
'customer' => 'Cliente',
'vendor' => 'Vendedor',
'currency' => 'Moneda',
'forms' => [
    'amount' => 'Cantidad',
    'amount_placeholder' => 'Cantidad que deseas retirar',
    'fee' => 'Tarifa',
    'fee_helper' => 'Debes pagar una tarifa al retirar: :fee',
    'pending_status_helper' => 'Para completar el retiro, actualiza el estado como procesando y luego completado',
    'payment_channel' => 'Canal de pago',
    'payment_channel_placeholder' => 'Canal de pago',
    'transaction_id' => 'ID de transacción',
    'transaction_id_placeholder' => 'ID de transacción',
    'amount_with_balance' => 'Cantidad (saldo: :balance)',
],
'new_withdrawal_request_notifications' => [
    'new_withdrawal_request' => 'Nueva solicitud de retiro',
    'view' => 'Ver',
    'description' => ':customer ha solicitado un retiro.',
    ],
];
