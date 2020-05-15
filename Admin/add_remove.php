<!DOCTYPE html>
<html>
<head>
	<title>Bookistan</title>
	<link rel="stylesheet" type="text/css" href="css/side_navigation.css">
	<style>
		.add,td{
			padding: 5px;
			font-size: 20px;
		}
		.add,input[type='text']{
			border-radius: 5px;
			height: 30px;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div id="mySidenav" class="sidenav" style="width:250px;float: right">
	<span style="color: white;font-size: 40px">BOOKISTAN</span><br><br>
 <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
  <a href="admin_homepage.php">Home</a>
  <a href="total_book.php">Total Books</a>
  <a href="book_genre.php">Books By Genre</a>
  <a href="book_sale_request.php">Book Sale Request</a>
  <a href="add_remove.php">Add or Remove a book</a>
  <a href="donate.php">Donation of Book</a>
  <a href="requested_book.php">Requested Book</a>
</div>

<span style="margin-left: 400px;font-size: 30px">Add Book<span style="margin-left: 300px">Remove Book</span></span>
<div id="add" style="margin-left: 300px;border-style: solid;border-width: 1px;width: 400px">
	<form action="#" method="post">
		<table>
			<tr>
				<td>Book Name:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Book ISBN No:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Book Author Name:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Book Description:</td>
				<td><textarea></textarea></td>
			</tr>
			<tr>
				<td>Book Genre:</td>
				<td><select style="border-radius: 5px;width: 150px">
						<option>Crime</option>
						<option>Crime</option>
						<option>Crime</option>
						<option>Crime</option>	
					</select>
			</td>

			</tr>
			<tr>
				<td>Book Cost:</td>
				<td><input type="text" name=""></td>
			</tr>
		</table> 
		<input type="submit" name="" value="Add a Book" style="width: 300px;height: 30px;margin-left: 50px">
	</form></div>
	<div id="remove" style="margin-top: -320px;margin-left:800px;border-style: solid; border-width: 1px;width:400px">
	<form action="#" method="post">
		<table>
			<tr>
				<td>Book ISBN No:</td>
				<td><input type="text" name=""></td>
			</tr>
			<tr>
				<td>Book Genre:</td>
				<td><select style="border-radius: 5px;width: 150px">
						<option>Crime</option>
						<option>Crime</option>
						<option>Crime</option>
						<option>Crime</option>	
					</select>
			</td>

			</tr>
		</table> 
		<input type="submit" name="" style="width: 300px;height: 30px;margin-left: 50px">
	</form>

</div>
</body>
</html>