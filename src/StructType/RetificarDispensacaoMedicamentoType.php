<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarDispensacaoMedicamentoType StructType
 * @subpackage Structs
 */
class RetificarDispensacaoMedicamentoType extends AbstractStructBase
{
    /**
     * The identificacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados de quem enviou o XML.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\IdentificacaoProtocoloType
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
     * @var \StructType\ProdutoVinculadoDispensacaoType
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
     * Constructor method for RetificarDispensacaoMedicamentoType
     * @uses RetificarDispensacaoMedicamentoType::setIdentificacao()
     * @uses RetificarDispensacaoMedicamentoType::setEstabelecimento()
     * @uses RetificarDispensacaoMedicamentoType::setProduto()
     * @uses RetificarDispensacaoMedicamentoType::setPaciente()
     * @uses RetificarDispensacaoMedicamentoType::setPrescritor()
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento
     * @param \StructType\ProdutoVinculadoDispensacaoType $produto
     * @param \StructType\PacienteType $paciente
     * @param \StructType\PrescritorType $prescritor
     */
    public function __construct(\StructType\IdentificacaoProtocoloType $identificacao = null, \StructType\EstabelecimentoCNESCNPJType $estabelecimento = null, \StructType\ProdutoVinculadoDispensacaoType $produto = null, \StructType\PacienteType $paciente = null, \StructType\PrescritorType $prescritor = null)
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
     * @return \StructType\IdentificacaoProtocoloType
     */
    public function getIdentificacao()
    {
        return $this->identificacao;
    }
    /**
     * Set identificacao value
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @return \StructType\RetificarDispensacaoMedicamentoType
     */
    public function setIdentificacao(\StructType\IdentificacaoProtocoloType $identificacao = null)
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
     * @return \StructType\RetificarDispensacaoMedicamentoType
     */
    public function setEstabelecimento(\StructType\EstabelecimentoCNESCNPJType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoVinculadoDispensacaoType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoVinculadoDispensacaoType $produto
     * @return \StructType\RetificarDispensacaoMedicamentoType
     */
    public function setProduto(\StructType\ProdutoVinculadoDispensacaoType $produto = null)
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
     * @return \StructType\RetificarDispensacaoMedicamentoType
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
     * @return \StructType\RetificarDispensacaoMedicamentoType
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
     * @return \StructType\RetificarDispensacaoMedicamentoType
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
