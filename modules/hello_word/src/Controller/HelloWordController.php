<?php

namespace Drupal\hello_word\Controller;

class HelloWordController
{
	
	public function hello()
	{
		return array(
				'#title'=>'Hello Word',
				'#markup'=>'This is some content.'
			);
	}
}
