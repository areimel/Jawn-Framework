<?php

//CMS static routes

	Router::connect('/', array('controller' => 'Site', 'action' => 'index'));

	//Misc. Framework Pages
		Router::connect('/privacy', array('controller' => 'Site', 'action' => 'legal_privacy'));
		Router::connect('/terms', array('controller' => 'Site', 'action' => 'legal_terms'));
		Router::connect('/cookies', array('controller' => 'Site', 'action' => 'legal_cookies'));
		Router::connect('/gdpr', array('controller' => 'Site', 'action' => 'legal_gdpr'));
		Router::connect('/ccpa', array('controller' => 'Site', 'action' => 'legal_ccpa'));
		Router::connect('/404', array('controller' => 'Site', 'action' => 'error_404'));

//Blog

	//Directory
	Router::connect('/blog', array('controller' => 'Blog', 'action' => 'index'));

	//Post
	Router::connect(
		'/blog/post/:slug',
		array(
			'controller' => 'Blog',
			'action' => 'post',
		),
		array(
			'pass' => array('slug')
		)
	);

	//Directory - Category
	$aUri = explode('/', $_SERVER['REQUEST_URI']);
	if(!empty($aUri[2])) {
		if(strcasecmp($aUri[1],'blog')==0 && !empty($aUri[2])) {
			Router::connect('/' . $aUri[1] . (isset($aUri[2]) ? '/' . $aUri[2] : '').'/*', array(
				'controller' => 'Blog',
				'action' => 'index',
				$aUri[2]
			));
		}
	}

//Get URL

	$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$url=parse_url($url);
	$temp=rtrim($url['path'], '/');
	$temp=ltrim($temp, '/');
	
//CMS dynamic routes

	Router::connect($url['path'], array('controller' => 'site', 'action' => 'page',$temp));

?>
