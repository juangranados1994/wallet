Wallet

El presente trabajo es un prototipo de una wallet, la cual se conecta a un nodo pasando los siguientes datos: Walle1, monto de la transaccion, Wallet2
Acá va un párrafo que describa lo que es el proyecto

Comenzando ??

Para obtener el repositorio digite el siguiente comando en GIT git clone 

Pre-requisitos ??

Xammp

Instalación ??

Despues de clonar el repositorio se debe llevar la carpeta htdocs ubicada en por lo general en C:\xampp\htdocs, se coloca la carpeta y se descomprime.
A continuación se activa el servidor apache y mysql en xammp, se digita la siguiente direccion en un navegador : localhost:<puerto>/phpmyadmin. 
Se busca la opcion importar la cual esta ubicada en la parte superior central, se le da click y posterior se buscar en la carpeta el archivo llamado tienda.sql,
se da click en importar y se creara la base de datos en servidor sql.
Por ultimo se digita en un navegador la direccion localhost:<puerto>/wallet.

Prueba

Para realizar una prueba ingresamos a localhost:<puerto>/wallet, se da click en el link "generador de llave publica", a continuacion se escribiran las 12 palabras
secretas para crear la direccion de la wallet. Una vez realizado este proceso se redireccionara a la pagina principal, en la cual se digitara
la llave creada en anteriormente, se da en enviar consulta y si la llave del wallet es correcta se accedera al modulo de transacciones.
En esta pagina se escribira la direccion de nuestra wallet, el monto de la transaccion, la direccion de la wallet a la cual llegara el dinero
y por ultimo la direccion del servidor el cual realizara la validacion de la transaccion, en este caso con el fin de realizar la prueba, se escribira
en este ultimo campo: "guardar.php", si la operacion es exitosa se mostrara un registro de las transacciones, en la cual debera visualizarse
la recien hecha.

Herramientas

    PHP - lenguaje de programación de propósito general de código del lado del servidor
    Javascript -  lenguaje de programación interpretado
    Html -  lenguaje de marcado para la elaboración de páginas web
    Jquery - biblioteca multiplataforma de JavaScript
    CSS - lenguaje de diseño gráfico para definir y crear la presentación de un documento estructurado escrito en un lenguaje de marcado

Autores

   Miguel Granados 
   Fabian Agudelo 


Este proyecto está bajo la Licencia (Tu Licencia) - mira el archivo LICENSE.md para detalles
Expresiones de Gratitud ??

    Comenta a otros sobre este proyecto ??
    Invita una cerveza ?? a alguien del equipo.
    Da las gracias públicamente ??.
