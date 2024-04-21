<!DOCTYPE html>
<html lang="es">

<head>
  <title>Video Club - Fiesta Nocturna</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="scss/custom.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

  <div class="p-5 bg-primary text-white text-center">
    <h1>Movie & Entertainment - Ver Peliculas en Familia</h1>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-laughing"
        viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
        <path
          d="M12.331 9.5a1 1 0 0 1 0 1A5 5 0 0 1 8 13a5 5 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5" />
      </svg> Pasatelo en grande acompañandote con un bol de palomitas <svg xmlns="http://www.w3.org/2000/svg" width="16"
        height="16" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
        <path
          d="M12.331 9.5a1 1 0 0 1 0 1A5 5 0 0 1 8 13a5 5 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5" />
      </svg></p>
  </div>

  <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid ">
      <a class="navbar-brand" href="index.php">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Movie & Entertainment</font>
        </font>
      </a>
      <button class="navbar-toggler text-bg" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Navegación de palanca">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="peliculabd.php">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Peliculas</font>
              </font>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="clientes.php">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Clientes</font>
              </font>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="categorias.php">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Categorias</font>
              </font>
            </a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-3" type="search" placeholder="Encuentra tu pelicula" aria-label="Buscar"
            disabled>
          <button class="btn btn-outline-success" type="submit" disabled>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Buscar</font>
            </font>
          </button>
        </form>
      </div>
    </div>
  </nav>