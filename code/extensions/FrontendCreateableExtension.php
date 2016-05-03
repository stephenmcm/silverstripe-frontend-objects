<?php

class FrontendCreateableExtension extends DataExtension {

	public static $has_one = array(
		'ObjectCreatorPage' => 'ObjectCreatorPage'
	);

	public function FrontendReviewLink() {
		if($this->owner->ObjectCreatorPageID){
			return $this->owner->ObjectCreatorPage()->Link('review/' . $this->owner->ID);	
		}
	}

	public function FrontendEditLink(){
		if($this->owner->ObjectCreatorPageID){
			return $this->owner->ObjectCreatorPage()->Link('edit/' . $this->owner->ID);	
		}
	}
}
	