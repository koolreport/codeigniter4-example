# How to use KoolReport in CodeIgniter 4?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.

KoolReport is reporting framework and can be integrated into CodeIgniter or any other MVC framework. KoolReport help you to create data report faster and easier.

In this repository, we would like to demonstrate how KoolReport can be used in CodeIgniter.

# Guide

## Installation

Run `composer` command in your CodeIgniter directory to install `koolreport/core`

```
composer require koolreport/core
```
or install `koolreport/pro` if you have a license for it

```
composer require koolreport/pro
```

## Step to make reports

1. Inside `app` directory, create `reports` subdirectory to hold your reports.
2. Create `MyReport.php` and `MyReport.view.php` inside `reports` directory. Assign `App\reports` namespace for the report if you want it be autoloaded. Otherwise, you could include the report file directly in your controller. Please see the contents of two files in our repository.

### Create route and action

In `app/Config/Routes.php`, create a route to your report and its action with a controller:

```
$routes->get('/customReport', 'Home::customReport');
```
In the `Home` controller (`app/Controllers/Home.php`), create the action method:

```
public function customReport()
{
    $report = new \App\reports\MyReport();
    //or if your report doesn't have a namespace:
    //include APPPATH . "reports/MyReport.php";
    //$report = new \MyReport();
    $report_content = $report->run()->render(true);
    return view("customReport", ["report_content" => $report_content]);
}
```
Create the report view `app/Views/customReport.php` and put your report content anywhere you like:

```
<html>
...
<?php echo $report_content; ?>
</html>
```

All done!

## View result

First start the PHP built-in server in your CodeIgniter directory:


```
php spark serve
```
Then you can access after running

```
http://locahost:8080/customReport
```

you will see

![](codeigniter4_combochart.png)


# Summary

KoolReport is a great php reporting framework. You can use KoolReport alone with pure php or inside any modern MVC frameworks like CodeIgniter, CakePHP, Laravel, Symfony, Yii2. If you have any questions regarding KoolReport, free free to contact us at [our forum](https://www.koolreport.com/forum/topics) or email to [support@koolreport.com](mailto:support@koolreport.com).

__Happy Reporting!__