<?php include 'header.lite.html.php';?>
<?php js::set('lang', $lang->js);?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <?php echo html::a($this->createLink($this->config->default->module), $lang->xirangEPS, '', "class='navbar-brand'");?>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <?php echo commonModel::createMainMenu($this->moduleName);?>
    <?php echo commonModel::createManagerMenu();?>
  </div>
</nav>

<div id="body-content" class="row clearfix">
  <?php 
  $moduleMenu = commonModel::createModuleMenu($this->moduleName, $book);
  if($moduleMenu) echo "<div class='col-md-2'>$moduleMenu</div>\n<div class='col-md-10'>\n";
  ?>
