<section class="easy">
	<div class="container">
		<h6 class="h6-easy-category">QUIZ GAME LEVEL 1 <a href="<?php  echo base_url('activities') ?>" class="right"><i class="material-icons back-icon">arrow_back</i></a></h6>

		<!-- question 1 -->
	<form action="<?php echo base_url('Easy/get_result')  ?>" method="post">

		<?php foreach ($quiz as $quiz_key) { ?>
			

			<div class="box-question">
				<p><?php echo $quiz_key['question'] ?></p>

				
					 <p>
				      <label>
				        <input name="quizid<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceA'] ?>" required />
				        <span><?php echo $quiz_key['choiceA'] ?></span>
				      </label>
				    </p>

				    <p>
				      <label>
				        <input name="quizid<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceB'] ?>"  />
				        <span><?php echo $quiz_key['choiceB'] ?></span>
				      </label>
				    </p>

				    <p>
				      <label>
				        <input name="quizid<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceC'] ?>" />
				        <span><?php echo $quiz_key['choiceC'] ?></span>
				      </label>
				    </p>

				    <p>
				      <label>
				        <input name="quizid<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceD'] ?>" />
				        <span><?php echo $quiz_key['choiceD'] ?></span>
				      </label>
				    </p>
			</div>

		<?php }?>

		<input type="submit" value="submit" class="btn btn-submit">


		</form>





	</div>
</section>