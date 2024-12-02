{{ header }}

<h2>¡Ordene con éxito!</h2>

<p>Hola {{ customer_name }},</p>
<p>Gracias por adquirir nuestros productos, nos comunicaremos con usted vía telefónica. <strong>{{ customer_phone }}</strong> para confirmar el pedido!</p>

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
