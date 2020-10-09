# Pagina web para publicar proyectos personales (blog)

_Este sito web sirve para publicar proyectos personales. Esta desarrollado con el motor de plantillas Twig, tiene control de acceso para administrar la pagina y esta conectada con una base de datos mysql _

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en tu máquina local para propósitos de desarrollo y pruebas._


### Pre-requisitos 📋

_Antes de instalar el proyecto debes tener los siguientes servicios instalados y ejecutandose en tu computador_

```
PHP ^7.1
MySQL
```

### Instalación 🔧

_Para tener un entorno de desarrollo ejecutandose de forma local y hecer pruebas, debes ejecutar en la carpeta raiz del proyecto_

```
sudo php composer.phar install
sudo npm install
npm run build:webpack
Cargar el archivo DB_PAGINA_PERSONAL_SCHEMA.sql en MySQL
Cargar el archivo DB_PAGINA_PERSONAL_DATA.sql en la base de datos 'pagina_personal' creada
Cambiar el nombre del archivo env.example.php a env.php y modificar el array a las credenciales correctas para conectarse a la base de datos
```


## Construido con 🛠️

_Herramientas usadas en el proyecto_

* [PHP](https://www.php.net/manual-lookup.php?pattern=php+7.1&scope=quickref) - Lenguaje de programación
* [Twig](https://twig.symfony.com/doc/2.x/) - Motor de plantillas PHP
* [JavaScript](https://devdocs.io/javascript-array/) - Lenguaje de de programación
* [Sass](https://sass-lang.com/) - Lenguaje de hoja de estilo
* [AdminLTE](https://adminlte.io/docs/3.0/) - Template HTML
* [Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/) - Libreria css
* [EDgrid v2.5.8](https://ed-grid.com/) - Libreria css
* [Webpack](https://webpack.js.org/) - Compilador de JavaScript y Sass

---
