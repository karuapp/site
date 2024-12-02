{{ header }}

<h2>Tu pedido ha sido cancelado</h2>

<p>Hola {{ customer_name }},</p>
<p>Su pedido <strong>{{ order_id }}</strong> ha sido cancelado como usted solicitó y su pago también fue cancelado.</p>

<br />

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
