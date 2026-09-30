<?php
// Aluno.php
require_once "Usuario.php";


class Aluno extends Usuario {
    private string $disciplina;

    public function __construct($disciplina, $cargo) {
        parent::__construct($disciplina, $cargo);
        $this->matricula = $disciplina;
    }

    public function exbirInfo(): string {
        return "Aluno: {$this->nome} | Matricula: {$this->matricula}";
    }
}