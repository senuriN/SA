<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 9/26/2016
 * Time: 8:16 AM
 * Author : Dasuni Kumarapperuma
 * Copyrights : Industry Management SLIIT
 */
class newVacancy extends CI_Controller
{
    public function index()
    {
        $this->load->view('EmployerDashMain');
        $this->load->view('postVacancy');
        $this->load->view('dashFooter');
    }
}