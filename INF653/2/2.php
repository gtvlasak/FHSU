<html>
<head>
<style>
td {width: 25px; height: 25px;}
</style>
</head>
<body>
<table border="0">
<?php
for($y=1;$y<=8;$y++){
    echo '<tr>';
    for($x=1;$x<=8;$x++){
        if($y%2==0){
            if($x%2==0){
                echo '<td style="background-color: black"> </td>';
            }else{
                echo '<td> </td>';
            }
        }else{
            if($x%2==0){
                echo '<td> </td>';
            }else{
                echo '<td style="background-color: black"> </td>';
            }
        }
    // for(/*from 1 to 8*/){
            //print a column.
        //}
    }
    echo '</tr>';
}
?>
</table>
</body>
</html>