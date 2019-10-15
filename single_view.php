
<?php 

include "sql_config.php";

$id = $_GET['id'];

              
$sql = "SELECT * FROM member_data WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Sidebar template</title>
<<<<<<< HEAD
   

    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
     

=======
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
     <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" id="bootstrap-css">

		
		
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

     
>>>>>>> upto table add in single view .php
    <link href="css/sweetalert2.min.css" rel="stylesheet">

    <link href="css/simple-sidebar.css" rel="stylesheet">

<<<<<<< HEAD
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 


</head>

<style>
=======
    <link href="css/font-awesome-all-min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
 




</head>

<style>


     .box
   {
    width:100%;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
   }

>>>>>>> upto table add in single view .php
    .header-top-bg{
    background: #004d66;
  }
  body{
    

<<<<<<< HEAD

  font-family: 'SolaimanLipi', sans-serif !important;
=======
    background-color:#f1f1f1;
    font-family: 'SolaimanLipi', sans-serif !important;
>>>>>>> upto table add in single view .php
    padding:0;
    margin:0;
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#eeeeee+0,cccccc+100 */
background: rgb(238,238,238); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(238,238,238,1) 0%, rgba(204,204,204,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(238,238,238,1) 0%,rgba(204,204,204,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#eeeeee', endColorstr='#cccccc',GradientType=0 ); /* IE6-9 */

   } 
</style>

<body>

        <h2  class="text-white header-top-bg text-center pt-1 pb-1">সদস্য</h2>

<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-dark border-right" id="sidebar-wrapper">
  <div class="sidebar-heading text-white">তরুন সংঘ একতা সমিতি লিঃ</div>
  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">মূলপাতা</a>
    <a href="running_member.php" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">সদস্য</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Overview</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Events</a>
    <a href="#" class="list-group-item border-bottom border-top text-white list-group-item-action bg-dark">Profile</a>
    <a href="#" class="list-group-item border-top text-white list-group-item-action bg-dark">Status</a>
   
  </div>
</div>
<!-- /#sidebar-wrapper -->



<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom">
    <button class="btn btn-primary btn-sm" id="menu-toggle"><<||>></button>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2"><span><i class="fa fa-tachometer-alt"></i></span> বর্তমান সদস্য</a>
    <?php echo "<a class='btn btn-sm btn-danger ml-2' id='alert' href='delete.php?id=" .  $row["id"] . "'>ডিলিট</a>"; ?>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="running_member.php" class="btn btn-sm btn-secondary ml-2">বর্তমান সদস্য</a>
    <a href="add_member.php" class="btn btn-sm btn-info ml-2">সদস্য যোগ করুন</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          সদস্য
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="running_member.php">বর্তমান সদস্য</a>
            <a class="dropdown-item" href="#">পরিশোধকৃত সদস্য</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">সদস্য</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>


 
 


 
<div class="container mt-3">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">

            <?php  
                echo "<div id='img_div'>";
                echo "<img alt='image of ". $row["m_name"] ." '  class='img-thumbnail rounded' src='images/".$row['image']."' >";
                echo "</div>";
             
            ?>

          <!-- <img  alt="image of  ?>"> -->
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                <h3 class="mb-3">নাম: <?php echo $row["m_name"]; ?></h3>
                <p>সদস্য আই.ডি :  <?php echo $row["id"]; ?> </p>
                <p>পিতার নাম: <?php echo $row["f_name"]; ?> </p>
                <p>মোবাইল নং: <?php echo $row["phone_no"]; ?></p>
                </div>
                <div class="col-sm-6">
                <h5>ঋণের পরিমাণ: <?php echo $row["loan_amount"]; ?> /- </h5> 
                <p>মূনাফার পরিমাণ: <?php echo $row["profit_amount"]; ?> /- </p> 
                <hr>
                <p>মোট:  <?php echo $row["total_amount"]; ?> /- </p> 
                
                 
                </div>
            </div>
        </div>
    </div>
    <hr>
<<<<<<< HEAD
</div>


    
<?php 
=======
 <?php 
>>>>>>> upto table add in single view .php

  }
} else {
  echo "0 results";
}

<<<<<<< HEAD

?>










=======
$conn->close(); 


?>



<div class="container box">
  <div class="row">
    <div class="col-md-12">
			<div class="table-responsive">
				<div class="text-right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-dark btn-sm mb-2">কিস্তি যোগ করুন</button>
				</div>
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="10%">তারিখ</th>
							<th width="35%">First Name</th>
							<th width="35%">Last Name</th>
							<th width="10%">Edit</th>
							<th width="10%">Delete</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>


  </div>
</div>


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter First Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<br />
					<label>Enter Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<br />
					<label>Select User Image</label>
					<input type="file" name="user_image" id="user_image" />
					<span id="user_uploaded_image"></span>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
>>>>>>> upto table add in single view .php







<<<<<<< HEAD

<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
     <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="js/main.js"></script>
    <script src="js/angular.js"></script>
    <script src="js/sweetalert2.all.min.js" ></script>
=======
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
       crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
   
    <script src="js/sweetalert2.all.min.js" ></script>
    <script src="js/main.js"></script>

>>>>>>> upto table add in single view .php

   


    
</body>

</html> 


<<<<<<< HEAD
=======
<?php 

include('db.php');

?>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add User");
		$('#action').val("Add");
		$('#operation').val("Add");
		$('#user_uploaded_image').html('');
	});
	
	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"p_fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[0, 3, 4],
				"orderable":false,
			},
		],

	});

	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		var firstName = $('#first_name').val();
		var lastName = $('#last_name').val();
		var extension = $('#user_image').val();
		if(firstName != '' && lastName != '')
		{
			$.ajax({
				url:"p_insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			alert("Both Fields are Required");
		}
	});
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"p_fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('.modal-title').text("Edit User");
				$('#user_id').val(user_id);
				$('#user_uploaded_image').html(data.user_image);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"p_delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
	
});
</script>


<script>
//button focus off
var selectedInput = null;
$(document).ready(function() {
    $('button').focus(function() {
        this.blur();
    });
})
</script>
>>>>>>> upto table add in single view .php
