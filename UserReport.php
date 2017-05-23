<html>  
  
<head>  
    <title>User Detail Report</title>  
</head>  
  
<body>  
    <table border="1">  
        <tr>  
            <th>Sr NO. / Id</th>  
            <th width="120">User Id</th>  
            <th>Notebook Name</th> 
             <th>Created At</th> 
              <th>Updated At</th>  
        </tr>  
        <?php  
			$conn = new mysqli('localhost', 'root', '');   
			mysqli_select_db($conn, 'notebook');   
			  
			$sql = mysqli_query($conn,"SELECT `id`,`user_id`,`name`,`created_at`,`updated_at` FROM `notebooks`");  
			  
			  
			while($data = mysqli_fetch_row($sql)){  
			echo '  
			<tr>  
			<td>'.$data[0].'</td>  
			<td>'.$data[1].'</td>  
			<td>'.$data[2].'</td>  
			<td>'.$data[3].'</td>  
			<td>'.$data[4].'</td>  
			</tr>  
			';  
			}  
		?>  
    </table> <a href="UserReport_Export.php"> Export To Excel </a> </body>  
  
</html>  