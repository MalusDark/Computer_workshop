<?php

use App\Models\serviceList;
error_reporting(0);
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GarageFamily</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php include "header.php"; ?>
<body>
    <div class="container-fluid text-white" style="margin-top: 150px; margin-bottom: 150px; background-color: #000000">
        <div class="row">

        </div>
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <p></p>
                    <form method="GET" id="search">
                        <input class="form-control" type="number" name="minimum" placeholder="От" value="<?php
                        if (isset($_GET['minimum']))
                            echo $_GET['minimum'];
                        else echo 0
                        ?>" size="5">
                        <br>
                        <input class="form-control" type="number" name="maximum" placeholder="До" value="<?php
                        if (isset($_GET['maximum']))
                            echo $_GET['maximum'];
                        else echo 999999
                        ?>" size="5">
                        <br>
                        <span style="text-align: center">По Имени</span>
                        <br>
                        <input class="form-control" type="text" name="name" placeholder="Имя" <?php
                        if (isset($_GET['name']))
                            echo $_GET['name'];
                        else echo ' '
                        ?>" size="5">
                        <br>
                        <input type="submit" name="filter" form="search" value="Принять">
                        <input type="reset" form="search" onClick='location.href="/"' value="Сбросить">
                    </form>
                </div>
            </div>
            <div class="col-9">
                <?php
                $min = 0;
                $max = 999999;
                $name = "";
                if (isset($_GET['minimum']))
                {
                    $min =  $_GET['minimum'];
                }
                if (isset($_GET['maximum']))
                {
                    $max = $_GET['maximum'];
                }
                if (isset($_GET['name']))
                {
                    $name = $_GET['name'];
                }
                if(serviceList::getNumber($name)>0)
                {
                    for($i=1;$i <=serviceList::getNumber($name);$i++)
                    {
                        unset($item);
                        $item=serviceList::FilterList($min,$max,$name,$i);
                        echo
                            "<div class=\"card\" style=\"margin: 10px; width: 18rem; background-color: darkorange\">
                                <img src=\"img/".$item->image."\" class=\"card-img-top\" alt=\"...\">
                                <div class=\"card-body\">
                                     <h5 class=\"card-title\">".$item->serviceName."</h5>
                                     <p class=\"card-text\">".$item->mainInfo."</p>
                                     <a href=\"#\" class=\"btn btn-primary\" style='background-color: #000000' \">".$item->price." рублей</a>
                                </div>
                            </div>";
                    }
                }
                else
                {
                    echo "Услуги не найдены";
                }
                ?>
            </div>
        </div>
    </div>
</body>
<?php include "footer.php"; ?>
</html>
