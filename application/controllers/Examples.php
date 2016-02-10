<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();

		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function user_tbl_function()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('user');
			$crud->set_subject('User');
			$crud->required_fields('user_name','password','mobile_no');
			$crud->columns('user_name','password','mobile_no');
                        $crud->display_as('user_name','User Name')->display_as('password','Password')->display_as('mobile_no','Mobile Number');

			$output = $crud->render();

			//$this->_example_output($output);
                        $data=array();
                        $data['flag']='';
                       $data['output_content']= $this->load->view('add_user.php',$output,TRUE);
                       $this->load->view('admin_panel',$data);
                       

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
        public function cadre_add_show_iframe() {
                
     
        $data['output_content'] = 'Examples/cadre_add';
        $data['flag']='cadre';
        $this->load->view('admin_panel',$data);
            
        }

	public function cadre_add()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('bcs_cadre');
                        $crud->set_subject('কর্মকর্তা');
			$crud->required_fields('cadre_name','introducing_no','post','present_work_station','join_date_of_present_work_station','date_of_birth','batch','join_date_of_bcs_cadre','own_district','spous_district','mobile_no','marital_status','permanent_address','most_educational_qualification','pre_work_station','join_date_of_job','photo');
			$crud->columns('cadre_name','introducing_no','post','present_work_station','join_date_of_present_work_station','date_of_birth','batch','join_date_of_bcs_cadre','own_district','spous_district','mobile_no','marital_status','permanent_address','most_educational_qualification','pre_work_station','join_date_of_job','photo');
                        $crud->display_as('cadre_name','কর্মকর্তার নাম')->display_as('introducing_no','পরিচিতি নং')->display_as('post','পদবি')->display_as('present_work_station','বর্তমান কর্মস্থল')->display_as('join_date_of_present_work_station','বর্তমান কর্মস্থলে যোগদানের তারিখ')->display_as('date_of_birth','জন্ম তারিখ')->display_as('batch','ব্যাচ')->display_as('join_date_of_bcs_cadre','বি সি এস (প্রশাসন) ক্যাডারে যোগদানের তারিখ')->display_as('own_district','নিজ জেলা')->display_as('spous_district','স্পাউসের জেলা')->display_as('mobile_no','মোবাইল নং')->display_as('marital_status','বৈবাহিক অবস্থা')->display_as('permanent_address','স্থায়ী ঠিকানা')->display_as('most_educational_qualification','সর্বোচ্ছ শিক্ষাগত যোগ্যতা')->display_as('pre_work_station','পূর্বতন চাকুরীস্থল')->display_as('join_date_of_job','চাকুরিতে যোগদানের তারিখ')->display_as('photo','ছবি');
                        


		

			$crud->set_field_upload('photo','assets/uploads/files');

			$output = $crud->render();

			 $data=array();
                        $this->load->view('cadre_list_show.php',$output);
                    
	}
        public function employees_show()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('employee');
			//$crud->set_relation('officeCode','offices','city');
			
			$crud->set_subject('Employee');

			$crud->required_fields('employee_name','photo','post');

			$crud->set_field_upload('photo','assets/uploads/files');
                        $crud->display_as('photo','ছবি')->display_as('employee_show','কর্মকর্তার নাম')->display_as('post','পদবি');

			$output = $crud->render();
                        $data['flag']='';

			 $data['output_content']= $this->load->view('cadre_list_show.php',$output,TRUE);
                       $this->load->view('admin_panel',$data);
	}
        public function khormochari_show()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('kormochary');
			//$crud->set_relation('officeCode','offices','city');
			$crud->set_subject('কর্মচারী');

			$crud->required_fields('kormochary_name','photo','post','phone');

			$crud->set_field_upload('photo','assets/uploads/files');
                        $crud->display_as('photo','ছবি')->display_as('kormochary_name','কর্মচারীর নাম')->display_as('post','পদবি')->display_as('phone','ফোন');

			$output = $crud->render();
                        $data['flag']='';

			 $data['output_content']= $this->load->view('kormochari_show.php',$output,TRUE);
                       $this->load->view('admin_panel',$data);
	}
         public function bibag_poriciti_show()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('bibag_poriciti');
			//$crud->set_relation('officeCode','offices','city');
			$crud->set_subject('বিভাগ পরিচিতি');

			$crud->required_fields('about_bibag','photo','date');

			$crud->set_field_upload('photo','assets/uploads/files');
                        $crud->display_as('photo','ছবি')->display_as('about_bibag','বিভাগের বর্ণনা')->display_as('date','তারিখ');

			$output = $crud->render();
                        $data['flag']='';

			 $data['output_content']= $this->load->view('bibag_poriciti.php',$output,TRUE);
                       $this->load->view('admin_panel',$data);
	}
        public function commisioner_bani_show() {
            $crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('bani_of_divisional_commisioner');
			//$crud->set_relation('officeCode','offices','city');
			$crud->set_subject('বিভাগীয় কমিশনারের বানী');

			$crud->required_fields('bani','photo','date');

			$crud->set_field_upload('photo','assets/uploads/files');
                        $crud->display_as('photo','ছবি')->display_as('bani','বানী')->display_as('date','তারিখ');

			$output = $crud->render();
                        $data['flag']='';

			 $data['output_content']= $this->load->view('bibag_poriciti.php',$output,TRUE);
                       $this->load->view('admin_panel',$data);
        }
        
        

	public function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',10);

		$output1 = $this->offices_management2();

		$output2 = $this->employees_management2();

		$output3 = $this->customers_management2();

		$js_files = $output1->js_files + $output2->js_files + $output3->js_files;
		$css_files = $output1->css_files + $output2->css_files + $output3->css_files;
		$output = "<h1>List 1</h1>".$output1->output."<h1>List 2</h1>".$output2->output."<h1>List 3</h1>".$output3->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function offices_management2()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('offices');
		$crud->set_subject('Office');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

}