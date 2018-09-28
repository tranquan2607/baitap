<?php 
	require ('data.php');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>cau 5</title>
 </head>
 <body>
 	<table style="border: 1px solid black">
 		<tr >
 			<td style="border: 1px solid black">ID</td>
 			<td style="border: 1px solid black">Name</td>
 			<td style="border: 1px solid black">Gmail</td>
 		</tr>
 			<?php for ($i=0; $i < count($users); $i++): ?>
 			<tr>
 			<td style="border: 1px solid black"><?php echo $users[$i]['id'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['name'];?></td>
 			<td style="border: 1px solid black"><?php echo $users[$i]['email']['gmail'];?></td>
 			</tr>
 			<?php endfor; ?>
 			
 	</table>


 		<form method="get" style="text-align: center;">
 			<input type="txt" name="id" >
 			<input type="submit" name="submit" value="Tim kiem">
 		</form>
 		<?php 
 		if(!empty($_GET['id'])) {?>
 			<table style="border: 1px solid black; margin: auto;">
 			<tr>
 				<td style="border: 1px solid black">ID</td>
 				<td style="border: 1px solid black">Name</td>
 				<td style="border: 1px solid black">Email</td>
 			</tr>
 			<?php for ($i=0; $i < count($users); $i++) { ?>
	 			<?php if ($_GET['id'] == $users[$i]['id']) {
	 				?>
	 				<tr>
 					<td style="border: 1px solid black"><?php echo $users[$i]['id'];?></td>
 					<td style="border: 1px solid black"><?php echo $users[$i]['name'];?></td>
 					<td style="border: 1px solid black"><?php echo $users[$i]['email']['gmail'];?></td>
 					</tr>
	 			<?php } ?>	
 			<?php } ?>
 			</table>
 		<?php } 
 		 else { ?>
 			<p style="text-align: center;">Khong co du lieu</p>
 		<?php } ?>
 		<?php echo sha1("a"); ?>
 		
 		
 		
 		 
 		
 			

 			
 		
 		 
 		
 </body>
 </html>