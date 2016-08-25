<?php //faker
//include_once 'po-includes/core/core.php';
require_once 'faker/src/autoload.php';
$faker = Faker\Factory::create();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smp289";

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql ="INSERT INTO post (seotitle,editor,active,headline,comment,picture)
							VALUES(
								'$faker->slug',
								'1',
								'Y',
								'N',
								'Y',
								'trik-bagun-lebih-pagi.jpg'
								)";
$conn->exec($sql);