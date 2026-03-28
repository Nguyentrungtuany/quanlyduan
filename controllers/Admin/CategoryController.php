<?php
require_once './models/admin/CategoryModel.php';

class CategoryController
{
    public $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    // Trang danh sách
    public function index()
    {
        $categories = $this->categoryModel->getAll();
        require_once './views/admin/category/list.php';
    }

}