    <!-- NAVIGASI -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
      <a class="navbar-brand" href="#">Kalender</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($pageHome) {echo "active";}?>">
            <a class="nav-link" href="/fc/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if ($pageData) {echo "active";}?>">
            <a class="nav-link" href="/fc/data">Data Event</a>
          </li>
          <li class="nav-item <?php if ($pageTambah) {echo "active";}?>">
            <a class="nav-link" href="/fc/data/tambah.php">Tambah Event</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kalender Bidang</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Bag Umum</a>
              <a class="dropdown-item" href="#">PPA 1</a>
              <a class="dropdown-item" href="#">PPA 2</a>
              <a class="dropdown-item" href="#">PAPK</a>
              <a class="dropdown-item" href="#">SKKI</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="/fc/">Login <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- NAVIGASI -->