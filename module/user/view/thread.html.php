<?php include '../../common/view/header.html.php';?>
<div class='row-fluid'>
<?php include('side.html.php')?>
  <div class='span9'>
    <div class='cont'>
      <table class='table table-hover'>
      <caption><?php echo $lang->user->thread;?></caption>
        <tr>
          <th><?php echo $lang->thread->title;?></th>
          <th><?php echo $lang->thread->postedDate;?></th>
          <th><?php echo $lang->thread->views;?></th>
          <th><?php echo $lang->thread->replies;?></th>
          <th colspan='2'><?php echo $lang->thread->lastReply;?></th>
        </tr>  
        <tbody>
        <?php foreach($threads as $thread):?>
        <tr class='a-center'>
          <td class='a-left'><?php echo html::a($this->createLink('thread', 'view', "id=$thread->id"), $thread->title, '_blank');?></td>
          <td class='w-100px'><?php echo substr($thread->addedDate, 5, -3);?></td>
          <td class='w-30px'><?php echo $thread->views;?></td>
          <td class='w-30px'><?php echo $thread->replies;?></td>
          <td class='w-150px a-left'><?php if($thread->replies) echo substr($thread->lastRepliedDate, 5, -3) . ' ' . $thread->lastRepliedBy;?></td>  
        </tr>  
        <?php endforeach;?>
        </tbody>
        <tr><td colspan='8'><?php $pager->show();?></td></tr>
      </table>
    </div>
  </div>
</div>
<?php include '../../common/view/footer.html.php';?>
