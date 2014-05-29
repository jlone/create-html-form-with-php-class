<?php


/**
------------------------------------------------------------    
    HTML form Generator by PHP class from tisuchi.com
------------------------------------------------------------
Author         : Thouhedu Islam
Author's Email : suchi@tisuchi.com
Author's URL   : tisuhci.com
    
*/
    
    


class HtmlFormMaker
{
	
	
	public function form_open($method){
		return '<form  method="'.$method.'">';
	}

	public function form_label($name){
	    return '<label for="'.$name.'">'.$name.'</label> : ';
	}

    public function form_input($type, $name, $id, $placeholder){
		
		return '<input type="'.$type.'" name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'"">';
	}

	public function form_textarea($name, $id, $placeholder){
			return '<textarea name="'.$name.'" id="'.$id.'" placeholder="'.$placeholder.'"></textarea>';
	}

	public function form_button($type, $id, $text){
		
		return '<input type="'.$type.'" id="'.$id.'" value="'.$text.'">';
	}

	public function form_close(){
		return '</form>';
	}

	

}

