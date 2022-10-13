# Modelo de caja

## Pedro Enrique Zavala Arreola 16100292

El modelo de cajas CSS completo se aplica a cajas que presentan comportamiento en bloque;
las cajas con comportamiento en línea solo usan una parte del comportamiento definido en el modelo de cajas.

> # Partes de una caja

> ## Al hacer una caja de tipo bloque en CSS tenemos los elementos siguientes
>
> - El contenido de la caja (o content box): El área donde se muestra el contenido, cuyo tamaño puede cambiarse utilizando propiedades como width y height.
> - El relleno de la caja (o padding box): El relleno es espacio en blanco alrededor del contenido; es posible controlar su tamaño usando la propiedad padding y otras propiedades relacionadas.
> - El borde de la caja (o border box): El borde de la caja envuelve el contenido y el de relleno. Es posible controlar su tamaño y estilo utilizando la propiedad border y otras propiedades relacionadas.
> - El margen de la caja (o margin box): El margen es la capa más externa. Envuelve el contenido, el relleno y el borde como espacio en blanco entre la caja y otros elementos.
![Error](https://media.prod.mdn.mozit.cloud/attachments/2019/03/19/16558/29c6fe062e42a327fb549a081bc56632/box-model.png)

# El modelo de cajas CSS estándar

En el modelo de cajas estándar, cuando estableces los atributos width y height para una caja,
defines el ancho y el alto del contenido de la caja. Cualquier área de relleno y borde se añade a ese ancho
y alto para obtener el tamaño total que ocupa la caja. Esto se muestra en la imagen que encontrarás a continuación.

Si suponemos que la caja tiene el CSS siguiente, que establece los valores para las propiedades width, height, margin, border, y padding:

> .box {
> width: 350px; <p>
> height: 150px;<p>
> margin: 10px;<p>
> padding: 25px;<p>
> border: 5px solid black;<p>
> }

# Tipos de cajas

En CSS, en general, hay dos tipos de cajas: cajas en bloque y cajas en línea.
Estas características se refieren al modo como se comporta la caja en términos de
flujo de página y en relación con otras cajas de la página:

> # Caja tipo BLOQUE
>
> - La caja fuerza un salto de línea al llegar al final de la línea.
> - La caja se extenderá en la dirección de la línea para llenar todo el espacio disponible que haya en su contenedor. En la mayoría de los casos, esto significa que la caja será tan ancha como su contenedor, y llenará el 100% del espacio disponible.
> - Se respetan las propiedades width y height.
> - El relleno, el margen y el borde mantienen a los otros elementos alejados de la caja.
A menos que decidamos cambiar el tipo de visualización a en línea, elementos como los
encabezados (por ejemplo, < h1 >) y todos los elementos < p > usan por defecto block como tipo de visualización externa.

> # Caja tipo INLINE
>
> - La caja no fuerza ningún salto de línea al llegar al final de la línea.
> - Las propiedades width y height no se aplican.
> - Se aplican relleno, margen y bordes verticales, pero no mantienen alejadas otras cajas en línea.
> - Se aplican relleno, margen y bordes horizontales, y mantienen alejadas otras cajas en línea.

![Error](https://res.cloudinary.com/practicaldev/image/fetch/s--lT1mgYzG--/c_imagga_scale,f_auto,fl_progressive,h_420,q_auto,w_1000/https://dev-to-uploads.s3.amazonaws.com/uploads/articles/h0y0cf2fj9m16wpv7y2n.jpg)