<?php

	namespace ResponseHTTP\Response\Facades;

	use Illuminate\Support\Facades\Facade;

	class ResponseFacade extends Facade
	{
		protected static function getFacadeAccessor()
		{
			return 'service.response';
		}
	}
