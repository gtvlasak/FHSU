<html>

<head>
    <style>
        td {padding: 6px;}
    </style>
</head>

<body>
<table border="1">
<?php
for($row=1;$row<=6;$row++){
    echo '<tr>';
    for($col=1;$col<=6;$col++){
        $x="$row * $col";
        $y= $row * $col;
        echo "<td>$x ";
        echo "= $y</td>";
    }
}
echo '</tr>';
?>
</table>
</body>

</html>