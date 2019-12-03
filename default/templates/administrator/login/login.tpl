<!doctype html>
<html>
	{include file='administrator/common/header.tpl'}
	<body cz-shortcut-listen="true">	

				<main>
					<div class="container">
						<div class="row justify-content-md-center">
							
							<div id="login" class="col-md-4">
								<div class=" text-center add_top_20">
									<a class="navbar-brand" href="{$siteroot}"><img src="../default/assets/img/logo.png" data-retina="true" alt="" width="163" height="36"></a>
								</div>
								<div class="box_form add_top_20">
									<form action="{$siteroot}admin/login" method="post" name="frmLogin">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="Your email address">
										</div>
										<div class="form-group">
											<input type="password" class="form-control" placeholder="Your password" id="password" name="password">
										</div>
										<div class="form-group text-center add_top_20">
											<input class="btn_1 medium" type="submit" value="Login">
										</div>
									</form>
								</div>
							</div>
							<!-- /login -->
						</div>
					</div>
				</main>
		
		{include file='administrator/common/footer.tpl'}
		{include file='administrator/common/scripts.tpl'}
	</body>
</html>