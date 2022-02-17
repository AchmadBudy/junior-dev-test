<?php

class Home extends Controller
{
    public function index()
    {
        if (isset($_POST['id'])) {
            $this->massDelete($_POST['id']);
        }
        $data['product'] = $this->model('Product_model')->getProduct();
        $this->view('index', $data);
    }

    public function massDelete($ids)
    {
        foreach ($ids as $id) {
            $this->model('Product_model')->deleteProduct($id);
        }
    }
}
