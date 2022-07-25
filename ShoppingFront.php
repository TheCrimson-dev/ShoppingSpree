<!DOCTYPE html>
<html>
    <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <form action="" method="post">
            <fieldset>
            <label for = "feedback">Please choose which NFT you would like to buy.</label>
            <br>
            <br>
            <label for = "NFTLabel">Select the NFT you want to buy:</label>
            <select name = "NFT">
                <option value = "nft1">
                   <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }
                     $sql = "SELECT itemName FROM items WHERE price='2BTC'";
                     $result = $conn->query($sql);
                     
                     if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["itemName"];
                
                        }
                      } else {
                        echo "Gap NFT";
                      }
                     
                   ?>
                </option>
                <option value = "nft2">
                   <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }
                     $sql = "SELECT itemName FROM items WHERE price='0.1BTC'";
                     $result = $conn->query($sql);
                     
                     if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["itemName"];
                           
                        }
                      } else {
                        echo "Ugene NFT";
                      }
                     
                   ?>
                </option>
                <option value = "nft3">
                   <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }
                     $sql = "SELECT itemName FROM items WHERE price='420BTC'";
                     $result = $conn->query($sql);
                     
                     if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "" . $row["itemName"];
            
                        }
                      } else {
                        echo "Brown NFT";
                      }
                     
                   ?>
                </option>
            </select>
            <input type="submit" name="submit" value="Select"/>
            <br>
            <br>
            <label for = "Namenft">Name of NFT:</label>
            <label for = "name">
            <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                       
                     }
                    
                    
                    if (isset($_POST['NFT'])) {
                        $price = $_POST['NFT'];
                        switch ($price) {
                            case 'nft1':
                                $sql = "SELECT itemName FROM items WHERE itemName='Gap NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["itemName"];
                                    }
                                } else {
                                    echo "Gap NFT";
                                }
                                break;
                            case 'nft2':
                                $sql = "SELECT itemName FROM items WHERE itemName='Ugene NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["itemName"];
                                    }
                                } else {
                                    echo "Ugene NFT";
                                }
                                break;
                            case 'nft3';
                            $sql = "SELECT itemName FROM items WHERE itemName='NFT Brown'";
                            $result = $conn->query($sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "" . $row["itemName"];
                                }
                            } else {
                                echo "Brown NFT";
                            }
                                break;
                            default:
                                break;
                        }    
                    }

                     
                     
                   ?>
            </label>
            <br>
            <br>
            <label for = "priceName">Price of NFT:</label>
            <label for = "price">
            <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                       
                     }
                    
                    
                    if (isset($_POST['NFT'])) {
                        $price = $_POST['NFT'];
                        switch ($price) {
                            case 'nft1':
                                $sql = "SELECT price FROM items WHERE itemName='Gap NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["price"];
                                    }
                                } else {
                                    echo "Sold Out";
                                }
                                break;
                            case 'nft2':
                                $sql = "SELECT price FROM items WHERE itemName='Ugene NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["price"];
                                    }
                                } else {
                                    echo "Sold Out";
                                }
                                break;
                            case 'nft3';
                            $sql = "SELECT price FROM items WHERE itemName='NFT Brown'";
                            $result = $conn->query($sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "" . $row["price"];
                                }
                            } else {
                                echo "Sold Out";
                            }
                                break;
                            default:
                                break;
                        }    
                    }

                     
                     
                   ?>
            </label>
            <br>
            <br>
            <label for = "descName">Description:</label>
            <label for = "desc">
            <?php
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                   
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                       
                     }
                    
                    
                    if (isset($_POST['NFT'])) {
                        $price = $_POST['NFT'];
                        switch ($price) {
                            case 'nft1':
                                $sql = "SELECT itemDesc FROM items WHERE itemName='Gap NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["itemDesc"];
                                    }
                                } else {
                                    echo "N/A";
                                }
                                break;
                            case 'nft2':
                                $sql = "SELECT itemDesc FROM items WHERE itemName='Ugene NFT'";
                                $result = $conn->query($sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "" . $row["itemDesc"];
                                    }
                                } else {
                                    echo "N/A";
                                }
                                break;
                            case 'nft3';
                            $sql = "SELECT itemDesc FROM items WHERE itemName='NFT Brown'";
                            $result = $conn->query($sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "" . $row["itemDesc"];
                                }
                            } else {
                                echo "N/A";
                            }
                                break;
                            default:
                                break;
                        }    
                    }

                     
                     
                   ?>
            </label>
            <br>
            <br>
            <?php
             if (isset($_POST['buyFunction'])) {
              switch ($_POST['buyFunction']) {
                  case 'Buy NFT':
                    buyFunction();
                    break;
              }
            }

            if (isset($_POST['updatePrices'])) {
                switch ($_POST['updatePrices']) {
                    case 'Update Prices':
                      updatePrices();
                      break;
                }
              }

            

            function updatePrices(){

                $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   
                   $conn = new mysqli($servername, $username, $password, $dbname);
                  //  echo "hello";
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                       
                     }
                    
                    $sqlGap = "SELECT itemName FROM items WHERE itemName='Gap NFT'";
                    $resultGap = $conn->query($sqlGap);
                    $sqlUgene = "SELECT itemName FROM items WHERE itemName='Ugene NFT'";
                    $resultUgene = $conn->query($sqlUgene);
                    $sqlBrown = "SELECT itemName FROM items WHERE itemName='NFT Brown'";
                    $resultBrown = $conn->query($sqlBrown);

                    if ($resultGap == true){
                        $sql1 = "UPDATE items SET price='4BTC' WHERE itemName='Gap NFT'";
                        $conn->query($sql1);
                    }
                    if ($resultUgene == true){
                        $sql2 = "UPDATE items SET price='2.5BTC' WHERE itemName='Ugene NFT'";
                        $conn->query($sql2);
                    }
                    if ($resultBrown == true){
                        $sql3 = "UPDATE items SET price='515BTC' WHERE itemName='NFT Brown'";
                        $conn->query($sql3);
                    }
                exit;
            }
              function buyFunction() {
                   $servername = "localhost";
                   $username = "root";
                   $password = "hh2olobtg19730zs1";
                   $dbname = "shop";
                   $conn = new mysqli($servername, $username, $password, $dbname);
                  //  echo "hello";
                   if ($conn->connect_error) {
                       die("Connection failed: " . $conn->connect_error);
                     }
                    if (isset($_POST['NFT'])) {
                        $price = $_POST['NFT'];
                        switch ($price) {
                            case 'nft1':
                              $sql = "DELETE FROM items WHERE itemName='Gap NFT'";
                              $conn->query($sql);
          
                                break;
                            case 'nft2':
                              $sql = "DELETE FROM items WHERE itemName='Ugene NFT'";
                              $conn->query($sql);
                                
                                break;
                            case 'nft3';
                              $sql = "DELETE FROM items WHERE itemName='NFT Brown'";
                              $conn->query($sql);
                                break;
                            default:
                                break;
                        }    
                    }
                exit;
              }
            ?>
            <input type="submit" class="button" name="buyFunction" value="Buy NFT"/>
            <input type="submit" class="button" name="updatePrices" value="Update Prices"/>
            </fieldset>

        </form>
    </body>
</html>