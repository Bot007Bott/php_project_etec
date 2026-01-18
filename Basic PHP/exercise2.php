<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        .row {
            display: flex;
        }
        #cellcardAd {
            width: 100%;
            height: 250px;
        }
        .menu {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-evenly;
            background-color: red;
        }
        .menu a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            padding: 15px;
        }
        .menu a:hover {
            background-color: #08080824;
        }
        video {
            padding: 0;
            margin: 0;
        }
        .column1 {
            width: 30%;
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: start;
            margin: 0;
        }
        .column2 {
            margin-top: 15px;
            width: 70%;
            float: right;
        }
        .row .left,.right{
            width: 50%;
            padding: 25px;
            background-color: green;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background-color: black;
            font-size: 25pt;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <img src="https://pelprek.sgp1.digitaloceanspaces.com/banner/18/156152298696483.png" alt="cellcardAd" id="cellcardAd">
        </div>
        <div class="row" style="margin-bottom: 0px;">
            <div class="menu">
                <a href="">Home</a>
                <a href="">About</a>
                <a href="">Tech</a>
                <a href="">Social</a>
                <a href="">Sport</a>
                <a href="">AUTO TALK</a>
                <a href="">PODCAST</a>
                <a href="">DEALS</a>
            </div>
        </div>
        <div class="row" style="margin-top: 0px;">
            <div class="column1">
                <video width="320" height="240" controls loop style="margin-top: -15px;">
                    <source src="vid1.mp4" type="video/mp4">
                </video>
                <video width="320" height="240" controls loop>
                    <source src="vid2.mp4" type="video/mp4">
                </video>
            </div>
            <div class="column2">
                <h1><strong>Best Selling Products</strong></h1>
                <div>
                    <button class="btn btn-outline-dark btn-light">Download CSV</button>
                    <button class="btn btn-outline-dark btn-light">Email Report</button>
                </div> <br>
                <div>
                    <form action="" style="float: right;">
                        <label for="search">Search:</label> &emsp13;
                        <input type="text" name="" id="" style="border-radius: 7px;">
                    </form>
                </div>
                <?php
                    $product1 = "Bacon";
                    $inventory1 = 240;
                    $unitPrice1 = 9.64;
                    $quantitySold1 = 1594;

                    $product2 = "Eggs";
                    $inventory2 = 312;
                    $unitPrice2 = 4.25;
                    $quantitySold2 = 2108;

                    $product3 = "Milk";
                    $inventory3 = 185;
                    $unitPrice3 = 3.89;
                    $quantitySold3 = 1876;

                    $product4 = "Bread";
                    $inventory4 = 420;
                    $unitPrice4 = 2.75;
                    $quantitySold4 = 2543;

                    $product5 = "Cheese";
                    $inventory5 = 267;
                    $unitPrice5 = 7.50;
                    $quantitySold5 = 1923;

                    $product6 = "Butter";
                    $inventory6 = 198;
                    $unitPrice6 = 5.99;
                    $quantitySold6 = 2287;
                ?>
                <div>
                    <table class="table table-striped table-hover text-start mt-5"> 
                        <tr>
                            <th>Producnt Name</th>
                            <th>Inventory</th>
                            <th>Unit Price</th>
                            <th>Quantity Sold</th>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product1."</td>";
                                echo "<td>".$inventory1."</td>";
                                echo "<td>{$unitPrice1}</td>";
                                echo "<td>{$quantitySold1}</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product2."</td>";
                                echo "<td>".$inventory2."</td>";
                                echo "<td>{$unitPrice2}</td>";
                                echo "<td>{$quantitySold2}</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product3."</td>";
                                echo "<td>".$inventory3."</td>";
                                echo "<td>{$unitPrice3}</td>";
                                echo "<td>{$quantitySold3}</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product4."</td>";
                                echo "<td>".$inventory4."</td>";
                                echo "<td>{$unitPrice4}</td>";
                                echo "<td>{$quantitySold4}</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product5."</td>";
                                echo "<td>".$inventory5."</td>";
                                echo "<td>{$unitPrice5}</td>";
                                echo "<td>{$quantitySold5}</td>";
                            ?>
                        </tr>
                        <tr>
                            <?php
                                echo "<td>".$product6."</td>";
                                echo "<td>".$inventory6."</td>";
                                echo "<td>{$unitPrice6}</td>";
                                echo "<td>{$quantitySold6}</td>";
                            ?>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div> <br>
        <div class="row">
            <div class="left">About Us</div>
            <div class="right">Social Media</div>
        </div>
    </div>
</body>
</html>