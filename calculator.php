<?php
 if($_POST){
    $fnumber=$_POST['fnumber'];
    $snumber=$_POST['snumber'];
    if ($_POST) {
        switch ($_POST['opertion']) {
            case 'add':
                $reuslt = $fnumber+$snumber;
                break;
            case 'sub':
                $reuslt = $fnumber-$snumber;
                break;
            case 'multi':
                $reuslt = $fnumber*$snumber;
                break;
            case 'div':
            $reuslt = $fnumber/$snumber;
            break;
            case 'mod':
        $reuslt = $fnumber%$snumber;
        }

    }
}
?> 
<!doctype html>
<html lang="en">
  <head>
    <title>calculator</title>
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
                        <h1 class="h1 text-dark"> calculator </h1>
                    </div>
                    <div class="col-12">
                        <form  method="post">
                            <div class="form-group">
                              <label for="fnumber">first number</label>
                              <input type="number" name="fnumber" id="fnumber" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="snumber">second number</label>
                              <input type="number" name="snumber" id="snumber" class="form-control" placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                              <label for="opertion">select opertion</label>
                              <select name="opertion" class="form-control"     id="opertion">
                                    <option <?= (isset($_POST['opertion']) && $_POST['opertion'] == 'add') ? 'selected' : '' ?> value="add">add</option>
                                    <option <?php if(isset($_POST['opertion']) && $_POST['opertion'] == 'sub') {echo "selected";} ?>  value="sub">sub</option>
                                    <option <?= (isset($_POST['opertion']) && $_POST['opertion'] == 'multi') ? 'selected' : '' ?> value="multi">multi</option>
                                    <option <?= (isset($_POST['opertion']) && $_POST['opertion'] == 'div') ? 'selected' : '' ?> value="div">div</option>
                                    <option <?= (isset($_POST['opertion']) && $_POST['opertion'] == 'mod') ? 'selected' : '' ?> value="mod">mod</option>
                              </select>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>