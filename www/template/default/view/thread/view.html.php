<?php
/**
 * The view file of thread module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     thread
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
include TPL_ROOT . 'common/header.html.php';
include TPL_ROOT . 'common/kindeditor.html.php';

$this->block->printRegion($layouts, 'thread_view', 'top');

$common->printPositionBar($board, $thread);

if($pager->pageID == 1) include TPL_ROOT . 'thread/thread.html.php';
include TPL_ROOT . 'thread/reply.html.php';

$this->block->printRegion($layouts, 'thread_view', 'bottom');

include TPL_ROOT . 'common/footer.html.php';
