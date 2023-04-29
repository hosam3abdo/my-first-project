<?php
$reuslt = 0;
if ($_POST) {
  $f = $_POST['first'];
  $s = $_POST['second'];
  $th = $_POST['third'];
  if ($f > $s and $th) {
    if ($s > $th) {
      $reuslt = $f + $th;
    } else {
      $reuslt = $f + $s;
    }
  }
  if ($s > $f and $th) {
    if ($f > $th) {
      $reuslt = $s + $th;
    } else {
      $reuslt = $f + $s;
    }
  }
  if ($th > $f and $s) {
    if ($f > $s) {
      $reuslt = $s + $th;
    } else {
      $reuslt = $f + $th;
    }
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>MAX&MIN</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="offset-3 col-6">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="h1 text-dark"> MAX and MINI </h1>
          </div>
          <div class="col-12">
            <form  method="post">

              <div class="form-group">
                <label for="first number">first number</label>
                <input type="number" name="first" id="first" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="second">second number</label>
                <input type="number" name="second" id="second" class="form-control" placeholder="" aria-describedby="helpId">
              </div>

              <div class="form-group">
                <label for="third number">third number</label>
                <input type="number" name="third" id="third" class="form-control" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <button class="btn btn-dark rounded"> Calculate </button>
              </div>
            </form>
            <div class="alert alert_success"><?php if (isset($reuslt)) {
                                                echo $reuslt;
                                              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>