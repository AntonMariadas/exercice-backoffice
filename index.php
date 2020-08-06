<?php
session_start();
include('controller/Router.php');

include('view/Header.php');
$page = (isset($_GET['page'])) ? $_GET['page'] : '';
Router::route($page);
include('view/Footer.php');

