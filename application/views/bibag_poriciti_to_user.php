<?php
$this->db->select('*');
$this->db->from('bibag_poriciti');
$result=$this->db->get()->result();


?>
<style>
    .employee-containers
    {
        margin:50px 0 0 20px;
    }
    .text-arrange
    {
        padding:10px;
        text-align: justify;
    }
</style>
<div class="employee-container">
    <?php
  
    
    foreach ($result as $value) {
        ?>
    <div class="bibag-image">
        <img height="100" src="<?php echo base_url().'assets/uploads/files/'.$value->photo?>">
    </div>
    <div class="content-container">
        <p class="text-arrange">
          <?php echo $value->about_bibag; ?>  
        </p>
    </div>
         <?php
        
    }
    ?>
    

</div>

