<form action="<?php echo home_url( '/' ) ?>" method="get">
	<fieldset class="row-fluid searchform">
            <input class="col-lg-10 col-md-10 col-sm-10 col-xs-10 input-search" placeholder="Поиск" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
            <input class="col-lg-2 col-md-2 col-sm-2 col-xs-2 submit-search" type="submit" value="»"/>
	</fieldset>
</form>

