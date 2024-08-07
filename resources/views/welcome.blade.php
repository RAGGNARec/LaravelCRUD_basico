<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Académica - Chasquisoft</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f4f7f6;
            color: #333;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 900px;
        }
        .hero {
            background: linear-gradient(to right, #0066cc, #3399ff);
            color: #fff;
            padding: 60px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }
        .hero h1 {
            font-size: 2.5rem;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .section {
            margin-bottom: 30px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .section h2 {
            color: #0066cc;
        }
        .section ul {
            line-height: 1.8;
        }
        .section ol {
            line-height: 1.8;
        }
        .footer {
            padding: 20px;
            background: #333;
            color: #fff;
            border-top: 1px solid #444;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Hero Section -->
        <div class="hero">
            <h1>Aplicación de un CRUD para laravel</h1>
            <p>Desarrollado por Alejandro web master</p>
            <a href="http://127.0.0.1:8000/profesores" class="btn btn-warning">Ingresar</a>

        </div>

        <!-- Secciones en dos columnas -->
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-md-6">
                <!-- Sección 1: Descripción del Sistema -->
                <div class="section">
                    <h2>1. Descripción del Sistema</h2>
                    <p>Este sistema permite gestionar estudiantes, profesores y clases en una institución académica. Los siguientes componentes están implementados:</p>
                    <ul>
                        <li><strong>Estudiantes:</strong> Registro y gestión de estudiantes.</li>
                        <li><strong>Profesores:</strong> Registro y gestión de profesores.</li>
                        <li><strong>Clases:</strong> Registro y asignación de clases a estudiantes y profesores.</li>
                    </ul>
                </div>

                <!-- Sección 3: Laravel ORM (Eloquent) -->
                <div class="section">
                    <h2>3. ORM de Laravel (Eloquent)</h2>
                    <p>Eloquent es el ORM de Laravel que permite interactuar con la base de datos de una manera fluida y elegante. Aquí están algunas de las funcionalidades básicas:</p>
                    <ul>
                        <li><strong>Definición de Modelos:</strong> Cada modelo representa una tabla en la base de datos y puede definir relaciones con otros modelos.</li>
                        <li><strong>Consultas:</strong> Eloquent permite realizar consultas complejas utilizando una sintaxis simple. Ejemplo: <code>$estudiantes = Estudiante::all();</code></li>
                        <li><strong>Relaciones:</strong> Eloquent permite definir relaciones entre modelos, como uno a muchos y muchos a muchos.</li>
                    </ul>
                </div>

                <!-- Sección 5: Migraciones -->
                <div class="section">
                    <h2>5. Migraciones</h2>
                    <p>Las migraciones permiten definir y modificar la estructura de la base de datos de manera programática. Para crear una migración, usamos el comando:</p>
                    <code>php artisan make:migration create_estudiantes_table</code>
                    <p>Las migraciones se definen en archivos dentro del directorio <code>database/migrations</code> y se aplican con:</p>
                    <code>php artisan migrate</code>
                </div>
            </div>

            <!-- Columna 2 -->
            <div class="col-md-6">
                <!-- Sección 2: Estructura del Proyecto -->
                <div class="section">
                    <h2>2. Estructura del Proyecto</h2>
                    <p>El sistema está desarrollado en Laravel utilizando el patrón de diseño MVC y ORM. A continuación, se detalla cómo se estructura el proyecto:</p>
                    <ul>
                        <li><strong>Controladores:</strong> Manejan la lógica de la aplicación y las interacciones entre el modelo y la vista.</li>
                        <li><strong>Modelos:</strong> Representan las entidades y se encargan de la interacción con la base de datos utilizando Eloquent ORM.</li>
                        <li><strong>Vistas:</strong> Archivos Blade que definen la interfaz de usuario.</li>
                    </ul>
                </div>

                <!-- Sección 4: Funciones CRUD -->
                <div class="section">
                    <h2>4. Funciones CRUD</h2>
                    <p>Las funciones CRUD (Crear, Leer, Actualizar, Eliminar) se implementan en los controladores y modelos de Laravel. Aquí están los ejemplos básicos:</p>
                    <ul>
                        <li><strong>Crear:</strong> <code>$estudiante = Estudiante::create(['nombre' => 'Juan', 'apellido' => 'Pérez']);</code></li>
                        <li><strong>Leer:</strong> <code>$estudiante = Estudiante::find(1);</code></li>
                        <li><strong>Actualizar:</strong> <code>$estudiante = Estudiante::find(1); $estudiante->nombre = 'Carlos'; $estudiante->save();</code></li>
                        <li><strong>Eliminar:</strong> <code>$estudiante = Estudiante::find(1); $estudiante->delete();</code></li>
                    </ul>
                </div>

                <!-- Sección 6: Creación de un Proyecto Laravel -->
                <div class="section">
                    <h2>6. Cómo Crear un Proyecto Laravel</h2>
                    <p>Para crear un nuevo proyecto Laravel, sigue estos pasos:</p>
                    <ol>
                        <li><code>composer create-project --prefer-dist laravel/laravel nombre-del-proyecto</code></li>
                        <li>Configura el archivo <code>.env</code> con los detalles de tu base de datos.</li>
                        <li>Ejecuta <code>php artisan migrate</code> para crear las tablas iniciales.</li>
                    </ol>
                </div>
            </div>
        </div>

        <footer class="footer">
            <p>&copy; 2024 Chasquisoft. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
