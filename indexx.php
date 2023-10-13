<?php 
	include_once 'controllers/Comment.php';
	$com = new Comment();
 ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<title>Comment System OOP</title>
 	<style>
		.boxx{
			background-color:#434242;
			/* background:url('img2.jpg'); */
			background-size: cover;
			
}
		
 		.box{border: 6px solid #999;margin: 30px auto 0;padding: 20px;width: 100vw;height: 250px;overflow: auto;; background-color:white;}
 		.box ul{margin: 0;padding: 0;list-style: none;font-size: larger;}
 		.box li{display: block;margin-bottom: 5px;padding-bottom: 5px;}
 		.box li:last-child{border-bottom: 0 dashed #ddd;}
 		.box span{color: #888;}
 	</style>
 </head>
 <body >
	
<div class="wrapper">
      
    <h3 class="text-center fw-bold" style="text-align:center;">OUR LISTNER REVIEWS!!!</h3>
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">
                     <div id="table" class="table-editable">
                        <span class="table-add float-right mb-3 mr-2">
                       
                        </span>
                        <table class="table table-bordered table-responsive-md table-striped text-center">
                           <thead>
                              <tr>
                                
                                 <th class="fw-bold text-center">User Name</th>
                                 <th class="fw-bold text-center">User Comment</th>
                                 <th class="fw-bold text-center">Comment Time</th>
                                 

                              </tr>
                           </thead>
                           <tbody>
                        <?php     
                          				$result = $com->index();
										  while ($data = $result->fetch_assoc()) {
                    echo      ' <tr>
                                
                                 <td >'.$data["name"].'</td>
                                 <td >'.$data["comment"].'</td>
                                 <td >'.$data["comment_time"].'</td>
                                

                                 
                              </tr>';
                             

                           }
?>





                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
         </div>


         <div class="boxx">
	
 	
	<form class="container" action="post_comment.php" method="post" style="height:600px;width:850px" ><br><br><br>
	<center><h1 style="color:white">What's your Reviews?</h1></center>
				<div class="form-group container" style="font-size:25px;color:white">
					<label for="exampleInputEmail1" >Your Name</label>
					<input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter your Name:">
					
				</div>
				<div class="form-group container" style="font-size:25px;color:white">
					<label for="exampleFormControlTextarea1">Your comment</label>
					<textarea name="comment" class="form-control" id="exampleInputEmail1" placeholder="Please enter your comment"></textarea>
					
				</div>
				
				<center><button type="submit" name="submit" value="Post" class="btn btn-primary" style="border-radius:50px">Submit</button></center>

 		
 	</form>
</div>



 </body>
 </html>