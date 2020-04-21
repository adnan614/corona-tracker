<?php
   include "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Bootstrap Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/86a236e3ba.js" crossorigin="anonymous"></script>

    <!-- My Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <title>Covid-19 Update</title>
</head>
<body>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Update</h1>
        <h5 class="text-muted">An Open Source project to keep track of all the COVID-19 cases around the world.</h5>
    </div>
    <div class="container my-5">
      <div class="row text-center">
        <div class="col-4 text-warning">
             <h5>Confirmed</h5>
             <?php echo $total_confirmed;  ?>
        </div>
        <div class="col-4 text-success">
             <h5>Recovered</h5>
             <?php echo $total_recovered;  ?>
        </div>
        <div class="col-4 text-danger">
             <h5>Deaths</h5>
             <?php echo $total_deaths;  ?>
        </div>
      </div>
    </div>
    <div class="container bg-light p-3 my-3 text-center">
      <h5 class="text-info">"Prevention is the cure."</h5>
      <p class="text-muted">Stay Home Stay Safe.</p>
    </div>
    <div class="container-fluid">
        <table class="table" id="data">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Death</th>
                </tr>
            </thead>
            <tbody>
                 <?php
                     foreach($data as $key=> $value){
                         $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                 ?>
                 
                
                  <tr>
                   <td><?php echo $key; ?></td>
                   <td>
                     <?php echo $value[$days_count]['confirmed']; ?>
                     <?php if($increase !=0){?>
                       <small class="text-danger p-3"><i class="fas fa-arrow-up"></i><?php  echo $increase; ?></small>
                     <?php } ?>
                   </td>
                   <td>
                     <?php echo $value[$days_count]['recovered']; ?>
                   </td>
                   
                   <td>
                     <?php echo $value[$days_count]['deaths']; ?>
                   </td>
                   </tr>

                 <?php } ?>
            </tbody>
        </table>
    </div>
  <footer class="footer mt-auto py-3">
         <div class="container">
            <span class="text-muted">Copyright &copy;Adnan Faruque Alvi</span>
         </div>
  </footer>
</body>
</html>