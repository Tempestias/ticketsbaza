<?php
require "dbconnect.php";
require "menu2.php";
if ($_SESSION["login"] == 0)
{
    header("location:index.php");
}
echo '<div style="text-align: center; font-size: 30px;">Список заллов</div>';
?>
    <div class="album bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php
$result = $conn->query("SELECT * FROM halls");
while ($row = $result->fetch()){
    echo'
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" style="height: 0px;">
                        </svg>
                        <img src="img/' . $row['image'] . '.jpg">
                        </svg>
                        <div class="card-body">
                            <p class="card-text"></font><font style="vertical-align: inherit;">' . $row['name'] . '.</font></font></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
    ';


}
?>