# Documentación técnica - Cóndores Basket Club

**Curso:** Ingeniería de Software II
**Estudiante:** [JUAN ALEXIS ACHULLI HUAMAN]
**Código:** 202100353F
**Docente:** Eduardo Chávez Vásquez
**Fecha:** 30 de octubre de 2026

## 1. Descripción del proyecto
Sitio web informativo de un equipo de básquet, desarrollado con Laravel. Permite ver la presentación del club, la lista de jugadores, el calendario de partidos y los datos de contacto.

## 2. Objetivo
Aplicar Laravel, PHP, Composer, Git y GitHub en el desarrollo de una página web con control de versiones.

## 3. Tecnologías utilizadas
- PHP 8.3
- Laravel 13
- Composer 2.10
- HTML y CSS
- Blade (motor de plantillas de Laravel)
- Git y GitHub
- Visual Studio Code y Laragon

## 4. Instalación y ejecución
1. Clonar el repositorio: `git clone https://github.com/202100353f-gif/basquet-club.git`
2. Entrar a la carpeta: `cd basquet-club`
3. Instalar dependencias: `composer install`
4. Copiar el archivo de entorno: `copy .env.example .env`
5. Generar la clave: `php artisan key:generate`
6. Iniciar el servidor: `php artisan serve`
7. Abrir `http://127.0.0.1:8000`

## 5. Estructura principal
- `routes/web.php`: define las rutas del sitio.
- `app/Http/Controllers/EquipoController.php`: controlador con la lógica y los datos.
- `resources/views/layout.blade.php`: plantilla base con menú y pie de página.
- `resources/views/inicio.blade.php`: página de inicio.
- `resources/views/jugadores.blade.php`: lista de jugadores.
- `resources/views/partidos.blade.php`: calendario y resultados.
- `resources/views/contacto.blade.php`: datos de contacto.

## 6. Rutas
| Ruta | Método | Descripción |
|---|---|---|
| `/` | GET | Inicio |
| `/jugadores` | GET | Lista de jugadores |
| `/partidos` | GET | Calendario de partidos |
| `/contacto` | GET | Contacto |

## 7. Control de versiones
El proyecto se gestionó con Git y se publicó en GitHub: https://github.com/202100353f-gif/basquet-club

## 8. Capturas de pantalla
[Aquí van las capturas de las 4 páginas]

## 9. Conclusiones

### Lo que aprendí
- Aprendí a crear un proyecto con **Laravel** usando **Composer**, y a entender cómo se organiza: las rutas en `routes/web.php`, la lógica en los controladores y la parte visual en las vistas.
- Aprendí a usar **Blade**, el motor de plantillas de Laravel. Con un `layout` común (menú y pie de página) pude reutilizar el diseño en todas las páginas usando `@extends`, `@section` y `@yield`.
- Aprendí a mostrar datos dinámicos en las vistas con `@foreach` y `{{ }}`, enviándolos desde el controlador (lista de jugadores y calendario de partidos).
- Aprendí a usar **Git y GitHub**: inicializar un repositorio, hacer commits con mensajes claros, conectar un repositorio remoto y subir los cambios con `git push`. También comprendí la importancia de hacer commits pequeños para tener un historial ordenado.

### Dificultades y cómo las resolví
- **Error al instalar Laravel:** Composer falló al descomprimir paquetes (`unzip`). Lo resolví limpiando la caché de Composer y volviendo a ejecutar la instalación.
- **Autenticación con GitHub:** el inicio de sesión desde el navegador no funcionaba correctamente. Lo resolví usando un token de acceso personal, que luego eliminé por seguridad.
- **Vistas no encontradas:** Laravel mostraba el error "Ver [inicio] no encontrado" porque los archivos estaban fuera de la carpeta `resources/views`. Al moverlos a la ubicación correcta, el problema se solucionó.
- **Errores al escribir comandos:** aprendí que cada comando debe ejecutarse por separado y que un pequeño error de escritura puede causar fallos.

### Conclusión final
El proyecto me permitió aplicar en la práctica las herramientas del curso (Laravel, PHP, Composer, Git y GitHub) y desarrollar un sitio web funcional para un equipo de básquet. Los errores que se presentaron me ayudaron a entender mejor cómo funciona el entorno de desarrollo y a resolver problemas de forma autónoma. Como mejora futura, se podría agregar una base de datos para administrar jugadores y partidos, y un formulario de contacto funcional.