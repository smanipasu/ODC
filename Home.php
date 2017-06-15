

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Document Collaboration System</title>
<link rel="shortcut icon" href="../favicon.ico">
    <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="css/risstyle.css" />
    <!-- jQuery -->


</head>
<body>

   <div>
            <div id="bg">
                <div id="outer">
                    <div id="header">
                        <div id="logo">
                            <ta<!DOCTYPE html>
<html lang="en">
    <?php
  include('../../controller/db_connect.php');
    session_start(); 
   if (array_key_exists('Uname',$_SESSION) && !empty($_SESSION['Uname']))
   {
   // logged in
   } else {
   // not logged in
       header("Location:../../index.php"); 
        exit;
    }
        
    ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Document Collaboration System</title>
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- CSS -->
   <link rel="stylesheet" type="text/css" href="../css/risstyle.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <!-- jQuery -->
    <script src="../jquery/dist/jquery.min.js"></script>
    
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="../jquery/jquery-1.12.4.js"></script>
  <script src="../jquery/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd'
    });
  } );
  </script>
      <script type="text/javascript">
   
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.projectname.value == "" )
         {
            alert( "Please enter Project Name...!" );
            document.myForm.Employee.focus() ;
            return false;
         }
    }
</script>
    <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
        $(document).ready(function() {
            $('.button').click(function() {
                var myReport ="<html><head><title></title></head>><body>"+ nicEditors.findEditor('.nicEdit-main').html()+"</body></html>";
                document.getElementById("content1").value = myReport;
                //alert(myReport);
            });
        });
  </script>
    
</head>

<body>

   <div>
            <div id="bg">
                <div id="outer">
                    <div id="header">
                        <div id="logo">
                          <table style="width:100%;">
                                    <tr>
                                        <td style="width:50%;text-align:left;">
                                            <a href="#">
                                    <img src="../images/logotop.png" alt="" border="0" /></a>
                                        </td>
                                        <td style="width:50%;text-align:right;">
                                          <b> <?php echo $_SESSION['Uname'] ?> | <a href="../../controller/logout.php">Logout</a></b>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    <div id="main">
                        <div id="content">
                            <div id="box1">
                                <table align="left">
                                    <tr>
                                        <td style="width:250px;vertical-align:top;">
                                            <ul>
                                                 <li><a href="index.php">Home</a></li>
                                                <li><a href="odc02r02.php" class="active">Create Project</a></li>
                                                <li><a href="odc02r03.php">Collaborators</a></li>
                                            </ul>
                                        </td>
                                        <td style="vertical-align:top;font-family: Lucida Sans Unicode, Lucida Grande, sans-serif;padding-left:20px;width:650px;">
                                            <h3 style="color: #1e3e5d;">
                                             New Project</h3>
                                           <div class="col-lg-3 col-md-3 col-sm-3" style="width:650px;">
                                            <div class="panel panel-primary">
                                                <div class="panel-heading">New project</div>
                                                <div class="panel-body">
                                                    <form name="myForm" id="submitprj" action="../../controller/processproject.php" method="POST" onSubmit="return(validate());" enctype="multipart/form-data">
                                            <table width="100%" cellspacing="10px">
                                                <tr>
                                                <td style="padding: 5px;float:left">Project Name</td>
                                                <td><input name="projectname" style="width: 500px; height: 20px" type="text" value=""></td>
                                                </tr>
                                                <tr>
                                                <td style="padding: 10px;float:left">Attachment</td>
                                                <td><input type="file" name="fileToUpload" id="fileToUpload"></td>
                                                </tr>
                                                <tr>
                                                <td style="vertical-align:top;float:left">Project Report</td>
                                                <td><textarea name="projectreport" class="input" rows="20" cols="60"></textarea></td>
                                                </tr>
                                              <tr>
                                                    <td></td>

                                        <td style="text-align:left;">
                                            </br>
                                            <input type="submit" name="submit" value="Save" class="button" onclick="nicEditors.findEditor('projectreport').saveContent();">
                                           </br>
                                                        </td>
                                               
                                                    </tr>
                   

                                                </table></form>
                                               </div>
                                            </div>
                                        </div>
                                        </td>
                                    </tr>
                                </table>
                                 
                            </div>
                        </div>
                    </div>
                    <div id="footer">
                        <a href="http://www.radicalinfosystems.com" target="_blank">RadicalInfoSystems.Com</a>
                        <br class="clear" />
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
ble style="width:100%;">
                                    <tr>
                                        <td style="width:50%;text-align:left;">
                                            <a href="#">
                                    <img src="img/logo.png" alt="" border="0" /></a>
                                        </td>
                                        <td style="width:50%;text-align:right;">
                                          <b> | <a href="#">Logout</a></b>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                    <div id="main">
                        <div id="content">
                            <div id="box1">
                                <table width="100%" >
                                    <tr>
                                        <td><div>
                                            <table style="padding: 0px 100px;">
                                    <tr><td><button>Start</button></td></tr>                
                                    <tr><td><button>Start</button></td></tr>
                                    <tr><td><button>Start</button></td></tr>
                                    <tr><td><button>Start</button></td></tr>
                                    <tr><td><button>Stop</button></td></tr>
                                        </table></div></td>
                                        <td style="width:250px;vertical-align:top;">
                                        <table>
                                            <tr><td><label>Name:</label></td></tr>
                                            <tr><td><label>Login:</label></td></tr>
                                            <tr><td><label>Break:</label></td></tr>
                                            <tr><td><label>Logout:</label></td></tr>
                                            <tr><td><label>Total:</label></td></tr>
                                            
                                            </table></td>
                                    </tr>
                                    
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</body>
</html>
