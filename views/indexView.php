<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Upload File</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/mdb.min.css">

    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">

  </head>

  <body>

    <nav class="navbar navbar-dark bg-primary">

      <div class="container-fluid">

        <a class="navbar-brand" href="#"><b>Upload File CSV</b></a>

        <a class="navbar-brand"  href="#"><b>Jose Alves Task</b></a>

      </div>

    </nav>

    <!-- Start your project here-->

    <div class="container">

      <h1 class="display-6 mt-3">Select a file CSV from your PC</h1>

      <form  method="post" enctype= "multipart/form-data"> 
         <div class="form form-black mt-3">
        <input type="file" name="file" class="form-control" required/>
    </div> 
	 

        <!-- Submit button -->

        <button type="submit" name="upload" class="btn btn-info btn-block mb-4 mt-3">Upload File</button>

        <?php if(isset($context['error']) != "True" and !empty($context)){  ?>



          <table class="table table-striped" id="table">

            <thead>

              <th>Category</th>

              <th>Total Cost</th>

            </thead>

            <tbody>

            <?php foreach($context as $category => $result){?>

              <tr>

                <td><?php echo $category; ?></td>

                <td><?php echo $result; ?></td>

              </tr>

              <?php }?>

            </tbody>

          </table>

        <?php } if(isset($context['error']) == "True" and !empty($context)){?>

          <script src="assets/js/sweetalert2.js"></script>

            <script>

              Swal.fire({

                icon: 'error',

                title: 'Oops...',

                text: 'The file must be CSV file!',

              })

            </script>

        <?php } ?>

      </form>

    </div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>

<script type="text/javascript" src="assets/js/mdb.min.js"></script>

<script type="text/javascript" src="assets/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="assets/js/dataTables.buttons.min.js"></script>

<script type="text/javascript" src="assets/js/buttons.html5.min.js"></script>

   <script>

      $(document).ready(function(){

      $('#table').DataTable({

          dom: 'frtpB',

          buttons: [

            {

              header: false,

              extend: 'csvHtml5',

              text : 'Click to download as CSV file',

              className: 'btn btn-success ',

              title : 'ClaromentisTask',

            }

          ]

        });

      });

  </script>

  </body>

</html>

