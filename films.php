<?php
require "dbconnect.php";
require "menu2.php";
if ($_SESSION["login"] == 0)
{
    header("location:index.php");
}
echo '<div style="text-align: center; font-size: 30px;">Список фильмов</div>';

echo '<div class="d-flex justify-content-center">
          <a href="insertfilms.php" class="btn btn-danger mb-3">Добавить фильм</a>
     </div>';
?>
         <div class="album bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                $result = $conn->query("SELECT * FROM films");
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
                                <div class="btn-group">
                                    <a href="deletfilms.php?id='.$row['id'].'"class="btn btn-sm btn-outline-secondary">
    <font style="vertical-align: inherit;">
        <font style="vertical-align: inherit;">Удалить фильм</font>
    </font>
</a>
                                    
                                </div>
                                <small class="text-body-secondary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Продолжительность фильма  ' . $row['duration'] . '  минуты</font></font></small>
                            </div>
                        </div>
                    </div>
                </div>
    ';


}
            ?>
