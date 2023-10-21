<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceList extends Model
{
    protected $table = 'service_lists';
    protected $guarded = false;
    public static function getList()
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT serviceName, mainInfo, allInfo, price FROM services");

        $dataArray = array();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                $obj = new service();
                $obj->property3 = $row["serviceName"];
                $obj->property4 = $row["mainInfo"];
                $obj->property5 = $row["allInfo"];
                $obj->property6 = $row["price"];
                $dataArray[] = $obj;
            }
        }
        $connect->close();
        return var_dump($dataArray);
    }
}
