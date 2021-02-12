<script type = "text/javascript">
function isEmptyValue(value){
    var pattern = /\S/;
    return ret = (pattern.test(value)) ? (true) : (false);
}
</script>
<button class = "button bt-smart hidden-sm hidden-md hidden-lg" ><i class="fa fa-search"></i></button>

<form id="searchForm" name = "searchForm" method = "post" action="<?php print SEFLink("index.php?option=com_jshopping&controller=search&task=result", 1);?>" onsubmit = "return isEmptyValue(jQuery('#jshop_search').val())">

<input type="hidden" name="setsearchdata" value="1">
<input type = "hidden" name = "category_id" value = "<?php print $category_id?>" />
<input type = "hidden" name = "search_type" value = "<?php print $search_type;?>" />
<input type = "text" class = "inputbox" name = "search" id = "jshop_search" value = "<?php print $search?>" placeholder="Искать ..." />

<button class = "button" type = "submit"><i class="fa fa-search"></i></button>

<?php if ($adv_search) {?>
<br /><a href = "<?php print $adv_search_link?>"><?php print _JSHOP_ADVANCED_SEARCH?></a>
<?php } ?>
</form>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var ua = navigator.userAgent,
	_device = (ua.match(/iPad/i)||ua.match(/iPhone/i)||ua.match(/iPod/i)) ? "smartphone" : "desktop";
	if(_device == "desktop") {
		$('.bt-smart').bind('click', function(){
			$('#searchForm').slideToggle();
		});
	}else{
		$('.bt-smart').bind('touchstart', function(){
			$('#searchForm').slideToggle();
		});
	}
	
});
</script>