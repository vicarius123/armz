<?php
defined('_JEXEC') or die;

/**
* Template for Joomla! CMS, created with Artisteer.
* See readme.txt for more details on how to use the template.
*/

require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions.php';

// Create alias for $this object reference:
$document = $this;

// Shortcut for template base url:
$templateUrl = $document->baseurl . '/templates/' . $document->template;

Artx::load("Artx_Page");

// Initialize $view:
$view = $this->artx = new ArtxPage($this);

// Decorate component with Artisteer style:
$view->componentWrapper();

JHtml::_('behavior.framework', true);

?>
<!DOCTYPE html>
<html dir="ltr" lang="<?php echo $document->language; ?>">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <jdoc:include type="head" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/system.css" />
  <link rel="stylesheet" href="<?php echo $document->baseurl; ?>/templates/system/css/general.css" />


  <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

  <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/bootstrap.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.css" media="screen" type="text/css" />
  <link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/responsive.css" media="screen" type="text/css" />

  <!--[if lte IE 7]><link rel="stylesheet" href="<?php echo $templateUrl; ?>/css/template.ie7.css" media="screen" /><![endif]-->
  <script>jQuery.noConflict();</script>
  <script src="<?php echo $templateUrl; ?>/script.js"></script>

  <?php $view->includeInlineScripts() ?>
  <script>if (document._artxJQueryBackup) jQuery = document._artxJQueryBackup;</script>
</head>
<body>

  <div id="main">

    <header class="header">
      <div class="wrapper">
        <nav class="d-flex head align-items-center">
          <?php echo $view->position('logo', ''); ?>

          <?php echo $view->position('menu', ''); ?>

          <?php echo $view->position('logo-right', ''); ?>
        </nav>
      </div>

    </header>
    <div class="main-block">
      <?php echo $view->position('mainblock', ''); ?>
    </div>
    <?php echo $view->position('banner1', ''); ?>
    <?php echo $view->positions(array('top1' => 33, 'top2' => 33, 'top3' => 34), 'block'); ?>
    <div class="layout-wrapper ">


      <?php if ($view->containsModules('left')) : ?>
      <div class="wrapper">
        <div class="row">
          <div class="col-sm-3 left-row">
            <?php echo $view->position('left', 'block'); ?>
          </div>
          <div class="col-sm-9 right-row">
            <?php
            echo $view->position('banner2', '');
            if ($view->containsModules('breadcrumb'))
            echo artxPost($view->position('breadcrumb'));
            echo $view->positions(array('user1' => 50, 'user2' => 50), 'article');
            echo $view->position('banner3', '');
            echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' messages'));
            echo '<jdoc:include type="component" />';
            echo $view->position('banner4', '');
            echo $view->positions(array('user4' => 50, 'user5' => 50), 'article');
            echo $view->position('banner5', '');
            ?>
          </div>
        </div>
      </div>

      <?php else: ?>
        <?php
        echo $view->position('banner2', '');
        if ($view->containsModules('breadcrumb'))
        echo artxPost($view->position('breadcrumb'));
        echo $view->positions(array('user1' => 50, 'user2' => 50), 'article');
        echo $view->position('banner3', '');
        echo artxPost(array('content' => '<jdoc:include type="message" />', 'classes' => ' messages'));
        echo '<jdoc:include type="component" />';
        echo $view->position('banner4', '');
        echo $view->positions(array('user4' => 50, 'user5' => 50), 'article');
        echo $view->position('banner5', '');
        ?>
      <? endif;?>
    </div>



    <?php echo $view->positions(array('bottom1' => 33, 'bottom2' => 33, 'bottom3' => 34), 'block'); ?>
    <?php echo $view->position('banner6', ''); ?>
  </div>


<footer class="footer">
  <div class="footer-inner wrapper">
    <div class="row">
      <div class="col-sm-6">
        <?php echo $view->position('copyright-left'); ?>
      </div>
      <div class="col-sm-6">
        <?php echo $view->position('copyright-right'); ?>
      </div>
    </div>
    <div class="foo-separator"></div>
    <?php echo $view->position('copyright'); ?>


  </div>
</footer>

<?php echo $view->position('lang', ''); ?>
<?php echo $view->position('debug'); ?>
</body>
</html>
