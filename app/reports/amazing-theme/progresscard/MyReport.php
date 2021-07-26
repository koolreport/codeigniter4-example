<?php


class MyReport extends \koolreport\KoolReport
{
    use \koolreport\codeigniter\Friendship;
    use \koolreport\amazing\Theme;
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