## Techevent Project

The Our Project consists is to create, web "Techevent" to practice and learn with laravel.

Laravel's architecture is a flow of communication between the Framework Foundation, the Service Providers, a Controllers structure with Middlewares, and a layer of services that communicates with ORM data access and, ultimately, with the database.

## Build with

Version Control: https://github.com/los600/techevent

<img src = "https://marketing4ecommerce.net/wp-content/uploads/2018/06/GitHub-logo-2-imagen.jpg">

Languages :[PHP](https://www.php.net/manual/es/) - Server scripting language

<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSs1FTWKOSumFwVVbs2J_8PXCjY3Y_O6qCGsA&usqp=CAU">

Framewrork :[BOOSTRAP](https://getbootstrap.com/) - Framework for building responsive.

<img src = " https://www.4webs.es/blog/wp-content/uploads/2017/09/nueva-beta-de-bootstrap-4.jpg ">

Tecnologie:[SQL](http://localhost/phpmyadmin/) - Data Base

<img src = "https://aprende-web.net/php/objetos/myadmin1.gif ">

## Authors

David Alcalde
Soledad Maradini
Ruben Caminal
Esther Castell
Martin Domingo
Marta Guitart

## Arquitect of Project

The model is responsible for managing the application data. Receive information from the controller user.

The view shows the presentation of the model in a particular format.

The controller responds to user input and performs interactions on data model objects. The controller receives the input, optionally validates it, and then passes the input to the model.

<br>

<img src="https://1.bp.blogspot.com/-_S_XUcv3Ucg/WaEGf_nUfrI/AAAAAAAAAJ4/Eup9g_FtgpQbk98V7JzPQErJ_Hydt41VgCLcBGAs/s1600/MVC_Architecture.png" >

<br>
## INSTALL AND WORK WITH REPOSITORY.

<br>

<img src="https://mktlovers.files.wordpress.com/2014/02/social-media-tree.jpg?w=820&h=312&crop=1">

<br>

1- Cloning the repository.

2-Install composer resourses: https://getcomposer.org/download/

    # Mac:https://tecadmin.net/install-composer-on-macos/

    # Windows :https://devanswers.co/install-composer-php-windows-10/

    # linux : https://www.digitalocean.com/community/tutorials/como-instalar-y-utilizar-composer-en-ubuntu-18-04-es

3-Install XAMP OR MAMP :

    # Mac : http://www.csc.villanova.edu/~mdamian/PHP/macxampp.html

    # Windows : https://www.apachefriends.org/es/index.html

    # linux : https://conpilar.es/como-instalar-xampp-en-ubuntu-20-04/

4- Create files in the project to be able to work with different operating systems :

    Step 1 : Create archive Config.php

<img src="Images/Capture config.png">

    Step 2 : In your archive SQLConexion.php

<img src="Images/Capture SQLConexion.png">

    Step 3 : Make a pull by deleting the git ignore content, which is shown in the image below.

<img src="Images/Capture gitignore.png">

    Step 4 : Once the pull is done, re-paste the contents of the image.

5- For View in the browser:

    Localhost:8080 and localhost:phpmyadmin

    *Remember to change the destination port, in case it is busy, for another application.

Commands used:

        php artisan serve
        php artisan migrate --fresh
        cp.env.example.env
        php artisan key:generate
        composer require laravel/ui
        npm run dev
        npm install
        php artisan migrate

        php artisan test
        php artisan test --filter "name"
        php artisan make Model/Event
        php artisan make Controller/Event
        php artisan make:test "name"

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Cubet Techno Labs](https://cubettech.com)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[Many](https://www.many.co.uk)**
-   **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
-   **[DevSquad](https://devsquad.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[OP.GG](https://op.gg)**
-   **[CMS Max](https://www.cmsmax.com/)**
-   **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
-   **[Lendio](https://lendio.com)**
-   **[Romega Software](https://romegasoftware.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

TDD USUARIO

-   Como usuario que se puedan ver los eventos.
-   que un usuario se pueda apuntar a un evento.
-   QUE TE PUEDAS LOGUEAR COMO USUARIO.
-   como usuario que tambien Se pueda DESAPUNTAR del evento.
-   UN USURIO NO PUEDE EDITAR EVENTOS.
-   UN UAURIO NO PUEDE CREAR EVENTOS.
-   SI NO ESTAS LOGUEADO,AL APUNTARTE A UN EVENTO TE REDIRIGE AL LOGIN.

TDD ADMIN
\*si no eres el admin no puedes borrar eventos.

-   CREAR, EDITAR Y BORRAR EVENTOS.
-   SOLO EL ADMIN TIENE ACCESSO AL DAHSBOARD O PAGINA ADMINISTRADOR.
