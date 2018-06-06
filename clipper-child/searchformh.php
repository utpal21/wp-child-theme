<div class="search_form">
    <form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>" >
        <div>
        <input type="text" value="<?php get_search_query(); ?>" name="s" id="s" placeholder="Search keyword.." />
        <input type="submit" id="searchsubmit" value="" />
        </div>
    </form>
</div>