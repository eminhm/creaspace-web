<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="./">creaspace</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./">
                    <?php echo $lang['home'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./service.php">
                    <?php echo $lang['services'] ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./contact.php">
                    <?php echo $lang['contact'] ?>
                </a>
            </li>
        </ul>
        <span class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $lang['language'] ?> <img class="img-fluid lang-arrow" src="./img/icons/arrow-down-solid.svg">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?lang=de">
                  <img class="img-fluid lang-img" src="./img/flag/de.svg">
                  Deutsch
              </a>
              <a class="dropdown-item" href="?lang=en">
                <img class="img-fluid lang-img" src="./img/flag/gb.svg">
                  English
              </a>
            </div>
        </span>
    </div>
</nav>