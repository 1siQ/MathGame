<?php
require_once "inc/header.php";
   
if (isset($_GET["start"])) {
    echo "tamtm";
    $dif=$_GET["dif"];
    setcookie("time",$dif);     
    $number_1 = rand(0,10);
    $number_2 = rand(0,10);
    $operators = array("*");
    $operator = array_rand(array_flip($operators),1);
    setcookie("number_1",$number_1); 
    setcookie("number_2",$number_2); 
    setcookie("operator",$operator); 
    setcookie("counter",0); 
    header('Location: sorular.php');		
    $soru = "flex";
    $finish = "none";
}
$time = $_COOKIE["time"];
header("Refresh:$time url=sorular.php?answer=null&&onayla=onayla");	
$soru = "flex";
$finish = "none";
if (isset($_GET["onayla"])) 
{
    $answer = $_GET["answer"];
    $number1 = (int) $_COOKIE["number_1"];
    $operator =  $_COOKIE["operator"];
    $number2 = (int) $_COOKIE["number_2"];

    $r_answer = $number1 * $number2 ;

    if ($answer == $r_answer) 
    {
        $number_1 = rand(0,10);
        $number_2 = rand(0,10);
        $operators = array("*");
        $operator = array_rand(array_flip($operators),1);
        setcookie("number_1",$number_1); 
        setcookie("number_2",$number_2); 
        setcookie("operator",$operator); 
        $c = $_COOKIE["counter"];
        $t = $_COOKIE["time"];
        $c++;
        setcookie("counter",$c); 
		header("Refresh:0 url=sorular.php");	

    }
    else 
    {
        
        $soru = "none";
        $finish = "flex";
    }
}

if (!isset($_COOKIE["counter"])) 
{
    header("Refresh:0 url=index.php");		
        			
}

?>
<header class="masthead1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 mt-lg-5 ">
                <div class="card d-<?=$soru?>  mt-5 mt- p-2 ">
                <div class="card-header">
                <div style="animation-duration: <?=$time?>s;" class="load"></div> 
                </div>
                    <div class="card-header d-flex align-items-center justify-content-between p-4">
                        <h3>SORU-<?=$_COOKIE["counter"]+1?></h3>
                        <span class="badge bg-success pt-2">
                            <h5 class="pb-2">Doğru Sayısı:</h5>
                            <div class="card text-dark py-2">
                                <?php echo $_COOKIE["counter"] ?>
                            </div>
                        </span>
                    </div>
                    <div class="card mt-3 align-items-center justify-content-center flex-row py-5">
                        <h1 class="d-inline"><?php echo $_COOKIE["number_1"] ?></h1>
                        <h1 class="d-inline"><?php echo $_COOKIE["operator"] ?></h1>
                        <h1 class="d-inline"><?php echo $_COOKIE["number_2"] ?></h1>
                    </div>
                    <form action="" method="GET">
                        <div class="form-floating mt-3">
                            <input autofocus name="answer" type="number" class="form-control" placeholder="Leave a comment here" id="floatingTextarea">
                            <label for="floatingTextarea">Cevabını Giriniz</label>
                            <input type="submit" class="btn btn-primary p-2 float-end mt-3 me-3" value="onayla" name="onayla" >
                        </div>
                    </form>
                </div>
                <div class="card d-<?=$finish?>  mt-5 mt- p-2 ">
                    <div class="card-header d-flex align-items-center justify-content-between p-4">
                        
                    </div>
                    <div class="card mt-3 align-items-center text-center justify-content-center flex-column py-5">
                        <h3 class="w-100 mb-4">Oyun Sona Erdi</h3>
                        
                        <span class="badge bg-success w-100 pt-2">
                            <h5 class="pb-2">Puanınız</h5>
                            <div class="card text-dark py-2">
                                <?php echo $_COOKIE["counter"] ?>
                            </div>
                        </span>
                    </div>
                    <form action="" method="get">
                            <input type="submit" class="btn btn-primary p-2 w-100 mt-3 me-3" value="start" placeholder="Yeniden Başlayın" name="start" >
                            <input type="hidden" name="dif" value="<?=$_COOKIE["time"]?>">
                        </form>

                        <a href="index.php">Anasayfaya Don</a>
                </div>
                
            </div>
        </div>
    </div>
</header>
<?php
require_once "inc/footer.php";
?>

