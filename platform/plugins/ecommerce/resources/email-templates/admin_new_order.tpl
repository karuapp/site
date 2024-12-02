{{ header }}

<h2>Enhorabuena, tienes un nuevo pedido en {{ site_title }}!</h2>

<p>Hola, {{ customer_name }} acaba de realizar un pedido en su sitio</p>

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

{{ footer }}
