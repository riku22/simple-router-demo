<?php
namespace Demo\Controllers;

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

	public function companies($id = null): string
	{
        return 'DefaultController -> companies -> id: ' . $id;
	}

	public function form_test(): string
	{
        return '<p>Form testing page for CSRF verifier.</p><form method="post" action="/form_test"><input type="hidden" name="csrf_token" value="invalid_token_test"><input type="submit" name="submit" value="Submit"></form>';
	}

    public function notFound(): string
    {
        return 'Page not found';
    }

}