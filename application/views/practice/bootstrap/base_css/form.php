<div class="container-fluid"><div class="row-fluid"><h1 class="span4 offset5">Form</h1></div></div>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span3">
			<form>
			 <fieldset>
			   <legend>text(line5)</legend>
			   <label>Label name</label>
			   <input type="text" class="field span12" placeholder="Input your text here">
			 </fieldset>
		    </form>
		</div>
		<div class="span3">
			<form>
			 <fieldset>
			   <legend>textarea(line14)</legend>
			   <label>label name</label>
			   <textarea class="field span12" rows="3"></textarea>
			 </fieldset>
		    </form>
		</div>
		<div class="span3">
			<form>
			 <fieldset>
			   <legend>checkbox(23)</legend>
			   <label>label name</label>
			   <label class="checkbox">
                  <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox1" value="option1"> Check me out
               </label>
               <label class="checkbox">
                  <input type="checkbox" name="optionsCheckbox" id="optionsCheckbox2" value="option2" checked> Check me out
               </label>
			 </fieldset>
		    </form>
		</div>
		<div class="span3">
			<form>
			 <fieldset>
			   <legend>radio(line37)</legend>
			   <label>label name</label>
			   <label class="radio">
                  <input type="radio" name="optionsRadio" id="optionsRadio1" value="option1"> Check me out
               </label>
               <label class="radio">
                  <input type="radio" name="optionsRadio" id="optionsRadio2" value="option2" checked> Check me out
               </label>
			 </fieldset>
		    </form>
		</div><!--row1################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<from>
    			<fieldset>
    				<legend>checkbox/radio inline(line53)</legend>
    				<lebel>checkbox</lebel>
    				    <label class="checkbox inline">
					    <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
					    </label>
					    <label class="checkbox inline">
					    <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
					    </label>
					    <label class="checkbox inline">
					    <input type="checkbox" id="inlineCheckbox3" value="option3" checked> 3
					    </label>

					    <br />
                        
                        <lebel>radio</lebel>
					    <label class="radio inline">
					    <input type="radio" id="inlineRadio1" value="option1"> 1
					    </label>
					    <label class="radio inline">
					    <input type="radio" id="inlineRadio2" value="option2"> 2
					    </label>
					    <label class="radio inline">
					    <input type="radio" id="inlineRadio3" value="option3" checked> 3
					    </label>
    				
    			</fieldset>
    		</from>
    	</div>
    	<div class="span3">
    		<form>
    			<fieldset>
    				<legend>form select single(line84)</legend>
    				<lebel>select one</lebel>
    				<select>
						<option>1</option>
						<option>2</option>
                        <option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
    			</fieldset>
    		</form>
    	</div>
    	<div class="span3">
    		<form>
    			<fieldset>
    				<legend>form select multiple(line99)</legend>
    				<lebel>select multiple</lebel>
    				<select multiple="multiple">
						<option>1</option>
						<option>2</option>
                        <option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
    			</fieldset>
    		</form>
    	</div>
    	<div class="span3">
		    <form class="form-search">
		    <legend>search form(line114)</legend>

            <input type="text" class="input-medium search-query">
		    <button type="submit" class="btn ">Search</button>
            </form>
		</div><!--row2################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span5">
    		    <form class="form-inline">
    		    	<legend>Inline form(line124)</legend>
    		    	
				    <input type="text" class="input-small" placeholder="Email">
				    <input type="password" class="input-small" placeholder="Password">
				    <label class="checkbox">
				    <input type="checkbox"> Remember me
				    </label>
				    <button type="submit" class="btn">Sign in</button>
			    </form>
    	</div>
    	<div class="span4">
		    <form class="form-horizontal">
		    	<legend>Horizontal form(line136)</legend>
		    	
			    <div class="control-group">
			    <label class="control-label" for="inputEmail">Email</label>
			    <div class="controls">
			    <input type="text" id="inputEmail" placeholder="Email">
			    </div>
			    </div>
			    <div class="control-group">
			    <label class="control-label" for="inputPassword">Password</label>
			    <div class="controls">
			    <input type="password" id="inputPassword" placeholder="Password">
			    </div>
			    </div>
			    <div class="control-group">
			    <div class="controls">
			    <label class="checkbox">
			    <input type="checkbox"> Remember me
			    </label>
			    <button type="submit" class="btn">Sign in</button>
			    </div>
			    </div>
		    </form>
    	</div>
    	<div class="span3">
    		<legend>Prepended Appended(line162)</legend>
    		    <div class="input-prepend">
				    <span class="add-on">@</span>
				    <input class="span12" id="prependedInput" type="text" placeholder="Username">
				    </div>
				    <div class="input-append">
				    <input class="span12" id="appendedInput" type="text">
				    <span class="add-on">.00</span>
				    </div>
		</div><!--row3################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<legend>combined(line175)</legend>
    		    <div class="input-prepend input-append">
				    <span class="add-on">$</span>
				    <input class="span12" id="appendedPrependedInput" type="text">
				    <span class="add-on">.00</span>
			    </div>
    	</div>
    	<div class="span3">
    		    <legend>Buttons for text(line183)</legend>
    		    <div class="input-append">
				    <input class="span12" id="appendedInputButton" type="text">
				    <button class="btn" type="button">Go!</button>
			    </div>
			        <div class="input-append">
					    <input class="span6" id="appendedInputButtons" type="text">
					    <button class="btn" type="button">Search</button>
					    <button class="btn" type="button">Options</button>
				</div>
    	</div>
    	<div class="span3">
    	  <legend>Button dropdowns(line195)</legend>
    	        <div class="input-append">
			    <input class="span10" id="appendedDropdownButton" type="text">
			    <div class="btn-group">
			    <button class="btn dropdown-toggle" data-toggle="dropdown">
			    Action
			    <span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu">
			    <li><a href="#">Dropdown1</a></li>
                <li><a href="#">Dropdown2</a></li>
                <li><a href="#">Dropdown3</a></li>
                <li><a href="#">Dropdown4</a></li>
                <li><a href="#">Dropdown5</a></li>
			    </ul>
			    </div>
			    </div>
        </div>
        <div class="span3">
         <legend>Button dropdowns(line214)</legend>
            <div class="input-prepend">
		    <div class="btn-group">
		    <button class="btn dropdown-toggle" data-toggle="dropdown">
		    Action
		    <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
			    <li><a href="#">Dropdown1</a></li>
                <li><a href="#">Dropdown2</a></li>
                <li><a href="#">Dropdown3</a></li>
                <li><a href="#">Dropdown4</a></li>
                <li><a href="#">Dropdown5</a></li>
		    </ul>
		    </div>
		    <input class="span10" id="prependedDropdownButton" type="text">
		    </div>
        </div><!--row4################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span3">
	    		<legend>Button dropdowns(line235)</legend>
	    		<div class="input-prepend input-append">
					<div class="btn-group">
					    <button class="btn dropdown-toggle" data-toggle="dropdown">
					    Action
					    <span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu">
						    <li><a href="#">Dropdown1</a></li>
			                <li><a href="#">Dropdown2</a></li>
			                <li><a href="#">Dropdown3</a></li>
					    </ul>
					</div>
					<input class="span5" id="appendedPrependedDropdownButton" type="text">
					<div class="btn-group">
					    <button class="btn dropdown-toggle" data-toggle="dropdown">
					    Action
					    <span class="caret"></span>
					    </button>
					    <ul class="dropdown-menu">
						    <li><a href="#">Dropdown1</a></li>
			                <li><a href="#">Dropdown2</a></li>
			                <li><a href="#">Dropdown3</a></li>
			                <li><a href="#">Dropdown4</a></li>
			                <li><a href="#">Dropdown5</a></li>
					    </ul>
					</div>
				</div>
        </div>
        <div class="span3">
         	        <form class="form-search">
         	        <legend>search form(conflict 265)</legend>
				    <div class="input-append">
				    <input type="text" class="span10 search-query">
				    <button type="submit" class="btn">Search</button>
				    </div>
				    <div class="input-prepend">
				    <button type="submit" class="btn">Search</button>
				    <input type="text" class="span10 search-query">
				    </div>
				    </form>
        </div>
        <div class="span6">
	         	<legend>Control sizing(Relative sizing/Block level inputs line278)</legend>
	             	<input class="input-mini" type="text" placeholder=".input-mini"><br />
				    <input class="input-small" type="text" placeholder=".input-small"><br />
				    <input class="input-medium" type="text" placeholder=".input-medium"><br />
				    <input class="input-large" type="text" placeholder=".input-large"><br />
				    <input class="input-xlarge" type="text" placeholder=".input-xlarge"><br />
				    <input class="input-xxlarge" type="text" placeholder=".input-xxlarge"><br />
				    <input class="input-block-level" type="text" placeholder=".input-block-level">
        </div><!--row5################################################ -->
    </div>
    <div class="row-fluid">
        <div class="span3">
	       <legend>Grid sizing(line290)</legend>
	      	    <input class="span3" type="text" placeholder=".span3"><br />
			    <input class="span4" type="text" placeholder=".span4"><br />
			    <input class="span5" type="text" placeholder=".span5"><br />
			    <select class="span3"><br />
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    </select>
			    <select class="span5"><br />
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    </select>
			    <select class="span7">
			    <option>1</option>
			    <option>2</option>
			    <option>3</option>
			    </select>
        </div>
        <div class="span3">
	      	<legend>Grid sizing2(line 311)</legend>
	      	<div class="controls">
				<input class="span12" type="text" placeholder=".span12">
			</div>
			<div class="controls controls-row">
				<input class="span8" type="text" placeholder=".span8">
				<input class="span4" type="text" placeholder=".span4">
			</div>
	        <div class="controls controls-row">
				<input class="span4" type="text" placeholder=".span4">
				<input class="span3" type="text" placeholder=".span3">
				<input class="span5" type="text" placeholder=".span5">
			</div>
	    </div>
        <div class="span3">
	      	<legend>Uneditable inputs(line 326)</legend>
	    	<span class="input-xlarge uneditable-input">Some value here</span>
        </div>
        <div class="span3">
	      	<legend>Form actions(line 330)</legend>
	      	    <div class="form-actions">
			    <button type="submit" class="btn btn-primary">Save changes</button>
			    <button type="button" class="btn">Cancel</button>
			    </div>
        </div><!--row6################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<legend>Inline help(line 339)</legend>
    		<input type="text" class="span8"><span class="help-inline">Inline help text</span>
    	</div>
    	<div class="span3">
    		<legend>Block help(line 343)</legend>
    		<input type="text"><span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
    	</div>
    	<div class="span3">
    		<legend>Input focus(line 347)</legend>
    		<input class="input-xlarge" id="focusedInput" type="text" value="This is focused...">
    	</div>
    	<div class="span3">
    		<legend>Invalid inputs(line 351)</legend>
    		<input class="span12" type="email" placeholder="email@website.com" required>
    	</div><!--row7################################################ -->
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<legend>Disabled inputs(line 357)</legend>
    		<input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
    	</div>
    	<div class="span3">
    		<legend>Validation states(line 361)</legend>
    		    <div class="control-group warning">
				   <label class="control-label" for="inputWarning">Input with warning</label>
				  <div class="controls">
				    <input type="text" id="inputWarning">
				    <span class="help-inline">Something may have gone wrong</span>
				  </div>
				</div>
				     
				<div class="control-group error">
				    <label class="control-label" for="inputError">Input with error</label>
				   <div class="controls">
				    <input type="text" id="inputError">
				    <span class="help-inline">Please correct the error</span>
				   </div>
				</div>
				     
				    <div class="control-group info">
				    <label class="control-label" for="inputInfo">Input with info</label>
				    <div class="controls">
				    <input type="text" id="inputInfo">
				    <span class="help-inline">Username is already taken</span>
				    </div>
				    </div>
				     
				    <div class="control-group success">
				    <label class="control-label" for="inputSuccess">Input with success</label>
				    <div class="controls">
				    <input type="text" id="inputSuccess">
				    <span class="help-inline">Woohoo!</span>
				    </div>
				    </div>
    	</div><!--row8################################################ -->
    </div>
</div>