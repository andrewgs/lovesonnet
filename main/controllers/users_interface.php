<?php

class Users_interface extends CI_Controller {

	var $user = array('uid'=>0,'uname'=>'','ulogin'=>'','upassword'=>'','uemail'=>'','status'=>FALSE);
	var $months = array("01"=>"января","02"=>"февраля","03"=>"марта","04"=>"апреля",
						"05"=>"мая","06"=>"июня","07"=>"июля","08"=>"августа",
						"09"=>"сентября","10"=>"октября","11"=>"ноября","12"=>"декабря");
	
	
	function __construct(){
	
		parent::__construct();
		
		$this->load->model('usermodel');
		$this->load->model('units');
		$this->load->model('emails');
		$cookieuid = $this->session->userdata('login_id');
		if(isset($cookieuid) and !empty($cookieuid)):
			$this->user['uid'] = $this->session->userdata('userid');
			if($this->user['uid']):
				$userinfo = $this->usermodel->read_info($this->user['uid']);
				if($userinfo):
					$this->user['uname']	 = $userinfo['uname'];
					$this->user['ulogin'] 	 = $userinfo['ulogin'];
					$this->user['upassword'] = $userinfo['upassword'];
					$this->user['uemail'] 	 = $userinfo['uemail'];
					$this->user['status'] 	 = TRUE;
				endif;
			endif;
			
			if($this->session->userdata('login_id') != md5($this->user['ulogin'].$this->user['upassword'])):
				$this->user['status'] = FALSE;
				$this->user = array();
			endif;
		endif;
	}
	
	/* ----------------------------------------	users menu ---------------------------------------------------*/
	
