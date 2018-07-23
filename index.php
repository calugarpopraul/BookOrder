<?php

/*  VARs
fistname
lastname
address
address2
city
state
zipcode
country
purchase_titles
option1
option2
option3

  */

require 'functions.php';

$yourname="Your Name ";
$totalPrice = 0.00;

    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(isset($_POST['firstname'])&&!empty($firstname)){
            $firstname = $_POST['firstname'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['lastname'])){
            $lastname = $_POST['lastname'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['address'])){
            $address = $_POST['address'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['address2'])){
            $address2 = $_POST['address2'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['city'])){
            $city = $_POST['city'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['state'])){
            $state = $_POST['state'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['zipcode'])){
            $zipcode = $_POST['zipcode'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['country'])){
            $country = $_POST['country'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['purchase_titles'])){
            $purchase_titles = $_POST['purchase_titles'];
            $price1 = $_POST['price_title'];
        } else {
            echo 'Required field empty';
        }

        if(isset($_POST['del-option'])){
            $del_option = $_POST['del-option'];
        } else {
            echo 'Required field empty';
        }

        $orders = get_orders();

        $newOrder = array(
                'firstname'=>$firstname,
                'lastname'=>$lastname
        );

        $orders[]=$newOrder;
        $json = json_encode($orders,JSON_PRETTY_PRINT);
        file_put_contents('data/orders.json',$json);
    }

if(isset($_POST['purchase_titles'])){
    $total = $_POST['price_title'];
}

var_dump($total);
?>


<!DOCTYPE html>
<hmtl lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale="1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" type="text/css" href="css/main.css">

        <title>Book Order</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">

    </head>

    <body id="body">

        <div class="container" id="box">
            <form class="book-form" action="submit.php" method="post" id="form_sub">
            <div class="panel panel-default" >
                    <div class="panel-heading" id="box-heading">

                        <!-- Panel Heading -->

                    </div>

                        <div class="panel-body" id="box-body">
                            <!-- Panel Body -->

                            <h3 id="text-h3">Book Order Form</h3>
                            <p id="text-info" style="padding-left:10px">Please complete this form to place your order. You will be redirected to PayPal upon submission.</p>
                            <hr style="border-top:dotted 1px">

                            <span class="description" id="label-name"><?php echo $yourname; ?></span>

                            <!-- Form First Name && Last Name -->
                           <div class="form" id="form-name">

                               <div class="parent">
                                   <input type="text" name="firstname" class="firstname" id="id_firstname">
                                   <br>
                                   <label for="id_firstname" style="font-size:80%">First</label>
                               </div>

                               <div class="child">
                                   <input type="text" name="lastname" class="lastname" id="id_lastname">
                                   <br>
                                   <label for="id_lastname" style="font-size:80%" >Last</label>
                               </div>
                           </div>
                            <!-- Adress -->
                            <span class="description" id="label-adress">Address</span>
                            <br>
                            <input type="text" id="id_address" name="address" class="address">
                            <br>
                            <label for="id_address" style="font-size:80%" id="label_streetname">Street Address</label>
                            <br>
                            <input type="text" id="id_address2" name="address2" class="address">
                            <br>
                            <lable for="id_address2" style="font-size:80%" id="label_adress2">Address Line 2</lable>
                            <br>
                            <!--  City / State -->
                            <input type="text" name="city" class="city" id="id_city">
                            <input type="text" name="state" class="state" id="id_state">
                            <br>
                            <label for="id_city" style="font-size:80%" id="label_city">City</label>
                            <label for="id_state" style="font-size:80%" id="label_state">State / Province / Region</label>
                            <br>
                            <!-- Zip Code && Country -->
                            <input type="text" id="id_zipcode" name="zipcode" class="zipcode">
                            <select id="id_country" name="country">
                                <option value="" selected="selected"></option>
                                <option value="Romania">Romania</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Germany">Germany</option>
                                <option value="France">France</option>
                                <option value="Spain">Spain</option>
                            </select>
                            <br>
                            <label for="id_zipcode" style="font-size:80%" id="label_zipcode">Postal / ZIP Code</label>
                            <label for="id_country" style="font-size:80%" id="label_country">Country</label>
                            <br>
                            <label class="description" for="id_purchase_titles" id="label_titles">Please select the title you would like to purchase:</label>
                            <br>
                            <!-- Titles -->
                            <select id="id_purchase_titles" name="purchase_titles" class="purchase-options">
                                <option value="" selected="selected"></option>
                                <option value="Web Form Design for Novice($10)" data-price-title="10.00">Web Form Design for Novice($10)</option>
                                <option value="Mastering Web Design($12)" data-price-title="12.00">Mastering Web Design($12)</option>
                                <option value="Learning HTMl for Begginer($15)" data-price-title="15.00">Learning HTMl for Begginer($15)</option>
                                <option value="Form Reference Guide($20)" data-price-title="20.00">Form Reference Guide($20)</option>
                            </select><br><br>
                            <!-- Delivery options -->
                            <label class="description" for="id_delivery_options" id="label_delivery" > Delivery options:</label><br>
                            <input type="radio" id="id_option_1" name="del-option" data-price-del="25.00" value="Paperback ($25)" class="delivery-options"> Paperback ($25)<br>
                            <input type="radio" id="id_option_2" name="del-option" data-price-del="10.00" value="E-Book ($10)" class="delivery-options"> E-Book ($10)<br>
                            <input type="radio" id="id_option_3" name="del-option" data-price-del="35.00" value="PaperBack ($35)"class="delivery-options"> PaperBack ($35)<br>


                        </div>


                    <br><br>
                    <div class="panel-footer" id="box-footer">

                        <!-- Panel Footer -->


                        <h3 id="id_final_price" class="total-label">&dollar</h3><br><br>
                        <label for="id_final_price" style="font-size:90%" id="id_label_total" >TOTAL</label>
                        <button type="submit" class="btn btn-default" id="id_submit_btn">Continue</button>

                    </div>
            </div>
            </form>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
        <script>

            var $price = 0,
                $priceField = $('.purchase-options'),
                $deliveryPrice = 0,
                $deliveryPriceClass = '.delivery-options',
                $deliveryPriceField = $($deliveryPriceClass),
                $total=0.00;


            $(function () {

                updatePrice();
                updateSecPrice($($deliveryPriceClass + ':checked'));



                $priceField.on('change', function () {
                    updatePrice();
                });

                $deliveryPriceField.on('change',function(){
                    updateSecPrice($(this));
                });

            });


            function updateSecPrice($elm){
                $deliveryPrice = $elm.data('price-del');
                console.log($elm.data('price-del'));
                updateTotal();
            }


            function updatePrice() {
                $price = $priceField.children('option:selected').data('price-title');
                console.log($price);
                updateTotal();
            }

            function updateTotal() {
                 $('.total-label').text(parseFloat($price) + parseFloat($deliveryPrice));
                 $total = parseFloat($price)+parseFloat($deliveryPrice);
                 
            }


        </script>
    </body>
</hmtl>