<?php


require ("db.php");

 $db_obj = new dbconnect;
		$con = $db_obj->connect();
    $con->set_charset("utf8");

header('Content-Type: text/html; charset=utf-8');
?>
<html>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
    <script src="jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <main>
       
       
       <img id="casepic" src="case.png" width="60px" hight="60px" onclick ="div_show()">
       
       <div  id="popup" >
           
       
       
           <form  id="addcase"  name="form" action="addCase.php" method="POST" >
            
           <div id="form" name="form">
          

            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> رقم القضية </b>
            <br>
            <input type ="text" name = "CaseNumber">
            <br>
            <br>
            <b> نوع القضية </b>
            <br>
             <?php
              
               $sql="SELECT ID,Name FROM casetype";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='CaseT'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
            <br>
            <br>
            <b> تاريخ رفع الدعوة </b>
            <br>
                <?php
               $sql="SELECT ID,Date FROM date_of_case";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Date'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Date']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
<!--
<select name="Day" id="d">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="Month" id="m">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="Year" id="y">
	<option> - Year - </option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
</select>
-->
            <br>
            <br>
            <b> المحكمة </b>
            <br>
            
               
                 <?php
               $sql="SELECT ID,Name FROM courtname";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='court'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> الدائرة </b>
            <br>
           
               
               
                 <?php
               $sql="SELECT ID,Dayra FROM eldayra";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='circle'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Dayra']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> معاد الجلسة </b>
            <br>
               <?php
               $sql="SELECT ID,Date  FROM date_of_case";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Date2'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Date']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               
<!--
<select name="Day2" id="d">
	<option> - Day - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
</select>

<select name="Month2" id="m">
	<option> - Month - </option>
	<option value="January">January</option>
	<option value="Febuary">Febuary</option>
	<option value="March">March</option>
	<option value="April">April</option>
	<option value="May">May</option>
	<option value="June">June</option>
	<option value="July">July</option>
	<option value="August">August</option>
	<option value="September">September</option>
	<option value="October">October</option>
	<option value="November">November</option>
	<option value="December">December</option>
</select>

<select name="Year2" id="y">
	<option> - Year - </option>
	<option value="2018">2018</option>
	<option value="2019">2019</option>
	<option value="2020">2020</option>
	<option value="2021">2021</option>
	<option value="2022">2022</option>
</select>
               
<select name="Time" id="T">
	<option> - Time - </option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
</select>
<select name="ampm" id="a">
<option value="am">AM</option>
<option value="pm">PM</option>
</select>
-->
               <br>
               <br>
            <b> مكان الجلسة </b>
            <br>
           
               
                <?php
               $sql="SELECT ID,Place FROM places";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='sessionplace'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Place']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               
               
               
            <br>
            <br>
            <br>
            <b> التفاصيل </b>
<!--             <textarea id="TA" name="details" rows="5" cols="30"></textarea>-->
               
                <?php
               $sql="SELECT ID,Status FROM case_status";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='details'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Status']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               <br>
               <br>
            <button class="m" type="button" onclick ="form1_show(); ">التالي</button>
           </div>
           
           
           <div id="form1" name='form1'>
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم المحامي </b>
            <br>
          <?php
               $sql="SELECT ID,FullName FROM User WHERE UserType_ID=2";
	       $result=$db_obj->executesql($sql);
   
           echo "<select name='SelectLawyer'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['FullName']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> اسم الخصم </b>
            <br>
            <input type ="text" name = "opponent">
             
            <br>
            <br>
            <b> العنوان </b>
            <br>
            
               <?php
               $sql="SELECT ID,Place FROM places";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='address5esm'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Place']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> الهاتف </b>
            <br>
            <input type ="text" name = "mobile5esm">
            <br>
            <br>
            
            <br>
            <br>
            <button class="m" type="button" onclick ="form1_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form2_show() ">التالي</button>
           
           </div>
           <div id="form2" name="form2">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم الموكل </b>
            <br>
           <h4 >ابحث عن الموكل هنا</h4>
                <?php
               $sql="SELECT ID,FullName FROM User WHERE UserType_ID=4";
	           $result=$db_obj->executesql($sql);
   
           echo "<select name='SelectClient'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['FullName']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
            <br>
            <br>
            <button class="m" type="button" onclick ="client_show() ">اضافة موكل</button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_hide() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </div>
           
           <div id="client" name='client' >
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> اسم </b>
            <br>
            <input type ="text" name = "ClientName">
               <br>
           <b>صفته </b>
               <br>
             <?php
               $sql="SELECT ID,Type FROM clienttype";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='Sefato' id='side'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Type']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
            <br>
            <br>
            <b> العنوان </b>
            <br>
            
               <?php
               $sql="SELECT ID,Place FROM places";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='addressC'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Place']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
            <br>
            <br>
            <b> الهاتف </b>
            <br>
            <input type ="text" name = "mobileC">
            <br>
            <br>
            <button class="m" type="button" onclick ="client_show() "> اوراق الموكل </button>
            <br>
            <br>
            <button class="m" type="button" onclick ="form2_show() ">رجوع</button>
            <button class="m" type="button" onclick ="form3_show() ">التالي</button>
           </div>
           
           <div id="form3" name="form3">
            <img id="close" src="close.png" width="40px" hight="40px" onclick ="div_hide()">
               
            <b> طريقة الدفع </b>
            <br>
            
               
               <?php
               $sql="SELECT ID,Name FROM payment";
	       $result=$db_obj->executesql($sql);
   
           echo " <select name='payment'>"; // start a table tag in the HTML

               while($row = mysqli_fetch_array($result)){  ?>  
    
                   <option value="<?php echo $row['ID'];?>"><?php echo $row['Name']; ?></option>
<!--    //$row['index'] the index here is a field name-->
      <?php
               }

               echo "</select>"; 
               ?>
               
               
               
               
               
               
               
            <br>
            <br>
            <button class="m" type="button" onclick ="form3_hide() ">رجوع</button>
            <button class="m" type="submit">حفظ</button>
               </div>
    
       
        </form>
        
       </div>
          
       
   </main> 
    
    <script>
        function div_show() {
        document.getElementById('popup').style.display = "block";
        }
        function form1_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form1_hide() {
        document.getElementById('form1').style.display = "none";
        document.getElementById('form').style.display = "block"; 
        }
        function form2_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form2').style.display = "block"; 
        }
         function form2_hide() {
        document.getElementById('form').style.display = "none";
         document.getElementById('form2').style.display = "none";
        document.getElementById('form1').style.display = "block"; 
        }
         function form3_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('client').style.display = "none"; 
        document.getElementById('form3').style.display = "block"; 
        }
        function form3_hide() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form3').style.display = "none";
        document.getElementById('form2').style.display = "block"; 
        }
        function client_show() {
        document.getElementById('form').style.display = "none";
        document.getElementById('form1').style.display = "none";
        document.getElementById('form2').style.display = "none";
        document.getElementById('form3').style.display = "none"; 
        document.getElementById('client').style.display = "block"; 
        }
        function div_hide(){
        document.getElementById('popup').style.display = "none";
        }

    </script>
</body>
</html>
