<?php if (isset($this->session->userdata['logged_in'])) {
	$name = ($this->session->userdata['logged_in']['name']);
	$username = ($this->session->userdata['logged_in']['username']);
	$admin = ($this->session->userdata['logged_in']['admin']);

	header("location: user_main");

	} 

	
  //  $latest_entry = $this->opd_management->getlatestopd();

?>

<div  id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?=base_url()?>login" class="-brand"><img src="<?=base_url()?>assets/img/logo-new.jpg" style="height:100px;" class="img-responsive" alt=""></a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<button type="button" class="navbar-toggle p-0 m-r-5" data-toggle="collapse" data-target="#top-navbar">
					    <span class="fa-stack fa-lg text-inverse">
                            <i class="fa fa-square-o fa-stack-2x m-t-2"></i>
                            <i class="ion-ios-gear fa-stack-1x"></i>
                        </span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse pull-left" id="top-navbar">
                    <ul class="nav navbar-nav">
                       
                        
                        
                    </ul>
                </div>
				<!-- end navbar-collapse -->
				
				
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>