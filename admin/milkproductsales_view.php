<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";
$errors = array();
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(empty($_GET['pid']))
{
	header("location:dashboard.php");
}
if(isset($_GET['pid']))
{
	$reslt = mysqli_query($conn,"SELECT * from milkproductssales where (product id ='".$_GET['pid']."' AND location like '%".$_GET['location']."%' )");
	$count=mysqli_num_rows($reslt);
}
?>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">milk products sale</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
       <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
<?php if(isset($_GET['status']) && $_GET['status'] == 'update') { ?>
<div class="col-group"><h5> milkprocuction has updated succesfully!</h5></div>
<?php } ?>

<?php if($count == 0)
				{ ?>
				<div class="col-group">
					<h3> No results Found oF <?php echo $_GET['pid']; ?></h3>
				</div>
				 <?php
				 } else
				 {?>
			 <?php
				$getrows=mysqli_fetch_array($reslt);
				
			?>
			 <div class="row">
                    <div class="col-md-6">
			
			 <div class="form-group row">
			<label class="col-sm-3 text-right control-label col-form-label" for="email" class="col-sm-3 text-right control-label col-form-label"><b>location :</b>
			</label><div class="col-sm-9 col-form-label"><?php echo $getrows['location'];?></div></div>

	

	<div class="form-group row">
    <label class="col-sm-3 text-right control-label col-form-label" for="psw-repeat"><b>Product Name :</b>
    </label><div class="col-sm-9 col-form-label"><?php echo $getrows['pname'];?></div></div>
                        
                      
                        <div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>product id :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['product id'];?></div></div>

                        <div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>ststus :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['ststus'];?></div></div>


                          <div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>date :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['date'];?></div></div>

<div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>quantity :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['quantity'];?></div></div>



	<div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>Description :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['description'];?></div></div>
  <div class="form-group row">
    <label  class="col-sm-3 text-right control-label col-form-label"for="psw-repeat"><b>Incharge :</b>
     </label><div class="col-sm-9 col-form-label"><?php echo $getrows['incharge'];?></div></div>
  
			<?php
				
				 }
			?>
			
                </div>
               
            </div>
	</div>
	

           
            <footer class="footer text-center">
                All Rights Reserved by Integra. Designed and Developed by <a href="#">Integra</a>.
            </footer>
            
        </div>
	</div>
	
	