<?php

namespace Business;


class Paciente
{
    private $nome_medico;
    private $nome_paciente;
    private $tipo_sanguineo;

    public function setNomeMedico($nome_medico_): void 
    {
        $this->nome_medico = $nome_medico_;
    }

    public function setNomePaciente($nome_paciente_): void 
    {
        $this->nome_paciente = $nome_paciente_;
    }

    public function setTipoSanguineo($tipo_sanguineo_): void
    {
        $this->tipo_sanguineo = $tipo_sanguineo_;
    }

    public function getTiposSanguineo(): string
    {
        $tipos = [
            "A+", "A-", 
            "O+", "O-", 
            "B+", "B-", 
            "AB+", "AB-"
        ];
        return \json_encode($tipos);
    }

    
}
