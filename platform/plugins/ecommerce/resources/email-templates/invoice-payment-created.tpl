{{ header }}

<p>Hola {{ customer_name }},</p>
<p>Estás recibiendo un correo electrónico de <strong>{{ site_title }}</strong></p>
<p>La factura <a href="{{ invoice_link }}">{{ invoice_code }}</a> se adjunta con este correo electrónico.</p>
<a href="{{ invoice_link }}">Ver online</a>

{{ footer }}
