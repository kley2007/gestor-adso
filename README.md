# Gestor ADSO

## Descripción
Proyecto base desarrollado con Laravel para preparar el entorno de desarrollo de Gestor ADSO.

## Tecnologías y versiones
- Sistema operativo: Windows 10/11
- PHP: 8.2.12
- Composer: 2.10.3
- Laravel: 12.69.3
- Git: 2.55.0.windows.3
- Base de datos: MariaDB 10.4.32
- Editor: Visual Studio Code 1.137.0
- Servidor local: XAMPP

## Requisitos
- PHP y las extensiones necesarias para Laravel.
- Composer.
- Git.
- XAMPP con MariaDB.
- Visual Studio Code.

## Instalación

1. Clonar o descargar el proyecto.
2. Instalar las dependencias:

   ```bash
   composer install
   ```

3. Crear el archivo de configuración:

   ```bash
   copy .env.example .env
   ```

4. Generar la clave de la aplicación:

   ```bash
   php artisan key:generate
   ```

5. Crear la base de datos `gestor_adso` en MariaDB.
6. Configurar las variables de conexión en `.env`.
7. Limpiar la configuración:

   ```bash
   php artisan config:clear
   ```

8. Ejecutar las migraciones:

   ```bash
   php artisan migrate
   ```

## Ejecución

Iniciar el servidor local:

```bash
php artisan serve
```

Abrir en el navegador:

http://127.0.0.1:8000

## Seguridad
El archivo `.env` contiene configuración local y no debe subirse al repositorio. Se debe utilizar `.env.example` como plantilla, sin secretos ni contraseñas privadas.

## Base de datos
La aplicación utiliza MariaDB con la base de datos `gestor_adso`. Las tablas iniciales se crean mediante las migraciones de Laravel.

## Evidencias de la Semana 1
- E1: PHP y ubicación del ejecutable.
- E2: Configuración y extensiones de PHP.
- E3: Composer instalado.
- E4: Git instalado.
- E5: Visual Studio Code instalado.
- E6: Laravel funcionando en el navegador.
- E7: Base de datos `gestor_adso` creada.
- E8: Migraciones ejecutadas correctamente.
- E9: Repositorio Git, primer commit y documentación.