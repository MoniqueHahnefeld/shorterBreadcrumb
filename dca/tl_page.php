<?php 
  // 'palettes' => array 
    // ( 
        // '__selector__'                => array(''), 
        // 'default'                     => '' 
    // ), 
//Anzeige im Backend

foreach($GLOBALS['TL_DCA']['tl_page']['palettes'] as $k => $v) 
{ 
    $GLOBALS['TL_DCA']['tl_page']['palettes'][$k] = str_replace  
      (  
       'title',  
       'title,shortName',  
       $GLOBALS['TL_DCA']['tl_page']['palettes'][$k]  
      ); 
} 

//$GLOBALS['TL_DCA']['tl_page']['palettes']['default'] = str_replace('title,','title,shortName', $GLOBALS['TL_DCA']['tl_page']['palettes']['default']);
 
//Beschreibung des Feldes
$GLOBALS['TL_DCA']['tl_page']['fields']['shortName'] = array
(
        'label'                   => $GLOBALS['TL_LANG']['tl_page']['shortName'],
      
        
			'exclude'                 => false,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64,'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"

);
$GLOBALS['TL_DCA']['tl_page']['fields']['title']['eval']['tl_class']= 'w50';


?>