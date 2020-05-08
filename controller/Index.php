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
        try {
            $paciente = new Paciente();
            $paciente->setNomeMedico($post['medico']);
            $paciente->setNomePaciente($post['nome_paciente']);
            $paciente->setTipoSanguineo($post['sangue']);
            return '{"resposta": "Tudo OK!"}';
        } catch (\Exception $e) {
            return '{"resposta": "Erro!"}';
        }
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