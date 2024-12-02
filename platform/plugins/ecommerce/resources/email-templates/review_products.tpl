{{ header }}

<h2>¡Pedido completado!</h2>

<p>Hola {{ customer_name }},</p>
<p>Gracias por comprar nuestros productos, ¡puedes revisar el producto a continuación!</p>

{{ product_review_list }}

<br />

<p>Si tiene alguna pregunta, por favor contáctenos a través de <a href="mailto:{{ site_admin_email }}">{{ site_admin_email }}</a></p>

{{ footer }}
