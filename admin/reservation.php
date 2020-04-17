<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" href="fav.png" sizes="16x16" type="image/png"> 
    <title>Захиалга</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Нүүр хуудас</a>
                    </li>
                    
                    </ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Захиалга өгөх <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Хүний мэдээлэл
                        </div>
                        <div class="panel-body">
                        <form name="form" method="post">
                            
                              <div class="form-group">
                                            <label>Овог</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Нэр</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>И-Мэйл</label>
                                            <input name="email" type="email" class="form-control" required>
                                            
                               </div>
                            
                                <div class="form-group">
                                            <label>Утас</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
                               
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Захиалгын мэдээлэл
                        </div>
                        <div class="panel-body">
                               <!-- <div class="form-group">
                                            <label>Дүүрэг</label>
                                            <select name="District"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Baganuur">Багануур</option>
                                                <option value="Bagakhangai">Багахангай</option>
                                                <option value="Bayngol">Баянгол</option>
                                                <option value="Baynzvrh">Баянзүрх</option>
                                                <option value="Nalaih">Налайх</option>
                                                <option value="Songinokhairhan">Сонгинохайрхан</option>
                                                <option value="Svkhbaatar">Сүхбаатар</option>
                                                <option value="Khanuul">Хан-уул</option>
                                                <option value="Chingeltei">Чингэлтэй</option>
                                            </select>
                              </div>-->
                             
                                <div class="form-group">
                                            <label>Цэвэрлэгээний төрөл</label>
                                            <select name="Type"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Ail ger">Айл гэр </option>
                                                <option value="Barilga daraah">Барилгын дараах</option>
                                                <option value="Zaswar daraa">Засварын дараах</option>
                                                <option value="Office">Оффис</option>
                                                <option value="Aguulah">Агуулах</option>
                                                <option value="Vilchilgee">Үйлчилгээний газар</option>
                                                <option value="house">Хаус, лагер</option>
                                            </select>
                              </div>
                             

                              <label>Талбай(Мкв)</label><br>
<input name="talbai"  type="text" id="n1" /><br><br>
<label>1 метр квадратын үнэ</label><br>
<select id="n2">
  <option value="2000">Айл гэр: 2000₮</option>
  <option value="2500">Барилгын дараах: 2500₮</option>
  <option value="2700">Засварын дараах: 2700₮</option>
  <option value="2000">Оффис: 2000₮</option>
  <option value="3000">Агуулах: 3000₮</option>
  <option value="2300">Үйлчилгээний газар: 2300₮</option>
  <option value="2500">Лагер: 2500₮</option>
</select>

<select id="operators">
 <option value="*">*</option>
</select><br><br>
<button onclick="calc();">Нийт үнэ</button><br>
<input type="text" name="Price" id="result" />₮ төгрөг
                              
                                


                             
                              <div class="form-group">
                                  <label>Гэрийн хаяг</label>
                                  <input name="address" class="form-control" required>
                              </div>
                              
                               <div class="form-group">
                                            <label>Захиалах өдөр</label>
                                            <input name="day" type ="date" class="form-control">
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>
                
                
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>Хүн үү?</h4>
                        <p>Энэ кодыг бич. <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
                        <p><br /></p>
                            <input  type="text" name="code1" title="random code" />
                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                        <input type="submit" name="submit" class="btn btn-primary">
                        <?php
                            if(isset($_POST['submit']))
                            {
                            $code1=$_POST['code1'];
                            $code=$_POST['code']; 
                            if($code1!="$code")
                            {
                            $msg="Invalide code"; 
                            }
                            else
                            {
                            
                                    $con=mysqli_connect("localhost","root","","cleaning");
                                    $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                                    $rs = mysqli_query($con,$check);
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if($data[0] > 1) {
                                        echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
                                        
                                    }

                                    else
                                    {
                                        $new ="Not Conform";
$newUser="INSERT INTO `reservation`(`FName`, `LName`, `Email`, `Phone`, `Price`,`Type`, `talbai`,`address`,`day`) 
VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[Price]','$_POST[Type]','$_POST[talbai]','$_POST[address]','$_POST[day];')";
                                        if (mysqli_query($con,$newUser))
                                        {
                                            echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                            
                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                            
                                        }
                                    }

                            $msg="Your code is correct";
                            }
                            }
                            ?>
                        </form>
                            
                    </div>
                </div>
            </div>
           
                
                </div>
                    
            
                
                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    


    <script>
    function calc()
     {
        var n1 = parseInt(document.getElementById('n1').value);
        var n2 = parseInt(document.getElementById('n2').value); 
        var oper=document.getElementById('operators').value;

        if(oper === '*'){
                document.getElementById('result').value=n1*n2;             
        }
     }   
</script>



   
</body>
</html>
