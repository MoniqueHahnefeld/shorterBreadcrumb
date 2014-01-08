<?php 

class breadcrumbShort extends \ModuleBreadcrumb
{	
	 protected $strTemplate = 'mod_breadcrumb_shortname' ; //'mod_breadcrumb_shortname'
	public function generate()
	{
		if (TL_MODE == 'BE')
		 {
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### ' . utf8_strtoupper($GLOBALS['TL_LANG']['FMD']['breadcrumb'][0]) . ' ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
		 
			return $objTemplate->parse();
			
		}

		return parent::generate();
	}

	

}

?>