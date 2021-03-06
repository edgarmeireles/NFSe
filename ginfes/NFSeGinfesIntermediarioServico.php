<?php
namespace NFSe\ginfes;


/**
 * 
 * @since 2016-02-10
 * @author Willker Moraes Silva
 *
 */
class NFSeGinfesIntermediarioServico{
	public $RazaoSocial;
	
	private $tpPessoa;
	
	private $CpfCnpj;
	
	public $InscricaoMunicipal;
	
	public function setCpfCnpj($cpfCnpj, $tpPessoa = 1){
		switch ($tpPessoa){
			case 0:
			case "F":
			case "PF":
			case "f":
				$this->CpfCnpj = $cpfCnpj;
				$this->tpPessoa = 0;
			break;
			case 1:
			case 'J':
			case 'PJ':
			case 'j':
				$this->CpfCnpj = $cpfCnpj;
				$this->tpPessoa = 1;
			break;
		}
	}
	
	/**
	 * @return string $CpfCnpj
	 */
	public function getCpfCnpj() {
		return $this->CpfCnpj;
	}

	/**
	 * @return number $tpPessoa
	 */
	public function getTpPessoa() {
		return $this->tpPessoa;
	}
}