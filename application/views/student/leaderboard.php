<section class="easy">
  <div class="container">
  

      <h5 style="color: white; font-weight: 300;">Leaderboards</h5>
   

                       <h5 style="font-weight: 300;color: white;"><?php $score =0; ?></h5>

                      
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
                      
                      <?php if ($array2[$x]!=$array1[$x]) { ?>
      
            <?php } else { ?>
      
           
           <?php $score = $score + 1; ?>
      
        <?php } } ?>


    
    <center>
       <table class="table-responsive white-text">
        <thead class="pink lighten-1">
          <tr>
            <th>Name</th>
            <th>Score</th>
          </tr>
        </thead>
        <tbody>
          <tr >
            <td style="border: 1px solid white;">
              <?php 
                       if ($this->session->has_userdata('flag')) {
                         echo $this->session->userdata['flag']['firstName'];
                       }else{
                         echo $this->session->userdata['session']['firstName'];
                       }

                       ?>
            </td>
            <td style="border: 1px solid white;"><?=$score?></td>
          </tr>
          <tr>
            <td style="border: 1px solid white;">Sidney Alonde</td>
            <td style="border: 1px solid white;">0</td>
          </tr>
        </tbody>
      </table>
    </center>
    
    

    <a href="<?php echo base_url('activities') ?>" class="btn btn-large btn-submit" style="box-shadow: none; margin-bottom: 20px;margin-top: 60px;">EXIT</a>

  </div>
</section>