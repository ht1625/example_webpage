<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="jquery.min.js"></script>
  <title>Blog_Page</title>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      text-align: center;
    }

  

    .container {
      float: right;
    }

    .card-img-top {

      height: 15rem;
      object-fit: cover;

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
  </style>

</head>

<body>

<?php $this->load->view("template/navbar") ?> 

    <?php $felsefe = "felsefe";
    $bilgi = "bilgi";
    $ekonomi = "ekonomi";
    $hayat = "hayat";
    $yazılım="yazılım";
    $spor="spor";
    ?>


      <section>
        <div class="container-fluid" style="  padding-top: 150px;z-index: 10;">
          <div class="row col-12 pl-5 ">

            <div class="w2 col-lg-2 col-sm-5 " style="padding-left:3%;"> <br>
              <h2>Kategoriler</h2> <br>
              <div class="form-check" style="font-size:larger;">
                <label class="form-check-label">
                  <ul>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$bilgi"); ?>" style="color:black">Bilgi <br></a></li>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$felsefe"); ?>" style="color:black">Felsefe <br></a></li>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$hayat"); ?>" style="color:black">Hayat <br></a></li>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$ekonomi"); ?>" style="color:black">Ekonomi <br></a></li>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$yazılım"); ?>" style="color:black">Yazılım <br></a></li>
                    <li><a href="<?php echo base_url("Deff/blogsecim/$spor"); ?>" style="color:black">Spor <br></a></li>
                  </ul>
                </label>
              </div>
            </div>

            <div class="col-lg-10 col-sm-7" style="padding-left:9%;">
              <div class="row">
                <?php foreach ($card as $key) { ?>
                  <div class="col-lg-3 col-md-12 col-sm-10 d-flex align-items-stretch m-3">
                    <div class="card" style="box-shadow:3px 3px 3px #152f4f ">
                      <a href="<?php echo base_url("Deff/blogdetay/$key->id"); ?>" style="color:black">
                        <img src="<?php echo $key->image_url; ?>" alt="Avatar" style="width:100%;">
                        <div class="container" >
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

          </div>
        </div>
      </section>


</body>

</html>