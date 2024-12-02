{{ header }}

<h2>¡El pedido está esperando que lo completes!</h2>

<p>Hola {{ customer_name }},</p>
<p>Hemos notado que tenías la intención de comprar algunos productos en nuestra tienda, ¿te gustaría continuar?</p>

<a href="{{ site_url }}/checkout/{{ order_token }}/recover" class="button button-blue">Orden completa</a> or <a href="{{ site_url }}">Ir a nuestra tienda</a>

<br />

<h3>Producto(s) en el carrito</h3>

{{ product_list }}

{% if order_note %}
    <p>Nota: {{ order_note }}</p>
{% endif %}

<br />

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
