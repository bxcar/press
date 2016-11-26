<?php
/**
 * @package Sydney
 */
?>
<?php
if ($_GET['sort_id']) {
    /*function connect_db()
    {*/
    require "../../../wp-config.php";
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$db) {
        exit('Error' . mysqli_error($db));
    }
    mysqli_query($db, "SET NAMES utf8mb4");
//    return $db;
    /*}*/

    function get_goods($db, $id = false)
    {
//    $sql = "SELECT id from wp_posts";
        /*$sql = "SELECT p.post_title FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
WHERE t.term_id=tx.term_id 
AND tx.taxonomy='post_tag' 
AND tx.term_taxonomy_id=r.term_taxonomy_id 
AND r.object_id=p.id";*/
        $sql = "SELECT p.post_title, p.post_content, t.name FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
WHERE t.term_id=tx.term_id 
AND tx.taxonomy='post_tag' 
AND tx.term_taxonomy_id=r.term_taxonomy_id 
AND r.object_id=p.id
AND p.post_status != 'trash'";

        $sql1 = "SELECT p.guid FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r, wp_postmeta pmet
WHERE p.post_status != 'trash'
AND p.post_type = 'attachment'
AND t.term_id=tx.term_id
AND tx.taxonomy='post_tag'
AND tx.term_taxonomy_id=r.term_taxonomy_id
AND r.object_id=p.post_parent
AND pmet.meta_value = p.id";
        
        $sql_for_counry_title_and_other = "SELECT p.post_title, p.post_content, t.name FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
WHERE t.term_id=tx.term_id 
AND tx.taxonomy='post_tag' 
AND tx.term_taxonomy_id=r.term_taxonomy_id 
AND r.object_id=p.id
AND p.post_status != 'trash'";
        $sql_for_country_image = "SELECT p.guid FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r, wp_postmeta pmet
WHERE p.post_status != 'trash'
AND p.post_type = 'attachment'
AND t.term_id=tx.term_id
AND tx.taxonomy='post_tag'
AND tx.term_taxonomy_id=r.term_taxonomy_id
AND r.object_id=p.post_parent
AND pmet.meta_value = p.id";

        if ($id) {
            if ($id == 'price_sorta') {
                $sql .= " ORDER BY length(t.name), t.name ASC";
            } else if ($id == 'price_sortb') {
                $sql .= " ORDER BY cast(t.name as unsigned) DESC";
            } else {
                $sql = $sql_for_counry_title_and_other." AND p.post_title = '$id'";
            }
        }
        if ($id) {
            if ($id == 'price_sorta') {
                $sql1 .= " ORDER BY length(t.name), t.name ASC";
            } else if ($id == 'price_sortb') {
                $sql1 .= " ORDER BY cast(t.name as unsigned) DESC";
            } else {
                $sql1 = $sql_for_country_image." AND (SELECT p.id FROM wp_posts po WHERE po.post_title = '$id' AND po.id = p.post_parent)";
            }
        }
        $goods = array();
        $goods_img = array();
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        $result1 = mysqli_query($db, $sql1) or die(mysqli_error($db));
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $goods[$i] = mysqli_fetch_assoc($result);
            $goods_img[$i] = mysqli_fetch_assoc($result1);
            $goods[$i]['guid'] =  $goods_img[$i]['guid'];
        }
        return $goods;
    }

    if ($_GET['sort_id']) {
        $id = strip_tags($_GET['sort_id']);
        $goods = get_goods($db, $id);
//        ?><!--<pre>--><?php //print_r($goods);?><!--</pre>--><?php
//    exit(json_encode($goods));
        foreach ($goods as $item) {
                ?>
            <article class="post type-post status-publish format-standard has-post-thumbnail hentry">
                    <div class="entry-thumb">
            <span class="custom-size"><img src="<?=$item['guid']?>" </span>
                    </div>

                <header class="entry-header">
                    <h2 class="title-post"><span id="country-title" class="country-title-class" style="color: #0088e7;" rel="bookmark"><?=$item['post_title']?> </span></h2>

                    <!--		--><?php //if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
                    <!--		<div class="meta-post">-->
                    <!--			--><?php //sydney_posted_on(); ?>
                    <!--		</div><!-- .entry-meta -->
                    <!--		--><?php //endif; ?>
                </header><!-- .entry-header -->

                <div class="entry-post">
                        <p><?=$item['post_content']?></p>
                </div><!-- .entry-post -->

                <footer class="entry-footer">
                    <?php //sydney_entry_footer(); ?>
                    <div class="tprice"> <!-- for tags the_tags() --> <!-- for date the_date('d.m.y') -->
                        <!--fot link to record the_permalink()-->
                        <!-- для сокращенной записи the_excerpt();-->
                        <div>от <strong><b><?=$item['name']?><style>b a {color: #0088e7;}</style></b></strong> $</div>
                        <img style="display: none;" id="im" src="/wp-content/themes/sydney/img/icons/privilege2.png">
<!--                        <a rel="fancybox" href="#" class="popmake-129 btnprice modal-link product-link"-->
                        <a id="order-special-button" onclick="addhotel(this);" rel="fancybox" href="#" class="popmake-form_for_special btnprice modal-link product-link"
                           data-order="AMC Royal Hotel 5*" country="Египет">Заказать</a>
                    </div>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->
                    <!--<p style="background: #efe;">
                        <span><?/*=$item['post_title']*/?></span><br>
                        <span><?/*=$item['post_content']*/?></span><br>
                        <span><?/*=$item['name']*/?></span><br>
                        <span><?/*=$item['guid']*/?></span>
                    </p>-->
                <?php
//            printf("<p>hello %s var</p>", "$a = 4");
        }
        exit;
    } else {
        $goods = get_goods($db);
    }
}?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail() && (get_theme_mod('index_feat_image') != 1)) : ?>
        <div class="entry-thumb">
            <span class="custom-size" href="<?php the_permalink(); ?>"
               title="<?php the_title(); ?>"><?php the_post_thumbnail('sydney-large-thumb'); //, array('class' => 'miniature') ?></span>
        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="title-post"><span id="country-title" class="country-title-class" style="color: #0088e7;" href="%s" rel="bookmark">', esc_url(get_permalink())), '</span></h2>'); ?>

        <!--		--><?php //if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
        <!--		<div class="meta-post">-->
        <!--			--><?php //sydney_posted_on(); ?>
        <!--		</div><!-- .entry-meta -->
        <!--		--><?php //endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-post">
        <?php if ((get_theme_mod('full_content_home') == 1 && is_home()) || (get_theme_mod('full_content_archives') == 1 && is_archive())) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_content(); ?> <!--the_excerpt();-->
        <?php endif; ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'sydney'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-post -->

    <footer class="entry-footer">
        <?php //sydney_entry_footer(); ?>
        <div class="tprice"> <!-- for tags the_tags() --> <!-- for date the_date('d.m.y') -->
            <!--fot link to record the_permalink()-->
            <!-- для сокращенной записи the_excerpt();-->
            <div>от <strong><b><?php the_tags('<style>b a {color: #0088e7;}</style>'); ?></b></strong> $</div>
            <img style="display: none;" id="im" src="/wp-content/themes/sydney/img/icons/privilege2.png">
            <a id="order-special-button" onclick="addhotel(this);" rel="fancybox" href="#" class="popmake-form_for_special btnprice modal-link product-link"
               data-order="AMC Royal Hotel 5*" country="Египет">Заказать</a>
        </div>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
<!--<script> function addhotel(th) {
        var p = document.getElementById("hotel-country");
        var country = document.getElementById("country-title");
        var county_value = country.innerHTML;
        p.innerHTML = county_value;
        var img = jQuery(th).parent().parent().parent().children(".entry-header").html();
        p.innerHTML = img;
    }
</script>-->
<!--<script> function addhotel(th) {
        var p = document.getElementById("hotel-country");
        var country_titile = jQuery(th).parent().parent().parent().children(".entry-header").html();
        var hotel_title = jQuery(th).parent().parent().parent().children(".entry-post").html();
        p.innerHTML = country_titile + hotel_title;
    }
</script>-->