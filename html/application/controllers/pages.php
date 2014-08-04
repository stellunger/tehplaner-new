<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	
	public function index()
	{
		$data['ptitle'] = "Изготовление кадастровых паспортов и техпланов, постановка на кадастровый учет | Техпланер.ру";

		$this->load->view('header', $data);
		$this->load->view('main');
		$this->load->view('footer');
		$this->load->view('hidden');
	}

	public function show_page($page_id)
	{
		switch ($page_id) {
			
			case 'faq':
				$data['ptitle'] = "Вопросы и ответы | Изготовление кадастровых паспортов и техпланов, постановка на кадастровый учет | Техпланер.ру";
				break;
			
			case 'contacts':
				$data['ptitle'] = "Контактная информация | Изготовление кадастровых паспортов и техпланов, постановка на кадастровый учет | Техпланер.ру";
				break;
		}

		$this->load->view('header', $data);
		$this->load->view($page_id);
		$this->load->view('footer');
		$this->load->view('hidden');
	}

	public function send_mail()
	{

		$data = array(
				'name' => $this->input->post('inputName'),				
				'phone' => $this->input->post('inputPhone'),
				'src' => $this->input->post('inputSrc')
			);

		$email_subject = "Новый лид! ".$data['src']." от ".$data['name']." (".$data['phone'].")";

		$email_content = "Привет!\n\nНам упала новая заявка с Техпланера, ура!\n\n";
		$email_content .= "Имя и фамилия: ".$data['name'];
		$email_content .= "\nТелефон: ".$data['phone'];
		$email_content .= "\n\nИсточник: ".$data['src'];

		$this->load->library('email');

		$this->email->from('robot@tehplaner.ru', 'Робот Техпланера');		
		$this->email->to('info@tehplaner.ru'); 
		$this->email->subject($email_subject);
		$this->email->message($email_content);	
		$this->email->send();

		$data['title'] = 'Спасибо за обращение! | Техпланер.ру';

		$this->load->view('header', $data);
		$this->load->view('mail');
		$this->load->view('footer');
		$this->load->view('hidden');
	}
}

