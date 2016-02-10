
<style>
    .employee-containers
    {
        margin:50px 0 0 20px;
    }
</style>
<div class="employee-container">
    <table  class=" table-responsive table table-bordered table-striped table-hover ">
        <caption style="text-align:center">সকল জেলা প্রশাসক</caption>
        <tr><td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, ঢাকা জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, গাজীপুর জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, নরসিংদী জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক,শরীয়তপুর জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id = 0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, নারায়ণগঞ্জ জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $id=0;
                 $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, টাঙ্গাইল জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                     $this->db->select('*');
                     $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, কিশোরগঞ্জ জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                 $this->db->select('*');
                 $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, মানিকগঞ্জ জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, মুন্সিগঞ্জ জেলা।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $id=0;
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, রাজবাড়ী জেলা।</a>
            </td>
        </tr>
    <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক,  ফরিদপুর জেলা
।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, মাদারীপুর জেলা
।</a>
            </td>
        </tr>
        <tr>
            <td style="text-align:center;" title="Click for Details">
                <?php
                $this->db->select('*');
                $this->db->from('bcs_cadre');
                $this->db->where('post', 'জেলা প্রশাসক');
                $this->db->or_where('post', 'District Administrator');
                $result = $this->db->get()->result();
                foreach ($result as $value) {
                    $id = $value->id;
                }
                ?>
                <a href="<?php echo base_url() ?>user_view_controller/commisioner_karjaloy_employe/<?php echo $id; ?>">জেলা প্রশাসক, গোপালগঞ্জ জেলা

।</a>
            </td>
        </tr>
         



    </table>
</div>

