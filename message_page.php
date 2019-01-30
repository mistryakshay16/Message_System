<?php
include 'side_bar_msg.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Send Message</li>
			</ol>
		</div><!--/.row-->

		<div class="panel panel-default chat">
					<div class="panel-heading">
						Chat
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">Shashi</strong> <small class="text-muted">32 mins ago</small></div>
									<p>hello bhai log .</p>
								</div>
							</li>
							<li class="right clearfix"><span class="chat-img pull-right">
								<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="pull-left primary-font">shashi</strong> <small class="text-muted">6 mins ago</small></div>
									<p>Hello bro...Kaise</p>
								</div>
							</li>
							
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
						<form method="POST" action="">
							<input id="btn-input" type="text" name="textarea" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="send-chat" name="send" type="submit">Send</button>
							</span>
						</form>
						</div>
					</div>
				</div>
	</div>
</body>
</html>