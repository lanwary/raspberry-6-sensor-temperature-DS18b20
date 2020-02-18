<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
   <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
   <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
  <!-- <script>
       setTimeout(function(){
           location.reload();
       },3000); // 3000 milliseconds means 3 seconds.
    </script>-->
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Projet ENIG</a> 
            </div>
  <!--<div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp; <a href="login.html" class="btn btn-danger square-btn-adjust"></a> </div>-->
        </nav>   
           <!-- /. NAV TOP  
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                   <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>	
                      <li  >
                        <a class="active-menu"  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					<li  >
                        <a   href="login.html"><i class="fa fa-bolt fa-3x"></i> Login</a>
                    </li>	
                     <li  >
                        <a   href="registeration.html"><i class="fa fa-laptop fa-3x"></i> Registeration</a>
                    </li>	
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a   href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  -->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tableau des valeurs de Temperature</h2>   
                        <h5> Bienvenu à notre application ... </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->

 
  
    

               <div style="width:400px;">

  <form onsubmit="return false">
<input id="start"  type="submit" name="start" value="START"  /> 
<input id="stop" type="submit" name="stop" value="STOP" /> 
<input id="sheet" type="submit" name="sheet" value="PRINT EXCEL" />
<input id="delete"  type="submit" name="delete" value="DELETE WHOLE DATA" /> 


</form>


    </div>
   
 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead id="head">
                                        <tr>
                                            <th>ID</th>
                                            <th>DATE</th>
                                            <th>TIME</th>
                                            <th>CAPTEUR1</th>
                                            <th>CAPTEUR2</th>
                                            <th>CAPTEUR3</th>
                                            <th>CAPTEUR4</th>
                                            <th>CAPTEUR5</th>
                                            <th>CAPTEUR6</th>  
                                        </tr>
                                    </thead>
                                    
                                    <tbody id="data">
<?php
 
include "connect.php";

$sql = "SELECT * FROM mesure";


$req = mysqli_query($myCon,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());


while($data = mysqli_fetch_array($req))
{

// on libère l'espace mémoire alloué pour cette interrogation de la base

?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data['id'];?> </td>
                                            <td><?php echo $data['Date_T'];?></td>
                                            <td><?php echo $data['time_t'];?></td>
                                            <td><?php echo $data['capt1'];?> </td>
                                            <td><?php echo $data['capt2'];?> </td>
                                            <td><?php echo $data['capt3'];?> </td>
                                            <td><?php echo $data['capt4'];?> </td>
                                            <td><?php echo $data['capt5'];?> </td>
                                            <td><?php echo $data['capt6'];?> </td>

                                            
                                           
                                        </tr>
                                       
                                       
                                      
       <?php   }  ?>                                
                                       
                                      
                                       
                                        
                                       
                                        
                                       
                                        
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->

 
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
   
 
<script lang="javascript" src="https://cdn.jsdelivr.net/npm/xlsx@0.15.1/dist/xlsx.full.min.js"></script>


<script type="text/javascript" charset="iso-8859-1">
      
 $(document).ready(function () {
$( "#start" ).click(function() {


var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "start.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.responseText); // echo from php
    }       
};
xmlhttp.send();
})


$( "#stop" ).click(function() {
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "stop.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.responseText); // echo from php
    }       
};
xmlhttp.send();
})
$( "#delete" ).click(function() {
 
var xmlhttp = new XMLHttpRequest();
xmlhttp.open("POST", "delete.php", true);
xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlhttp.onreadystatechange = function() {
    if (this.readyState === 4 || this.status === 200){ 
        console.log(this.responseText); // echo from php
    }       
};
xmlhttp.send();
})
 
$( "#sheet" ).click(function() {
 
              
var aoa = [];
      let h = $("#head").children().eq(0)

  
  for(var j = 0; j <  h.children().length; ++j){ 
    
    
      let c = h.children().eq(j);
  
    if(!aoa[j]) aoa[j] = [];
    aoa[j][0]= c.text();
  }
    
let data =$("#data").children()
for(var i = 1; i < data.length +1; ++i) {
  let r = $("#data").children().eq(i-1);
  
  for(var j =0; j <  r.children().length; ++j){ 
    
    
  
    if(!aoa[j]) aoa[j] = [];
    let c=r.children().eq(j)
    aoa[j][i] = c.text();
  }
}

var ws = XLSX.utils.aoa_to_sheet(aoa);
var wb = XLSX.utils.book_new()
var ws = XLSX.utils.aoa_to_sheet(aoa);
var wb = XLSX.utils.book_new(); XLSX.utils.book_append_sheet(wb, ws, "Sheet1");
XLSX.writeFile(wb, "TEMPERATURE.xlsx");


   });
     });
</script>
 <!--<?php

            include_once "connect.php";

                $query = mysqli_query($myCon,"SELECT * FROM mesure  ");


                $columnHeader = "time_t"."\t"."capt1"."\t"."capt2"."\t"."capt3"."\t"."capt4"."\t"."capt5"."\t"."capt6"."\t";

                $setData='';
                if (mysqli_num_rows($query) > 0) {
                    while ($rec = mysqli_fetch_assoc($query)) {
                        $rowData = '';

                        foreach ($rec as $value) {
                            $value = '"'.$value.'"'."\t";
                            $rowData.=$value;
                        }
                        $setData.=trim($rowData)."\n";
                    }
                }


                header("Content-type: application/octet-stream");
                header("Content-Disposition: attachment; filename=test.xls");
                header("Pragme: no-cache");
                header("Expires: 0");

                echo "\t\tSales Data\n";
                echo ucwords($columnHeader)."\n".$setData."\n";
            ?>-->

 
</body>
</html>
