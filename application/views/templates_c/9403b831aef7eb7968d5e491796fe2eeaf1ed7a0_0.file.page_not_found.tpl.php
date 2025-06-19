<?php
/* Smarty version 4.3.2, created on 2024-07-15 11:40:03
  from '/var/www/html/extra_work/duroshox/application/views/templates/page_not_found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6694bd3bc21fd7_43072282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9403b831aef7eb7968d5e491796fe2eeaf1ed7a0' => 
    array (
      0 => '/var/www/html/extra_work/duroshox/application/views/templates/page_not_found.tpl',
      1 => 1720449205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6694bd3bc21fd7_43072282 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		html, body{
  margin: 0;
  padding: 0;
  text-align: center;
  font-family: sans-serif;
  background-color: #E7FFFF;
}

h1, a{
  margin: 0;
  padding: 0;
  text-decoration: none;
}

.section{
  padding: 4rem 2rem;

    position: relative;
    top: 141px;
}
.section .error{
  font-size: 270px;
  color: #008B62;
  text-shadow: 
    1px 1px 1px #00593E,    
    2px 2px 1px #00593E,
    3px 3px 1px #00593E,
    4px 4px 1px #00593E,
    5px 5px 1px #00593E,
    6px 6px 1px #00593E,
    7px 7px 1px #00593E,
    8px 8px 1px #00593E,
    25px 25px 8px rgba(0,0,0, 0.2);
}

.page{
  margin: 2rem 0;
  font-size: 20px;
  font-weight: 600;
  color: #444;
}

.back-home{
  display: inline-block;
  border: 2px solid #222;
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  padding: 0.75rem 1rem 0.6rem;
  transition: all 0.2s linear;
  box-shadow: 0 15px 15px -11px rgba(0,0,0, 0.4);
  background: #222;
  border-radius: 6px;
}
.back-home:hover{
  background: #222;
  color: #ddd;
}
	</style>
</head>
<body>
	<div class="section">
  <h1 class="error">404</h1>
  <div class="page">Ooops!!! The page you are looking for is not found</div>
  <a class="back-home" href="part-listing">Back to home</a>
</div>

</body>
</html><?php }
}
