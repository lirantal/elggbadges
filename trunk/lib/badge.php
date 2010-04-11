<?php
	/**
	 * Badges Badge class
	 * 
	 */


	class BadgesBadge extends ElggFile
	{
		protected function initialise_attributes()
		{
			parent::initialise_attributes();
			
			$this->attributes['subtype'] = "badge";
		}
		
		public function __construct($guid = null) 
		{
			parent::__construct($guid);
		}
	}
	
?>
