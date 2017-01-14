<?php

$errors = array();
$data = array();
include_once '../../../classes/adm.php';
$adm = new adm();
$adm->salvar();
$data['success'] = true;

echo json_encode($data);