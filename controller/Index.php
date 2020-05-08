<?php

namespace Controller;

use \App\Routes;
use \App\IMethod;
use \Business\Paciente;

class Index extends Routes implements IMethod
{

    public function get(array $request) : string
    {
        $paciente = new Paciente();
        $sangue = $paciente->getTiposSanguineo();
        return $sangue;
    }

    public function post(array $post) : string
    {
        return '{"resposta": "Tudo OK!"}';
    }

    public function put(array $request, array $put) : string
    {
        return '';
    }

    public function patch(array $request, array $patch) : string
    {
        return '';
    }

    public function delete(array $request) : string
    {
        return '';
    }

}