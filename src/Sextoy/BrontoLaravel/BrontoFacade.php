<?php namespace Sextoy\BrontoLaravel;

class BrontoFacade extends Illuminate\Support\Facades\Facade {

	protected static function getFacadeAccessor()
	{
		return 'bronto';
	}
}

/* End of BrontoFacade.php */ 