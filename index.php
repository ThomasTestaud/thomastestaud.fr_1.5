<?php

$template = $_GET['page']??'home';
$template .= '.phtml';


require 'views/layout.phtml';

