# Servicio Postal  Mexicano



#### Introdución:
Este es una Api desarrolla en Laravel 8 que permite hacer un CRUD de los códigos postales de México, y toda la dominación de su contenido se encuentra soportada en **Swagger**, [Ver documentación Aquí](http://backbonesystems.herokuapp.com/ "Aquí").

Me decidí darle algunos pluses al desarrollo para complementarlo en documentación, rendimiento, pruebas unitarias, automatización el despliegue, estructuración de consultas:
- Docker -> automatización el despliegue
- Swagger -> documentación
- PHPUnit -> pruebas unitarias
- Redis -> rendimiento
- Eloquent ORM -> estructuración de consultas


*Para publicar el API se ultiliso Heroku (una plataforma como servicio de computación en la Nube) : http://backbonesystems.herokuapp.com/*


#### Obtener repositorio: 
git clone https://github.com/yeimosquera/backbonesystems.git

#### Especificaciones técnicas:
- [Laravel 8](https://laravel.com/ "Laravel 8")
- [PHP 7^](https://www.php.net/docs.php "PHP 7^")
- [MySQL 7.3](https://www.mysql.com/ "MySQL 8")
- [Composer](https://getcomposer.org/ "Composer") 


## Documentación:
La documentación de los métodos del API está implementada con Swagger, porque es una herramienta que genera una documentación muy fácil de comprender,  crea una plataforma que ordena cada uno de nuestros métodos (get, put, post, delete) y categoriza nuestras operaciones:
![ ](https://i.blogs.es/9fbcf2/650_1000_swagger-api-documentacion-restful/1366_2000.webp " ")

#### Instalación de Swagger:
Una vez creado nuestro proyecto, vamos a instalar el paquete darkaonline/l5-swagger:

```sh 
composer require "darkaonline/l5-swagger:5.8.*"
```

Posteriormente vamos a publicar la vista y configuración del paquete, ejecutando:

```sh 
php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"
```

#### Configurar Swagger en el proyecto:
Este paquete que hemos instalado hace uso del componente [zircote/swagger-php](https://github.com/zircote/swagger-php "zircote/swagger-php"), por tanto podemos utilizar las anotaciones definidas.

Para ello abrimos nuestro archivo App\Http\Controllers\Api\ZipcodesController y agregamos algunas anotaciones:


 
    * @OA\Get(
    *     path="/api/zip-codes",
    *     tags={"ZipCodes"},
    *     summary="Mostrar todos los ZipCodes",
    *     @OA\Response(
    *         response=200,
    *         description="OK",
    *        @OA\JsonContent(),
    *         
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="Bad request"
    *         
    *     )
    * )
        
# Correr en Docker local

### Passo a passo

* Crear los servicios
```sh
docker-compose up -d
```

* Instalar los paquetes y generar la llave del proyecto
```sh
docker exec php bash -c "composer install && php artisan key:generate && php artisan config:cache"
```

* Abrir el sitio
```sh
http://localhost:8000/
```
    


