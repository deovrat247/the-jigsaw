<!-- Flash message -->
       <!-- User Registered --> <br/>
       	<div class="container">
       		<?php if($this->session->flashdata('user_registered')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
       		
      	<?php endif; ?>
      	<!-- Post Created -->
      	<?php if($this->session->flashdata('post_created')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
       		
      	<?php endif; ?>
      	<!-- Post Updated -->
      	<?php if($this->session->flashdata('post_updated')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
       		
      	<?php endif; ?>
      	<!-- Category Created -->
      	<?php if($this->session->flashdata('category_created')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
       		
      	<?php endif; ?>
      	<!-- Post Deleted -->
      	<?php if($this->session->flashdata('post_deleted')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
       		
      	<?php endif; ?>
      	
      <!-- Login Failed-->
      	<?php if($this->session->flashdata('login_failed')): ?>
       		<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       		
      	<?php endif; ?>
      	
      <!-- User Logged in-->
      	<?php if($this->session->flashdata('user_loggedin')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
       		
      	<?php endif; ?>
      	<!-- User Logged Out-->
      	<?php if($this->session->flashdata('user_loggedout')): ?>
       		<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       		
      	<?php endif; ?>
       	</div>