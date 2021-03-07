<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Blog_Page</title>
    <style>
        .card-img-top {

            height: 15rem;
            object-fit: cover;

        }

        .card:hover {

            padding: 2%;

        }
    </style>

</head>

<body>
<?php $this->load->view("template/navbar") ?> 
    <div class="container" style="z-index: 10;">
        <div class="row col-12" style="padding-left:30%;padding-top:10%;text-decoration:underline;">
            <h1 style="text-transform:capitalize"><?php
                                                    $temp = $cate[0];
                                                    echo $temp->category;
                                                    ?></h1>
        </div>
        <div class=" row col-12" style="padding: 10%;padding-top:5%;text-align:center">
            <?php foreach ($cate as $key) { ?>
                <div class="col-lg-5 col-md-4 col-sm-10 d-flex align-items-stretch m-4" style="text-align:center">
                    <div class="card" style="box-shadow:3px 3px 3px #152f4f ">
                        <a href="<?php echo base_url("Deff/blogdetay/$key->id"); ?>" style="color:black">
                            <img src="<?php echo $key->image_url; ?>" alt="Avatar" style="width:100%;">
                            <div class="container">
                                <h4><b> <?php echo $key->title; ?> </b></h4>
                                <p> <?php echo $key->author; ?> </p>
                                <p style="font-size:small"><?php echo $key->date; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>