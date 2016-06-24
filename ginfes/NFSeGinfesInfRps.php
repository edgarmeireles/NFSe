<?php
namespace NFSe\ginfes;

/**
 * 
 * @since 2016-02-10
 * @author Willker Moraes Silva
 *
 */
class NFSeGinfesInfRps{
	
	public $IdentificacaoRps;
	
	/**
	 * @var string
	 */
	public $DataEmissao;
	
	/**
	 * 1 - Tributa��o no munic�pio
	 * 2 - Tributa��o fora do munic�pio
	 * 3 - Isen��o
	 * 4 - Imune
	 * 5 - Exigibilidade suspensa por decis�o judicial
	 * 6 - Exigibilidade suspensa por procedimento administrativo
	 * 
	 * Obs: Quando a natureza da opera��o for Tributa��o fora do munic�pio a tag referente ao munic�pio da presta��o de 
	 * servi�o deve ser preenchida com o c�digo referente ao munic�pio onde o servi�o foi realizado.
	 * 
	 * @var number
	 */
	public $NaturezaOperacao;
	
	/**
	 * 1 - Microempresa Municipal
	 * 2 - Estimativa
	 * 3 - Sociedade de Profissionais
	 * 4 - Cooperativa
	 * 5 - Microempres�rio Individual (MEI)
	 * 6 - Microempres�rio e Empresa de Pequeno Porte (ME EPP)
	 * 
	 * Obs: Quando a empresa n�o se enquadra em nenhum dos regimes especial de tributa��o acima, a tag que corresponde a essa informa��o deve ser suprimida do XML.
	 * 
	 * @var number
	 */
	public $RegimeEspecialTributacao = 1;
	
	/**
	 * 1 - Sim
	 * 2 - N�o
	 * 
	 * @var number
	 */
	public $OptanteSimplesNacional = 1;
	
	/**
	 * 1 - Sim
	 * 2 - N�o
	 * 
	 * @var number
	 */
	public $IncentivadorCultural = 2;
	
	/**
	 * 1 - Normal
	 * 2 - Cancelado
	 * 
	 * @var number
	 */
	public $Status = 1;
	
	public $RpsSubstituido;
	
	public $Servico;
	
	public $Prestador;
	
	public $Tomador;
	
	public $IntermediarioServico;
	
	public $ConstrucaoCivil;
	
	public function __construct(){
		
		$this->IdentificacaoRps 		= new NFSeGinfesIdentificacaoRps();
		$this->RpsSubstituido			= new NFSeGinfesIdentificacaoRps();
		$this->Servico 					= new NFSeGinfesServico();
		$this->Prestador 				= new NFSeGinfesPrestador();
		$this->Tomador 					= new NFSeGinfesTomador();
		$this->IntermediarioServico 	= new NFSeGinfesIntermediarioServico();
		$this->ConstrucaoCivil 			= new NFSeGinfesConstrucaoCivil();
	}
}