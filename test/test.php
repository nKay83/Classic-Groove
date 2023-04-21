<?php
$data = (object) array(
  'name' => 'John',
  'age' => 30,
  'gender' => 'male'
);
?>

<html>

<head>
  <script>
    function displayData(data) {
      console.log(data);
    }
  </script>
</head>

<body>
  <button onclick="displayData('<?php echo json_encode($data); ?>')">Display Data</button>
</body>

</html>