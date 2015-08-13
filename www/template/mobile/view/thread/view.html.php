<?php
/**
 * The index view file of forum for mobile template of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1 (http://www.chanzhi.org/license/)
 * @author      Hao Sun <sunhao@cnezsoft.com>
 * @package     forum
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php
include TPL_ROOT . 'common/header.html.php';
include TPL_ROOT . 'common/files.html.php';
$common->printPositionBar($board, $thread);
?>
<div class='block-region region-top'><?php $this->loadModel('block')->printRegion($layouts, 'thread_view', 'top');?></div>
<?php
if($pager->pageID == 1) include TPL_ROOT . 'thread/thread.html.php';
include TPL_ROOT . 'thread/reply.html.php';
?>
<div class='block-region region-bottom'><?php $this->loadModel('block')->printRegion($layouts, 'thread_view', 'bottom');?></div>
<?php include TPL_ROOT . 'common/form.html.php'; ?>
<?php include TPL_ROOT . 'common/footer.html.php';?>
