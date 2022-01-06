Curso de API REST con Laravel

API EN LARAVEL POR VERSION V1-V2-V3-API PRIVADA



COMANDO DE STATUS DE MIGRACION
      migrate          Ejecuta las migraciones de la base de datos
      migrate:fresh    Elimina todas las tablas y vuelve a ejecutar todas las migraciones
      migrate:install  Crear el repositorio de migración
      migrate:refresh  Restablecer y volver a ejecutar todas las migraciones
      migrate:reset    Revertir todas las migraciones de base de datos
      migrate:rollback Revierte la última migración de la base de datos
      migrate:status   Muestra el estado de cada migración


## Versión 1: planificación y configuración inicial
<aside>
🤖 php artisan make:controller Api/V1/PostController --api --model=Post
</aside>

## Versión 1: recurso

Cuando se construye una API, se puede necesitar una capa de transformación entre el Modelo Eloquent y la respuesta JSON.

En esta capa de Recursos se pueden limitar la cantidad de campos del registro y mejorar la presentación de los mismos.
💲 php artisan make:resource V1/PostResource


## Versión 2

Basicamente repetimos la configuracion inicial para crear una API

creamos el controlador y los "recursos" para personalizar la salida.

<aside>
💲 php artisan make:controller Api/V2/PostController --api --model=Post

</aside>

<aside>
💲 php artisan make:resource V2/PostResource

</aside>

<aside>
💲 php artisan make:resource V2/PostCollection

</aside>



# Autenticación

## Introducción a la API privada

**Laravel Sanctum**

instalamos el complemento con:
💲 composer require laravel/sanctum
💲 php artisan migrate

para utilizar la api agregamos el header

```php
"Accept: application/json"
```
curl

```bash
curl http://localhost:8000/api/v2/posts/4 -H "Accept: application/json" -H "Authorization: Bearer TOKENHERE"| jq
```




--------------------------ISTALACION DE LIBRERIAS PARA SERVER---------------------------
💲 composer install
💲 php artisan migrate --seed