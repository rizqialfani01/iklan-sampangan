<?php namespace App\Controllers;

class c_iklan extends BaseController
{
	public function beranda()
	{
		//return view('welcome_message');
		echo view('v_head');
		echo view('v_header');
		echo view('vh_conhome');
		echo view('v_footer');
		echo view('v_js');
	}

	//--------------------------------------------------------------------

}
