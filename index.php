<!DOCTYPE html>
<html lang="en">
<head>
  <!-- naming the site -->
    <title>DoYouThinkHeSaurus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="custom.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<div class="col-sm-12">
  <!-- title of site -->
  <div class="jumbotron text-center" >
  <h1>Do You Think He Saurus</h1>
  <h3>Make your documents more interesting by improving your vocabulary!</h3>
  <!-- end title -->
  </div>
</div>
<!-- new container -->
<div class="container">
  <!-- new row -->
  <div class="row">
    <!-- column for search method -->
    <div class="col-sm-4">
      <form action="pullFromIndex.php" method="post">
        <input type="text" name="search" value="">
        <input type="submit" value="Search">
      </form>
    <!-- end search column -->
    </div>
    <!--column for document -->
    <div class="col-sm-4">
      <?php include_once /** this is where lewis needs to method **/ 
       ?>
    <!-- end document column -->
    </div>
  <!--end empty row -->
  </div>
  <!-- new row -->
  <div class="row">
    <!--empty column for white space -->
    <div class="col-sm-4">
    </div>
    <!-- place for document upload -->
    <div class="col-sm-4">
      <form action="action_page.php" method="post">
        <input type="file" name="Doc" accept="file_extension">
        <br></br>
        <input type="submit">
      </form>
    </div>
  <!-- end row -->
  </div>
<!-- end container -->
</div>
</body>
