<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <div style="height: 200px; width: 100%;background-color:#ee9696; color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 py-5">
                    <h1 style="font-size:60px ;">INVOICE</h1>
                    <img src="images/skincarelogo.png" style="height: 80px;" alt="">
                </div>
                <div class="col-lg-2">
                    
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <div style="height: 500px; width: 100%;background-color:#ddd;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 py-5">
                    <table class="table">
                        <thead class="text-center" style="background-color:#ee9696 ; color:white;">
                            <tr>
                                <th  colspan="2">CUSTOMER DETAILS</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white ; color:gray;">
                            <tr>
                                <td>Fisrt Name:</td>
                                <td> 
                                    <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['fn'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td>
                                <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['ln'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone No: </td>
                                <td>
                                <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['pn'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Address: </td>
                                <td>
                                <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['add'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Postal Code: </td>
                                <td>
                                <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['pc'];
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>City: </td>
                                <td>
                                <?php
                                    if(isset($_POST['invoice']))
                                    {
                                        echo $_POST['city'];
                                    }
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
                <div class="col-lg-6 py-5">
                <table class="table">
                        <thead class="text-center" style="background-color:#ee9696 ; color:white;">
                            <tr>
                                <th  colspan="5">ORDER SUMMARY</th>
                            </tr>
                        </thead>
                        <tbody style="background-color:white ; color:gray;">
                            <tr>
                                <td>Item No:</td>
                                <td>Item Name:</td>
                                <td>Quantity: </td>
                                <td>Price: </td>
                                <td>Subtotal: </td>
                            </tr>
                            <?php 
                            if(isset($_POST['invoice']))
                            {
                            $num=1;
                            $total=0;
                            $tata=0;
                            while($tata<$_POST['e'])

                            {
                                ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td><?php echo $_POST['a']; ?></td>
                                    <td><?php echo $_POST['b']; ?></td>
                                    <td><?php echo $_POST['c']; ?></td>
                                    <td><?php echo $r= $_POST['d']; ?></td>
                                </tr>
                            
                            <?php $num=$num+1;
                            $total = $total+$r;
                            $tata=$tata+1;
                        }?>
                            <tr>
                                <td colspan="4">Total :</td>
                                <td><?php echo $total; ?> </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <p><a href="header.php">Click here </a> to return to home page</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>