<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Aplicación CRUD para Laravel

**Desarrollado por Alejandro, Web Master**

## Descripción del Sistema

Este sistema permite gestionar estudiantes, profesores y clases en una institución académica. Proporciona las siguientes funcionalidades:

- **Estudiantes**: Registro, edición, eliminación y visualización de estudiantes.
- **Profesores**: Registro, edición, eliminación y visualización de profesores.
- **Clases**: Registro, edición, eliminación y asignación de clases a estudiantes y profesores.

## Estructura del Proyecto

El proyecto está desarrollado utilizando Laravel y sigue el patrón de diseño MVC (Modelo-Vista-Controlador). A continuación se detalla la estructura del proyecto:

- **Controladores**: Los controladores gestionan la lógica de la aplicación y las interacciones entre el modelo y la vista.
- **Modelos**: Los modelos representan las entidades y se encargan de la interacción con la base de datos utilizando Eloquent ORM.
- **Vistas**: Las vistas son archivos Blade que definen la interfaz de usuario.

## ORM de Laravel (Eloquent)

Eloquent es el ORM (Object-Relational Mapping) de Laravel que facilita la interacción con la base de datos. Algunas de sus funcionalidades principales incluyen:

- **Definición de Modelos**: Cada modelo representa una tabla en la base de datos y puede definir relaciones con otros modelos.
- **Consultas**: Eloquent permite realizar consultas de manera sencilla y fluida. Ejemplo: `$estudiantes = Estudiante::all();`
- **Relaciones**: Eloquent permite definir relaciones entre modelos, como uno a muchos, muchos a muchos, etc.

## Funciones CRUD

El sistema implementa las funciones básicas de CRUD (Crear, Leer, Actualizar, Eliminar) para las entidades de Estudiantes, Profesores y Clases. A continuación se presentan ejemplos básicos de cada operación:


