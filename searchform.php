<?php
/* 
* searchform.php
*
* Contains the searchbar of the blog that can be included from anywhere with "<?php get_search_form(); ?>"
*
* @package cyt
* @subpackage Cell&Tech
* @since 1.0
*/
?>

<form action="<?php echo home_url(); ?>" method="get">
    <input style="width:20vw;" type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder ="Search Anything from here...">
    <button type="submit">
        <i class="fas fa-search"></i>
    </button>
</form>