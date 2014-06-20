<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>AJAX Test</title>
  <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>$id = "<?php echo $id; ?>"</script>
</head>
<body>

<h1>AJAX Testing</h1>

<script>
  $(document).ready(function() {
    $(document).on('click', 'h1', function(){
      $.ajax({
        url: "testajax.php",
        type: "POST",
        data: {
          'id': $id
        }, // end ajax data
        dataType: "json",
        'beforeSend': function() {
          console.log('sending');
        }, // end beforeSend
        'success': function(json) {
          console.log(json);
          console.log(json.post + " " + json.test);
        }
      }); // end ajax
    }); // end document click
  }); // end ready
</script>
<?php
$ajax = array(

    "post" => "good",
    "test" => "success"

);

echo json_encode($ajax);
?>
</body>
</html>