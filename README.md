# Sistema de Punto de Venta o P.O.S

Sistema de registro de inventarios, basado en el curso *[Crea sistemas Pos con PHP7 y AdminLTE](https://www.udemy.com/crea-sistemas-pos-inventarios-y-ventas-con-php7-y-adminlte/)*.


# Archivos

Los archivos dentro de éste sistema son los siguientes:
![Carpetas](blob:https://pasteboard.co/373610f2-7c9d-46a8-b5d5-cdf0374ae33b)

La arquitectura del proyecto está basada en el Modelo Vista-Controlador. Además de contar con el tema `AdminLTE` el cuál ya viene prefijo con sus versiones modificadas de `Font Awesome 5.2.0` y `Boostrap 4`.

Sin embargo, 3 de las carpetas que no subí son las siguientes `bower-components`, `dist` y `plugins` las cuales se alojan dentro de la carpeta **`views`** del proyecto. Esto debido a que son componentes propios del tema y buscarlos sería muy fácil, al igual que instalar manualmente las dependencias de `bower`.

## Base de Datos

Las reglas, diagramaciones y funciones de la base de datos se mostrarán en su propia documentación remota, esto al ser terminado su análisis y codificación.


## Instalación

 1. Clona u descarga el repositorio
 2. Instala todas las dependencias como dicta el administrador de dependencias *Bower*. (Recuerda que éstos deben de ir dentro de la carpeta views).
 3. Descarga el tema *AdminLTE*, solo usaremos el panel de control, así que los archivos de esa versión los pasaremos dentro de la carpeta views.
 4. Crea una base de datos local llamada *pos*, misma base de datos debe ser en MySQL y con el formato de codificación de caracteres *`utf8_general_ci`* a este se le añaden los CREATES del archivo **`pos.sql`** situado en la carpeta **`migrations`**.
 5. Dicha base de datos debe de tener registrado un usuario Súper-Administrador, para eso, dentro del gestor de Bases de Datos de tu preferencia, es necesario utilizar la siguiente consulta de inserción:
	> INSERT INTO `users` (`id`, `name`, `user`, `password`, `profile`, `photo`, `status`, `last_login`, `created_at`) VALUES
(1, 'Usuario Administrador', 'admin', 'admin123', 1, '', 1, '0000-00-00 00:00:00', '2017-12-19 20:20:09');.
 6. Inicializa el servidor local de tu preferencia, pueden ser: *XAMPP*, *WAMPP*, *EasyPHP* o *Laragon*; luego entra a la url de tu  local e ingresa en ella, para después comenzar a registrar todos los elementos a tu disposición.

## Referencias

Las referencias en las que me baso para la realización del proyecto, son las siguientes:

 -  *[Crea sistemas POS; inventarios y ventas con PHP 7 & AdminLTE](https://www.udemy.com/crea-sistemas-pos-inventarios-y-ventas-con-php7-y-adminlte/)*.
 - *[Administrador de dependencias Bower](https://bower.io/)*. 
 - *[Funcionamiento del Modelo Vista-Controlador](https://capacitateparaelempleo.org/pages.php?r=.tema&tagID=6725&load=6795)*.
 - *[Curso de administración de bases de datos en MySQL](https://capacitateparaelempleo.org/pages.php?r=.tema&tagID=4066)*.
 - *[PHP Standards Recommendations](https://www.php-fig.org/psr/)*.
 - *[AdminLTE  Control Panel Template](https://adminlte.io/)*.
 - *[PDO Tutorial](https://phpdelusions.net/pdo)*.
