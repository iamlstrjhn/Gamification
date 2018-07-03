<section class="easy">
	<div class="container">
		<h6 class="h6-easy-category">QUIZ GAME LEVEL 1 <a href="<?php  echo base_url('update-quiz') ?>" class="right"><i class="material-icons back-icon">arrow_back</i></a></h6>

		
		<form action="<?php echo base_url('Teacherquiz/add_quiz_1') ?>" method="POST">

			<a class="btn waves-effect cyan btn-add-schoolworks modal-trigger" href="#modal1" style="margin-top: 10px;">ADD QUESTIONS</a>

			 <!-- Modal Structure -->
			  <div id="modal1" class="modal">
			    <div class="modal-content" style="padding: 5px 15px;">
			      <h5 style="font-weight: 300;">ADD YOUR QUESTIONS</h5>
			      <p>Fillout the following</p>

			        <div class="row">
					    <div class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea class="materialize-textarea" placeholder="1. What is.......?" name="question"></textarea>
					          <label style="font-weight: 700;">QUESTION:</label>
					        </div>
					      </div>
					    </div>

					    <div class="col s12">
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea class="materialize-textarea" placeholder="A. Choice1" name="choice1"></textarea>
					          <label style="font-weight: 700;">Choice 1</label>
					        </div>

					        <div class="input-field col s12">
					          <textarea class="materialize-textarea" placeholder="B. Choice2" name="choice2"></textarea>
					          <label style="font-weight: 700;">Choice 2</label>
					        </div>

					         <div class="input-field col s12">
					          <textarea class="materialize-textarea" placeholder="C. Choice3" name="choice3"></textarea>
					          <label style="font-weight: 700;">Choice 3</label>
					        </div>

					         <div class="input-field col s12">
					          <textarea class="materialize-textarea" placeholder="D. Choice4" name="choice4"></textarea>
					          <label style="font-weight: 700;">Choice 4</label>
					        </div>

					        <div class="input-field col s12">
							    <select name="answer">
							      <option value="" disabled selected>Choose your key answer</option>
							      <option name="choice1">Choice A</option>
							      <option name="choice2">Choice B</option>
							      <option name="choice3">Choice C</option>
							      <option name="choice4">Choice D</option>
							    </select>
							    <label>Select the answer key for this question</label>
							 </div>

					      </div>
					    </div>



					    <button class="waves-effect btn cyan right " type="submit" value="submit">SUBMIT QUESTION </button>

				  	</div>

			    </div>
			  </div>


		</form>

		<?php foreach ($quiz as $quiz_key) { ?>
			
		

		<div class="box-question">
			<p><?php echo $quiz_key['question'] ?>  <a class="waves-effect waves-light right modal-trigger" href="#editquiz1<?php echo $quiz_key['quizlevel1_ID'] ?>"><i class="material-icons" style="color: red;">more_horiz</i></a></p> 

			<!-- Modal Structure -->
			  <div id="editquiz1<?php echo $quiz_key['quizlevel1_ID'] ?>" class="modal">
			    <div class="modal-content">
			     <h5>Edit the context below</h5>
				     
				      		<form action="<?php echo base_url('Teacherquiz/edit_quiz_1') ?>" method=POST>
                                                <input type="hidden" name='id' value="<?php echo $quiz_key['quizlevel1_ID'] ?>">
                                                  <div class="row">
                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="question" value="<?php echo $quiz_key['question'] ?>">
                                                            <label>Question</label>
                                                          </div>
                                                      </div>

                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="choice1" value="<?php echo $quiz_key['choiceA'] ?>">
                                                            <label>Choice 1</label>
                                                          </div>
                                                      </div>

                                                     <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="choice2" value="<?php echo $quiz_key['choiceB'] ?>">
                                                            <label>Choice 2</label>
                                                          </div>
                                                      </div>

                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="choice3" value="<?php echo $quiz_key['choiceC'] ?>">
                                                            <label>Choice 3</label>
                                                          </div>
                                                      </div>

                                                      <div class="col s12">
                                                          <div class="input-field">
                                                            <input type="text" class="validate" name="choice4" value="<?php echo $quiz_key['choiceD'] ?>">
                                                            <label>Choice 4</label>
                                                          </div>
                                                      </div>

                                                    </div>

                                                    <button class="waves-effect btn cyan btn-username right" type="submit" value="submit" style="margin: 30px 0;">SUBMIT </button>
                            </form>
				     
			    </div>
			  </div>

			
				 <p>
			      <label>
			        <input name="<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceA'] ?>"  />
			        <span><?php echo $quiz_key['choiceA'] ?></span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceB'] ?>" />
			        <span><?php echo $quiz_key['choiceB'] ?></span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" value="<?php echo $quiz_key['choiceC'] ?>"  />
			        <span><?php echo $quiz_key['choiceC'] ?></span>
			      </label>
			    </p>
			    <p>
			      <label>
			        <input name="<?php echo $quiz_key['quizlevel1_ID'] ?>" type="radio" <?php echo $quiz_key['choiceD'] ?>  />
			        <span><?php echo $quiz_key['choiceD'] ?></span>
			      </label>
			    </p>
		</div>

		<?php }?>






	</div>
</section>