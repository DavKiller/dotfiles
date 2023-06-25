<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="./styles/basics.css">
    <!-- Tailwind css -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
  <div class="container mx-auto flex items-center justify-between py-4">
  <span id="weather-info"></span>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Página 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Página 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Página 3</a>
      </li>
    </ul>
  </div>
</nav>


  <!-- Contenido de la página -->

  <!-- Footer -->
  <footer class="footer">
    <p class="text-gray-600">© 2023 Portal Navegador. Todos los derechos reservados.</p>
  </footer>
   <!-- Script fecha y temperatura -->
   <script src="./scripts/fecha.js"></script>
</body>
</html>