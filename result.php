<?php
	include_once('class/poll.php');
	$poll = new poll();
	
    include_once("includes/main_header.php");  
    include_once("question.php");

?>


<br>
<br>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mca_nitian -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:90px"
     data-ad-client="ca-pub-5830051003570092"
     data-ad-slot="2895142994"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<div class="container-fluid">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>सवाल देश के  लिए ! Sawal Desh ke liye! Poll Result</h2>
            </div>
            <div class="panel-body">

                <br>  
               
                 <div class="col-sm-12" style="font-size:15px; font-family: 'Rubik', sans-serif;">
                     <p class="text-danger text-center" style="font-weight:bold;"> Note: Percentage calculated on the basis of number of people participated in Poll.</p>
                     <br>
                     
                        <?php 
                        for($i=1;$i<=9;$i++){
                     
                     ?>
                     <div class="col-sm-12"> 
                                <?php echo $q[$i]; ?> <br>
                                
                                <div class="progress" style="height:20px" >
                                  <div class="progress-bar bg-success"    style="width:<?php echo $poll->get_percentage($i,1)."%"; ?>" >
                                          <b> Yes/हाँ <?php  echo $poll->get_percentage($i,1)."%";  ?></b>  
                                  </div>
                                </div>

                                <div class="progress" style="height:20px">
                                  <div class="progress-bar bg-danger" style="width:<?php echo $poll->get_percentage($i,2)."%"; ?>">
                                        <b> No/नहीं <?php  echo $poll->get_percentage($i,2)."%";  ?></b>
                                    
                                    </div>
                                </div>
                         <br>
                                              <hr>
                         <br>
			         </div>

                    <?php }  ?>
                  
                     <div class="col-sm-12"> 
                                <?php echo $q[10]; ?> <br>
                                a)This is good for welfare of Country/ये देश हित के लिए सही था 
                                <div class="progress" style="height:20px" >
                                  <div class="progress-bar bg-success"    style="width:<?php echo $poll->get_percentage(10,1)."%"; ?>" >
                                          <b>  <?php  echo $poll->get_percentage(10,1)."%";  ?></b>  
                                  </div>
                                </div>
                                b) Too many Foreign Trip is Wastage of Money/इतना विदेश दौरा पैसे की  बर्बादी थी 
                                <div class="progress" style="height:20px">
                                  <div class="progress-bar bg-danger" style="width:<?php echo $poll->get_percentage(10,2)."%"; ?>">
                                        <b> <?php  echo $poll->get_percentage(10,2)."%";  ?></b>
                                    
                                    </div>
                                </div>
                         
                                c)So Many Foreign Trip is done by BJP  only for making Narendra Modi's fame to world level/ So Many Foreign Trip is done by BJP  only for making Narendra Modi's fame to world level/ ज्यादा विदेश दौरा करना, नरेंद्र मोदी जी  खुद की छवि को  विश्व स्तर पर लाना चाहते थे  /  
                                <div class="progress" style="height:20px">
                                  <div class="progress-bar bg-danger" style="width:<?php echo $poll->get_percentage(10,3)."%"; ?>">
                                        <b>  <?php  echo $poll->get_percentage(10,3)."%";  ?></b>
                                    
                                    </div>
                                </div>
                         <br>
                         <hr>
                         <br>
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
                     <div class="col-sm-12"> 
                                <?php echo $q[11]; ?> <br>
                               a) BJP/बीजेपी 
                                <div class="progress" style="height:20px" >
                                  <div class="progress-bar bg-success"    style="width:<?php echo $poll->get_percentage(11,1)."%"; ?>" >
                                          <b>  <?php  echo $poll->get_percentage(11,1)."%";  ?></b>  
                                  </div>
                                </div>
                               b) Congress/कांग्रेस 
                                <div class="progress" style="height:20px">
                                  <div class="progress-bar bg-danger" style="width:<?php echo $poll->get_percentage(11,2)."%"; ?>">
                                        <b> <?php  echo $poll->get_percentage(11,2)."%";  ?></b>
                                    
                                    </div>
                                </div>
                        c) No Bad situation at all/ सभी क्षेत्र में  स्थिति सामान्य है
                          <div class="progress" style="height:20px">
                              
                                  <div class="progress-bar bg-danger" style="width:<?php echo $poll->get_percentage(11,3)."%"; ?>">
                                        <b> <?php  echo $poll->get_percentage(11,3)."%";  ?></b>
                                    
                                    </div>
                                </div>
			         </div>
                     

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

<?php include_once("includes/main_footer.php");  ?>

<a href="x/">E-poll</a>


</body>

</html>
