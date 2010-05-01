<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Leo Feyer 2005-2009
 * @author     Leo Feyer <leo@typolight.org>
 * @package    Repository
 * @license    LGPL
 * @filesource
 */


/**
 * TYPOlight Repository :: Configuration file
 *
 * @copyright  Peter Koch 2008-2009
 * @author     Peter Koch, IBK Software AG
 * @license    See accompaning file LICENSE.txt
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD']['system'], 4, array
(
	'repository_catalog' => array
	(
		'callback'   => 'RepositoryCatalog',
		'icon'       => RepositoryBackendTheme::image('catalog16'),
		'stylesheet' => RepositoryBackendTheme::file('backend.css')
	),
	'repository_manager' => array
	(
		'callback'   => 'RepositoryManager',
		'icon'       => RepositoryBackendTheme::image('install16'),
		'stylesheet' => RepositoryBackendTheme::file('backend.css')
	)
));

?>