<!DOCTYPE html> 
		<html dir="ltr" lang="en-US">
			<head>
					<title>this is my project </title>
					<meta charset="utf-8"/>
					<link rel="stylesheet" href="mycss.css" />
                
                
			</head>
			<body>
				<div class="header">
						<div class="slider">
							<div class="container">
								<div class="intro">
									<h4 ><span style="color:#4cc085">Egypt</span> Trains </h4>
                                </div>
							</div>
						</div>
						<div class="navbar">
							<div class="container">
								<h2><span class="span">egypt</span> train</h2>
								<ul>
									<li class="active"><a href="####"> Home </a></li>
									<li><a href="#2"> get service</a></li>
									<li><a href="add.php">add new destination </a></li>
									<li><a href="delete .php">Delete </a></li>
									<li><a href="#4">feedback </a></li>
									<li><a href="#6">Contact Us</a></li>
									
								</ul>
							</div>
						</div>
				</div>
<!--================================= Start of features ==================================================-->
				<div class="features" id="2">
					<div class="container">
							<div class="values">
								<h2>departure station</h2>
                                <select name="select1">
									  <option>Ramsis</option>
 									  <option>Sidi Gaber</option>
									  <option>Tanta</option>
									  <option>Banha</option>
									  <option>Ismailia</option>
									  <option>Asuit</option>
									  <option>Mansoura</option>
									  <option>Damnhour</option>
									  <option>Cairo</option>
									  <option>Alexandria</option>
                                </select>  
                            <!--/div>
                            <div class="goals"-->
								<h2>destination station </h2>
<!--                          	<input type="text" name="train" >-->
								<select>
									  <option>Ramsis</option>
									  <option>Sidi Gaber</option>
									  <option>Tanta</option>
									  <option>Banha</option>
									  <option>Ismailia</option>
									  <option>Asuit</option>
									  <option>Mansoura</option>
									  <option>Damnhour</option>
									  <option>Cairo</option>
									  <option>Alexandria</option>
                                </select>  
                            <!--/div>
                            <div class="hobbies"-->
								<h2> train class</h2>
									<select>
										<option>all</option>
										<option>special</option>
										<option>express</option>
										<option>sleep</option>
									</select>
                                <br>
                                <br>
                                <br>
                                <center>
		<!--      all work in onclick ------------------------ --------->
							<input type="submit" name="result" value="result" />
                                </center>
                            </div>
					</div>
				</div>
<!--============================================ End of features ================================================================-->
<!--============================================ Start of about me ================================================================-->
                <div class="aboutme" id="3">
                    <div class="container">
                        <div class="my_image">
                        </div>
                        <div class="info">
                            <div class="personal_info">                 
                                <h2>result </h2>
<!--
        <?php
//         include("connect.php");
//try{
//    $res =$db->query("SELECT * FROM station");
//    if($res->num_rows>0){
////    product["size"]=array();
//    while($row=$res->FetchAll(PDO::FETCH_ASSOC))
//    {
//        echo $row["id"];
////        echo"id| ". $row["id"] ."departure_station| ". $row["departure_station"] ."arrival_station| ". $row["arrival_station"] ."depature_time| ". $row["depature_time"] ."arrival_time| ". $row["arrival_time"] ."class| ". $row["arrival_time"];
//    }
//        else
//        {
//            echo "no result";
//            
//        }
//    
//}
//catch(Exception $e)
//{
//    echo"your quary don,t execute";
//    exit;
//}

?>
-->
                                </div>

                                  
                            </div>

                            </div> <!-- end of advantages -->
                        </div>
                    
                    </div>
                
                </div>
<!--============================================ End of about me ================================================================-->
                
                
                
<!--========================= Start of FeedBack =====================================-->           
 
                
     <div class="myskills" id="4">
        
		<div class="container">
        
			<div class="feedback">
                    
                <h1 style="color:#4cc085">FeedBack</h1> 
					<textarea placeholder="Enter your FeedBack"></textarea>   
						<input type="submit" value="send">
                                <table border=2>
									<th></th>
									<th></th>
									<th></th>
								<th></th>
								<th></th>
            </div>
        </div>
     </div>
                
<!--=============================== End of FeedBack =========================================-->
                
<!--=============================== Start of MyContact Me=============================--> 
                <div class="contactme" id="6">
                    <div class="container">
						<div class="contact_info">
							<h2>Contact Us</h2>
							<p>  send us a message  about   your  suggests , problems :</p>
                        </div>
						<form class="form">
        
                        <label> Name *</label>
							<input type="text" placeholder="Enter your Name">
                        
                        <label> E-mail Adresse *</label>
							<input type="text" placeholder="Enter your Address">
                        
                        <label> Phone</label>
							<input type="text" placeholder="Enter your phone">
                        
                        <label> Message</label>
							<textarea placeholder="Enter your message"></textarea>
                   
                        <input type="submit" value="Contact Us">
                        
                     </form>
                </div>
            </div>  
<!--======================== SEnd ofMyportfolio=================================-->   
        <div class="footer">
            <div class="container">
				<span style="color:#CCC;"></span>
                <ul>    
                   <li><img src="twitter.png"/></li>
                   <li><img src="facebook.png"/></li>
                   <li><img src="google.png"/></li>          
                   <li><img src="pp.png"/></li>
                   <li><img src="in.png"/></li>
                 </ul>
            </div>
        </div>        
	</body>
</html>
<!----------------- db FOr SHOW ---------> 
<?php
include('connect.php');
	if(isset($_POST['result']))
		{
			$sql ="SELECT train_no,departure_station,time,destination_station,arrival_time 
			FROM  $type
			WHERE departure_station='$departure_station',destination_station= '$destination_station'
			ORDER BY departure_station ASC
			 ";
			$res=  mysql_query($sql);
			if($res>0)
			{
				while($array=mysql_feth_row($res))
				{	print"<tr><td>";
				    echo $array[0];
					print"</td><td>";
				    echo $array[1];
					print"</td><td>";
				    echo $array[2];
					print"</td><td>";
				    echo $array[3];
					print"</td><td>";
				    echo $array[4];
				}	print"</td></tr>";
			}
			else
				echo" result=0 ";
		}




?>