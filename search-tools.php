<?php
  $searchtext = $_POST["searchtext"];
  include('assets/includes/config.php');
  $con = getConnectionDB() or die ("Could not connect to database.");

  $sql = $con->prepare("SELECT * FROM tools WHERE fullname LIKE '$searchtext%' OR name LIKE '$searchtext%' ORDER BY name;");
  $sql->execute();
  $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
  // FOREACH BEGINS
  foreach ($resultados as $resultado) {
      $id = $resultado['id'];
      $name = $resultado['name'];
      $category = $resultado['category'];
      $category2 = $resultado['category2'];
      $released = $resultado['released'];
      $categories = $resultado['categories'];
      $avatar = $resultado['avatar'];

      if (is_null($avatar)) {
          $avatar = 'assets/img/kali.png';
      }
  ?>

      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 filter <?php echo $categories ?>">

          <?php
          if (is_null($released)) {
              echo "
                  
                      <div class='card zoom-effect bg-white mb-3 text-white'>
                          <div class='card-body'>

                            <div class='row'>
                              <div class='col'>
                                <span class='h2 font-weight-bold mb-0'>$name</span>
                                <h5 class='card-title text-uppercase text-muted mb-0'>$category";

              if (!is_null($category2)) {
                  echo ", $category2";
              }
              echo "</h5>
                              </div>
                              <div class='col-auto'>
                                <div class='icon icon-shape text-white rounded-circle shadow'";

              echo " style='background-image: url($avatar); background-size: cover; background-position: center'> ";

              echo "
                                </div>
                              </div>
                            </div>
                            <p class='mt-3 mb-0 text-muted'>
                              <span class='text-danger mr-2'>Unavailable</span>
                              <span class='text-nowrap'></span>
                            </p>
                            </div>
                      </div>
              ";
          } else {
              echo "
                  <a href='selected-tool.php?id=$id' style='text-decoration: none;'>
                      <div class='card zoom-effect mb-3 text-white bg-success'>
                          <div class='card-body'>

                            <div class='row'>
                              <div class='col'>
                                <span class='h2 font-weight-bold mb-0 text-white'>$name</span>
                                <h5 class='card-title text-uppercase mb-0' style='color: #84edff;'>$category";

              if (!is_null($category2)) {
                  echo ", $category2";
              }
              echo "</h5>
                              </div>
                              <div class='col-auto'>
                                <div class='icon icon-shape text-white rounded-circle shadow'";

              echo " style='background-image: url($avatar); background-size: cover; background-position: center'> ";

              echo "
                                </div>
                              </div>
                            </div>
                            <p class='mt-3 mb-0 text-muted'>
                              <span class='text-white mr-2'>Available</span>
                              <span class='text-nowrap'></span>
                            </p>
                            </div>
                      </div>
                  </a>
              ";
          }
          ?>

      </div>

  <?php
      // FOREACH ENDS
  }
  ?>
