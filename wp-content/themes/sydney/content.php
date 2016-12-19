<?php
/**
 * @package Sydney
 */
?>
<?php
if ($_GET['sort_id']) {
    require "../../../wp-config.php";
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if (!$db) {
        exit('Error' . mysqli_error($db));
    }
    mysqli_query($db, "SET NAMES utf8mb4");

    function get_goods($db, $id = false)
    {
        $sql = "SELECT p.id, p.post_title, p.post_content, t.name FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
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

        $sql2 = "SELECT pmet.meta_value, pmet.post_id FROM wp_posts p, wp_postmeta pmet, wp_terms t
WHERE p.post_status != 'trash'
AND pmet.meta_key = 'DC'
AND pmet.post_id = p.id";
        
        $sql_for_counry_title_and_other = "SELECT p.id, p.post_title, p.post_content, t.name FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
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
                $sql2 .= " ORDER BY length(t.name), t.name ASC";
            } else if ($id == 'price_sortb') {
                $sql .= " ORDER BY cast(t.name as unsigned) DESC";
                $sql2 .= " ORDER BY cast(t.name as unsigned) DESC";
            } else if ($id == 'country-default' or $id == 'price-default') {
//                $sql .= " ORDER BY cast(p.post_date as unsigned) DESC";
                $sql = "SELECT p.id, p.post_title, p.post_content, t.name FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r
                        WHERE t.term_id=tx.term_id 
                        AND tx.taxonomy='post_tag' 
                        AND tx.term_taxonomy_id=r.term_taxonomy_id 
                        AND r.object_id=p.id
                        AND p.post_status != 'trash'
                        ORDER BY cast(p.id as unsigned) DESC";
//                AND (SELECT p.id FROM wp_posts po WHERE po.id = p.post_parent)
            } else {
                $sql = $sql_for_counry_title_and_other." AND p.post_title = '$id'";
            }
        }
        if ($id) {
            if ($id == 'price_sorta') {
                $sql1 .= " ORDER BY length(t.name), t.name ASC";
            } else if ($id == 'price_sortb') {
                $sql1 .= " ORDER BY cast(t.name as unsigned) DESC";
            } else if ($id == 'country-default' or $id == 'price-default') {
                $sql1 = "SELECT p.guid FROM wp_posts p, wp_terms t, wp_term_taxonomy tx, wp_term_relationships r, wp_postmeta pmet
                            WHERE p.post_status != 'trash'
                            AND p.post_type = 'attachment'
                            AND t.term_id=tx.term_id
                            AND tx.taxonomy='post_tag'
                            AND tx.term_taxonomy_id=r.term_taxonomy_id
                            AND r.object_id=p.post_parent
                            AND pmet.meta_value = p.id
                            AND (SELECT p.id FROM wp_posts po WHERE po.id = p.post_parent)
                            ORDER BY cast(p.post_parent as unsigned) DESC";
                /*t.term_id=tx.term_id
                AND*/
                /*AND tx.taxonomy='post_tag'
                AND tx.term_taxonomy_id=r.term_taxonomy_id
                AND r.object_id=p.id*/
//                AND (SELECT p.guid FROM wp_posts po WHERE po.post_title = '$id' AND po.id = p.post_parent)
//                $sql1 .= " ORDER BY p.post_date DESC";
            } else {
                $sql1 = $sql_for_country_image." AND (SELECT p.id FROM wp_posts po WHERE po.post_title = '$id' AND po.id = p.post_parent)";
            }
        }
        $goods = array();
        $goods_img = array();
        $goods_discount = array();
        $result = mysqli_query($db, $sql) or die(mysqli_error($db));
        $result1 = mysqli_query($db, $sql1) or die(mysqli_error($db));
        $result2 = mysqli_query($db, $sql2) or die(mysqli_error($db));
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $goods[$i] = mysqli_fetch_assoc($result);
            $goods_img[$i] = mysqli_fetch_assoc($result1);
            $goods_discount[$i] = mysqli_fetch_assoc($result2);
            $goods[$i]['guid'] =  $goods_img[$i]['guid'];
            $goods[$i]['discount'] =  $goods_discount[$i]['meta_value'];
            $goods[$i]['post_id'] =  $goods_discount[$i]['post_id'];
        }
        return $goods;

    }

    if ($_GET['sort_id']) {
        $id = strip_tags($_GET['sort_id']);
        $goods = get_goods($db, $id);
        foreach ($goods as $item) {
            ?>
            <article class="post type-post status-publish format-standard has-post-thumbnail hentry">
            <div class="entry-thumb">
            <?php /*foreach ($goods as $item_in)
            {
            if ($item['id'] == $item_in['post_id']) { */?><!--
                <?/*= $item['id'] */?>
                <?/*= $item['post_id'] */?>
                --><?php
/*                break;
            }
        }
                        */?>

                <?php
                $item_id = $item['id'];
                $sql_disc = "SELECT pmet.meta_value FROM wp_posts p, wp_postmeta pmet, wp_terms t
                            WHERE p.post_status != 'trash'
                            AND pmet.meta_key = 'DC'
                            AND pmet.post_id =  $item_id";
                $result_sql_disc = mysqli_query($db, $sql_disc) or die(mysqli_error($db));
                $result_sql_disc_final = mysqli_fetch_assoc($result_sql_disc);
                /*foreach ($goods as $item_in_disc)
                {
                    if ($item['id'] == $item_in_disc['post_id']) { */?><!--
                        <?/*= $item['discount'] */?>
                        --><?php
/*                        break;
                    }
                }*/
                ?>
                <?php if($result_sql_disc_final['meta_value']) { ?>
                    <img class="discount-image" src="/wp-content/themes/sydney/img/discount.png">
                    <span style="right: 3%; top: 5%;" class="discount-amount"><?=$result_sql_disc_final['meta_value']?></span>
                <?php
                }
                ?>

            <span class="custom-size"><img src="<?=$item['guid']?>" </span>
                    </div>

                <header class="entry-header">
                    <h2 class="title-post"><span id="country-title" class="country-title-class" style="color: #0088e7;" rel="bookmark"><?=$item['post_title']?> </span></h2>
                </header><!-- .entry-header -->

                <div class="entry-post">
                        <p><?=$item['post_content']?></p>
                </div><!-- .entry-post -->

                <footer class="entry-footer">
                    <?php //sydney_entry_footer(); ?>
                    <div class="tprice">
                        <div>от <strong><b><?=$item['name']?><style>b a {color: #0088e7;}</style></b></strong> $</div>
                        <img style="display: none;" id="im" src="/wp-content/themes/sydney/img/icons/privilege2.png">
                        <a id="order-special-button" onclick="addhotel(this);" rel="fancybox" href="#" class="popmake-form_for_special btnprice modal-link product-link"
                           data-order="AMC Royal Hotel 5*" country="Египет">Заказать</a>
                    </div>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->
                <?php
        }
        exit;
    } else {
        $goods = get_goods($db);
    }
} ?>

