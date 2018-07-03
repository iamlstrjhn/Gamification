<div class="container">
	<h5 style="margin-bottom: 30px; font-weight: 300; color: white;">List of students <a href="<?php  echo base_url('Teacherdashboard') ?>" class="right"><i class="material-icons back-icon">arrow_back</i></a></h5>
	
	<table class="table-responsive table-leaderboard-custom">
        <thead class="cyan lighten-2">
          <tr>
              <th>Name</th>
              <th>ID Number</th>
              <th>Course</th>
          </tr>
        </thead>

        <tbody class="custom-tbody">
        <?php foreach ($load_students as $student) { ?>
             <tr>
            <td><?php echo $student['firstName']. " ".$student['lastName'] ?></td>
            <td><?php echo $student['idNumber'] ?></td>
            <td><?php echo $student['course'] ?></td>
          </tr>
        <?php }?>

        
         
          
        </tbody>
      </table>

  

</div>

