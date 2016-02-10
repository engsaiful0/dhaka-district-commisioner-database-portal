
<style>
    .employee-containers
    {
        margin:50px 0 0 20px;
    }
</style>
<div class="employee-container">
    <table  class=" table-responsive table table-bordered table-striped table-hover ">
        <caption style="text-align:center">বিভাগীয় কমিশনারের কার্যজালয়ের সকল কর্মকর্তাদের তালিকা</caption>
        <tr><td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'বিভাগীয় কমিশনার');
                $this->db->or_where('post', 'Divisional Commisioner');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">বিভাগীয় কমিশনার</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'অতিরিক্ত বিভাগীয় কমিশনার (সার্বিক)');
                $this->db->or_where('post', 'Aditional District Commisioner (All)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">অতিরিক্ত বিভাগীয় কমিশনার (সার্বিক)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'অতিরিক্ত বিভাগীয় কমিশনার (রাজস্ব)');
                $this->db->or_where('post', 'Aditional District Commisioner (Revenue)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">অতিরিক্ত বিভাগীয় কমিশনার (রাজস্ব)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'পরিচালক');
                $this->db->or_where('post', 'Director');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">পরিচালক</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'অতিরিক্ত কমিশনার (এপিএমবি)');
                $this->db->or_where('post', 'Divisional Commisioner');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">অতিরিক্ত কমিশনার (এপিএমবি)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $id=0;
                 $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'উপ-পরিচালক');
                $this->db->or_where('post', 'Sub Director');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">উপ-পরিচালক</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                     $this->db->select('*');
                     $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'সহকারী কমিশনার (রাজস্ব)');
                $this->db->or_where('post', 'Assistent Commisioner (Revenue)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id;?>">সহকারী কমিশনার (রাজস্ব)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                 $this->db->select('*');
                 $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'সহকারী কমিশনার (সার্বিক)');
                $this->db->or_where('post', 'Assistent Commisioner (All)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id;?>">সহকারী কমিশনার (সার্বিক)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'সহকারী কমিশনার (এপিএমবি)');
                $this->db->or_where('post', 'Assistent Commisioner (APBN)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id;?>">সহকারী কমিশনার (এপিএমবি)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'সহকারী কমিশনার (উন্নয়ন)');
                $this->db->or_where('post', 'Assistent Commisioner (Development)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id;?>">সহকারী কমিশনার (উন্নয়ন)</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'সহকারী কমিশনার (মাঠ প্রশাসন)');
                $this->db->or_where('post', 'Assistent Commisioner (Field Administration)');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url()?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id;?>">সহকারী কমিশনার (মাঠ প্রশাসন)</a>
            </td>
        </tr>


    </table>
</div>

