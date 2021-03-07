<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="jquery.min.js"></script>
  <title>Blog_Page</title>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      text-align: center;
    }

    .container1-fluid {
      display: grid;
      grid-template-areas: "B B A A A";
      box-sizing: border-box;
      padding-top: 100px;
      border: 2px solid black;
      padding-left: 25px;
      padding-right: 25px;
     


    }
  /*
      display: flex;
     flex-direction: row;
            flex-wrap: wrap;*/

    .container {

      float: right;
    }

    .box1 {
      grid-area: A;
    }

    .box2 {
      grid-area: B;
    }

    .searc {
      width: 100%;
      font-size: 20px;

    }

    ul {
      list-style: none;
      font-size: 110%;
    }

    ul li::before {
      content: "\2022";
      color: #152f4f;
      font-weight: bold;
      display: inline-block;
      width: 1em;
      margin-left: -1em;
    }

    @media screen and (max-width: 600px) {
      .searc {
        float: none;
      }

      .search button {
        float: none;
        display: block;
        text-align: left;
        width: 100%;
        margin: 0;

      }

      .topnav input[type=text] {
        border: 1px solid #ccc;
      }

    }
  </style>

</head>

<body>

  <?php $felsefe = "felsefe";
  $bilgi = "bilgi";
  $ekonomi = "ekonomi";
  $hayat = "hayat";
  ?>

  <div class="container1-fluid box1">
    <div class="row col-12">
      <div class="blox2 col-4">

        <form action="/action_page.php" class="searc">
          <input type="text" placeholder="Search.." name="search">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
        <br> <br>
        <h4>Kategoriler</h4> <br>

        <div class="form-check">
          <label class="form-check-label">
            <ul>
              <li><a href="<?php echo base_url("Deff/blogsecim/$bilgi"); ?>" style="color:black">Bilgi <br></a></li>
              <li><a href="<?php echo base_url("Deff/blogsecim/$felsefe"); ?>" style="color:black">Felsefe <br></a></li>
              <li><a href="<?php echo base_url("Deff/blogsecim/$hayat"); ?>" style="color:black">Hayat <br></a></li>
              <li><a href="<?php echo base_url("Deff/blogsecim/$ekonomi"); ?>" style="color:black">Ekonomi <br></a></li>
            </ul>
          </label>
        </div>


      </div>


      <div class="col-8" style="border:3px solid red;">

        <div class="container-fluid">
          <div class="row col-12">
          <div class="d-flex flex-row ">
            <?php foreach ($card as $key) { ?>

              
                <a href="<?php echo base_url("Deff/blogdetay/$key->id"); ?>" style="color:black">
                  <img src="<?php echo $key->image_url; ?>" alt="Avatar" style="width:100%">
                  <div class="container">
                    <h4><b> <?php echo $key->title; ?> </b></h4>
                    <p> <?php echo $key->author; ?> </p>
                  </div>
                </a>
                </div>
              

            <?php } ?> </div>
          </div>
        </div>

      </div>


    </div>

  </div>




</body>

</html>




<!-- echo base_url("Blogdetay/$key->id"); -->