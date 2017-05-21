<?php 
include_once("inc/db.php");

$name = $_POST['name'];
    
$sql = "SELECT DISTINCT id,name,colgid,email,phone,type,dept,dob,gender,reg_date FROM myguests WHERE name LIKE '%$name%' OR colgid LIKE '%$name%' OR email LIKE '%$name%' OR phone LIKE '%$name%' OR type LIKE '%$name%' OR dept LIKE '%$name%' OR  dob LIKE '%$name%' OR gender LIKE '%$name%' OR reg_date LIKE '%$name%' ";
  
  $selected = $conn->query($sql);
?>
        <div class="<?php if (mysqli_num_rows($selected) > 0) { 
                      echo "positive-result";
                     } else { echo "ui negative message"; } ?>">
          <div class="header">
            <?php if (mysqli_num_rows($selected) > 0) { 
                      echo "<h4>YOUR RESULTS</h4>";
                     } else { echo "<h4>Sorry ...!!  No Results Match Your Query</h4>"; } ?>
          </div>
          </div>

    <input type='hidden' id='current_page' />
    <input type='hidden' id='show_per_page' />
    <div id="content">
          <?php 
          while($row = $selected->fetch_assoc()){
            $name = $row['name'];
            $colgid = $row['colgid'];
            $email  = $row['email'];
            $phone = $row['phone'];
            $type = $row['type'];
            $dept = $row['dept'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $reg_date = $row['reg_date'];
          ?>

<div class="container">
  <div class="row">
    <div class="col s12">
        <div class="card">
          <div class="card-content zeropadding">
             <?php echo "<span class='card-title'>Name : " . $name . "</span>"; ?></div>
                <div class="card-content zeropadding">
                  <?php echo "<p style= 'font-weight:bold;'>Colg Id : " . $colgid . "</p>"; ?>
                </div>
              <div class="card-content zeropadding">
                <?php echo "<p style= 'font-weight:bold;'>Branch : " . $dept . "</p>"; ?>
              </div>
              <div class="card-content zeropadding">
                <?php echo "<p style= 'font-weight:bold;'>Email Id : " . $email . "</p>"; ?>
              </div>
              <div class="card-content zeropadding">
                <?php echo "<p style= 'font-weight:bold;'>Phone No. : " . $phone . "</p>"; ?>
              </div>
              <div class="card-content zeropadding">
                <?php echo "<p style= 'font-weight:bold;'>Type : " . $type . "</p>"; ?>
              </div>
              <div class="card-content zeropadding">
                <?php echo "<p style= 'font-weight:bold;'>Birthday : " . $dob . "</p>"; ?>
              </div>
              <a class="btn-floating halfway-fab waves-effect waves-light red selectcompany"  href="#modal1"><i class="material-icons">add</i></a>
        </div>
    </div>     
  </div>
</div>
</div>


<?php } ?>
</div>

<div class="col-md-12">
<?php if (mysqli_num_rows($selected) > 0) { echo "<div id='page_navigation' style='margin-top: 35px; margin-bottom: 50px; '></div>";
  
 } else { echo "<div id='page_navigation' style='display: none;'></div>";  } ?>
</div>

<div id="modal1" class="modal">
    <div class="modal-content">
      <h4><?php echo $name; ?></h4>
      <p><?php echo $phone; ?></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>