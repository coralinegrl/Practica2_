<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Andrea Saldaña Cavour - Currículum</title>
    <style>
        .interests {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .interest {
            width: 100px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .interest p {
            margin-bottom: 0px;
        }

        .interest img {
            width: 100%;
            max-width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <img src="{{ asset('images/yo.jpeg') }}" alt="Andrea Saldaña">
            <div class="header-content">
                <h1>Andrea Saldaña Cavour</h1>
                <p>Creación de un Perfil Personal en HTML y Estilización con CSS</p>
            </div>
        </div>
    </header>

    <section class="about container">
        <h2>Acerca de mí</h2>
        <p>Mi nombre es Andrea Saldaña, soy estudiante de Ingeniería Civil en Computación e Informática de la UCN.</p>
    </section>

    <section class="education container">
        <h2>Datos Personales</h2>
        <ul>
            <li>Edad: 24 años</li>
            <li>Ciudad de Origen: Antofagasta</li>
            <li>País: Chile</li>
            <li>Correo Electrónico: andrea.saldana@alumnos.ucn.cl</li>
        </ul>
    </section>

    <section class="interests container">
        <h2>Intereses</h2>
        <div class="interest">
            <img src="{{ asset('images/musica.jpg') }}" alt="Escuchar música" width="100">
            <p>ESCUCHAR MÚSICA</p>
            <div class="description">
                <p>Me gusta escuchar música de todo tipo, pero principalmente escucho rock y pop.</p>
            </div>
        </div>
        <div class="interest">
            <img src="{{ asset('images/videojuegos.jpg') }}" alt="Jugar videojuegos" width="100">
            <p>JUGAR VIDEOJUEGOS</p>
            <div class="description">
                <p>Me gusta pasar mi tiempo libre jugando videojuegos en mi PC.</p>
            </div>
        </div>
        <div class="interest">
            <img src="{{ asset('images/dormir.jpg') }}" alt="Dormir" width="100">
            <p>DORMIR</p>
            <div class="description">
                <p>Me gusta levantarme tarde.</p>
            </div>
        </div>
        <div class="interest">
            <img src="{{ asset('images/yoga.jpg') }}" alt="Hacer yoga" width="100">
            <p>HACER YOGA</p>
            <div class="description">
                <p>Hago yoga todos los domingos.</p>
            </div>
        </div>
    </section>

    <section class="skills container">
        <h2>Herramientas Tecnológicas</h2>
        <table>
            <thead>
                <tr>
                    <th>Tecnología</th>
                    <th>Nivel</th>
                    <th>Año</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>HTML</td>
                    <td>Básico</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>CSS</td>
                    <td>Básico</td>
                    <td>2023</td>
                </tr>
                <tr>
                    <td>Python</td>
                    <td>Básico</td>
                    <td>2022</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="social container">
        <h2>Redes Sociales</h2>
        <ul>
            <li><a href="https://www.instagram.com/coralinegrl" target="_blank">Instagram</a></li>
            <li><a href="https://twitter.com/coralinegrl" target="_blank">Twitter</a></li>
            <li><a href="https://www.linkedin.com/in/andrea-salda%C3%B1a-cavour-324883229/" target="_blank">LinkedIn</a></li>
        </ul>
    </section>

</body>
</html>
