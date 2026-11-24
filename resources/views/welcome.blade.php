<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Laravel</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .contenedor {
            background: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #e74444;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            background: #e74444;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background: #bd3030;
        }
    </style>
</head>
<body>

    <div class="contenedor">
        <h1>¡Bienvenido a Laravel!</h1>

        <p>Tu proyecto está funcionando correctamente.</p>

        <a href="{{ url('/calculadora') }}">
            Abrir calculadora
        </a>
    </div>

</body>
</html>