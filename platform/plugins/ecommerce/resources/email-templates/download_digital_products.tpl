{{ header }}

<h2>¡Gracias por comprar nuestro producto!</h2>

<p>Hola {{ customer_name }},</p>

<p>Ahora puede descargar los productos digitales que ha comprado aquí:</p>

{{ digital_product_list }}

<h3>Método de pago</h3>
<p>{{ payment_method }}</p>

<br />

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
