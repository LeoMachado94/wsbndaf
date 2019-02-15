<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarDispensacaoMedicamentoType StructType
 * @subpackage Structs
 */
class InformarDispensacaoMedicamentoType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\IdentificacaoType
     */
    public $identificacao;
    /**
     * The estabelecimento
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento que registra a dispensação.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EstabelecimentoCNESCNPJType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao medicamento.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ProdutoDispensacaoType
     */
    public $produto;
    /**
     * The paciente
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao paciente.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\PacienteType
     */
    public $paciente;
    /**
     * The prescritor
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao prescritor.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PrescritorType
     */
    public $prescritor;
    /**
     * Constructor method for InformarDispensacaoMedicamentoType
     * @uses InformarDispensacaoMedicamentoType::setIdentificacao()
     * @uses InformarDispensacaoMedicamentoType::setEstabelecimento()
     * @uses InformarDispensacaoMedicamentoType::setProduto()
     * @uses InformarDispensacaoMedicamentoType::setPaciente()
     * @uses InformarDispensacaoMedicamentoType::setPrescritor()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento
     * @param \StructType\ProdutoDispensacaoType $produto
     * @param \StructType\PacienteType $paciente
     * @param \StructType\PrescritorType $prescritor
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, \StructType\EstabelecimentoCNESCNPJType $estabelecimento = null, \StructType\ProdutoDispensacaoType $produto = null, \StructType\PacienteType $paciente = null, \StructType\PrescritorType $prescritor = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto)
            ->setPaciente($paciente)
            ->setPrescritor($prescritor);
    }
    /**
     * Get identificacao value
     * @return \StructType\IdentificacaoType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }
    /**
     * Set identificacao value
     * @param \StructType\IdentificacaoType $identificacao
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public function setIdentificacao(\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get estabelecimento value
     * @return \StructType\EstabelecimentoCNESCNPJType
     */
    public function getEstabelecimento()
    {
        return $this->estabelecimento;
    }
    /**
     * Set estabelecimento value
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public function setEstabelecimento(\StructType\EstabelecimentoCNESCNPJType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoDispensacaoType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoDispensacaoType $produto
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public function setProduto(\StructType\ProdutoDispensacaoType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get paciente value
     * @return \StructType\PacienteType
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    /**
     * Set paciente value
     * @param \StructType\PacienteType $paciente
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public function setPaciente(\StructType\PacienteType $paciente = null)
    {
        $this->paciente = $paciente;
        return $this;
    }
    /**
     * Get prescritor value
     * @return \StructType\PrescritorType|null
     */
    public function getPrescritor()
    {
        return $this->prescritor;
    }
    /**
     * Set prescritor value
     * @param \StructType\PrescritorType $prescritor
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public function setPrescritor(\StructType\PrescritorType $prescritor = null)
    {
        $this->prescritor = $prescritor;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InformarDispensacaoMedicamentoType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
