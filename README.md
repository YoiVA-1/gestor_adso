# gestor-adso

## Propósito del Proyecto
Sistema de gestión desarrollado en Laravel como parte de la formación en Análisis y Desarrollo de Software (ADSO).

---

## Herramientas y Versiones Reales del Equipo

> **Nota:** Para obtener el resultado exacto en tu equipo, ejecuta los siguientes comandos en la terminal y completa la información[cite: 5]:

* **PHP:** `php -v`  
  * *Resultado:* `PHP 8.2.12 (cli) (built: Oct 24 2023 21:15:15) (ZTS Visual C++ 2019 x64)`
    `Copyright (c) The PHP Group`
    `Zend Engine v4.2.12, Copyright (c) Zend Technologies`
* **Composer:** `composer -V`  
  * *Resultado:* `Composer version 2.10.3 2026-08-27 13:34:23`
    `PHP version 8.2.12 (C:\xampp\php\php.exe)`
    `Run the "diagnose" command to get more detailed diagnostics output.`
* **Laravel (Artisan):** `php artisan --version`  
  * *Resultado:* `Laravel Framework 12.69.3`
* **Git:** `git --version`  
  * *Resultado:* `git version 2.55.0.windows.5`

---

## Pasos de Instalación y Configuración del Archivo `.env`

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/YoiVA-1/gestor_adso.git
   cd gestor-adso

2. **Copiar el archivo del entorno base:**
    copy .env.example .env

3. **Edita el archivo .env en VS Code:**
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gestor_adso
    DB_USERNAME=root
    DB_PASSWORD=

4. **Genera la clave de la aplicacion:**
    php artisan key:generate