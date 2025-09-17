<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #f8f9fc;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 650px;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .header {
            background: linear-gradient(90deg, #4B007D, #6C63FF);
            padding: 20px;
            text-align: center;
        }
        .header img {
            max-height: 60px;
        }
        .content {
            padding: 30px;
        }
        h2 {
            color: #4B007D;
        }
        p {
            font-size: 15px;
            color: #555;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border-radius: 6px;
            overflow: hidden;
        }
        td, th {
            border: 1px solid #ddd;
            padding: 10px 14px;
            font-size: 14px;
        }
        th {
            background: #4B007D;
            color: #fff;
            text-align: left;
        }
        tr:nth-child(even) td {
            background: #f4f1fa;
        }
        .footer {
            background: #f1f3f9;
            padding: 15px;
            text-align: center;
            font-size: 13px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        
    
        <div class="header">
            <img src="{{ asset('images/syserv-logo.png') }}" alt="SyServ Logo">
        </div>

        <div class="content">
            <h2>Hola {{ $data['nombre'] }},</h2>
            <p>
                Gracias por solicitar una <strong>cotización</strong> en <b>SyServ</b>.  
                Hemos recibido tu información y uno de nuestros asesores se pondrá en contacto contigo.
            </p>

           
            <table>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>Nombre completo</td>
                    <td>{{ $data['nombre'] }}</td>
                </tr>
                <tr>
                    <td>Correo electrónico</td>
                    <td>{{ $data['correo'] }}</td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td>{{ $data['telefono'] }}</td>
                </tr>
                <tr>
                    <td>Tipo de solicitud</td>
                    <td>{{ $data['tipo'] }}</td>
                </tr>
                <tr>
                    <td>Empresa</td>
                    <td>{{ $data['empresa'] }}</td>
                </tr>
                <tr>
                    <td>Necesidad</td>
                    <td>{{ $data['mensaje'] }}</td>
                </tr>
            </table>
        </div>

       
        <div class="footer">
            © {{ date('Y') }} SyServ — Todos los derechos reservados.  
            <br>Este correo es informativo, por favor no responda directamente.
        </div>
    </div>
</body>
</html>
