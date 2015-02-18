<?php
/* * *******************************************************************************
 * The content of this file is subject to the MYC Vtiger Customer Portal license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is Proseguo s.l. - MakeYourCloud
 * Portions created by Proseguo s.l. - MakeYourCloud are Copyright(C) Proseguo s.l. - MakeYourCloud
 * All Rights Reserved.
 * Contributor(s): YetiForce.com
 * ****************************************************************************** */
?>
<?php require_once("themes/default/header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel" id="loginpanel">
					<div class="panel-body">
						<div class="row">
							<img alt="Logo" class="center-block cp-logo img-responsive" title="Logo" src="<?php echo "themes/".$currtheme; ?>/images/logo.png"/>
						</div>
						<?php if(isset($loginerror)):  ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						  <?php echo Language::translate($loginerror); ?>
						</div>
						<?php endif;  ?>
						<?php if(isset($successmess)):  ?>
						<div class="alert alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						  <?php echo Language::translate($successmess); ?>
						</div>
						<?php endif;  ?>
						<form role="form" method="post">
							<fieldset>
								<div class="form-group">
									<div class="form-group input-group">
										<span class="input-group-addon cp-login-span">
											<img alt="Login icon" class="center-block" title="Login icon" src="<?php echo "themes/".$currtheme; ?>/images/login_icon.png"/> 
										</span>
										<input class="form-control input-lg cp-login-input" placeholder="<?php echo Language::translate("LBL_LOGIN"); ?>" name="email" type="email" autofocus required>
									</div>
								</div>
								<div class="form-group input-group">
									<span class="input-group-addon cp-login-span">
										<img alt="Password icon" class="center-block" title="Password icon" src="<?php echo "themes/".$currtheme; ?>/images/password_icon.png"/> 
									</span>
									<input class="form-control input-lg cp-login-input" placeholder="<?php echo Language::translate("LBL_PASSWORD"); ?>" name="pass" type="password" value="" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon cp-login-span">
										<img alt="Language icon" class="center-block language-icon" title="Language icon" src="<?php echo "themes/".$currtheme; ?>/images/poland_icon.png"/> 
									</span>
									<div class="styled-select">
										<select class="form-control input-lg cp-login-input lang-select" name="lang" required>
											<?php foreach($GLOBALS['languages'] as $file => $lang) 
													echo '<option value="'.$file.'">'.$lang.'</option>';
											?>
										</select>
									</div>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button type="submit" class="btn btn-lg btn-success btn-block btn-start"><?php echo Language::translate("LBL_START"); ?></button>
								<p class="pull-right forgot-password" onclick="$('#loginpanel').hide();$('#forgotpanel').show();">* <?php echo Language::translate("LBL_FORGOT_PASSWORD"); ?></p>   
							</fieldset>
						</form>
					</div>
				</div>
				<div class="login-panel " id="forgotpanel">
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo Language::translate("LBL_REQUEST_PASSWORD"); ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<img alt="Logo" class="center-block cp-logo" title="Logo" src="<?php echo "themes/".$currtheme; ?>/images/logo.png"/>
						</div>
						<form role="form" method="post" >
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="<?php echo Language::translate("LBL_EMAIL"); ?>" name="email" type="email" autofocus required>
									<input name="forgot" type="hidden" value="1" >
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<button type="submit" class="btn btn-lg btn-success btn-block"><?php echo Language::translate("LBL_SEND_PASSWORD"); ?></button>
								<a onclick="$('#forgotpanel').hide();$('#loginpanel').show();" class="btn btn-lg btn-warning btn-block"><?php echo Language::translate("LBL_LNK_HOME"); ?></a>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(function(){ $('#forgotpanel').hide(); })
		var selectCountry = $('.lang-select :selected').text();
		updateCountryImage(selectCountry);	

		$('.lang-select').change(function(e) {
			var selectCountry = $('.lang-select :selected').text();
			updateCountryImage(selectCountry);
		});

		function updateCountryImage(selectedCountry){
			var languages = {'English': 'english', Polski: 'poland', Deutsch: 'deutsch', Russian: 'russia', 'Brazilian Portuguese': 'brazil'};
			var countryIcon = languages[selectedCountry];
			console.log(countryIcon);
			$('.language-icon').attr('src', 'themes/default/images/'+countryIcon+'.png' );
		}

	</script>
  
<?php require_once("themes/default/footer.php"); ?>