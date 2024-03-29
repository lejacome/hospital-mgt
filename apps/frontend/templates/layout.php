<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
  <title>Hospital Management System</title>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
	<?php include_javascripts() ?>
<script language="JavaScript" src="<?php echo _compute_public_path('livevalidation_standalone.compressed', 'js', 'js', false);  ?>"></script>
<script language="JavaScript" src="<?php echo _compute_public_path('json2', 'js', 'js', false);  ?>"></script>

<link href="<?php echo _compute_public_path('chromestyle', 'css', 'css', false);  ?>" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo _compute_public_path('chrome', 'js', 'js', false);  ?>"></script>


<!--FOR Favicon-->
<link rel="favicon" href="<?php echo _compute_public_path('favicon', 'images', 'ico', true);  ?>"/> 
<link rel="shortcut icon" href="<?php echo _compute_public_path('favicon', 'images', 'ico', true);  ?>" />
<link rel="icon" href="<?php echo _compute_public_path('favicon', 'images', 'ico', true);  ?>" />

<!--FOR CSS File-->
<link href="<?php echo _compute_public_path('style', 'css', 'css', false);  ?>" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<link href="<?php echo _compute_public_path('iecss', 'css', 'css', false);  ?>" rel="stylesheet" type="text/css" />
<![endif]-->
  </head>
 
 <body>
    
	
	<div id="main_container">
	<div class="header">
    	<div id="logo">
		<?php if ($sf_user->isAuthenticated()): ?>
			<?php echo link_to (image_tag('logo.png',array('borber'=>'0','width'=>'162', 'height'=>'54')),'Home/index');?>
			<?php else: ?>
			<?php echo link_to (image_tag('logo.png',array('borber'=>'0','width'=>'162', 'height'=>'54')),'Login/index');?>
		<?php endif; ?>
		</div>
    
    	<div class="right_header">
        	<div class="top_menu">
			<?php if ($sf_user->isAuthenticated()): ?>
			<?php echo 'Welcome <strong>'.$sf_user->getAttribute('NAME').'</strong>'; ?><br />

			<?php echo link_to ('Change Password', 'Login/changePassword'); ?>&nbsp;|&nbsp;<?php echo link_to ('Logout', 'Login/logout'); ?>
			<!--<a href="#" class="login">login</a>-->
            <!--<a href="#" class="sign_up">signup</a>-->
			<?php else:?>
			<?php echo link_to('Login','Login/index', array('class'=>'login')) ;?>
            
			<?php //echo 'Welcome '.$sf_user->getAttribute('NAME'); ?>
        	<?php endif ?>
			</div>
            <div id="menu">
			<div class="chromestyle" id="chromemenu">
				<?php if ($sf_user->isAuthenticated()): ?>
				<?php $user_role = $sf_user->getAttribute('ROLE') ?>
				<?php if ($user_role == 'Administrator'): ?>
				<ul>
					<li><?php echo link_to ('Home', 'Home/index', array(/*'class'=>'current'*/)); ?></li>
					<li><?php echo link_to ('Front Desk', 'FrontDesk/index', 'rel=dropmenu_2'); ?></li>
                    <li><?php echo link_to ('Administrator', 'Employee/list', 'rel=dropmenu_3'); ?></li>
					<li><?php echo link_to ('Doctor', 'Visit/docList', 'rel=dropmenu_4'); ?></li>
					<li><?php echo link_to ('Settings', 'Home/settings', 'rel=dropmenu_1'); ?></li>
				</ul>
				
				<?php elseif ($user_role == 'Doctor'): ?>
				<ul>
					<li><?php echo link_to ('Patient Visit', 'Visit/docList'); ?></li>
					<li><?php echo link_to ('Lab Reports', 'LabReport/list'); ?></li>
					<li><?php echo link_to ('Search Report', 'LabReport/previousReport'); ?></li>

				</ul>
				
				<?php elseif ( $user_role == 'Front Desk'): ?>
				<ul>
					<li><?php echo link_to ('OPD Visits', 'FrontDesk/visitList'); ?></li>
					<li><?php echo link_to ('Patient List', 'Patient/list'); ?></li>
					<li><?php echo link_to ('Duty Roster', 'FrontDesk/dutyRoster'); ?></li>
					<li><?php echo link_to ('Previous Visits', 'FrontDesk/visitPrevious'); ?></li>
				</ul>
				
				<?php elseif ( $user_role == 'Employee'): ?>
				<ul>
				<li><?php echo link_to ('Home', 'Home/index'); ?></li>
				<li><?php echo link_to ('Medical', 'Home/med', 'rel=dropmenu_5'); ?></li>
				<li><?php echo link_to ('Surgical', 'Home/cardiac', 'rel=dropmenu_6'); ?></li>
				<li><?php echo link_to ('About Us', 'Home/about'); ?></li>
				<li><?php echo link_to ('Contact Us', 'Home/contact'); ?></li>
			</ul>
				<?php endif ;?>
			</div>
	
				<!--DROP DOWNS FOR AUTHENTICATED USERS-->
					<div id="dropmenu_1" class="dropmenudiv" style="width: 150px; height:30px;">
						<?php echo link_to ('Department', 'Department/list'); ?>
						<?php echo link_to ('Designation', 'Designation/list'); ?>
						<?php echo link_to ('Pharma', 'Pharma/list'); ?>
						<?php echo link_to ('Lab Tests', 'LabTest/list'); ?>
						<?php echo link_to ('Duty Places', 'DutyPlace/list'); ?>
						<?php echo link_to ('Ward', 'Ward/list'); ?>
						<?php echo link_to ('Beds in Ward', 'WardBed/list'); ?>
						<?php echo link_to ('Rooms', 'Room/list'); ?>
						<?php echo link_to ('Dosage', 'Dosage/list'); ?>
						
					</div>
					
					<div id="dropmenu_2" class="dropmenudiv" style="width: 150px; height:30px;">
					<?php echo link_to ('Outdoor Patient Visits', 'FrontDesk/visitList'); ?>
					<?php echo link_to ('Patient List', 'Patient/list'); ?>
					<?php echo link_to ('Duty Roster', 'FrontDesk/dutyRoster'); ?>
					<?php echo link_to ('Previous Visits', 'FrontDesk/visitPrevious'); ?>
					</div>
					
					<div id="dropmenu_3" class="dropmenudiv" style="width: 150px; height:30px;">
					<?php echo link_to ('Employee', 'Employee/list'); ?>
					<?php echo link_to ('System Users', 'User/list'); ?>
					</div>
					
					<div id="dropmenu_4" class="dropmenudiv" style="width: 150px; height:30px;">
					<?php echo link_to ('Patient Visit', 'Visit/docList'); ?>
					<?php echo link_to ('Lab Reports', 'LabReport/list'); ?>
					<?php echo link_to ('Search Lab Reports', 'LabReport/previousReport'); ?>
					</div>
					
					<div id="dropmenu_5" class="dropmenudiv" style="width: 150px; height:30px; ">
					<?php echo link_to ('General Madication', 'Home/med'); ?>
					<?php echo link_to ('Cardioloy', 'Home/cardiacs'); ?>
					<?php echo link_to ('Neurology', 'Home/neuros'); ?>
					</div>
				
					<div id="dropmenu_6" class="dropmenudiv" style="width: 150px; height:30px; ">
					<?php echo link_to ('Cardiac Surgery', 'Home/cardiac'); ?>
					<?php echo link_to ('General Surgery', 'Home/general'); ?>
					<?php echo link_to ('Neuro Surgery', 'Home/neuro'); ?>
					<?php echo link_to ('Ent Surgery', 'Home/ent'); ?>
					</div>
					
			
			<?php else: ?>
			<ul>
				<li><?php echo link_to ('Home', 'Home/index'); ?></li>
				<li><?php echo link_to ('Medical', 'Home/med', 'rel=dropmenu_5'); ?></li>
				<li><?php echo link_to ('Surgical', 'Home/cardiac', 'rel=dropmenu_6'); ?></li>
				<li><?php echo link_to ('About Us', 'Home/about'); ?></li>
				<li><?php echo link_to ('Contact Us', 'Home/contact'); ?></li>
			</ul>
				
					<div id="dropmenu_5" class="dropmenudiv" style="width: 150px; height:30px; ">
					<?php echo link_to ('General Madication', 'Home/med'); ?>
					<?php echo link_to ('Cardioloy', 'Home/cardiacs'); ?>
					<?php echo link_to ('Neurology', 'Home/neuros'); ?>
					</div>
				
					<div id="dropmenu_6" class="dropmenudiv" style="width: 150px; height:30px; ">
					<?php echo link_to ('Cardiac Surgery', 'Home/cardiac'); ?>
					<?php echo link_to ('General Surgery', 'Home/general'); ?>
					<?php echo link_to ('Neuro Surgery', 'Home/neuro'); ?>
					<?php echo link_to ('Ent Surgery', 'Home/ent'); ?>
					</div>

			</div>
				<?php endif ?>
	
			<script type="text/javascript">
				cssdropdown.startchrome("chromemenu")
			</script>
            </div>
        
        </div>
    
    </div>
    
	<?php if ($sf_user->hasFlash('SUCCESS_MESSAGE')): ?>
				<tr>
					<td align="center" colspan="2">
						<div class="success_bar">
							<?php echo $sf_user->getFlash('SUCCESS_MESSAGE');?>
						</div>
					</td>
				 </tr>
			<?php endif; ?>
	
	
			<?php if ($sf_user->hasFlash('ERROR_MESSAGE')): ?>
				<tr>
					<td align="center" colspan="2">
						<div class="error_bar">
							<?php echo $sf_user->getFlash('ERROR_MESSAGE');?>
						</div>
					</td>
				 </tr>
			<?php endif; ?>
			
		<!--This is the place where the main content will appear-->
          <?php echo $sf_content ?>  
            
     <div id="footer">
     	<!--<div class="copyright">
        <img src="images/footer_logo.gif" alt="" title="" />
        </div>-->
        <div class="center_footer">&copy; Hospital Management System 2011. All Rights Reserved <br />COMSATS Institute of Information Technology, Wah Campus</div>
    </div>


</div>
  </body>
</html>
