# Estilo OAuth 2.0
Este es un ejemplo simple de cómo crear un acceso seguro a una API que responde y autoriza el acceso validando un [token] de portador estático siguiendo el estándar OAuth 2.0 (pero sin usar un servidor OAuth). También adjunto un ejemplo de cómo enviar una solicitud a esta API.

`Este código es solo para aplicaciones donde solo 1 cliente reconocido` debe acceder a la API (ya que el Bearer es estático). Por esta razón, no es necesario el uso de un servidor OAuth 2.0 (ya que no se deben gestionar usuarios).

Existen muchas aplicaciones con estos requisitos: (ver [Ejemplos](ejemplos.md))

`[SimPIL son una serie de ejemplos ultra-simples de cómo realizar diferentes operaciones con código. Sencillos.]`

## Instalación
Solo clona el repositorio y usa 'index.php' como el encabezado de tu punto final de la API. Consulta 'check.php' para ver cómo enviar una solicitud con autorización Bearer a esta API.

### Sobre la capa de seguridad
Ten en cuenta que tu punto final debe ejecutarse en un servidor seguro.

## Archivos
- simpleauth.php con el procedimiento de respuesta de la API.
- check.php con un ejemplo de solicitud a la API desde una aplicación PHP.
- img/logo.svg: solo las imágenes importantes están aquí.
- util/gen_bearer.php con un ejemplo de generación de código Bearer.

[Text in English here](README.MD)

![](img/logo.svg)

---
`título:` OAuth2.0 [`SimPIL`] 04/17/24\
`autor:` David G. Bonacho &nbsp;&nbsp; [www.tizedit.com](https://www.tizedit.com)
