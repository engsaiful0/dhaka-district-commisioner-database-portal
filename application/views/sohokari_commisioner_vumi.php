<table class="table table-bordered table-responsive table-striped" >
  <tbody>

    <?php foreach($result as $key=>$v) {?>
        <tr class="">
        <caption style="text-align:center">সহকারী কমিশনার(ভূমি)এর তালিকা</caption>
        <tr><td style="text-align:center;" title="Click for Details">
               
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $v->id; ?>"><?php echo $v->post.','.$v->present_work_station.'।' ?></a>
            </td>
        </tr>
        <tr>
      <?php }?>
  </tbody>
</table>
<div class="pagination" style="float:right;"> <?php echo $paginglinks; ?></div>
<div class="pagination" style="float:left;"> <?php echo (!empty($pagermessage) ? $pagermessage : ''); ?></div>
