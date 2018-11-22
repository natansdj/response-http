<?php

	namespace ResponseHTTP\Response\Exceptions;

	use Response;
	use Exception;

	class ErrorsException extends Exception {
		public function exception ($content, $status = 400, array $headers = [], $code = 0) {
			return Response::errorException($content, $status, null, $headers, $code);
		}
	}
