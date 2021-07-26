<?php

class SaleByCountriesReport extends \koolreport\KoolReport
{
    use \koolreport\codeigniter\Friendship;
    protected function settings()
    {
        $config = include __DIR__ . "/../../../config.php";

        return array(
            "dataSources"=>array(
                "automaker"=>$config["automaker"]
            )
        );
    }
}