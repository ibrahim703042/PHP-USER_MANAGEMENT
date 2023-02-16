<?php
	// include array
	require ('country/countries-array.php');
	
	function redirect($url, $message){
		$_SESSION['message']=$message;
		echo "<script>window.location.href='$url'</script>";
		exit(0);

	}

	function error($url, $message){
		$_SESSION['error']=$message;
		echo "<script>window.location.href='$url'</script>";
		exit(0);

	}

	function getAll($table){
		global $con;
		$query = "SELECT * FROM  $table";
		return $query_run= mysqli_query($con,$query);


	}

	function getAdmins($table){
		global $con;
		$query = "SELECT * FROM  $table WHERE role_as = 1 OR role_as = 2 ";
		return $query_run= mysqli_query($con,$query);

	}

	function getUsers($table,$role){
		global $con;
		$query = "SELECT * FROM  $table WHERE role_as = '$role' ";
		return $query_run= mysqli_query($con,$query);

	}

	function getByID($table, $id){
		global $con;
		$query = "SELECT * FROM  $table WHERE id= '$id' ";
		return $query_run= mysqli_query($con,$query);

	}

	function index($table){

		global $con;
		$query = "SELECT * FROM  $table ";
		$stmt = $con->prepare($query);
		return $query_run= $stmt->execute();;
		
	}

	function getID($table, $id){

		global $con;

		$stmt = $con->prepare("SELECT * FROM $table WHERE id=:id");
		$stmt->execute(array(":id"=>$id));
		$editRow=$stmt->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	function countries_dropdown($user_country_code='') {
		$option = "";
		foreach ($GLOBALS['countries_list'] as $key => $value) {
			$selected = ($key == $user_country_code ? '' : '');
			$option .= '<option value="'.$key.'"'.$selected.'>'.$value['name'].'</option>'."\n";
		}
		return $option;
	}

	function selected_countries_in_array(){
		global $con;
		$option = "";
		
		if(isset($_GET['id'])){

			$id = $_GET['id'];

			$query = "SELECT * FROM users WHERE id='$id'";
			$run_query = mysqli_query($con,$query);
			
			if(mysqli_num_rows($run_query)>0){
				$row=mysqli_fetch_array($run_query);
				$country_code = $row['country'];

				foreach ($GLOBALS['countries_list'] as $key => $value) {
					$selected = ($key == $country_code ? 'selected' : '');
					$option .= '<option value="'.$key.'"'.$selected.'>'.$value['name'].'</option>'."\n";
				}
			}	
		}
		return $option;
	}
	
	function countries_table() {
		$table = '';
		foreach ($GLOBALS['countries_list'] as $key => $value) {
			$table .= '<tr>';
			$table .= '<td >'.$value['id'].'</td>';
			$table .= '<td >'.$value['name'].'</td>';
			$table .= '<td >'.$key.'</td>';
			$table .= '<td >'." + ".$value['phone'].'</td>';
			$table .= '</tr>'."\n";
		}
		return $table;
	}

?>
