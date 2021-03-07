<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blog_Page</title>
    <style>

    </style>

</head>

<body>
<?php $this->load->view("template/navbar") ?> 
    <?php foreach ($cate as $key) { ?>
        <div class="container" style="padding:10%;z-index: 10;">
            <p style="border:7px solid #152f4f;width:80%">
            <img src="<?php echo $key->image_url; ?>" alt="Avatar" style="width:100%;">
            </p> <br> <br>
            <h3 style="padding-left: 5%;"><b><?php echo $key->title; ?></b></h3>
            <h6 style="text-indent:2.5%"><?php echo $key->text; ?> <h5>
            <p style="font-size: 85%"> <b><?php echo $key->author; ?></b> </p>
        </div>
    <?php } ?>

</body>

</html>
