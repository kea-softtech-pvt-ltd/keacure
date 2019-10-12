<!doctype html>
<html>
	{include file='administrator/common/header.tpl'}
	<body cz-shortcut-listen="true">		
		<div class="wrapper">
		    
			{include file='administrator/common/sidebar.tpl'}
		    <div class="main-panel">
				{include file='administrator/common/top-bar.tpl'}

		        <div class="content">
		            <div class="container-fluid">
		                <div class="row">
		                    <div class="col-md-8">
		                        <div class="card">
		                            <div class="header">
		                                <h4 class="title">Edit Profile</h4>
		                            </div>
		                            <div class="content">
		                                <form>
		                                    <div class="row">
		                                        <div class="col-md-5">
		                                            <div class="form-group">
		                                                <label>Company (disabled)</label>
		                                                <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-3">
		                                            <div class="form-group">
		                                                <label>Username</label>
		                                                <input type="text" class="form-control" placeholder="Username" value="michael23">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label for="exampleInputEmail1">Email address</label>
		                                                <input type="email" class="form-control" placeholder="Email">
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label>First Name</label>
		                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-6">
		                                            <div class="form-group">
		                                                <label>Last Name</label>
		                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-12">
		                                            <div class="form-group">
		                                                <label>Address</label>
		                                                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label>City</label>
		                                                <input type="text" class="form-control" placeholder="City" value="Mike">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label>Country</label>
		                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
		                                            </div>
		                                        </div>
		                                        <div class="col-md-4">
		                                            <div class="form-group">
		                                                <label>Postal Code</label>
		                                                <input type="number" class="form-control" placeholder="ZIP Code">
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <div class="row">
		                                        <div class="col-md-12">
		                                            <div class="form-group">
		                                                <label>About Me</label>
		                                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
		                                            </div>
		                                        </div>
		                                    </div>

		                                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
		                                    <div class="clearfix"></div>
		                                </form>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-md-4">
		                        <div class="card card-user">
		                            <div class="image">
		                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
		                            </div>
		                            <div class="content">
		                                <div class="author">
		                                     <a href="#">
		                                    <img class="avatar border-gray" src="{$siteroot}administrator/img/faces/face-3.jpg" alt="..."/>

		                                      <h4 class="title">Mike Andrew<br />
		                                         <small>michael24</small>
		                                      </h4>
		                                    </a>
		                                </div>
		                                <p class="description text-center"> "Lamborghini Mercy <br>
		                                                    Your chick she so thirsty <br>
		                                                    I'm in that two seat Lambo"
		                                </p>
		                            </div>
		                            <hr>
		                            <div class="text-center">
		                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
		                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
		                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

		                            </div>
		                        </div>
		                    </div>

		                </div>

		                <div class="row">
		                	<div class="col-md-12">
		                        <div class="card">
		                            <div class="header">
		                                <h4 class="title">Striped Table with Hover</h4>
		                                <p class="category">Here is a subtitle for this table</p>
		                            </div>
		                            <div class="content table-responsive table-full-width">
		                                <table class="table table-hover table-striped">
		                                    <thead>
		                                        <th>ID</th>
		                                    	<th>Name</th>
		                                    	<th>Salary</th>
		                                    	<th>Country</th>
		                                    	<th>City</th>
		                                    </thead>
		                                    <tbody>
		                                        <tr>
		                                        	<td>1</td>
		                                        	<td>Dakota Rice</td>
		                                        	<td>$36,738</td>
		                                        	<td>Niger</td>
		                                        	<td>Oud-Turnhout</td>
		                                        </tr>
		                                        <tr>
		                                        	<td>2</td>
		                                        	<td>Minerva Hooper</td>
		                                        	<td>$23,789</td>
		                                        	<td>Curaçao</td>
		                                        	<td>Sinaai-Waas</td>
		                                        </tr>
		                                        <tr>
		                                        	<td>3</td>
		                                        	<td>Sage Rodriguez</td>
		                                        	<td>$56,142</td>
		                                        	<td>Netherlands</td>
		                                        	<td>Baileux</td>
		                                        </tr>
		                                        <tr>
		                                        	<td>4</td>
		                                        	<td>Philip Chaney</td>
		                                        	<td>$38,735</td>
		                                        	<td>Korea, South</td>
		                                        	<td>Overland Park</td>
		                                        </tr>
		                                        <tr>
		                                        	<td>5</td>
		                                        	<td>Doris Greene</td>
		                                        	<td>$63,542</td>
		                                        	<td>Malawi</td>
		                                        	<td>Feldkirchen in Kärnten</td>
		                                        </tr>
		                                        <tr>
		                                        	<td>6</td>
		                                        	<td>Mason Porter</td>
		                                        	<td>$78,615</td>
		                                        	<td>Chile</td>
		                                        	<td>Gloucester</td>
		                                        </tr>
		                                    </tbody>
		                                </table>

		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>


		        <footer class="footer">
		            <div class="container-fluid">
		                <nav class="pull-left">
		                    <ul>
		                        <li>
		                            <a href="#">
		                                Home
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                                Company
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                                Portfolio
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                               Blog
		                            </a>
		                        </li>
		                    </ul>
		                </nav>
		                <p class="copyright pull-right">
		                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
		                </p>
		            </div>
		        </footer>

		    </div>
		</div>

		
		{include file='administrator/common/footer.tpl'}
		{include file='administrator/common/scripts.tpl'}
	</body>
</html>