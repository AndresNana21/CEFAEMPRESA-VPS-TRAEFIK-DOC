# Comandos laravel con docker

Normalmente cuando utilizamos docker existen complicaciones a la hora de tener permisos para los archivos ya que docker termina teniendo su propio usaurio para ser el dueño de los archivos creados grcias al contenedor.

por lo que estos comanos te solucionan essos problemas, existen 2 casos por lo que verifica cual es el que se necesita.



# Permisos para el usuario del contenedor

El contenedor cuando resive y devuelve respuestas necesita acceso a cierot selementos, por lo que estos comandos les a el permiso que necesita.


recuerda cambiar el test por el nombre del contenedor que manejes tu.

```Command

    docker exec -u root -it laravel-1-app  sh -c "chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache /var/www/database && chmod -R 775 /var/www/storage /var/www/bootstrap/cache /var/www/database"

```

# Permisos para editar los archivos

Como sabes el contenedor replica todo lo que se encunetre en el proyecto de laravel de tu wsl  dentro de si mismo, pero tambien cuando crea archivos se crean con los permisos del contenedor y no de tu usuario normal.


por lo que debes de darle permiso a tu usuario de wsl para que manipule los archivos, esto lo puedes lograr con el siguente comando.

recuerda ejecutarlo en la raiz del proyecto de laravel.


```Comman

sudo chown -R $USER:$USER .

```


