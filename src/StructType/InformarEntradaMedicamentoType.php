<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarEntradaMedicamentoType StructType
 * @subpackage Structs
 */
class InformarEntradaMedicamentoType extends AbstractStructBase
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
     * - documentation: Informa os dados do estabelecimento que registrou a saída.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EstabelecimentoType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao medicamento de entrada.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ProdutoEntradaType
     */
    public $produto;
    /**
     * Constructor method for InformarEntradaMedicamentoType
     * @uses InformarEntradaMedicamentoType::setIdentificacao()
     * @uses InformarEntradaMedicamentoType::setEstabelecimento()
     * @uses InformarEntradaMedicamentoType::setProduto()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @param \StructType\ProdutoEntradaType $produto
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, \StructType\EstabelecimentoType $estabelecimento = null, \StructType\ProdutoEntradaType $produto = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto);
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
     * @return \StructType\InformarEntradaMedicamentoType
     */
    public function setIdentificacao(\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get estabelecimento value
     * @return \StructType\EstabelecimentoType
     */
    public function getEstabelecimento()
    {
        return $this->estabelecimento;
    }
    /**
     * Set estabelecimento value
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @return \StructType\InformarEntradaMedicamentoType
     */
    public function setEstabelecimento(\StructType\EstabelecimentoType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoEntradaType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoEntradaType $produto
     * @return \StructType\InformarEntradaMedicamentoType
     */
    public function setProduto(\StructType\ProdutoEntradaType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InformarEntradaMedicamentoType
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
