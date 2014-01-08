<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package PageEntryBreadcrumb
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'breadcrumbShort' => 'system/modules/pageEntryBreadcrumb/classes/breadcrumbShort.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_breadcrumb_shortname' => 'system/modules/pageEntryBreadcrumb/templates',
));
