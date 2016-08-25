<?php //faker
include_once 'po-includes/core/core.php';
require_once 'faker/src/autoload.php';
$faker = Faker\Factory::create();

$po = new PoCore();

	$values = array(
			'seotitle' => $faker->slug,
			'editor'   => '1',
			'active'   => 'Y',
			'headline' => 'N',
			'comment'  => "Y",
			'picture'  => 'trik-bagun-lebih-pagi.jpg'
		);
	$query = $po->podb->insertInto('post')->values($values);
	$query->execute();

	$last_post = $po->podb->from('post')
				->orderBy('id_post DESC')
				->limit(1)
				->fetch();
	$values = array(
			'id_post' => $last_post['id_post'],
			'id_category' => 5
		);
	$query = $po->podb->insertInto('post_category')->values($values);
	$query->execute();

	$values = array(
			'id_post' 		=> $last_post['id_post'],
			'id_languange' 	=> 1,
			'title' 		=> $faker->sentences(),
			'content'		=> $faker->text(500)
		);
	$query = $po->podb->insertInto('post_description')->values($values);
	$query->execute();
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "";

// $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// for ($i=3; $i >=3 ; $i++) { 
// 		# code...

// 	$sql ="INSERT INTO post (seotitle,editor,active,headline,comment,picture)
// 								VALUES(
// 									'$faker->slug',
// 									'1',
// 									'Y',
// 									'N',
// 									'Y',
// 									'trik-bagun-lebih-pagi.jpg'
// 									)";
// 	$conn->exec($sql);
// 	$id_post = $conn->lastInsertId();
// 	$sql = "insert into post_category(id_post,id_category) VALUES ($id_post,5)";
// 	$conn->exec($sql);
// }