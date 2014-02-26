<!DOCTYPE html>
<html>
<head>
  <title>Exercise 12: Forms + HTML</title>
</head>
<body>
  <?php
  
    $months = array("january" => 31,
                    "february" => "28 days, if leap year 29",
                    "march" => 31,
                    "april" => 30,
                    "may" => 31,
                    "june" => 30,
                    "july" => 31,
                    "august" => 31,
                    "september" => 30,
                    "october" => 31,
                    "november" => 30,
                    "december" => 31
                    );
  function option($month){
      echo '<option value="'.$month.'">'.ucfirst($month).'</option>';
    }
  ?>
   <form action="" method="GET">
 
    <p>Please choose a month.</p>
 
    <select name="month">
     <?php
	 foreach ($months as $k => $v){
          option($k);
        }
      ?>
        </select>
 
    <!-- Submit button -->
    <input type="submit" value="Submit">
  </form>
   <p>
    <?php
      if (!empty($_GET['month'])) {
		   $month = $_GET['month'];
		   
		    echo "The month of $month has ".$months[$month]." days.";
      };
    ?>
    
     </p>
</body>
</html>
