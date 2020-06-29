

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
    <header class="head-container head-container_aboutus">
        <div class="head-container_item">mébel</div>
        <div class="head-container_item menu-container">
            <a href="/?site=home" class="menu-container_item">Home</a>
            <a href="/?site=aboutus" class="menu-container_item">About Us</a>
            <a href="/?site=howworks" class="menu-container_item selected">How it works</a>
            <a href="/?site=categories" class="menu-container_item">Categories</a>
        </div>
        <a href="#">
            <div class="head-container_item">SIGN UP</div>
        </a>
    </header>
    <main>
        <div class="howitworks">
            <h1 class="howitworks_h1"> How to order on our website? It's simple.</h1><br>
            <h1 class="howitworks_count">1</h1>
            <h3 class="howitworks_h3">Decide on the model, color and number of products to order. You can read more
                about this information
                <a href="/?site=categories">here</a>.</h3><br>
            <h1 class="howitworks_count">2</h1>
            <h3 class="howitworks_h3">Leave a request in the form below and we will contact you soon to discuss the
                details of the order.</h3><br>

            <form action="/?site=howworks#form_add" method="POST" id="form_add">
                <h2 class="leave-req">Leave a request</h2>
                <label for="lname">Company name:
                    <input type="text" id="lname" name="lname" class="form_inp">
                </label>
                <label for="laddress">Company address:
                    <input type="text" id="laddress" name="laddress" class="form_inp">
                </label>
                <label for="lphone">Company phone:
                    <input type="text" id="lphone" name="lphone" class="form_inp">
                </label>
                <input type="submit" name="button" value="Leave request" class="form_but">
            </form>
<?php 
if( isset($_POST['button']) && $_POST['button']== 'Leave request')
 {
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
// формируем и выполняем SQL-запрос для добавления записи
 $query_add=pg_query($connect, "INSERT INTO furniture_store.customer (customer_name, address, phone) VALUES ('".
 htmlspecialchars($_POST['lname'])."', '".
 htmlspecialchars($_POST['laddress'])."', '".
 htmlspecialchars($_POST['lphone'])."') RETURNING customer_id ");
$row=pg_fetch_row($query_add);
if(!$query_add)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
echo '<h3 class="howitworks_h3 form_h3">Request number: '.$row[0].'</h3><br>';
}
?>
            <h1 class="howitworks_count">3</h1>
            <h3 class="howitworks_h3">If you want to edit your request, fill out the form below.</h3>
            
            <form action="/?site=howworks#form_edit" method="POST" id="form_edit">
                <h2 class="leave-req">Edit request</h2>
                <label for="enumber">Request number:
                    <input type="text" id="enumber" name="enumber" class="form_inp">
                </label>
                <label for="ename">Company name:
                    <input type="text" id="ename" name="ename" class="form_inp">
                </label>
                <label for="eaddress">Company address:
                    <input type="text" id="eaddress" name="eaddress" class="form_inp">
                </label>
                <label for="ephone">Company phone:
                    <input type="text" id="ephone" name="ephone" class="form_inp">
                </label>
                <input type="submit" name="button" value="Edit request" class="form_but">
            </form>
            <?php 
if( isset($_POST['button']) && $_POST['button']== 'Edit request')
 {
$connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
// формируем и выполняем SQL-запрос для добавления записи
 $query_edit=pg_query($connect, "UPDATE furniture_store.customer SET customer_name='".
 htmlspecialchars($_POST['ename'])."',address='".
 htmlspecialchars($_POST['eaddress'])."', phone='".
 htmlspecialchars($_POST['ephone']).
 "' WHERE customer_id=".$_POST['enumber']);
if(!$query_edit)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
 echo '<h3 class="howitworks_h3 form_h3">Request is changed</h3>';
}
?>
            <h1 class="howitworks_count">4</h1>
            <h3 class="howitworks_h3">If you want to delete a request, use the following form.</h3>
            
            <form action="/?site=howworks#form_delete" class="edit_req" method="POST" id="form_delete">
                <h2 class="leave-req">Delete request</h2>
                <label for="dnumber">Request number:
                    <input type="text" id="dnumber" name="dnumber" class="form_inp">
                </label>
                <input type="submit" name="button" value="Delete request" class="form_but">
            </form>
            <?php 
if (isset($_POST['button']) && $_POST['button']== 'Delete request') {
    $connect = pg_connect("host=ec2-54-247-89-181.eu-west-1.compute.amazonaws.com port=5432 dbname=deo7p7fsv4n4rd user=gqiwqlespsoxlu password=06d89e66430fe535de320a681dd536e2c9cd4cdb47f16957c899f8ecfb032ef7")
 or die('Не удалось соединиться: '.pg_last_error($connect));
    // формируем и выполняем SQL-запрос для добавления записи
    $query_delete=pg_query($connect, "DELETE FROM furniture_store.customer WHERE customer_id=".$_POST['dnumber']);
    if(!$query_delete)
 echo '<h3 class="howitworks_h3 form_h3">Error</h3>';
 else // если все прошло нормально – выводим сообщение
    echo '<h3 class="howitworks_h3 form_h3">Request with number '.$_POST['dnumber'].' has been deleted</h3>';
}
?>
        </div>
    </main>
    <footer>
        <div class="footer_container">
            <div class="footer_container_item">
                <p class="column-head">mébel</p>
                <p class="column-item">(012) 8967453</p>
                <p class="column-item">mébel@gmail.com</p>
                <p class="column-item">Moscow, Russia</p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Product</p>
                <p class="column-item"><a href="#">Furnitures</a></p>
                <p class="column-item"><a href="#">Delivery</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Resources</p>
                <p class="column-item"><a href="#">Blog</a></p>
                <p class="column-item"><a href="#">Delivery</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Company</p>
                <p class="column-item"><a href="#">About Us</a></p>
                <p class="column-item"><a href="#">Our Team</a></p>
            </div>
            <div class="footer_container_item">
                <p class="column-heading">Follow Us</p>
                <p class="column-item"><a href="#">Instagram</a></p>
                <p class="column-item"><a href="#">Twitter</a></p>
            </div>
        </div>
    </footer>
</body>

</html>