	function index(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Главная',
					'baseurl' 		=> base_url(),
					'position'		=> '',
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'userinfo'		=> $this->user
			);
		$this->load->view('users_interface/index',$pagevar);
	}
	
	function dresses(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Платья',
					'baseurl' 		=> base_url(),
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'position'		=> 'style="left: 230px;"',
					'userinfo'		=> $this->user,
					'units'			=> array(),
					'count'			=> 0,
					'pages'			=> ''
			);
		
		
		$pagevar['count'] = $this->units->count_records(1);
		
		$config['base_url'] 		= $pagevar['baseurl'].'dresses/';
        $config['total_rows'] 		= $pagevar['count']; 
        $config['per_page'] 		= 12;
        $config['num_links'] 		= 2;
        $config['uri_segment'] 		= 2;
		$config['first_link']		= 'В начало';
		$config['last_link'] 		= 'В конец';
		$config['next_link'] 		= 'Далее &raquo;';
		$config['prev_link'] 		= '&laquo; Назад';
		$config['cur_tag_open']		= '<b>';
		$config['cur_tag_close'] 	= '</b>';
		$from = intval($this->uri->segment(2));
		$pagevar['units'] = $this->units->read_limit_records(1,12,$from);
		for($i=0;$i<count($pagevar['units']);$i++):
			if(mb_strlen($pagevar['units'][$i]['note'],'UTF-8') > 150):									
				$pagevar['units'][$i]['note'] = mb_substr($pagevar['units'][$i]['note'],0,150,'UTF-8');	
				$pos = mb_strrpos($pagevar['units'][$i]['note'],' ',0,'UTF-8');
				$pagevar['units'][$i]['note'] = mb_substr($pagevar['units'][$i]['note'],0,$pos,'UTF-8');
				$pagevar['units'][$i]['note'] .= ' ... ';
			endif;
		endfor;
		$this->pagination->initialize($config);
		$pagevar['pages'] = $this->pagination->create_links();

		$this->load->view('users_interface/dresses',$pagevar);
	}

	function dress_info(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Модель',
					'baseurl' 		=> base_url(),
					'menu'			=> FALSE,
					'slides'		=> TRUE,
					'position'		=> '',
					'link'			=> 'dress',
					'userinfo'		=> $this->user,
					'unit'			=> array(),
					'units'			=> array()
			);
		$pagevar['units'] = $this->units->read_limit(1,20);
		$pagevar['unit'] = $this->units->read_record(1,$this->uri->segment(2));
		if(!$pagevar['unit']) show_404();
		$this->load->view('users_interface/view',$pagevar);
	}

	function access_info(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Модель',
					'baseurl' 		=> base_url(),
					'menu'			=> FALSE,
					'slides'		=> TRUE,
					'position'		=> '',
					'link'			=> 'accessories',
					'userinfo'		=> $this->user,
					'unit'			=> array(),
					'units'			=> array()
			);
		$pagevar['units'] = $this->units->read_limit(0,20);
		$pagevar['unit'] = $this->units->read_record(0,$this->uri->segment(2));
		if(!$pagevar['unit']) show_404();
		$this->load->view('users_interface/view',$pagevar);
	}
	
	function accessories(){
		
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Аксессуары',
					'baseurl' 		=> base_url(),
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'position'		=> 'style="left: 310px;"',
					'userinfo'		=> $this->user,
					'units'			=> array(),
					'count'			=> 0,
					'pages'			=> ''
			);
		$pagevar['count'] = $this->units->count_records(0);
		
		$config['base_url'] 		= $pagevar['baseurl'].'accessories/';
        $config['total_rows'] 		= $pagevar['count']; 
        $config['per_page'] 		= 12;
        $config['num_links'] 		= 2;
        $config['uri_segment'] 		= 2;
		$config['first_link']		= 'В начало';
		$config['last_link'] 		= 'В конец';
		$config['next_link'] 		= 'Далее &raquo;';
		$config['prev_link'] 		= '&laquo; Назад';
		$config['cur_tag_open']		= '<b>';
		$config['cur_tag_close'] 	= '</b>';
		$from = intval($this->uri->segment(2));
		$pagevar['units'] = $this->units->read_limit_records(0,12,$from);
		$this->pagination->initialize($config);
		$pagevar['pages'] = $this->pagination->create_links();
		
		$this->load->view('users_interface/accessories',$pagevar);
	}
	
	function services(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Услуги',
					'baseurl' 		=> base_url(),
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'position'		=> 'style="left: 400px;"',
					'userinfo'		=> $this->user
			);
		$this->load->view('users_interface/services',$pagevar);	
	}
	
	function about(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - О нас',
					'baseurl' 		=> base_url(),
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'position'		=> 'style="left: 470px;"',
					'userinfo'		=> $this->user
			);
		$this->load->view('users_interface/about',$pagevar);	
	}
	
	function contact(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Контакты',
					'baseurl' 		=> base_url(),
					'menu'			=> TRUE,
					'slides'		=> FALSE,
					'position'		=> 'style="left: 540px;"',
					'userinfo'		=> $this->user
			);
		$this->load->view('users_interface/contact',$pagevar);	
	}
	
	function thanks(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Спасибо за регистрацию',
					'baseurl' 		=> base_url(),
					'menu'			=> FALSE,
					'position'		=> '',
					'userinfo'		=> $this->user
			);
		$this->load->view('users_interface/thanks',$pagevar);	
	}
	
	function insert_email(){
		
		if($this->input->post('addemail')):
			$this->form_validation->set_rules('cm-name','"Имя"','required|htmlspecialchars|trim');
			$this->form_validation->set_rules('cm-email','"Почта"','required|valid_email|callback_email_check|trim');
			if(!$this->form_validation->run()):
				redirect('');
			else:
				$this->emails->insert_record($_POST);
				redirect('thanks');
			endif;
		else:
			show_404();
		endif;
	}
	
	/*********************************************************************************************************************/
	
	function email_check($email){
	
		if($this->emails->exist($email)):
			$this->form_validation->set_message('email_check','E-mail существует');
			return FALSE;
		endif;
	}
	
	function admin_login(){
	
		$pagevar = array(
					'description'	=> '',
					'author'		=> '',
					'title'			=> 'LoveSonnet.ru - Авторизация',
					'baseurl' 		=> base_url(),
					'menu'			=> FALSE,
					'position'		=> '',
					'error'			=> FALSE,
					'userinfo'		=> $this->user
			);
		if($this->user['status']):
			redirect('');
		endif;
		if($this->input->post('submit')):
			$this->form_validation->set_rules('login-name','"Логин"','required|trim');
			$this->form_validation->set_rules('login-pass','"Пароль"','required');
			$this->form_validation->set_error_delimiters('<div class="fvalid_error">','</div>');
			if(!$this->form_validation->run()):
				$_POST['submit'] = NULL;
				$this->admin_login();
				return FALSE;
			else:
				$_POST['submit'] = NULL;
				$user = $this->usermodel->auth_user($_POST['login-name'],$_POST['login-pass']);
				if($user):
					$this->session->set_userdata('login_id',md5($user['ulogin'].$user['upassword']));
					$this->session->set_userdata('userid',$user['uid']);
					redirect('');
				endif;
				$pagevar['error'] = TRUE;
			endif;
		endif;
		$this->load->view('users_interface/admin-login',$pagevar);
	}
	
	function viewimage(){
		
		$section = $this->uri->segment(1);
		$id = $this->uri->segment(3);
		switch ($section){
			case 'sunit' : $image = $this->units->get_simage($id); break;
			case 'bunit' : $image = $this->units->get_bimage($id); break;
			case 'unit'  : $image = $this->units->get_image($id); break;
		}
		header('Content-type: image/gif');
		echo $image;
	}
	
	function operation_date($field){
			
		$list = preg_split("/-/",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5 $nmonth \$1 г."; 
		return preg_replace($pattern, $replacement,$field);
	}

	function operation_date_slash($field){
		
		$list = preg_split("/-/",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5/\$3/\$1"; 
		return preg_replace($pattern, $replacement,$field);
	}

	function operation_date_minus($field){
		
		$list = preg_split("/-/",$field);
		$nmonth = $this->months[$list[1]];
		$pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
		$replacement = "\$5-\$3-\$1"; 
		return preg_replace($pattern, $replacement,$field);
	}
											
	function sendmail($email,$msg,$subject,$from){
		
		$config['smtp_host'] = 'localhost';
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$this->email->initialize($config);
		$this->email->from($from,'NSP-DON');
		$this->email->to($email);
		$this->email->bcc('');
		$this->email->subject($subject);
		$this->email->message(strip_tags($msg));
		if(!$this->email->send()):
			return FALSE;
		endif;
		return TRUE;
	}			
}