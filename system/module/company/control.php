<?php
/**
 * The control file of company module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1 (http://www.chanzhi.org/license/)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     company
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class company extends control
{
    /**
     * company profile.
     * 
     * @access public
     * @return void
     */
    public function index()
    {
        $this->view->title      = $this->config->company->name;
        $this->view->keywords   = $this->config->company->name;
        $this->view->company    = $this->config->company;
        $this->view->contact    = $this->company->getContact();
        $this->view->publicList = $this->loadModel('wechat')->getList();

        $this->display();
    }

    /**
     * company contact.
     * @return void
     */
    public function contact()
    {
        $this->view->title   = $this->lang->company->contact;
        $this->view->contact = $this->company->getContact();
        
        $this->display();
    }

    /**
     * set company basic info.
     * 
     * @access public
     * @return void
     */
    public function setBasic()
    {
        if(!empty($_POST))
        {
            $now = helper::now();
            $company = fixer::input('post')
            ->add('setDate', $now)
            ->stripTags('desc,content', $this->config->allowedTags->admin)
            ->remove('uid')
            ->get();

            $result = $this->loadModel('setting')->setItems('system.common.company', $company);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }

        $this->view->title = $this->lang->company->setBasic;
        $this->display();
    }

    /**
     * set contact information.
     * 
     * @access public
     * @return void
     */
    public function setContact()
    {
        if(!empty($_POST))
        {
            if(!empty($_POST['email']))
            {
                if(!validater::checkEmail($_POST['email'])) $this->send(array('result' => 'fail', 'message' => $this->lang->company->error->email)); 
            }

            $contact = array('contact' => helper::jsonEncode($_POST));
            $result  = $this->loadModel('setting')->setItems('system.common.company', $contact);
            if($result) $this->send(array('result' => 'success', 'message' => $this->lang->setSuccess));
            $this->send(array('result' => 'fail', 'message' => $this->lang->fail));
        }

        $this->view->title   = $this->lang->company->setContact;
        $this->view->contact = json_decode($this->config->company->contact);
        $this->display();
    }
}
