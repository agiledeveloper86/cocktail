<div class="row-fluid">
 <div class="span8 offset2">
	<p>selectig particular elements of a particular area.</p>
	<div id="area">
    <p>this is a paragraph</p>
    <input type="button" value="button" />
    <span>this is a span</span>

	</div>
  </div>
</div>

<!--
selecting paragraph elements in a page with "area" id and alert its count==>
var count = $('#area').find('p').length ;
alert(count) ;
 -->