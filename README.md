# JD. | Portafolio de desarrollo

Portafolio personal de **Juan David Bermúdez**, Programmer Analyst y estudiante de Ingeniería de Sistemas y Telecomunicaciones. El sitio reúne información sobre mi perfil, habilidades, intereses y proyectos, e incluye un formulario de contacto conectado a una base de datos.

El proyecto está construido con PHP y una estructura MVC, y puede ejecutarse localmente mediante Docker Compose.

## ✨ Características

- **Navegación por páginas:** Inicio, Sobre mí, Habilidades, Proyectos, Intereses y Contacto.
- **Diseño adaptable:** interfaz oscura con tonos grafito, blanco y azul, pensada para escritorio y dispositivos móviles.
- **Portafolio de proyectos:** enlaces a repositorios personales y académicos.
- **Formulario de contacto:** recibe nombre, correo electrónico y mensaje.
- **Persistencia de datos:** los mensajes se guardan en MySQL mediante consultas preparadas con PDO.
- **Entorno con Docker:** aplicación PHP con Apache, base de datos MySQL y phpMyAdmin.

## 🧰 Tecnologías

- PHP 8.2
- HTML5 y CSS3
- MySQL 8.0
- PDO (`pdo_mysql`)
- Apache
- Docker y Docker Compose
- phpMyAdmin

## 📁 Estructura del proyecto

```text
mi_portafolio/
├── assets/
│   └── css/
│       └── estilos.css        # Estilos y diseño adaptable
├── controllers/
│   └── SiteController.php    # Navegación y lógica de las peticiones
├── models/
│   └── ContactoModel.php     # Operaciones de datos del formulario
├── views/
│   ├── header.php
│   ├── footer.php
│   ├── inicio.php
│   ├── sobre-mi.php
│   ├── habilidades.php
│   ├── servicios.php          # Página de proyectos
│   ├── intereses.php
│   ├── contacto.php
│   └── 404.php
├── conexion.php              # Conexión PDO a MySQL
├── index.php                 # Punto de entrada
├── .htaccess                 # Reescritura de rutas
├── Dockerfile
├── docker-compose.yml
└── README.md
```

## 🚀 Ejecución local con Docker

### Requisitos

- Docker Desktop instalado y en ejecución.
- Docker Compose disponible desde la terminal.

### 1. Descargar el proyecto

Clona el repositorio o descarga el código fuente y abre una terminal dentro de la carpeta del proyecto.

```bash
git clone <URL_DEL_REPOSITORIO>
cd mi_portafolio
```

Reemplaza `<URL_DEL_REPOSITORIO>` por la dirección real del repositorio de GitHub.

### 2. Construir e iniciar los servicios

```bash
docker compose up -d --build
```

Docker Compose inicia la aplicación web, MySQL y phpMyAdmin. La primera ejecución puede tardar mientras se descargan las imágenes y se construye el contenedor PHP.

### 3. Abrir la aplicación

| Servicio | Dirección local |
|---|---|
| Portafolio | http://localhost:8080 |
| phpMyAdmin | http://localhost:8085 |

Para detener los contenedores sin eliminar los datos persistentes:

```bash
docker compose down
```

Para volver a iniciar el entorno:

```bash
docker compose up -d
```

> **Importante:** evita `docker compose down -v` si quieres conservar los datos guardados en el volumen de MySQL.

## 🗄️ Base de datos

La configuración de Docker Compose crea la base de datos `db_proyecto_mvc` y almacena los archivos de MySQL en el volumen `datos-persistentes`.

El formulario utiliza una tabla `contactos` con los campos necesarios para almacenar el nombre, el correo electrónico, el comentario y la fecha de registro. Si la tabla aún no existe, puede crearse desde phpMyAdmin con esta estructura:

```sql
CREATE TABLE contactos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(150) NOT NULL,
    comentario TEXT NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

En phpMyAdmin, selecciona la base de datos `db_proyecto_mvc` y abre la pestaña **SQL** para ejecutar el script si es necesario.

La conexión de la aplicación se configura en `conexion.php`. En el entorno de Docker, el host de MySQL es el nombre del servicio `db-mysql`; no se utiliza `localhost` desde el contenedor PHP.

> **Seguridad:** las credenciales incluidas en el archivo Compose son de desarrollo local. Antes de desplegar este proyecto públicamente, usa variables de entorno y credenciales seguras, y evita publicar contraseñas reales.

## 🧭 Arquitectura MVC

El proyecto separa las responsabilidades principales:

- **Modelo (`models/`):** contiene las operaciones relacionadas con los datos, como el registro de mensajes.
- **Vista (`views/`):** presenta el contenido de cada página y el formulario.
- **Controlador (`controllers/`):** interpreta la petición, gestiona la navegación y coordina las acciones del formulario.
- **Punto de entrada (`index.php`):** carga la conexión y delega el manejo de la petición al controlador.

## 🗂️ Proyectos destacados

Estos enlaces llevan a los repositorios correspondientes:

- [Asistente Virtual](https://github.com/Juandab27/asistente_virtual)
- [Modelo de reconocimiento facial](https://github.com/Juandab27/modelo_reconocimiento_facial)
- [Banco de proyectos](https://github.com/Juandab27/banco_proyectos)
- [Sistema de riego y control automático de humedad](https://github.com/Juandab27/sistema_de_riego_y_control_de_humedad_automatico)

## 👨‍💻 Autor

**Juan David Bermúdez**  
Programmer Analyst · Ingeniería de Sistemas y Telecomunicaciones

- GitHub: [@Juandab27](https://github.com/Juandab27)

## 📄 Licencia

Este repositorio no especifica una licencia de uso. Si deseas permitir que otras personas reutilicen o distribuyan el código, agrega un archivo `LICENSE` con la licencia que elijas.
