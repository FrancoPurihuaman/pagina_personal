<?php namespace App\Rules;

use App\Libraries\Validator;
use App\Libraries\View;

class LoginRules extends Validator{

    private $loginRedirectionFail;

    public function __construct($loginRedirectionFail)
    {
        $this->loginRedirectionFail = $loginRedirectionFail;
    }

    protected $filters = [
        'user' => 'required',
        'password' => 'required'
    ];

    protected $changeFieldName = [
        'user' => 'usuario',
        'password' => 'contraseña',
    ];

    public function validate($data)
    {   
        if(parent::validate($data)){
            return $this->getData();
        }else{
            $errors = $this->getErrorMessages();
            View::render($this->loginRedirectionFail, compact('errors'));
        }
    }
}