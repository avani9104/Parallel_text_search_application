<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
</head>
<style>
body{
    background-color:#58D68D;
}
table, th, td {
  border: 1px solid black;
}

table {
  width: 50%;
}
td {
  text-align: center;
  font-weight:bold;
  font-size: 20px;
  padding: 15px;
  color:white;
}
tr:hover {background-color: red;}
.center {
  margin-left: auto;
  margin-right: auto;
}
</style>

<body>
<?php
$query = $_GET['query'];

 
        $raw_results = mysqli_query($con,"SELECT * FROM list WHERE word = '$query' ");
            
            if(mysqli_num_rows($raw_results)==0)
              echo "No Results Found";
            else
            {
              while($row=mysqli_fetch_array($raw_results)){


                       $a = $row['1'];
                       $b = $row['2'];
                       $c = $row['3'];
                       $d = $row['4'];
                       $e = $row['5'];

                       $arr2=array();

                       $arr = array("first.txt"=>$a,"second.txt"=>$b,"third.txt"=>$c,"fourth.txt"=>$d,"fifth.txt"=>$e);


                        arsort($arr);
                       foreach ($arr as $key => $value) {
            array_push($arr2, $key);
            array_push($arr2,$value);

}

?>
<br>
<div class="container">
  <center> <h2>Word Search Results In All Documents</h2> </center>
  <br><br>      
  <table class="center">
    <thead>
      <tr>
        <th>Document</th>
        <th>Frequency</th>
        <th>Rank</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td><?php echo $arr2[0];?></td>
        <td><?php echo $arr2[1];?></td>
        <td>1</td>
      </tr>
      <tr>
        
        <td><?php echo $arr2[2];?></td>
        <td><?php echo $arr2[3];?></td>
        <td>2</td>
      </tr>
      <tr>
        
        <td><?php echo $arr2[4];?></td>
        <td><?php echo $arr2[5];?></td>
        <td>3</td>
      </tr>
      <tr>
        
        <td><?php echo $arr2[6];?></td>
        <td><?php echo $arr2[7];?></td>
        <td>4</td>
      </tr>
      <tr>
        
        <td><?php echo $arr2[8];?></td>
        <td><?php echo $arr2[9];?></td>
        <td>5</td>
      </tr>
    </tbody>
  </table>
</div>

<?php

              }
            }

?>      
</body>
</html>
