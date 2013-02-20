<div class="fluid-container"><div class="row-fluid"><h1 class="span4 offset5">Form</h1></div></div>

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
			   <legend>textarea(line12)</legend>
			   <label>label name</label>
			   <textarea class="field span12" rows="3"></textarea>
			 </fieldset>
		    </form>
		</div>
		<div class="span3">
			<form>
			 <fieldset>
			   <legend>checkbox(21)</legend>
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
			   <legend>radio(line35)</legend>
			   <label>label name</label>
			   <label class="radio">
                  <input type="radio" name="optionsRadio" id="optionsRadio1" value="option1"> Check me out
               </label>
               <label class="radio">
                  <input type="radio" name="optionsRadio" id="optionsRadio2" value="option2" checked> Check me out
               </label>
			 </fieldset>
		    </form>
		</div>
    </div>
    <div class="row-fluid">
    	<div class="span3">
    		<from>
    			<fieldset>
    				<legend>checkbox/radio inline(line51)</legend>
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
    				<legend>form select single</legend>
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
    				<legend>form select multiple</legend>
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
            <input type="text" class="input-medium search-query">
		    <button type="submit" class="btn">Search</button>
            </form>
		</div>
    </div>
    <div class="row-fluid">
    	<div class="span5">
    		    <form class="form-inline">
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
    </div>
</div>