<?php
/**
 * The create view file of article category of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Hao Sun <sunhao@cnezsoft.com>
 * @package     article
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>

<div class='alert alert-warning'>
  <i class='icon-info-sign'></i>
  <div class='content'>
    <h4><?php echo $message; ?></h4>
    <p><?php echo $lang->tree->timeCountDown; ?></p>
    <?php echo html::a($this->createLink('tree', 'browse', "type=$type"), $lang->tree->redirect, "class='btn btn-warning' id='countDownBtn'"); ?>
  </div>
</div>

<?php include '../../common/view/footer.admin.html.php';?>
