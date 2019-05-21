<?php
require "vendor/autoload.php"; 

$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

$s3_bucket = getenv('SECRET_KEY');
echo $s3_bucket;
$s3_bucket = $_ENV['S3_BUCKET'];
echo $s3_bucket;
$s3_bucket = $_SERVER['S3_BUCKET'];
echo $s3_bucket;
?>
