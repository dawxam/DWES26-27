<!doctype html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Preferencias</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div id="contenedor" class="container mt-5">
      <h2 class="mb-4">Configura tus preferencias</h2>
      <form class="row g-3" method="post" action="guarda_prefs.php">
        <div class="col-md-6">
          <label for="nombre" class="form-label">Nombre de usuario</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required />
        </div>
        <div class="col-md-6">
          <label for="color" class="form-label">Color favorito</label>
          <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c" title="Elige tu color favorito" />
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Guardar preferencias</button>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
  </body>
</html>