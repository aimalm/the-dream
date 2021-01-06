<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Travelling plan</title>
</head>
<body>

<form name="form" method="GET">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Brazilian Amount</label>
    <input name="brazilian_amount" type="text" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Euro exchange rate</label>
    <input name="euros" type="text" class="form-control" ">
  </div>
  
  <button name="convertbtn" type="submit" class="btn btn-primary">Convert</button>
</form>


<?php
if (isset($_GET['convertbtn']))
{
    if (empty($_GET['brazilian_amount'] and $_GET['euros'])) {
        echo "<h3> You have not entered the amount or the exchange rate";

      }

    elseif(isset($_GET['brazilian_amount'], $_GET['euros'])){
    $brazilian_amount = $_GET['brazilian_amount'];
    $euros = $_GET['euros'];

		$dd_output =$brazilian_amount * $euros;
        echo "<h3> $dd_output";
        
    }
}
?>
    
</body>
</html>