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
$price
$del_option1

  */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" maximum-scale="1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" type="text/css" href="css/sub.css">

        <title>Book Order Submit</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>

    </head>

    <body id="body">

    <div class="container" id="box">
        <div class="panel panel-default" >
            <div class="panel-heading" id="box-heading">

                <!-- Panel Heading -->

            </div>
            <div class="panel-body" id="box-body">

                <!-- Panel Body -->

                <h3 id="text-h3">Review Your Order</h3>
                <p id="text-info" style="padding-left:10px">Please review your entry below. Click Submit button to finish.</p>
                <hr style="border-top:dotted 1px"><br>
                <!-- Table -->
                <table>
                    <tr>
                        <td class="td_review" id="id_td_name">Your Name</td>
                        <td class="td_review"><?php echo $_POST['firstname']." ".$_POST['lastname']; ?> </td>
                    </tr>
                    <tr>
                        <td class="td_review" id="id_td_address">Address</td>
                        <td class="td_review"><?php echo $_POST['address'].' , '.$_POST['address2'].' , '.$_POST['city'].' , '.$_POST['state'].' , '.$_POST['country'].' , '.$_POST['zipcode']; ?></td>
                    </tr>
                    <tr>
                        <td class="td_review" id="id_td_title">Please select the title you would like to purchase:</td>
                        <td class="td_review"><?php echo $_POST['purchase_titles'];?></td>
                    </tr>
                    <tr>
                        <td class="td_review" id="id_td_delivery">Delivery options</td>
                        <td class="td_review"><?php echo $_POST['del-option']; ?></td>
                    </tr>
                </table>


            <div class="panel-footer" id="box-footer">

                <!-- Panel Footer -->

                <h3 id="id_final_price"></h3><br><br>
                <label for="id_final_price" style="font-size:90%" id="id_label_total">TOTAL</label>
                <button type="submit" class="btn btn-default" id="id_submit_btn">Continue</button>

            </div>

        </div>
    </div>

    </body>


</html>