<?php

use App\Models\serviceList;

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

<div class="container-fluid text-white" style="margin-top: 150px; margin-bottom: 150px; background-color: #000000">
    <div class="row">

    </div>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-9">
            <?php
            for($i=1;$i <=serviceList::getNumber();$i++)
            {
                $item=serviceList::getList($i);
                echo
                    "<div class=\"card\" style=\"width: 18rem; background-color: darkorange\">
                    <img src=\"img/".$item->image."\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">".$item->serviceName."</h5>
                        <p class=\"card-text\">".$item->mainInfo."</p>
                        <a href=\"#\" class=\"btn btn-primary\" style='background-color: #000000' \">".$item->price." рублей</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</html>
