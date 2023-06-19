<?php
require_once "inc/header.php";
?>



    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Matematik</h1>
                    <form class="mx-auto" action="sorular.php" method="get">
                    <input type="submit" class="btn btn-warning mt-5 fw-bold opacity-75" name="start" value="start" placeholder="Soru Getir">
                      <select name="dif" class="mx-auto form-select form-select-lg mt-3 w-25 opacity-75" aria-label=".form-select-lg example">
                          <option value="20">Kolay</option>
                          <option value="10" selected>Orta</option>
                          <option value="5">Zor</option>
                      </select>
                  </form>

                  </div>
            </div>
        </div>
    </header>


<?php
require_once "inc/footer.php";
?>

