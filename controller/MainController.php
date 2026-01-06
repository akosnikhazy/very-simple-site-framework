<?php
class MainController extends BaseController
{
    public function handle(): void
    {
        $foo = 'foo';
        $this->render('main', ['content' => $foo]);
    }
}
