<?php include '../../common/view/header.modal.html.php';?>
<?php js::import($jsRoot . 'fingerprint/fingerprint.js');?>
<?php if($pass):?>
<form method='post' action='<?php echo inlink('securityquestion');?>' id='questionForm' class='form' data-checkfingerprint='1'>
  <table class='table table-form borderless'>
    <tr>
      <th class='w-100px'><?php echo $lang->user->securityQuestion;?></th>
      <td><?php echo html::input('securityQuestion','', "class='form-control'");?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->answer;?></th>
      <td><?php echo html::input('answer', '', "class='form-control'");?></td>
    </tr>
    <tr>
      <th></th><td><?php echo html::submitButton();?></td>
    </tr>
  </table>
</form>
<?php else:?>
<?php
$url = helper::safe64Encode($this->createLink('user', 'changepassword'));
include '../../mail/view/captcha.html.php';
?>
<?php endif;?>
<?php include '../../common/view/footer.modal.html.php';?>
