<?php
        include_once('class/poll.php');
        $poll = new poll();
         if($poll->check_ip())
         {
             header('location:result.php');
         }
       
        if(isset($_POST['submit'])){

                if($poll->insert_data($_POST))
                   header('location:result.php');
                else
                    echo "<h1>Error </h1>";


                   }


    include_once("includes/main_header.php");  
    include_once("question.php")
?>


<br>

   <center> <input type="submit" id="check" onclick="check();" class="btn btn-primary btn-lg text-center" value="KNOW POLL Result ">  </center>


<script>
    $('#check').click(function()
                     {
     
        var c = <?php  if($poll->check_ip())  echo 0; else echo 1; ?>;
            if(c==1)
            { 
        alert('Please Answer the question first. \n कृपया  पहले सारे सवालोँ का जबाब दे /');
            
            }
        else {
           window.location="result.php";
           
             }
    
    });
    
 
    
</script>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mca_nitian -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-5830051003570092"
     data-ad-slot="2895142994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<br>
<div class="container-fluid">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2> Sawal Desh ke liye! सवाल देश के  लिए !</h2>
            </div>
            <div class="panel-body">
           <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
                    
            <div class="col-sm-12" style="font-size:15px; font-family: 'Rubik', sans-serif;">
                
               
                <form action="" method="post" name="question" onsubmit="return check_form();">
                    <?php for($i=1;$i<=9;$i++){ ?>
                  <div class="form-group">
                    <label for="email"><?php echo $q[$i];  ?>
                        </label> <br>
                    <input type="radio" class="" name="Q_<?php echo $i; ?>" name="Q_<?php echo $i; ?>" value="1" >Yes/हाँ &nbsp;
                    <input type="radio" class=""  name="Q_<?php echo $i; ?>" name="Q_<?php echo $i; ?>" value="2">No/नहीं 
                  </div>
                    
                    <br>
                  <?php }  ?>
                    
                    
                   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mca_nitian -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-5830051003570092"
     data-ad-slot="2895142994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    
                    <div class="form-group">
                    <label for="email"><?php echo $q[10];  ?>
                         </label> <br>
                    <input type="radio" class="" name="Q_10" id="Q_10" value="1" >This is good for welfare of Country/ये देश हित के लिए सही था  &nbsp; <br>
                    <input type="radio" class=""  name="Q_10" id="Q_10"value="2">Too many Foreign Trip is Wastage of Money/इतना विदेश दौरा पैसे की  बर्बादी थी / /<br>
                    <input type="radio" class=""  name="Q_10" id="Q_10"value="3">So Many Foreign Trip is done by BJP  only for making Narendra Modi's fame to world level/ ज्यादा विदेश दौरा करना, नरेंद्र मोदी जी  खुद की छवि को  विश्व स्तर पर लाना चाहते थे  / <br>
                        
                  </div>
                    
                    <br>
                    
                    <div class="form-group">
                    <label for="email"><?php echo $q[11]; ?>
                         </label> <br>
                   
                        
                        <input type="radio" class="" name="Q_11" id="Q_11" value="1" >BJP/बीजेपी  &nbsp;  &nbsp; <br> 
                    <input type="radio" class=""  name="Q_11" id="Q_11"value="2">Congress/कांग्रेस  <br>  
                     <input type="radio" class=""  name="Q_11" id="Q_11"value="3">No Bad situation at all/ सभी क्षेत्र में  स्थिति सामान्य है  <br> 
                  </div>
                    
                    
                     <br>
                    
                    
                  <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </form>
                  

                </div>
              

            </div>
        </div>
    </div>
</div>



<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mca_nitian -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-5830051003570092"
     data-ad-slot="2895142994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script >

    function check_form(){

             
 if(!($("input:radio[name='Q_1']").is(":checked"))) {
      alert("Answer Question Number 1, \n 1 नंबर सवाल का जबाब दे/ ");
        return false;
  }
  
        
        if(!($("input:radio[name='Q_2']").is(":checked"))) {
      alert("Answer Question Number 2 \n 2 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_3']").is(":checked"))) {
      alert("Answer Question Number 3 \n 3 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_4']").is(":checked"))) {
      alert("Answer Question Number 4 \n 4 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_5']").is(":checked"))) {
      alert("Answer Question Number 5 \n 5 नंबर सवाल का जबाब दे/");
        return false;
  }
        
        if(!($("input:radio[name='Q_6']").is(":checked"))) {
      alert("Answer Question Number 6 \n 6 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_7']").is(":checked"))) {
      alert("Answer Question Number 7 \n 7 नंबर सवाल का जबाब दे/");
        return false;
  }
        
        if(!($("input:radio[name='Q_8']").is(":checked"))) {
      alert("Answer Question Number 8 \n 8 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_9']").is(":checked"))) {
      alert("Answer Question Number 9 \n 9 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_10']").is(":checked"))) {
      alert("Answer Question Number 10 \n 10 नंबर सवाल का जबाब दे/");
        return false;
  }
        if(!($("input:radio[name='Q_1']").is(":checked"))) {
      alert("Answer Question Number 11\n 11 नंबर सवाल का जबाब दे/");
        return false;
  }
        confirm("Are you sure to Submit?");
        
   }
</script>


<?php include_once("includes/main_footer.php");  ?>

<a href="x/">E-Poll</a>



</body>

</html>
