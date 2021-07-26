<?php


class MyReport extends \koolreport\KoolReport
{
    use \koolreport\codeigniter\Friendship;
    use \koolreport\amazing\Theme;
    protected function settings()
    {
        return array(
            "dataSources" => array(
                "sales" => array(
                    "class" => '\koolreport\datasources\CSVDataSource',
                    "filePath" => "../../../databases/customer_product_dollarsales2.csv",
                    "fieldSeparator" => ";",
                ),
            ),
        );
    }
}
