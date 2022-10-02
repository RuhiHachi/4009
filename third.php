        
<style type="text/css">
	.txt{
		width: 100%;
		padding: 10px;
	}
	.p{
		margin-left: 25%;
		margin-right: 25%;
		padding: 10px;
		background: #FBA295;
		color: #3A1082;
		text-align: center;
	}

  table {
  	background: #249391;
  	margin-left: 30%;
  	margin-right: 10%;
  	border-collapse : collapse;

}
tr,td{border: 1px solid black;
	padding: 8px;

}
tr{
	border-top: 1px solid black;
	border-left: 1px solid black;
}
td{
	border-bottom: 1px solid black;
	border-right: 1px solid black;
	padding: 5px
}
tr:hover {
	background-color: white;
}
/*td:nth-child(even){
	background-color: #EB22E5;*/
}

</style>
<p class="p"> Ruhi Hachi</p>
<?php

$item_ID="4009";
$item_Name="Computer";
$qty=2;
$price=12;
$total=$qty *$price;
$discount=3;
$cash=11;

?>  

<table border=1>
	<tr><td> Item ID</td><td> <?php echo "$item_ID";?></td></tr>
	<tr><td> Item Name</td><td> <?php echo "$item_Name";?></td></tr>
	<tr><td> Quantity </td><td> <?php echo "$qty";?></td></tr>
	<tr><td> Price </td><td> <?php echo "$price";?></td></tr>
	<tr><td> Total</td><td> <?php echo "$total";?></td></tr>
    <tr><td> Discount </td><td> <?php echo "$discount";?></td></tr>
    <tr><td> Amount paid </td><td> <?php echo "$cash";?></td></tr>
    <tr><td> Balance </td><td> <?php echo $total-$discount-$cash;?></td></tr>
   

	</table>
