# Propiedades de Flex Box
## Pedro Enrique Zavala Arreola  
## 161000292

# Propiedades de un contenedor flex

> - ## Propiedad
> Sintaxis  
> Descripción

> - ## Display
> display: flex |  inline-flex ;  
> Es la forma en la que se define que un contenedor es flex.

> - ## flex-direction
> flex-direction: row | row-reverse | column | column-reverse  
> Es la que define la forma en la que los elementos flex se acomodaran.

> - ## flex-wrap
> flex-wrap: nowrap | wrap | wrap-reverse;  
> Especifica si puede haber un cambio de linea o no.

> - ## flex-flow
> flex-flow: flex-direction [ flex-wrap ]  
> Es solo una forma corta de la propiedades flex direction y flex wrap.

> - ## justify-content
> justify-content: flex-start | flex-end | center | space-between | space-around;  
> Define con se colocaran todos los elementos de cajas flex relativo al eje central de la caja.

> - ## align-items
> align-items: flex-start | flex-end | center | baseline | stretch;  
> Define con se colocaran todos los elementos de cajas flex relativo al eje transversal de la caja.

> - ## alling-content
> align-content: flex-start | flex-end | center | space-between | space-around | stretch;  
> Alinea los elementos de la caja flex cuando los elementos no utilizan todo el espacio.


# Propiedades de los elementos flex

> ## align-self
> align-self: auto | flex-start | flex-end | center | baseline | stretch;  
> Posiciona los elementos individuales realitavamente al eje transversal.

> ## flex-grow
> flex-grow: número | initial | inherit;  
> Define cuanto puede crecer un elemento flex.

> ## flex-shrink
> flex-shrink: número | initial | inherit;  
> Define cuanto puede disminuir un elemento flex.

> ## flex-basis
> flex-basis: número | auto | initial | inherit;  
> Especifica el valor inicial del tamaño de un elemento flex.

> ## flex
> flex: none | flex-grow [ flex-shrink ] [ flex-basis ];  
> La forma abreviada de flex-grow, flex-shrink y flex-basis.

> ## order 
> order: número | initial | inherit;  
> Define el orden de los elementos individuales.