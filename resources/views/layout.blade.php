<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo') | Cóndores Basket Club</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f4f4f4; color: #222; }
        header { background: #1a1a2e; padding: 15px 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; }
        header h1 { color: #ff7a00; font-size: 22px; }
        nav a { color: white; text-decoration: none; margin-left: 20px; font-weight: bold; }
        nav a:hover { color: #ff7a00; }
        main { max-width: 1000px; margin: 30px auto; padding: 0 20px; }
        .hero { background: #ff7a00; color: white; padding: 60px 30px; text-align: center; border-radius: 10px; }
        .hero h2 { font-size: 38px; margin-bottom: 10px; }
        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 20px; }
        .card { background: white; padding: 20px; border-radius: 10px; text-align: center; box-shadow: 0 2px 6px rgba(0,0,0,0.15); }
        .numero { background: #1a1a2e; color: #ff7a00; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 24px; font-weight: bold; margin: 0 auto 10px; }
        table { width: 100%; border-collapse: collapse; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 6px rgba(0,0,0,0.15); }
        th { background: #1a1a2e; color: white; padding: 12px; }
        td { padding: 12px; text-align: center; border-bottom: 1px solid #ddd; }
        h2.titulo { margin-bottom: 15px; color: #1a1a2e; }
        footer { background: #1a1a2e; color: white; text-align: center; padding: 15px; margin-top: 40px; }
    </style>
</head>
<body>
    <header>
        <h1>🏀 Cóndores Basket Club</h1>
        <nav>
            <a href="{{ route('inicio') }}">Inicio</a>
            <a href="{{ route('jugadores') }}">Jugadores</a>
            <a href="{{ route('partidos') }}">Partidos</a>
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        &copy; 2026 Cóndores Basket Club - Todos los derechos reservados
    </footer>
</body>
</html>