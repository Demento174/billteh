<?php
/*
Template Name: Каталог
*/

use Controllers\PostsAndTax\PostFurniture;

get_header();
renderBlock('CatalogPage',
    [
        'activeCat'=>!isset($_GET['tax'])?'0':get_term_by('slug',$_GET['tax'],'tax_cat')->term_id,
    ]);
get_footer();

