<?php
/**
 * The control file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class block extends control
{
    /**
     * Browse blocks admin.
     * 
     * @param  string    $template 
     * @param  int       $recTotal 
     * @param  int       $recPerPage 
     * @param  int       $pageID 
     * @access public
     * @return void
     */
    public function admin($recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $template = $this->loadModel('ui')->getEditingTemplate();

        $this->block->loadTemplateLang($template);

        $this->session->set('blockList', $this->app->getURI());
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $this->view->editTemplate = $template;
        $this->view->editTheme    = $this->loadModel('ui')->getEditingTheme();
        $this->view->templates    = $this->loadModel('ui')->getTemplates();
        $this->view->blocks       = $this->block->getList($template, $pager);
        $this->view->title        = $this->lang->block->common;
        $this->view->pager        = $pager;
        $this->display();
    }

    /**
     * Pages admin list.
     * 
     * @param  string    $template 
     * @access public
     * @return void
     */
    public function pages($editTemplate = '', $editTheme = '')
    {
        if(!$editTemplate) $editTemplate = $this->loadModel('ui')->getEditingTemplate();
        if(!$editTheme)    $editTheme    = $this->loadModel('ui')->getEditingTheme();

        $this->block->loadTemplateLang($editTemplate);

        $this->view->editTemplate = $editTemplate;
        $this->view->editTheme    = $editTheme;
        $this->view->templates    = $this->loadModel('ui')->getTemplates();
        $this->display();       
    }

    /**
     * Create a block.
     * 
     * @param  string $editTemplate
     * @param  string $type    html|php
     * @access public
     * @return void
     */
    public function create($editTemplate, $editTheme, $type = 'html')
    {
        $this->block->loadTemplateLang($editTemplate);

        if($type == 'phpcode')
        {
            $return = $this->loadModel('common')->verfyAdmin();
            if($return['result'] == 'fail') $this->view->okFile = $return['okFile'];
            $canCreatePHP = $this->loadModel('mail')->checkVerify();

            $this->view->canCreatePHP = $canCreatePHP;
        }

        if($_POST)
        {
            if($type == 'phpcode' and !$canCreatePHP) $this->send(array('result' => 'fail', 'reason' => 'captcha', 'message' => dao::getError()));

            $this->block->create($editTemplate);
            if(!dao::isError()) $this->send(array('result' => 'success', 'locate' => $this->inlink('admin')));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->type         = $type;
        $this->view->editTemplate = $editTemplate;
        $this->view->editTheme    = $editTheme;
        $this->display();
    }

    /**
     * Edit a block.
     * 
     * @param string   $template
     * @param int      $blockID 
     * @param string   $type 
     * @access public
     * @return void
     */
    public function edit($editTemplate,  $editTheme, $blockID, $type = '')
    {
        $this->block->loadTemplateLang($editTemplate);

        if(!$blockID) $this->locate($this->inlink('admin'));

        if($type == 'phpcode')
        {
            $return = $this->loadModel('common')->verfyAdmin();
            if($return['result'] == 'fail') $this->view->okFile = $return['okFile'];
            $canCreatePHP = $this->loadModel('mail')->checkVerify();

            $this->view->canCreatePHP = $canCreatePHP;
        }

        if($_POST)
        {
            if($type == 'phpcode' and !$canCreatePHP) $this->send(array('result' => 'fail', 'reason' => 'captcha', 'message' => dao::getError()));
            $this->block->update($editTemplate);
            if(!dao::isError()) $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->editTemplate = $editTemplate;
        $this->view->editTheme    = $editTheme;
        $this->view->block        = $this->block->getByID($blockID);
        $this->view->type         = $this->get->type ? $this->get->type : $this->view->block->type;
        $this->display();
    }

    /**
     * Set the layouts of one region.
     * 
     * @param string   $page 
     * @param string   $region 
     * @param string   $template 
     * @access public
     * @return void
     */
    public function setRegion($page, $region, $editTemplate, $editTheme)
    {
        $this->block->loadTemplateLang($editTemplate);

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $result = $this->block->setRegion($page, $region, $editTemplate, $editTheme);

            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess, 'locate' => inlink('pages', "editTemplat={$editTemplate}&editTheme={$editTheme}")));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $blocks = $this->block->getRegionBlocks($page, $region, $editTemplate, $editTheme);
        if(empty($blocks)) $blocks = array(new stdclass());

        $this->view->title        = "<i class='icon-cog'></i> " . $this->lang->block->setPage . ' - '. $this->lang->block->{$editTemplate}->pages[$page] . ' - ' . $this->lang->block->$editTemplate->regions->{$page}[$region];
        $this->view->modalWidth   = 900;
        $this->view->page         = $page;
        $this->view->region       = $region;
        $this->view->blocks       = $blocks;
        $this->view->blockOptions = $this->block->getPairs($editTemplate);
        $this->view->editTemplate = $editTemplate;
        $this->view->editTheme    = $editTheme;

        $this->display();
    }

    /**
     * Delete a block from page region.
     * 
     * @param string $blockID 
     * @param string $confirm 
     * @access public
     * @return void
     */
    public function delete($blockID)
    {
        $result = $this->block->delete($blockID);

        if($result)  $this->send(array('result' => 'success'));
        if(!$result) $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }

    /**
     * Show block form.
     * 
     * @param  string  $type 
     * @param  int     $id 
     * @access public
     * @return void
     */
    public function blockForm($type, $id = 0)
    {
        if($id > 0) $this->view->block = $this->block->getByID($id); 

        $this->view->type = $type;
        $this->display();
    }
}
