{{ header }}

<h2>Gracias por comprar nuestro producto.!</h2>

<p>Hola {{ customer_name }},</p>

<p>Hemos confirmado su(s) pedido(s) y está listo para su envío..</p>

{{ product_list }}

{% if order_note %}
<p>Nota: {{ order_note }}</p>
{% endif %}

<h3>Información al cliente</h3>

<p>{{ customer_name }} - {{ customer_phone }}, {{ customer_address }}</p>

<h3>Método de envío</h3>
<p>{{ shipping_method }}</p>

<h3>Método de pago</h3>
<p>{{ payment_method }}</p>

<br />

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
