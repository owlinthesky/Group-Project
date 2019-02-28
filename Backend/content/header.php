        <header>
          <a href="#" class="icon" id="icon"></a>
          <nav class="menu">
          <a href="#">
          <img alt="logo" id="logo" src="assets/logo.png">
          </a>
          </nav>
          <div class="socials">
            <a href="#"><i class="fas fa-bell"></i></a>
            <a href="#"><i class="fas fa-comment"></i></a>
            <a href="#"><i class="fas fa-user"></i></a>
            <?php
              if(isset($_SESSION["U_id"]))
              {
                  echo '<button id="logout">Logout</button>"';
              }
            ?>
          </div>
        </header>