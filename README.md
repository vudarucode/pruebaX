# Laravel Management System

Este proyecto es un sistema de gestión desarrollado en Laravel que permite administrar registros de departamentos, niveles de educación y empleados, así como generar un reporte específico de empleados basado en la suma de los salarios en cada departamento.

## Requisitos

-   PHP >= 8.0
-   Composer
-   MySQL o cualquier base de datos compatible con Laravel
-   Node.js (opcional, para compilar assets)

## Instalación

Sigue estos pasos para configurar el proyecto:

1. **Clona el repositorio:**

    ```bash
    git clone https://github.com/tu-usuario/tu-repositorio.git
    cd tu-repositorio
    ```

2. **Instala las dependencias de PHP con Composer:**

    ```bash
    composer install
    ```

3. **Configura el archivo `.env`:**

    - Copia el archivo de entorno de ejemplo:

        ```bash
        cp .env.example .env
        ```

    - Edita el archivo `.env` y configura la base de datos:

        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=tu_base_datos
        DB_USERNAME=tu_usuario
        DB_PASSWORD=tu_contraseña
        ```

4. **Genera la clave de la aplicación:**

    ```bash
    php artisan key:generate
    ```

5. **Ejecuta las migraciones para crear las tablas:**

    ```bash
    php artisan migrate
    ```

6. **Llena la base de datos con datos de prueba (opcional):**

    Si has creado un seeder para generar datos iniciales, puedes ejecutarlo con:

    ```bash
    php artisan db:seed
    ```

## Ejecución del Proyecto

1. **Inicia el servidor de desarrollo de Laravel:**

    ```bash
    php artisan serve
    ```

2. **Accede a la aplicación en tu navegador:**

    Visita [http://localhost:8000](http://localhost:8000) para ver la aplicación en funcionamiento.

## Características

-   **CRUD de Departamentos:** Permite crear, leer, actualizar y eliminar registros de departamentos.
-   **CRUD de Niveles de Educación:** Permite gestionar los niveles de educación.
-   **CRUD de Empleados:** Permite administrar los registros de empleados.
-   **Reporte de Empleados:** Genera un reporte de empleados que trabajan en departamentos donde la suma de los salarios supera 250,000.

## Dependencias

Este proyecto utiliza las siguientes dependencias principales:

-   Laravel
-   Bootstrap 5 (para el diseño de la interfaz)
-   MySQL (o cualquier base de datos compatible)

## Contacto

Si tienes preguntas o necesitas ayuda con el proyecto, puedes contactarme en [vudarucode@hotmail.com](mailto:vudarucode@hotmail.com).
