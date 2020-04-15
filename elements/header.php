<?php defined('C5_EXECUTE') or die("Access Denied.");

$this->inc('elements/header_top.php');

$as = new GlobalArea('Header Search');
$blocks = $as->getTotalBlocksInArea();
$displayThirdColumn = $blocks > 0 || $c->isEditMode();
?>

  <header>
    <div class="topbar">
      <div>
        <a href="mailto:albanypoliceandfirefoundation@gmail.com">CONTACT APFF TODAY!</a> 
      </div>
      <div>
        <a href="/contact"><i class="fa fa-envelope"></i></a>
      </div>
    </div>
    <div class="navigation">
      <!-- mobile menu -->
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
      </div>

      <div class="logo">
        <a href="/"><img src="<?php echo $this->getThemePath(); ?>/img/logo.png" alt="APFF Logo"></a>
      </div>
        <?php   
                    $bt = BlockType::getByHandle('autonav');
                    $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
                    //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
                    $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
                    $bt->controller->displaySubPages = 'none';  //none', 'all, 'relevant_breadcrumb', 'relevant'
                    $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
                    $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
                    $bt->render('templates/main_nav'); // for template 'templates/template_name';
                    ?>
            <a class="btn black" href="/donate">Donate<i class="fa fa-chevron-right"></i></a>
    </div>
  </header>
