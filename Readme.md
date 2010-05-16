magin
=====


1) Clonar repositorio.

   git clone git@github.com:Gula/magic.git


2) Inicializar Submodulos
   
   git submodule init


3) Actualizar submodulos

   git submodule update


4) Configurar dB
databases.yml

all:
  doctrine:
    class: sfDoctrineDatabase
    param:
      dsn:      mysql:host=localhost;dbname=casino
      username: root
      password: 

5) Crear directorios cache/ y log/ con todos los permisos

6) Generar modelos, .swl y cargar datos.

   ./symfony doctrine:build --all --and-load

7) Borrar cache
  ./symfony cc

8) Configurar Virtual Host
Listen *:83
<VirtualHost *:83>
  DocumentRoot "/var/www/casino/project/web"
  DirectoryIndex index.php
  <Directory "/var/www/casino/project/web">
    AllowOverride All
    Allow from All
  </Directory>
</VirtualHost>

9) Permisos de escritura a web/css y web/uplodas
  chmod 777 web/css -R
  chmod 777 web/uploads -R