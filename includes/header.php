<?php
require 'class/Application.php';
$obj_application = new Application();
$quiry_result=$obj_application->select_all_contact_info();
$contact_info=  mysqli_fetch_assoc($quiry_result);
$page="";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ambit builders Ltd | <?php if(isset($page_title)) echo $page_title; else echo 'Home';  ?></title> 
<link rel="icon" href="TT.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Custom CSS -->
    <link href="css/full-slider.css" rel="stylesheet"> 
    <link href="css/style.css" rel="stylesheet">  
    <link href="css/slider.css" rel="stylesheet">  
    

</head>
<body>