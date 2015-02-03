<?php
include TPL_ROOT . 'common/header.html.php';
js::import($jsRoot . 'md5.js');
js::set('random', $this->session->random);
?>
<div class='panel panel-body' id='reg'>
  <div class='row'>
    <?php 
    foreach($lang->user->oauth->providers as $providerCode => $providerName) $providerConfig[$providerCode] = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
    if(!empty($providerConfig['sina']->clientID) or !empty($providerConfig['qq']->clientID)):
    ?>
    <div class='col-md-5'>
      <div class='panel panel-pure w-p80'>
        <div class='panel-heading'><strong><?php echo $lang->user->oauth->lblWelcome;?></strong></div>
        <div class='panel-body'>
        <?php 
        foreach($lang->user->oauth->providers as $providerCode => $providerName) 
        {
            $providerConfig = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
            if(empty($providerConfig->clientID)) continue;
            $params = "provider=$providerCode";
            if($referer and !strpos($referer, 'login') and !strpos($referer, 'oauth')) $params .= "&referer=" . helper::safe64Encode($referer);
            echo html::a(inlink('oauthLogin', $params), "<i class='icon-{$providerCode} icon'></i> " . $providerName, "class='btn btn-default btn-oauth btn-lg btn-block btn-{$providerCode}'");
        }
        ?>
        </div>
      </div>
    </div>
    <div class='col-md-7'> 
    <?php else:?>
    <div class='col-md-11'>
    <?php endif;?>
    <div class='panel panel-pure w-p80'>
      <div class='panel-heading'><strong><?php echo $lang->user->register->welcome;?></strong></h4></div>
      <div class='panel-body'>
        <form method='post' id='ajaxForm' class='form-horizontal' role='form'>
          <div class='form-group'>
            <label class='col-sm-3 control-label'><?php echo $lang->user->account;?></label>
            <div class='col-sm-9'><?php echo html::input('account', '', "class='form-control form-control' autocomplete='off' placeholder='" . $lang->user->register->lblAccount . "'");?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->realname;?></label>
            <div class='col-sm-9'><?php echo html::input('realname', '', "class='form-control'");?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->email;?></label>
            <div class='col-sm-9'><?php echo html::input('email', '', "class='form-control' autocomplete='off'") . '';?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->password;?></label>
            <div class='col-sm-9'><?php echo html::password('password1', '', "class='form-control' autocomplate='off' placeholder='" . $lang->user->register->lblPassword . "'");?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->password2;?></label>
            <div class='col-sm-9'><?php echo html::password('password2', '', "class='form-control'");?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->company;?></label>
            <div class='col-sm-9'><?php echo html::input('company', '', "class='form-control'");?></div>
          </div>
          <div class='form-group'>
            <label class="col-sm-3 control-label"><?php echo $lang->user->phone;?></label>
            <div class='col-sm-9'><?php echo html::input('phone', '', "class='form-control'");?></div>
          </div>
          <div class='form-group'>
            <div class="col-sm-3"></div>
            <div class='col-sm-9'><?php echo html::submitButton($lang->register,'btn btn-primary btn-block') . html::hidden('referer', $referer);?></div>
          </div>
        </form>
      </div>
    </div>    
  </div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php';?>
