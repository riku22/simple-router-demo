<?php
namespace Demo\Controllers;

use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;

class DefaultController
{
	public function home(): string
	{
		// implement
		return sprintf('DefaultController -> index (?fun=%s)', input('fun'));
	}

	public function contact(): string
	{
        return 'DefaultController -> contact';
	}

	public function users(): string
	{
        if (!input()->exists('id')){
            throw new NotFoundHttpException();
        }
        return 'DefaultController -> users -> id: ' . input('id');
	}

	public function companies($id = null): string
	{
        return 'DefaultController -> companies -> id: ' . $id;
	}

    public function notFound(): string
    {
        return 'Page not found';
    }

}