<?php
class Addproduct extends Controller
{
    public function index()
    {
        if (isset($_POST['name'])) {
            if ($this->model('Product_model')->addProduct($_POST) > 0) {
                header('Location:' . BASE_URL);
                die;
            }
        }
        $this->view('addproduct');
    }
}
