<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Exámenes Médicos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Informe de Exámenes Médicos</h1>
        <form>
            <!-- Información del paciente -->
            <section>
                <h2>Datos del Paciente</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                
                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" required>

                <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>

                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
            </section>

            <!-- Exámenes médicos -->
            <section>
                <h2>Exámenes Realizados</h2>

                <label for="sangre">Tipo de Sangre:</label>
                <input type="text" id="sangre" name="sangre">

                <label for="hemoglobina">Nivel de Hemoglobina (g/dL):</label>
                <input type="text" id="hemoglobina" name="hemoglobina">

                <label for="glucosa">Nivel de Glucosa (mg/dL):</label>
                <input type="text" id="glucosa" name="glucosa">

                <label for="presion">Presión Arterial (mmHg):</label>
                <input type="text" id="presion" name="presion">
            </section>

            <!-- Resultados -->
            <section>
                <h2>Resultados y Observaciones</h2>
                <label for="resultado">Resultado General:</label>
                <textarea id="resultado" name="resultado" rows="4"></textarea>

                <label for="doctor">Médico Responsable:</label>
                <input type="text" id="doctor" name="doctor">
            </section>

            <!-- Botón de envío -->
            <button type="submit">Generar Informe</button>
        </form>
    </div>
</body>
</html>
