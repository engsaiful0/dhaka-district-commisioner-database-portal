<?php
$this->db->select('*');
$this->db->from('kormochary');
$result=$this->db->get()->result();
//echo '<pre>';
//echo print_r($result);
//exit();

?>
<style>
    .kormochari-container
    {
        margin:0px 0 0 10px;
    }
</style>

    <table class="table table-responsive table-bordered">
        <caption style="text-align:center">সকল কর্মচারিদের তালিকা</caption>
    <tr><td style="text-align:center">নাম</td><td style="text-align:center">পদবি</td><td style="text-align:center">ফোন</td></tr>
    <?php
    foreach ($result as $value) {
        ?>
    <tr><td style="text-align:center"><?php echo $value->	kormochary_name; ?></td><td style="text-align:center"><?php echo $value->post; ?></td><td style="text-align:center"><?php echo $value->phone; ?></td></tr>
         <?php
        
    }
    ?>
    
</table>


