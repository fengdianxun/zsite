<?php
/**
 * The index view file of admin module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiyingl@xirangit.com>
 * @package     admin
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php if(!$ignoreUpgrade) js::import('http://api.chanzhi.org/latest.php?version=' . $this->config->version);?>
<div class='container' id='shortcutBox'>

  <?php if(strpos($this->server->php_self, '/admin.php') !== false && empty($this->config->global->ignoreAdminEntry)):?>
  <form method='post' id='ajaxForm' action='<?php echo $this->createLink('admin', 'ignore');?>'>
    <div class="alert alert-danger">
      <button type="submit" class="close">&times;</button>
      <strong><?php echo $lang->admin->adminEntry;?></strong>
    </div>
  </form>
  <?php endif;?>

  <?php if(!$ignoreUpgrade):?>
  <div class='alert alert-success' id='upgradeNotice'>
    <div>
      <?php echo $lang->newVersion;?>
      <button class="close"><?php echo html::a(inlink('ignoreUpgrade'), '&times;', "class='reload'");?></button>
    </div>
  </div>
  <?php endif;?>

  <?php if(!$checkLocation):?>
  <div class='alert alert-success'>
    <div>
      <?php echo $lang->site->changeLocation;?>
      <?php echo html::a($this->createLink('site', 'setsecurity'), $lang->site->changeSetting, "class='red'");?>
    </div>
  </div>
  <?php endif;?>
  <div id='dashboardWrapper'>
    <div class='panels-container dashboard' id='dashboard'>
      <div class='dashboard-control'>
        <div class='pull-right'>
          <a class='btn' data-toggle='modal' href='<?php echo $this->createLink("widget", "create"); ?>'><i  data-toggle='tooltip' class='icon-plus' title='<?php echo $lang->widget->create; ?>'></i></a>
        </div>
      </div>
      <div class='row summary'>
        <?php
        $index = 0;
        reset($widgets);
        ?>
        <?php foreach($widgets as $key => $widget):?>
        <?php
        if(isset($this->config->widget->dependence->{$widget->type}))
        {
            $dependence =  $this->config->widget->dependence->{$widget->type};
            if(!commonModel::isAvailable($dependence)) continue;
        }

        $index = $key;
        if(strpos($widget->moreLink, '|') !== false)
        {
            list($moreModule, $moreMethod, $moreParams) = explode('|', $widget->moreLink);
            $widget->moreLink = helper::createLink($moreModule, $moreMethod, $moreParams);
        }
        ?>
        <div class='col-xs-<?php echo $widget->grid;?> pull-left'>
          <div class='panel panel-widget <?php if(isset($widget->params->color)) echo 'panel-' . $widget->params->color;?>' id='widget<?php echo $index?>' data-id='<?php echo $index?>' data-name='<?php echo $widget->title?>' data-url='<?php echo $this->createLink('widget', 'printWidget', 'widget=' . $widget->id) ?>'>
            <div class='panel-heading'>
              <span class='panel-title'><?php echo $widget->title;?></span>
              <div class='panel-actions'>
              <?php if(!empty($widget->moreLink)):?>
              <?php echo html::a($widget->moreLink, $lang->more, "class='panel-action btn-more'");?>
              <?php endif; ?>
                <div class='dropdown'>
                  <a href='javascript:;' data-toggle='dropdown' class='panel-action'><i class='icon icon-ellipsis-v'></i></a>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="<?php echo $this->createLink("widget", "edit", "index=$widget->id"); ?>" data-toggle='modal' class='edit-widget' data-title='<?php echo $widget->title; ?>' data-icon='icon-pencil'><i class="icon-pencil"></i> <?php echo $lang->edit;?></a></li>
                    <li><a href="<?php echo helper::createLink('widget', 'delete', "id={$widget->id}")?>" class="deleter"><i class="icon-remove"></i> <?php echo $lang->delete; ?></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class='panel-body no-padding'>
              <?php echo $this->fetch('widget', 'printWidget', 'widget=' . $widget->id);?>
            </div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.admin.html.php';?>
