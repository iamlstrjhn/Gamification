<section class="easy">
	<div class="container">
    <center>
      <img class="img-result" src="<?php echo base_url() ?>images/goal.png"><br>

          <h5 style="font-weight: 300;color: white;">Congratulations <?php 
                       if ($this->session->has_userdata('flag')) {
                         echo $this->session->userdata['flag']['firstName'];
                       }else{
                         echo $this->session->userdata['session']['firstName'];
                       }

                       ?>, you did it!</h5>
    </center>
		

                       <h5 style="font-weight: 300;color: white;"><?php $score =0; ?></h5>

                      <br>

                      <h6 style="color: white;"><b><?php $array1= array(); ?>
                                                  <?php $array2= array(); ?>    
                                                  <?php $array3= array(); ?>
                                                  <?php $array4= array(); ?>
                                                  <?php $array5= array(); ?>
                                                  <?php $array6= array(); ?>
                                                  <?php $array7= array(); ?>
                                                  <?php $array8= array(); ?>
                                                  
                                                  <?php foreach($checks as $checkans) { ?>
                                                  <?php array_push($array1, $checkans); } ?>

                                                           
                                                    <?php foreach($quiz as $res) { ?>
                                                           <?php array_push($array2, $res->choiceD); 
                                                           array_push($array3, $res->quizlevel1_ID); 
                                                           array_push($array4, $res->question); 
                                                           array_push($array5, $res->choiceA); 
                                                           array_push($array6, $res->choiceB); 
                                                           array_push($array7, $res->choiceC); 
                                                            array_push($array8, $res->choiceD); 
                                                     } ?></b></h6>

                      <h6 style="color: white;"><b><?php 
                     for ($x=0; $x <10; $x++) { ?></b></h6>
          <p style="font-weight: 400;color: white;"><?=$array4[$x]?></p>
                      
                      <?php if ($array2[$x]!=$array1[$x]) { ?>
      
           <p><span style="background-color: #FF9C9E; padding: 5px 10px; border-radius: 10px; border: 1px solid white;"><?=$array1[$x]?></span></p>
           <p><span style="background-color: #ADFFB4; padding: 5px 10px; border-radius: 10px; border: 1px solid white;"><?=$array2[$x]?></span></p>
           
            <?php } else { ?>
      
           <p><span style="background-color: #ADFFB4; padding: 5px 10px; border-radius: 10px; border: 1px solid white;"><?=$array1[$x]?></span></p>
           
           <?php $score = $score + 1; ?>
      
        <?php } } ?>

        <h6 style="color: white; margin-top: 40px;">Note</h6>
           <p><span style="background-color: #ADFFB4; padding: 5px 10px; border-radius: 10px; border: 1px solid white;">CORRECT</span></p>

           <p><span style="background-color: #FF9C9E; padding: 5px 10px; border-radius: 10px; border: 1px solid white;">WRONG</span></p>

    
    <br>
    <center>
      <h4 style="color: white; margin-bottom: 60px; font-weight: 300;">Your Score: <?=$score?>/10</h4>
    </center>
    
    

		<a href="<?php echo base_url('activities') ?>" class="btn btn-large btn-submit" style="box-shadow: none; margin-bottom: 20px;">EXIT</a>

	</div>
</section>