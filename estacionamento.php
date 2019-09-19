<?php

class Estacionamento
{
    protected $capacidade = 100;
    protected $ocupadas = 0;

    public function getCapacidade(){
	return $this->capacidade;
    }

    public function getOcupadas(){
	return $this->ocupadas;
    }

    protected function setOcupadas($valor){
	$this->ocupadas = $valor;
    }

    public function getVagas(){
	return $this->capacidade - $this->ocupadas;
    }

    public function getVagas(){
	return $this->capacidade - $this->ocupadas;
    }

    public function entrarVeiculo(){
	if (this->getVagas() > 0 {
		$this->setOcupadas($this->getOcupadas()+1);
	}else {
		throw new Exception('Não há mai vagas.');
	}

    }

    public function sairVeiculo(){
	if (this->getOvupadas() > 0 {
		$this->setOcupadas($this->getOcupadas()-1);
	}else {
		throw new Exception('Operação inválida.');
	}

    }

}

