# CRUD DE ARTÍCULOS CATEGORIZADOS (PHP NATIVO)

## 1. Requisitos

Para ejecutar el proyecto se requiere instalar:

* XAMPP o un entorno equivalente con PHP, Apache y MySQL/MariaDB.
* Git, para clonar el proyecto desde GitHub.
* Un navegador web.

### Links

* **XAMPP:** https://www.apachefriends.org/
* **Git:** https://git-scm.com/
* **GitHub:** https://github.com/

## 2. Instalar XAMPP

Descargar e instalar XAMPP en el equipo.

Una vez instalado, ejecutar **XAMPP Control Panel** e iniciar los servicios:

* **Apache**
* **MySQL**

## 3. Descargar el proyecto

Obtener el proyecto desde el repositorio correspondiente de GitHub.

### Opción A: Clonar mediante Git

Abrir una terminal y ubicarse en el directorio `htdocs` de XAMPP.

En Windows:

```text
C:\xampp\htdocs
```

Ejecutar:

```bash
git clone https://github.com/arosystems-dev/aro_course-04_desarrollo-web_eje-02-01_crud-categorizado_implementation.git
```

### Opción B: Descargar como ZIP

Desde GitHub seleccionar:

**Code → Download ZIP**

Descomprimir el proyecto dentro del directorio `htdocs`.

La estructura debe quedar similar a:

```text
xampp/
└── htdocs/
    └── nombre-proyecto/
```

## 4. Crear y restaurar la base de datos

Abrir **phpMyAdmin**:

`http://localhost/phpmyadmin`

1. Crear una nueva base de datos.
2. Seleccionar la base de datos creada.
3. Seleccionar **Importar**.
4. Elegir el archivo `scriptDB.sql` proporcionado con el proyecto.
5. Ejecutar la importación.

El script de la Base de Datos está ubicado en: 
```
https://github.com/arosystems-dev/aro_course-04_desarrollo-web_eje-02_crud-categorizado_modeling
```

## 5. Configurar la conexión a la base de datos

Localizar dentro del proyecto el archivo de configuración de la base de datos (modelo - db - ConexionPDO.php).

Cambiar sólo la parte que dice **aro_course-04_desarrollo-web_eje-02-01_crud-categorizado** por el nombre de su base de datos creada.

```
    // ATRIBUTOS
    private static $servidor = "mysql:host=localhost";
    private static $user = "root";
    private static $password = "";
    private static $db = "dbname=aro_course-04_desarrollo-web_eje-02-01_crud-categorizado";
    private static $codificacion = "utf8mb4";
```

## 6. Ejecutar el proyecto

Verificar que **Apache** y **MySQL** estén iniciados.

Abrir el navegador e ingresar:

`http://localhost/nombre-proyecto`

Si la configuración es correcta, el sistema estará disponible para su ejecución.
