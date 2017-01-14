<?php
$errors = array();
$data = array();
include_once '../classes/postrels.php';
$cat = new Categoria();
$data['message'] = $cat->salvar($_POST['cat-name']);
$data['success'] = true;
echo json_encode($data);