# Sistema de Gestión de Productos e Inventario

Un sistema web desarrollado en **Laravel 11** que permite gestionar productos y categorías a través de un CRUD completo, protegido por un sistema de autenticación seguro y diseñado con una interfaz moderna en modo oscuro utilizando **Tailwind CSS** y alertas dinámicas con **SweetAlert2**.

## Características
- **Autenticación Segura:** Control de acceso de usuarios mediante Laravel Breeze.
- **CRUD de Categorías:** Organización y clasificación de inventario.
- **CRUD de Productos:** Gestión completa de los artículos del sistema.
- **Interfaz Premium:** Diseño optimizado en modo oscuro (Dark Mode).
- **Alertas Interactivas:** Confirmaciones visuales elegantes con SweetAlert2.

---

## Requisitos Previos
Antes de instalar, asegúrate de tener instalado en tu equipo:
- [XAMPP](https://www.apachefriends.org/) (con PHP 8.2 o superior y MySQL).
- [Composer](https://getcomposer.org/).
- [Node.js y NPM](https://nodejs.org/).

---

## Instalación y Despliegue

Sigue estos pasos para ejecutar el proyecto en tu entorno local:

### 1. Clonar o descargar el proyecto
Coloca la carpeta del proyecto dentro de tu directorio de desarrollo (ej. `C:/xampp/htdocs/proyecto`).

### 2. Instalar las dependencias de PHP
Abre una terminal en la raíz del proyecto y ejecuta:
```bash
composer install
```
### 3. Instalar las dependencias de JavaScript y Estilos
Instala los paquetes necesarios para Tailwind CSS ejecutando:
```bash
npm install
```
### 4. Configurar el archivo de entorno
Duplica el archivo .env.example y renómbralo a .env. Abre el archivo .env y configura el nombre de tu base de datos y el idioma:
```bash
APP_NAME="Sistema de Productos"
APP_LOCALE=es

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```
Recuerda cambiar nombre_de_tu_base_de_datos por el nombre real que creaste en phpMyAdmin

### 5. Generar la clave de la aplicación
Ejecuta el siguiente comando para crear la clave de seguridad única del proyecto:
```bash
php artisan key:generate
```

### 6. Ejecutar las Migraciones (Crear tablas)
Asegúrate de tener activado Apache y MySQL en el panel de XAMPP. Luego, crea las tablas en tu base de datos ejecutando:
```bash
php artisan migrate
```
Ejecución del Sistema
Para levantar el proyecto y ver el diseño en el navegador, necesitas mantener dos terminales abiertas:

Terminal 1: Inicia el servidor local de Laravel:
```bash
php artisan serve
```

Terminal 2: Inicia el compilador en tiempo real de Tailwind CSS (Vite):
```bash
npm run dev
```

Ingresa a http://127.0.0.1:8000 y el sistema te llevará directamente a la pantalla de inicio de sesión.
