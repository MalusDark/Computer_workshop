<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class serviceList extends Model
{
    protected $table = 'service_lists';
    protected $guarded = false;
    public string $carName;
    public string $serviceType;
    public int $time;
    public int $price;
    public static function getNumber()
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT COUNT(*) FROM services");
        $row = $res->fetch_row();
        $count = $row[0];
        return $count;
    }

    public static function FilterList(int $min, int $max, string $name, int $i)
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT serviceName, mainInfo, allInfo, price, image FROM services WHERE services.id = '$i' AND services.serviceName LIKE '%$name%'");

        if ($res->num_rows > 0)
        {
            $row = $res->fetch_assoc();
            $Item = new service();
            $Item->serviceName = $row["serviceName"];
            $Item->mainInfo = $row["mainInfo"];
            $Item->allInfo = $row["allInfo"];
            $Item->price = $row["price"];
            $Item->image = $row["image"];
            return $Item;
        }
        $connect->close();
        return "Error";
    }
}
