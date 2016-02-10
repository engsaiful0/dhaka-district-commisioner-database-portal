<?php
$this->db->select('*');
$this->db->where('id',$id);
$this->db->from('bcs_cadre');
$result=$this->db->get()->result();


?>
<style>
    .kormochari-container
    {
        margin:0px 0 0 10px;
    }
</style>
<?php
    foreach ($result as $value) {
        ?>
<div class="profile-image" style="margin:0 auto;">
    <h3 style="text-align:center">বিভাগীয় কমিশনারের প্রোফাইল</h3>
    
    <img height="100" style="margin-left: 35%;padding-top:10px;  width:30%;height: auto;" src="<?php echo base_url().'assets/uploads/files/'.$value->photo?>">
</div>

    <table class="table table-responsive table-bordered">
        <caption style="text-align:center"></caption>
        
        
    
    <tr><td>নাম</td><td><?php echo $value->cadre_name;?></td></tr>
        <tr><td>পরিচিতি নং</td><td><?php echo $value->introducing_no;?></td></tr>
        <tr><td>পদবি</td><td><?php echo $value->post;?></td></tr>
        <tr><td>বর্তমান কর্মস্থল</td><td><?php echo $value->present_work_station;?></td></tr>
        <tr><td>বর্তমান কর্মস্থলে যোগদানের তারিখ</td><td><?php echo $value->join_date_of_present_work_station;?></td></tr>
        <tr><td>জন্ম তারিখ</td><td><?php echo $value->date_of_birth;?></td></tr>
        <tr><td>ব্যাচ</td><td><?php echo $value->batch;?></td></tr>
        <tr><td>নিজ জেলা</td><td><?php echo $value->own_district;?></td></tr>
        <tr><td>স্পাউসের জেলা</td><td><?php echo $value->spous_district;?></td></tr>
        <tr><td>ফোন নং</td><td><?php echo $value->mobile_no;?></td></tr>
        <tr><td>বৈবাহিক অবস্থা</td><td><?php echo $value->marital_status;?></td></tr>
        <tr><td>স্থায়ী ঠিকানা</td><td><?php echo $value->permanent_address;?></td></tr>
        <tr><td>সর্বোচ্চ শিক্ষাগত যোগ্যতা</td><td><?php echo $value->most_educational_qualification;?></td></tr>
        <tr><td>পূর্বতন কর্মস্থল</td><td><?php echo $value->pre_work_station;?></td></tr>
        <tr><td>চাকরিতে যোগদানের তারিখ</td><td><?php echo $value->join_date_of_job;?></td></tr>
        <tr><td><b>বর্তমান কর্মস্থলে অতিবাহিত সময়</b></td><td><?php
        $current_date= date_create(date('Y-m-d'));
        $join_date= date_create($value->join_date_of_present_work_station);
        $spend_date=  date_diff($join_date, $current_date);
        $spend_date=$spend_date->format("%a");
        $month=0;
        $year=0;
        $days=0;
        if($spend_date>364)
        {
         $year=$spend_date%365;
        $spend_date=$spend_date/365;   
        }
        if($spend_date>30)
        {
        $month=$spend_date%30;
        $spend_date=$spend_date/30;
        }
        
        
        $day=$spend_date;
        
         if($year!=0)
        {
             echo $year.' বছর';
        }
        if($month!=0)
        {
             echo $month.' মাস';
        }
          if($day!=0)
        {
             echo $day.' দিন';
        }
        ?></td></tr>
        
        
         <?php
        
    }
    ?>
    
</table>


