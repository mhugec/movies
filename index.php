<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	
    <link rel="stylesheet" href="css/style.css  ">
</head>


<?php
$data = [
    [
        "title" => "The World's End",
        "genre" => "Sci-fi",
        "year"  => 2013,
        "gross" => 26004851
    ],
    [
        "title" => "Scott Pilgrim vs. the World",
        "genre" => "Sadness",
        "year"  => 2010,
        "gross" => 31524275
    ],
    [
        "title" => "Hot Fuzz",
        "genre" => "Buddy Cop",
        "year"  => 2007,
        "gross" => 23637265
    ],
    [
        "title" => "Shaun of the Dead",
        "genre" => "Zombie",
        "year"  => 2007,
        "gross" => 13542874
    ],
    [
        "title" => "Shaun of the Dead",
        "genre" => "Zombie",
        "year"  => 2007,
        "gross" => 13542874
    ],
  
];

        echo "$ ".number_format($data[0]["gross"]);
        echo "<br>";
        echo "$ ".number_format($data[1]["gross"]);
        echo "<br>";
        echo "$ ".number_format($data[2]["gross"]);
        echo "<br>";
        echo "$ ".number_format($data[3]["gross"]);
        echo "<br>";
        echo "<br>";

        echo "$ ".number_format($data[0]["gross"] + $data[1]["gross"] + $data[2]["gross"]);

        echo "<br>";
?>


<?php

    echo "<br>";
    echo "<br>";
    echo "<br>";

?>

<?php

$total = 0;

foreach ($data as $key => $value) {
     $total += $value['gross'];
}

print_r($total);

?>

<?php

                /*
                $i=0;
                foreach ( $data as $filmy) : 
                    $i++;
                    $bg=($i%2==0?'#344960':'#405770 ');
                ?>
                */
?>

<?php
echo '<pre>';
print_r( $data );
echo '</pre>';
?>

<?php

/*
echo '<ul class="list-group text-left">';
			foreach ($arr as $key => $value) {
				if ( ! $value ) continue;
				echo "<li class=\"list-group-item\"><small class=\"text-info\">$key &hellip;</small> $value</li>";
			}
		echo '</ul>';
*/
?>

<br>
<br>

<table>
    <thead>
        <tr>
        <td style="color: yellow"><b>Title</b></td>
        <td style="color: yellow"><b>Genre</b></td>
        <td style="color: yellow"><b>Year</b></td>
        <td style="color: yellow"><b>Gross</b></td>
        </tr>
    </thead>
    <tbody>
    
    <?php 
            $i=0;
            foreach ($data as $filmy) : 
            $i++;
            $bg=($i%2==0?'#46627f':'#34495E'); 
    ?>   
        <tr style="background-color: <?php echo $bg; ?>;">
        <td><?php echo $filmy['title'] ?></td>
        <td><?php echo $filmy['genre'] ?></td>
        <td><?php echo $filmy['year'] ?></td>
        <td><?php echo "$ ". number_format($filmy['gross'])?></td>
        </tr>
    <?php endforeach ?>
        <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td style="color: yellow"><b><?php echo "$ ". number_format($data[0]["gross"] + $data[1]["gross"] + $data[2]["gross"] + $data[3]["gross"]);?></b></td>
        <td style="color: yellow"><b>
            <?php 
                $sum=0;
                foreach ($data as $key => $sucet) {
                    $sum += $sucet['gross'];
                    }
                        echo "$ ". number_format($sum); 
                        echo "</b></td>"
            ?>   
        </td>
        </tr>
    </tbody>
</table>

<br>
<br>


<table>
<tbody>
<thead>

<tr>
<td>Title</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>

</tr>
</thead>

<tr>
<td>The World's End</td>
<td>Sci-fi &nbsp;</td>
<td>2013</td>
<td>26004851</td>
</tr>
<tr>
<td>Scott Pilgrim vs. the World</td>
<td>Sadness &nbsp;</td>
<td>2010&nbsp;</td>
<td>31524275</td>
</tr>
<tr>
<td>Hot Fuzz</td>
<td>Buddy Cop</td>
<td>2007&nbsp;</td>
<td>23637265 &nbsp;</td>
</tr>
<tr>
<td>Shaun of the Dead&nbsp;</td>
<td>Zombie</td>
<td>2007</td>
<td>13542874 &nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</tbody>
</table>








