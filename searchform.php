<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="sidebar__searchform">
    <input class="sidebar__searchform-input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s">
    <button  type="submit" id="searchsubmit" class="sidebar__searchform-button"><i class="icon-search"></i></button>
</form>