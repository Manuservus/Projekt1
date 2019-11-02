  <div id="projects">

        <?php

        require 'db/zgd.php';

        mysqli_connect($host, $user, $pass);
        mysqli_select_db($db);
        unset($host,$user,$pass,$db);

          $query = "SELECT * FROM Image ORDER BY id DESC LIMIT 6";

          $result = mysqli_query($query);
          if(mysqli_num_rows($result) > 0) {

              while($row = $result->fetch_assoc()) {
                  $image = $row["bLink"];
                  echo("<script>console.log('PHP: " . $image . "');</script>");

                  }
                }
                      ?>
                      <ul>
                        <li><a href="#"><img src="<?php $image ?>"></a></li>
                        <li><a href="#"><img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" alt="Projekt_02"></a></li>
                        <li><a href="#"><img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" alt="Projekt_03"></a></li>
                        <li><a href="#"><img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" alt="Projekt_04"></a></li>
                        <li><a href="#"><img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" alt="Projekt_05"></a></li>
                        <li><a href="#"><img src="https://cdn.pixabay.com/photo/2017/07/28/23/18/coming-soon-2550190_960_720.jpg" alt="Projekt_06"></a></li>
                      </ul>

      </div>
