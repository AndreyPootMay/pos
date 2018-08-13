<?php
	require 'controllers/CategoriesController.php';
	require 'controllers/CustomersController.php';
	require 'controllers/ProductsController.php';
	require 'controllers/SalesController.php';
	require 'controllers/TemplateController.php';
	require 'controllers/UsersController.php';

	require 'models/Categories.php';
	require 'models/Customers.php';
	require 'models/Products.php';
	require 'models/Sales.php';
	require 'models/Users.php';


	$template = new TemplateController();
	$template->ctrTemplate();
