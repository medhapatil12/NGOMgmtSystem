<?php
 session_start();
$link = mysqli_connect("localhost", "root", "");
$selectdb = mysqli_select_db($link,'help');


?>

<!DOCTYPE html>
<html>
  <head>
    
    <title>NGO</title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
    <section id="admin" >
  <body style="background-image: url(img/IMG9.jpg);background-size: cover ">
     
    <header>
      <div class="container">
        <div id="branding"> 
          
            <h2><a href="index.html"><span class="highlight">HELP</span> FOUNDATION</a></h2>
            <a href="index.html">   <img src="img/IMG4.jpg" width="20%" height="20%"  alt="HELP FOUNDATION" ></a>
            
        </div> 
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
			<li><a href="vol.html">Volunteer</a></li>
            <li><a href="about.html">About</a></li>
           
              <li><button type="button" class="button_1" ><a href="donate.html">DONATE</a></button></li>
            </ul>
        </nav>
      </div>
      </header>
       <div class="main">
  
          <h3>DELIVERY DETAILS</h3>
<?php
	    
		$query="select *  from delivery ";
		$result=mysqli_query($link,$query);
		?>
		<div  class="main">
        <?php
		if(mysqli_num_rows($result)>0)
		{
			?>
			
			<form  action="delivery.php" id="form" method="post" style="padding-left:120px">
			<table  border="1" style="color:yellow;margin-left:50px;border-color:yellow">
			<tr>
			 <td>Delivery ID</td>
			 <td>Date</td>
			 <td>Address</td>
			 <td>Needy ID</td>
           
			 <td>Employee ID</td>
			</tr>
            <?php			
			 while( $row = mysqli_fetch_array( $result ) )
		  {
			?>
			
			<tr>
			<td style="width:150px;">
            <?php echo $row["DelID"];?>  </td>
		     <td style="width:150px;">
            <?php echo $row["Date"];?></td>
			 <td style="width:150px;">
            <?php echo $row["Address"];?></td>
		     <td style="width:150px;">
            <?php echo $row["NID"];?></td>
                
                <td style="width:150px;">
            <?php echo $row["EID"];?></td>			 
			</tr>
			 
		
   
        <?php
		  
			}
		}
?>	
	
       </table>
	   </form>
      </div>
           </div>

     
     
        </body>
    </section>
</html>

