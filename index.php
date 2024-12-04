<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con Docker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        h1 {
            color: #2c3e50;
        }

        h2 {
            color: #16a085;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #bdc3c7;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #34495e;
            color: #ecf0f1;
        }

        td {
            background-color: #ecf0f1;
        }
        
    </style>
</head>
<body>
    <h1>Villegas</h1>
    <h2>El pueblo es</h2>

    <table>
        <thead>
            <tr>
                <th>Vidas</th>
                <th>Rios</th>
                <th>Tradicion</th>
                <th>Piscinas</th>
                <th>Agricultura</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Diciembre</td>
                <td>30</td>
                <td>caballos</td>
                <td>bonitas</td>
                <td>20 tierras</td>
            </tr>  
        </tbody>
    </table>

    <script>
        // Lista de colores
        const colores = [
            "#F1C40F",  // Amarillo brillante
            "#E74C3C",  // Rojo coral
            "#8E44AD",  // Púrpura
            "#3498DB",  // Azul claro
            "#1ABC9C",  // Verde agua
            "#2ECC71",  // Verde lima
            "#9B59B6",  // Lavanda
            "#16A085"   // Verde azulado
        ];

        document.body.addEventListener('click', () => {
            // color aleatorio
            const randomColor = colores[Math.floor(Math.random() * colores.length)];
            document.body.style.backgroundColor = randomColor;
        });
    </script>
</body>
</html>
