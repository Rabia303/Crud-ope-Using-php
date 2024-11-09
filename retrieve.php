<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table class="table">
  <thead class="table-dark"></thead>
  <tbody>
    <tr>
        <th>ID</th>
        <th>USER_NAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
        <th>AGE</th>
        <th>PHONE</th>
        <th>Action </th>
    </tr>
  </tbody>

 -->




<!DOCTYPE html>
<html>

<head>
  <title>CSS Selectors</title>
  <link href="styles.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <table>
    <!-- <caption>
        CSS Selectors
      </caption> -->
    <thead>
      <tr>
        <th>ID</th>
        <th scope="col">USER_NAME</th>
        <th scope="col" rowspan="2">EMAIL</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">AGE</th>
        <th scope="col">PHONE</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>


    <?php

    include('conn.php');
    $sql = "SELECT * FROM `form`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {

    ?>



      <tr>
        <td> <?php echo $row[0]; ?> </td>


        <td> <?php echo $row[1]; ?> </td>


        <td> <?php echo $row[2]; ?> </td>


        <td> <?php echo $row[3]; ?> </td>

        <td> <?php echo $row[4]; ?> </td>

        <td> <?php echo $row[5]; ?> </td>

        <td><a href="delete.php?id=<?php echo $row[0]; ?>">Delete</a> </td>

        <td><a href="edit.php?id=<?php echo $row[0]; ?>">Edit</a> </td>
      </tr>

    <?php

    }

    ?>

    </tbody>
    <tfoot>
     
        <td>Information updated regurarly &copy2023</td>
     
    </tfoot>
  </table>
</body>

</html>



<style>
  table {
    border-collapse: collapse;
    border: .5px solid #E8F1F2;
    font-family: Prompt;
    text-align: left;
    margin: 0 auto;
  }

  table>caption {
    text-transform: uppercase;
    font-weight: bolder;
  }

  th {
    text-transform: uppercase;
    background-color: #172A3A;
    color: #A4C8CB;
    padding: 8px;
    text-align: center;

  }

  tr:nth-child(even) {
    background-color: #E5EFF0;
  }

  td[data-style="bold"] {
    font-weight: bold;
    color: #11202C;
    border-right: 1px solid #C5C7D3;
  }

  td {
    padding: 12px;
    text-align: center;
    color: #11202C;
    border-bottom: 1px solid #C5C7D3;
  }

  tfoot {
   margin-left: 100px;
    background-color: #172A3A;
    text-align: center;
    color: #A4C8CB;
  }

  tbody>tr:hover {
    background-color: #8DE2E2;
  }
</style>