1) Asegurate de que la opcion "no_script_name" esta puesta a "on" en el archivo "settings.yml" de tu aplicacion:

	prod:
	  .settings:
	    no_script_name:         on

2) Asegurate de que no has borrado ni cambiado el nombre ni el contenido en el archivo ".htaccess" que crea Symfony en el directorio "web/" sw tu proyecto:

Options +FollowSymLinks +ExecCGI

<IfModule mod_rewrite.c>
  RewriteEngine On

  # uncomment the following line, if you are having trouble
  # getting no_script_name to work
  #RewriteBase /

  # we skip all files with .something
  #RewriteCond %{REQUEST_URI} \..+$
  #RewriteCond %{REQUEST_URI} !\.html$
  #RewriteRule .* - [L]

  # we check if the .html version is here (caching)
  RewriteRule ^$ index.html [QSA]
  RewriteRule ^([^.]+)$ $1.html [QSA]
  RewriteCond %{REQUEST_FILENAME} !-f

  # no, so we redirect to our front web controller
  RewriteRule ^(.*)$ index.php [QSA,L]
</IfModule>

3) Asegurate de que tu servidor Apache tiene activado el modulo "mod_rewrite".
La activaciin depende del sistema operativo que tengas y el servidor Apache que tengas.
En ubuntu puedes utilizar el comando a2enmod rewrite, en Windows puedes modificar el archivo de configuracion httpd.conf, etc...

4) Asegurate de que tu servidor Apache no ignora los archivos .htaccess.

Esta opcion se controla con la directiva  "AllowOverride All". En ubuntu la configuras en /etc/apache2/sites-available/default




1.11.1. Configuracion del servidor web
A continuacion debes modificar la configuración de Apache para hacer accesible el proyecto a cualquier usuario del mundo.
Localiza el archivo de configuración httpd.conf y añade lo siguiente justo al final del archivo (en Ubuntu apache2.conf):
   # Asegurate de que solo tienes esta linea una vez en todo el archivo de configuracion

   NameVirtualHost 127.0.0.1:8080
   # Esta es la configuracion para Jobeet
   Listen 127.0.0.1:8080
   <VirtualHost 127.0.0.1:8080>
      DocumentRoot "/var/www/pcc-1.2/trunk/project/web"
      DirectoryIndex index.php
      <Directory "/var/www/pcc-1.2/trunk/web">
        AllowOverride All
        Allow from All
      </Directory>
      Alias /sf /usr/share/php/data/symfony/web/sf
      <Directory "/usr/share/php/data/symfony/web/sf">
        AllowOverride All
        Allow from All
      </Directory>
   </VirtualHost>


Nota
www.librosweb.es                                                                    19
Jobeet Capitulo 1. Comenzando el proyecto
  El alias /sf se necesita para las imagenes y archivos JavaScript que utilizan las páginas por defecto de Symfony y la barra de depuracion web.
  En Windows reemplaza la línea Alias por algo como lo siguiente:
       Alias /sf "c:\development\sfprojects\jobeet\lib\vendor\symfony\data\web\sf"
  Además, la ruta /home/sfprojects/jobeet/web se debe sustituir por algo como lo siguiente
  c:\development\sfprojects\jobeet\web
La configuracion anterior hace que Apache espere las peticiones en el puerto 8080 de tu maquina, por lo que el sitio web de Jobeet se puede acceder en la siguiente URL:
    http://localhost:8080/