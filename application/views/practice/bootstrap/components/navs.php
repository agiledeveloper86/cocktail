<div class="container-fluid"><div class="row-fluid"><div class="offset4"><h3>Nav: tabs, pills, and lists</h3></div></div></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span4">
			<legend>Basic tabs</legend>
			    <ul class="nav nav-tabs">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
			    <li><a href="#">Messages</a></li>
			    </ul>
		</div>
		<div class="span4">
			<legend>Basic pills</legend>
			<ul class="nav nav-pills">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
			    <li><a href="#">Messages</a></li>
			    </ul>
        </div>
        <div class="span4">
			<legend>Disabled state</legend>
			<ul class="nav nav-pills pull-right">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li  class="disabled" ><a href="#">Profiles</a></li>
			    <li><a href="#">Messages</a></li>
			    </ul>
        </div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<legend>Stacked tabs</legend>
			    <ul class="nav nav-tabs nav-stacked">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
			    <li><a href="#">Messages</a></li>
			    </ul>
		</div>
		<div class="span4">
			<legend>Stacked pills</legend>
			<ul class="nav nav-pills nav-stacked">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
			    <li><a href="#">Messages</a></li>
			    </ul>
		</div>
		<div class="span4">
			<legend>Tabs with dropdowns</legend>
			    <ul class="nav nav-tabs">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle"
					data-toggle="dropdown"
					href="#">
					Dropdown
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
			        <li><a href="#">Other Action</a></li>
			        <li><a href="#">Somethin else here</a></li>
			        <li class="divider"></li>
			        <li><a href="#">Separated link</a></li>
					</ul>
				</li>
			    </ul>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<legend>Pills with dropdowns</legend>
			<ul class="nav nav-pills">
			    <li class="active">
			    <a href="#">Home</a>
			    </li>
			    <li><a href="#">Profiles</a></li>
				<li class="dropdown">
					<a class="dropdown-toggle"
					data-toggle="dropdown"
					href="#">
					Dropdown
					<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
					<li><a href="#">Action</a></li>
			        <li><a href="#">Other Action</a></li>
			        <li><a href="#">Somethin else here</a></li>
			        <li class="divider"></li>
			        <li><a href="#">Separated link</a></li>
					</ul>
				</li>
			    </ul>
		</div>
		<div class="span4">
			<legend>Nav lists</legend>
			    <ul class="nav nav-list">
			    <li class="nav-header">List header</li>
			    <li class="active"><a href="#">Home</a></li>
			    <li><a href="#">Library</a></li>
			    <li><a href="#">Application</a></li>
			    <li class="nav-header">Another List header</li>
			    <li><a href="#">Profile</a></li>
			    <li><a href="#">Settings</a></li>
			    <li class="divider"></li>
			    <li><a href="#">help</a></li>
			    </ul>
		</div>
		<div class="span4">
			<legend>Tabbable nav</legend>
			    <div class="tabbable"> <!-- Only required for left/right tabs -->
			    <ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
			    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
			    <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
			    </ul>
			    <div class="tab-content">
			    <div class="tab-pane active" id="tab1">
			    <p>I'm in Section 1.</p>
			    </div>
			    <div class="tab-pane" id="tab2">
			    <p>Howdy, I'm in Section 2.</p>
			    </div>
			    <div class="tab-pane" id="tab3">
			    <p>What up developer, this is Section 3.</p>
			    </div>
			    </div>
			    </div>
		</div>
    </div>
    <div class="row-fluid">
    	<div class="span4">
    		<legend>Tabs on the bottom</legend>
    		    <div class="tabbable tabs-below">
			    <div class="tab-content">
			    <div class="tab-pane active" id="tab1a">
			    <p>I'm in Section 1.</p>
			    </div>
			    <div class="tab-pane" id="tab2a">
			    <p>Howdy, I'm in Section 2.</p>
			    </div>
			    <div class="tab-pane" id="tab3a">
			    <p>What up developer, this is Section 3.</p>
			    </div>
			    </div>
			    
			    <ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1a" data-toggle="tab">Section 1</a></li>
			    <li><a href="#tab2a" data-toggle="tab">Section 2</a></li>
			    <li><a href="#tab3a" data-toggle="tab">Section 3</a></li>
			    </ul>
			    </div>
    	</div>
	    <div class="span4">
    		<legend>Tabs on the left</legend>
    		<div class="tabbable tabs-left">
    			<ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1l" data-toggle="tab">Section 1</a></li>
			    <li><a href="#tab2l" data-toggle="tab">Section 2</a></li>
			    <li><a href="#tab3l" data-toggle="tab">Section 3</a></li>
			    </ul>
			    <div class="tab-content">
				        <div class="tab-pane active" id="tab1l">
					    <p>I'm in Section 1.</p>
					    </div>
					    <div class="tab-pane" id="tab2l">
					    <p>Howdy, I'm in Section 2.</p>
					    </div>
					    <div class="tab-pane" id="tab3l">
					    <p>What up developer, this is Section 3.</p>
					    </div>
				</div>
			</div>
		</div>
	    <div class="span4">
    		<legend>Tabs on the right</legend>
    		<div class="tabbable tabs-right">
    			<ul class="nav nav-tabs">
			    <li class="active"><a href="#tab1r" data-toggle="tab">Section 1</a></li>
			    <li><a href="#tab2r" data-toggle="tab">Section 2</a></li>
			    <li><a href="#tab3r" data-toggle="tab">Section 3</a></li>
			    </ul>
			    <div class="tab-content">
				        <div class="tab-pane active" id="tab1r">
					    <p>I'm in Section 1.</p>
					    </div>
					    <div class="tab-pane" id="tab2r">
					    <p>Howdy, I'm in Section 2.</p>
					    </div>
					    <div class="tab-pane" id="tab3r">
					    <p>What up developer, this is Section 3.</p>
					    </div>
				</div>
			</div>
		</div>
    </div>
</div>