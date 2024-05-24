
# OAuth 2.0 style 
This is a simple example of how to create a simple API that responds and authorizes access by validating a (static) bearer token following the OAauth 2.0 standard (but without using an OAuth server). I also attach an example of how to send a request to this API.

`This code is only recommended for applications where only 1 recognized client` must access the API (since the Bearer is static). For this reason, the use of an OAuth 2.0 server is not necessary (since no users must be managed).

`[SimPIL are a series of ultra-simple examples of how to perform different operations with code. Uncomplicated.]`

## Install
Just clone the repository and use 'index.php' as your api endpoint header. See 'check.php' to see how to send a request with Bearer authorization to this API.

### About security layer
Note that your endpoint must be run on a secure server. 



## Files
- simpleauth.php with the API response procedure.
- check.php with an example of API request from PHP app.
- img/logo.svg: only important images are here.
- util/gen_bearer.php with a bearer code generation example.


![](img/logo.svg)
---
`título:` OAuth2.0 [`SimPIL`] 04/17/24\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)

