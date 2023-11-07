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
    public static function getCount(int $min,int $max,string $name, int $timemin, int $timemax, string $car)
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT DISTINCT COUNT(*) FROM services WHERE services.serviceName LIKE '%$name%'and services.price >= '$min' and services.price < '$max' and services.time >= '$timemin' and services.time < '$timemax' and services.avto LIKE '%$car%'");
        $row = $res->fetch_row();
        $count = $row[0];
        return $count;
    }
    public static function getNumber(int $i, int $min,int $max,string $name, int $timemin, int $timemax,string $car)
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT id FROM services WHERE services.serviceName LIKE '%$name%'and services.price >= '$min' and services.price < '$max' and services.time >= '$timemin' and services.time < '$timemax' and services.avto LIKE '%$car%'");
        if ($res->num_rows > 0)
        {
            for($j=0; $j <=$i; $j++)
            {
                $row = $res->fetch_assoc();
                $number = $row["id"];
            }
            return $number;
        }
        $connect->close();
        return "Error";
    }

    public static function FilterList(int $number)
    {
        $hostname = "localhost";
        $username = "admin";
        $password = "password";
        $databaseName = "computer_workshop";
        $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        $res = $connect->query("SELECT serviceName, mainInfo, allInfo, price, image FROM services WHERE services.id = '$number'");

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
