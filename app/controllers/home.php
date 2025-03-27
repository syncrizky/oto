<?php
class Home extends Controller
{
    public function __construct()
    {
        // if (!isset($_SESSION['user'])) {
        //     header('Location: ' . BASEURL . '/auth');
        //     exit;
        // }
    }
    public function index()
    {
        $data['title'] = 'Home';
        $data['url'] = 'home/index';
        $this->view('templates/header', $data);
        $this->view('templates/navbar', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
