# DWES | Examen 2ªEvalucación

## Documentación permitida

- [laravel](https://laravel.com/docs/10.x)
- [faker](fakerphp.github.io)
- [bootstrap](https://getbootstrap.com/docs/5.3/)
- [ ~~chatgpt~~](https://www.youtube.com/watch?v=dQw4w9WgXcQ)

## Enunciados:

### 1_PDO: Bases de datos **(4 pts)**

Conexión a un servidor de bases de datos remoto. Realizar todo el ejercicio en la carpeta `1_PDO`.

- Nombre de BBDD:

  ```
  railway
  ```

- URL del servidor:

  ```
  containers-us-west-185.railway.app:5738
  ```

- User:

  ```
  student
  ```

- Password:

  ```
  preguntar a Rodri
  ```

1. **(1 pts)** Crea un arhcivo `1_conexion.php` con una conexión PDO y realiza una consulta a la tabla `productos` que devuelva el listado de productos cuyas `UnidadesEnExistencia` sean mayores que 5. Sacar sólo los campos:

   - IdProducto
   - NombreProducto
   - CantidadPorUnidad
   - PrecioUnidad
   - UnidadesEnExistencia

2. **(1,5 pts)** En un archivo `2_vista.php`, importa la conexión y muestra el listado de productos anterior con todos sus detalles.

3. **(1 pts)** Utiliza bootstrap para mostrar los productos en un formato de tarjeta teniendo en cuenta el responsive:

   - 2 tarjetas por fila en tablets y dispositivos grandes
   - 1 tarjetas en móviles

4. **(0,5 pts)** Cuida los estilos, el formato, la jerarquía de contenido, etc…

### 2_Laravel **(6pts)**

> ⚠️ Warning:
>
> Puede que te de error crear un proyecto de Laravel en la carpeta htdocs, créalo en otra carpeta y luego, para entregar el examen, copia el proyecto de Laravel a esta carpeta.

Crea un proyecto de Laravel llamado `2_Laravel-Gaming` para una webapp que mostrará un listado de juegos(titulo, estudio, fecha y puntuación) en la que se podrán crear nuevos juegos o borrar ya existentes:

1. **(0,5 pts)** Configura y crea una BBDD llamada `AFAgaming`.

1. **(0,5 pts)** Crea un modelo de Juego, con el controlador, factory, migración y seeder correspondientes

1. **(1 pts)** Utiliza las rutas y funciones de un controlador para poder añadir, borrar, filtrar, mostrar todos los juegos y filtrar dichos juego.

1. **(1 pts)** Una vista que muestre todos los juegos, permita añadir nuevos juegos, borrar los ya existentes y filtrar por puntuación.

1. **(1pts)** Añadir un campo de tipo number y un botón que permitan aplicar un filtro por puntuación mínima

1. **(1 pts)** Utiliza un layout general que contenga el header de la aplicación con el título de esta (Ej. AFA-GAMES ).

1. **(0,5 pts)** Utiliza Bootstrap

1. **(0,5 pts)** Cuida los estilos, el formato, la jerarquía de contenido, etc…