<!-- Тег сущности внутри тего article, который оборачивает всю область контента. Может быть обычным блоком div http://schema.org/Article-->
<article itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="<?php the_permalink() ?>"/> <!--Адрес главной страницы-->
    <meta itemprop="dateModified" content="<?php the_modified_time('Y-m-d')?>"/> <!--Дата последнего изменения-->

    <!--Разметка публикатора(адрес, логотип, название сайта)-->
    <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display:none;">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <span itemprop="streetAddress">Киевский шлях 2/6</span>
            <span itemprop="postalCode">08300</span>
            <span itemprop="addressLocality">Украина, Киевская обл., г.Борисполь</span>
            <span itemprop="telephone">+38 098 11 69 555</span>
        </div>
        <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
            <img itemprop="url" src="http://coralborispol.com/wp-content/themes/sydney/img/logo_coral.png"/>
            <img itemprop="image" src="http://coralborispol.com/wp-content/themes/sydney/img/logo_coral.png"/>
            <meta itemprop="width" content="100">
            <meta itemprop="height" content="43">
        </div>
        <meta itemprop="name" content="Coral Travel - г.Борисполь">
    </div>
    <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" class="entry-thumb" style="display:none;">
        <meta itemprop="width" content="272">
        <meta itemprop="height" content="233">
        <img itemprop="url" src="<?php the_post_thumbnail_url('sydney-large-thumb'); ?>">
        <img itemprop="image" src="<?php the_post_thumbnail_url('sydney-large-thumb'); ?>">
    </div>
    <div itemscope itemtype="https://schema.org/ImageObject" style="display:none;">
        <img itemprop="image" src="<?php the_post_thumbnail_url('sydney-large-thumb'); ?>" >
    </div>



    <div class="meta-post" style="display: none">
        <?php sydney_posted_on(); ?>
    </div><!-- .entry-meta -->

    <?php if (has_post_thumbnail() && (get_theme_mod('index_feat_image') != 1)) : ?>
        <div class="entry-thumb" style="position: relative;">
            <?php the_meta(); ?>
<!--            <span class="discount-amount">-75%</span>-->
<!--            <img class="discount-image" src="/wp-content/themes/sydney/img/discount.png">-->
            <span class="custom-size" href="<?php the_permalink(); ?>"
               title="<?php the_title(); ?>"><?php the_post_thumbnail('sydney-large-thumb'); ?></span>
        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title(sprintf('<h2 itemprop="headline" class="title-post"><span id="country-title" class="country-title-class" style="color: #0088e7;" href="%s" rel="bookmark">', esc_url(get_permalink())), '</span></h2>'); ?>

    </header><!-- .entry-header -->

    <div itemprop="articleBody" class="entry-post">
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
        <div class="tprice">
            <div>от <strong><b><?php the_tags('<style>b a {color: #0088e7;}</style>'); ?></b></strong> $</div>
            <img style="display: none;" id="im" src="/wp-content/themes/sydney/img/icons/privilege2.png">
            <a id="order-special-button" onclick="addhotel(this);" rel="fancybox" href="#" class="popmake-form_for_special btnprice modal-link product-link"
               data-order="AMC Royal Hotel 5*" country="Египет">Заказать</a>
        </div>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
