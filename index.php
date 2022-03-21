<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>test - loan cal</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.3/css/bootstrap.css'><link rel="stylesheet" href="assets/style.css">

</head>
<body>

<!-- Starting of ajax form -->
<div class="container">
  <h2>Loan Cal, by Bruce</h2>
  <pre>html - ajax - backend </pre>
</div>
<form class="cal__form container" method="post" action="api.php">
    <!-- Starting of successful form message -->
    <div class="row">
        <div class="col-12">
            <div class="alert alert-success cal__msg" style="display: none" role="alert">
                Your message was sent successfully.
            </div>
            <div class="alert alert-success cal_msg" style="display: none" role="alert">

            </div>
        </div>
    </div>
    <!-- Ending of successful form message -->

    <!-- Element of the ajax  form -->
    <div class="row">
        <div class="col-md-6 form-group">
            <input name="amount" type="number" class="form-control" placeholder="amount" required>
        </div>
        <div class="col-md-6 form-group">
            <input name="months" type="number" class="form-control" placeholder="months" required>
        </div>

        <div class="col-12">
            <input name="submit" type="submit" class="btn btn-success" value="Send Message">
        </div>
    </div>
</form>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script><script  src="assets/script.js"></script>

</body>
</html>
