{{ header }}

<h2>Tu pedido se está entregando!</h2>

<p>Hola {{ customer_name }},</p>

<p>Tus productos están en camino.</p>

{{ order_delivery_notes }}

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
