

<!-- <a class="left-off-canvas-toggle" href="#" >Menu</a> -->
<!-- Off Canvas Menu -->
<aside class="right-off-canvas-menu">
    <?php print render($page['offcanvas']); ?>
</aside>
<a class="exit-off-canvas"></a>

<!--.page med bakgrundslogik-->
<?php
if ($is_front){
    $bakgrunden = "'background-color: #a7281f;'";
}else{
    $bakgrunden = "'background-image: url(".$base_path.$directory."/images/bakgrund-1.jpg);'";
}
?>
<div role="document" class="page <?php print $base_path.$directory; ?>" style=<?php print $bakgrunden; ?>>

    <!--.l-header -->
    <header role="banner" class="l-header">

        <?php if (!empty($page['header'])): ?>
        <!--.l-header-region -->
        <section class="l-header-region row">
            <div class="row overr">

                <div class="columns small-9 medium-8 large-8 logo">
                    <?php if ($linked_logo): print $linked_logo; endif; ?>
                </div>

                <!--                <div class="row">-->
                <div class="columns medium-3 hide-for-small kiv-logo large-3 large-offset-1">
                    <a href="http://kulturivast.se" target="_blank"><img src="/sites/all/themes/republik/images/kivlogo.png"></a>
                </div>
                <!--                </div>-->
                <nav class="tab-bar small-3 medium-1 columns hide-for-large-up">
                    <a class="right-off-canvas-toggle menu-icon" href="#" ><span></span></a>
                </nav>
            </div>
            <div class="row nedrerad">
                <div class="columns small-12 show-for-small kiv-logo-down">
                    <a href="http://kulturivast.se" target="_blank"><img src="/sites/all/themes/republik/images/kivlogo.png"></a>
                </div>
            </div>
        </section>
        <div class="row mainmenu">
            <nav class="columns large-12 main-nav hide-for-medium-down">
                <?php print render($page['header']); ?>
            </nav>
        </div>
        <!--/.l-header-region -->
        <?php endif; ?>

    </header>
    <!--/.l-gallery -->
    <?php if (!empty($page['gallery'])): ?>
    <!--.l-gallery -->
    <section class="l-gallery">
        <div class="row">
            <?php print render($page['gallery']); ?>
        </div>
    </section>
    <!--/.l-gallery -->
    <?php endif; ?>


    <?php if (!empty($page['featured']) || !empty($page['gallery'])): ?>
    <!--.l-featured -->
    <section class="l-featured row">
        <div class="columns">
            <?php print render($page['featured']); ?>
        </div>
    </section>
    <!--/.l-featured -->
    <?php else: ?>
    <section class="l-featured-i row">
        <div class="columns">
            <div class="invisible-plug"></div>
        </div>
    </section>  
    <?php endif; ?>

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
        <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
        </div>
    </section>
    <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
        <div class="columns">
            <?php print render($page['help']); ?>
        </div>
    </section>
    <!--/.l-help -->
    <?php endif; ?>
    
    <!--.l-main -->
    
    <?php if (empty($page['sidebar_second']) && (url($_GET['q']) != "/inspiration")) : ?>
        <?php $main_grid_repub = "medium-8 medium-centered"; ?>
    <?php elseif((url($_GET['q']) == "/inspiration") && empty($page['sidebar_second'])): ?>
    <?php $main_grid_repub = "medium-12 content-under"; ?>
    <?php else: ?>
        <?php $main_grid_repub = "medium-8"; ?>
    <?php endif; ?>



    <main role="main" class="row l-main">
        <!-- .l-main region -->
        <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title columns small-12 <?php print $main_grid_repub; ?>"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
        <?php endif; ?>

        <div class="<?php print $main_grid_repub; ?> main columns">
            <?php if (!empty($page['highlighted'])): ?>
            <div class="highlight panel callout">
                <?php print render($page['highlighted']); ?>
            </div>
            <?php endif; ?>

            <a id="main-content"></a>

            <?php //if ($breadcrumb): print $breadcrumb; endif; ?>

            <?php //if ($title): ?>
            <?php //print render($title_prefix); ?>
            <!-- <h1 id="page-title" class="title"><?php //print $title; ?></h1> -->
            <?php //print render($title_suffix); ?>
            <?php //endif; ?>

            <?php if (!empty($tabs)): ?>
            <?php print render($tabs); ?>
            <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
            <?php endif; ?>

            <?php if ($action_links): ?>
            <ul class="action-links">
                <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>

            <?php print render($page['content']); ?>
        

        <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
            <?php print render($page['sidebar_first']); ?>
        </aside>
        <?php endif; ?>

        <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
            <?php print render($page['sidebar_second']); ?>
        </aside>
        <?php endif; ?>
        
        
        </div>
        
        
        <?php if (!empty($page['content_under'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> content-under columns small-12">
            <?php print render($page['content_under']); ?>
        </aside>
        <?php endif; ?>
        <!--/.l-main region -->
    </main>
    <!--/.l-main -->

    <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
        <div class="triptych-first medium-12 columns">
            <?php print render($page['triptych_first']); ?>
        </div>

    </section>
    <!--/.triptych -->
    <?php endif; ?>

    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>

    <!--.footer-columns -->
    <div class="footer-wrapper">

        <section class="l-footer-columns row">
            <?php if (!empty($page['footer_firstcolumn'])): ?>
            <div class="footer-first medium-3 columns">
                <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn'])): ?>
            <div class="footer-second medium-3 columns">
                <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_thirdcolumn'])): ?>
            <div class="footer-third medium-3 columns">
                <?php print render($page['footer_thirdcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_fourthcolumn'])): ?>
            <div class="footer-fourth medium-3 columns">
                <?php print render($page['footer_fourthcolumn']); ?>
            </div>
            <?php endif; ?>
        </section>

        <section class="l-footer-columns-bottom row">
            <?php if (!empty($page['footer_firstcolumn_bottom'])): ?>
            <div class="footer-first medium-3 columns">
                <?php print render($page['footer_firstcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn_bottom'])): ?>
            <div class="footer-second medium-3 columns">
                <?php print render($page['footer_secondcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_thirdcolumn_bottom'])): ?>
            <div class="footer-third medium-3 columns">
                <?php print render($page['footer_thirdcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_fourthcolumn_bottom'])): ?>
            <div class="footer-fourth medium-3 columns">
                <?php print render($page['footer_fourthcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
        </section>

        <!--.l-footer -->
        <div class="footer-wrapper-bottom">
            <footer class="l-footer row" role="contentinfo">
                <?php if (!empty($page['footer'])): ?>
                <div class="footer columns">
                    <?php print render($page['footer']); ?>
                </div>
                <?php endif; ?>
            </footer>
        </div>
        <!--/.l-footer -->

    </div>
    <!--/.footer-columns-->
    <?php endif; ?>



    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

