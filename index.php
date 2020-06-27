<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <!-- <?php 
// $connect = pg_connect("host=ec2-54-75-246-118.eu-west-1.compute.amazonaws.com port=5432 dbname=d68b22k04uajp user=yvaybjpfqsdvdn password=46ede82150eaabebd555780bdfb738f30cbac10f6a3a116d18511c2492abca6e");
// $query_read=pg_query($connect, 'SELECT * FROM furniture_store.customer');
// $ret='<table>';
// while ($row = pg_fetch_array($query_read, null, PGSQL_ASSOC)) { // пока роу не 0
//                  $ret.='<tr><td>'.$row['one'].'</td>
// <td>'.$row['customer_id'].'</td>
//  <td>'.$row['customer_name'].'</td>
//  <td>'.$row['address'].'</td>
//  <td>'.$row['phone'].'</td></tr>';
//              }
//              $ret.='</table>';
//              echo $ret;
?> -->
    <header class="head-container">
        <div class="head-container_item">mébel</div>
        <div class="head-container_item menu-container">
            <a href="#" class="menu-container_item selected">Home</a>
            <a href="#" class="menu-container_item">About Us</a>
            <a href="#" class="menu-container_item">How it works</a>
            <a href="#" class="menu-container_item">Categories</a>
        </div>
        <a href="#">
            <div class="head-container_item">SIGN UP</div>
        </a>

    </header>
    <main>
        <div class="fon-figure_1"></div>
        <section>
            <div class="main_screen">
                <h2 class="main_screen_h2">Are you looking for <b> woodden furniture</b> for your sweet home?</h2>
                <h1 class="main_screen_h1">This is the Right Place</h1>
                <img src="img/table1.png" alt="coffe table" class="main_screen_pic">
                <a href="#">
                    <div class="main_screen_but">Explore Furniture</div>
                </a>
        </section>

        <section class="aboutus">
            <div class="second-screen">
                <h2 class="second-screen_h2">Who we are</h2>
                <hr class="second-screen_line">

                <h1><a href="#" class="second-screen_h1">ABOUT US</a></h1>
            </div>
            <div class="fon-figure_2"></div>
        </section>
        </div>
    </main>
</body>

</html>