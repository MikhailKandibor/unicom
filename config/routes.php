<?php
return [
    // Управление категориями новостей:    
    'admin/news/category/create' => 'adminNews/createCategory',
    'admin/news/category/update/([0-9]+)' => 'adminNews/updateCategory/$1',
    'admin/news/category/delete/([0-9]+)' => 'adminNews/deleteСategory/$1',
    'admin/news/category' => 'adminNews/indexCategory',

    // Управление категориями курсов:    
    'admin/courses/category/create' => 'adminCourses/createCategory',
    'admin/courses/category/update/([0-9]+)' => 'adminCourses/updateCategory/$1',
    'admin/courses/category/delete/([0-9]+)' => 'adminCourses/deleteСategory/$1',
    'admin/courses/category' => 'adminCourses/indexCategory',

    // Управление курсами:    
    'admin/courses/create' => 'adminCourses/create',
    'admin/courses/update/([0-9]+)' => 'adminCourses/update/$1',
    'admin/courses/delete/([0-9]+)' => 'adminCourses/delete/$1',
    'admin/courses' => 'adminCourses/index',

    // Управление новостями:    
    'admin/news/create' => 'adminNews/create',
    'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
    'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
    'admin/news' => 'adminNews/index',


    // Управление заявками на прохождение курсов:    
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',

    'admin/users' => 'admin/viewListUsers',
    'admin/contact' => 'admin/viewListContactMessage',

    'admin' => 'admin/index',

/////////////////////////////////////////////////////

	//'news/([a-z]+)/([0-9]+)' => 'news/view/$1/$2',
	'news/category/([0-9]+)/page-([0-9]+)' => 'news/category/$1/$2', 
	'news/([0-9]+)' => 'news/view/$1', 
	'news/category/([0-9]+)' => 'news/category/$1',
	'news' => 'news/index', // actionIndex in NewsController

/////////////////////////////////////////////////////

	'courses/category/([0-9]+)/page-([0-9]+)' => 'courses/category/$1/$2', 
	'courses/([0-9]+)' => 'courses/view/$1', 
	'courses/category/([0-9]+)' => 'courses/category/$1',
	'courses' => 'courses/index',  

/////////////////////////////////////////////////////

	'contact' => 'contact/index',

/////////////////////////////////////////////////////

	'promo' => 'promo/index',

/////////////////////////////////////////////////////

	'gallery' => 'gallery/index',

/////////////////////////////////////////////////////

	'about' => 'about/index',

/////////////////////////////////////////////////////


	'user/register' => 'user/register',
	'user/login' => 'user/login',
	'user/logout' => 'user/logout',

/////////////////////////////////////////////////////

	
    'cabinet/delete/([0-9]+)' => 'cabinet/delete/$1',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet/result' => 'cabinet/result',
	'cabinet' => 'cabinet/index',

/////////////////////////////////////////////////////


	'^[a-zA-Z0-9_]{1,}$' => 'site/error',
	'' => 'site/index',

];