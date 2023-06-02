# test_choho

Prueba para ingreso a Choho Colombia, este proyecto se compone de dos partes:
- backend_test_choho, hecho en laravel.
- frontend_test_choho, hecho en laravel.

## Insalación
Para instalar los fuentes primero clonar el proyecto

>git clone https://github.com/haimerb/test_choho.git

Abrir una Consola, command promp o terminal y nos posicionamos en la carpeta del proyecto.

## BackEnd
- **Entramos en backend_test_choho** 
> cd backend_test_choho

- **Instalamos los paquetes de laravel** 
>composer install

- **Corremos el proyecto** 
>php artisan serve

### Comando personalizado laravel para la carga de datos de prueba 
>php artisan cargamasiva

## FrontEnd
- **Entramos en frontend_test_choho** 
> cd frontend_test_choho

- **Instalamos las los paquetes de angular** 
> npm install

- **Corremos el proyecto** 
> ng serve -o

# Notas: 
- De igual forma se carga en el repositorio un script sql para la generacion de los esqumas db.
- Recordar modificar el archivo .env en laravel para ajustar los parametros de base de datos. 