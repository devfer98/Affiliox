<!DOCTYPE html>
<html>
<head>
  <title>Promoter Statistics</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="shortcut icon" href="/images/promoter/logoOnly.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="/css/promoter/promoter-statistics-css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans&display=swap" rel="stylesheet">
  <script src="/js/promoter/promoter-statistics-js.js"></script>
</head>
<body>
   
    <!-- inner part of the evry dashboard -->
              
    <div class="container">
      <h2><i class="fas fa-chart-line"></i>&nbsp; &nbsp;Promoter Statistics</h2>
   
      <div class="inner-part">
          <br>
            <p>Their effectiveness can be determined based on the current statistics of the promoter. The order number, the full amount of the order and the total commission earned from the promotion. Also available is a collection of Links used for promotion.</p>
            <div class="error-msg">
              <p><?php if(isset($this->empty) and !empty($this->empty)){echo $this->empty;}  ?></p>
            </div>
          <div class="inner-part">
              <?php  
                    if(isset($this->UImsg1) and !empty($this->UImsg1)){
                    echo "<table>";    
                          echo "<tr>";
                              echo "<th>Order ID</th>";
                              echo "<th>All charges on the order</th>";
                              echo "<th>Commision Earned</th>";
                          echo "</tr>";     
                    while($row1 = $this->UImsg1->fetch_assoc()) {
                      echo "<tr>";
                              echo "<td>" . $row1['orderID'] . "</td>";
                              echo "<td>" . number_format($row1['amount'],2) . " Rs" . "</td>";
                              echo "<td>" . number_format($row1['totalCommission'],2) . " Rs" . "</td>";
                      echo "</tr>";
                      }   	
                    }
                  echo "</table>";   
              ?>

                  <?php  
                    if(isset($this->UImsg3) and !empty($this->UImsg3)){
                      while($row3 = $this->UImsg3->fetch_assoc()){               
                  ?>
                    <table>
                      <tr>
                          <th>Total Selected Links for Promote</th>
                          <th><?php echo $row3['num_of_links']?></th>  
                      </tr>
                      <?php  
                        if(isset($this->UImsg2) and !empty($this->UImsg2)){
                        while($row2 = $this->UImsg2->fetch_assoc()){   
                      ?>
                      <tr>
                          <th>Total Commission Earned</th>
                          <th><?php echo number_format($row2['total'],2)?> Rs </th>
                      </tr>
                      <?php
                          }
                        }
                    ?>
                    </table>
                  <?php
                    }
                  }
                  ?>
          </div>  
          </div> <!-- inner-part -->
        </div> <!-- container --> 
        <hr style="height:2px;border:none;color:#333;background-color:#333;">
           
      <!-- bottom-part-------------------------------------------->
</body>
</html>
