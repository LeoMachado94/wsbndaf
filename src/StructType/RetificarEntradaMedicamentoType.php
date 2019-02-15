<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarEntradaMedicamentoType StructType
 * @subpackage Structs
 */
class RetificarEntradaMedicamentoType extends AbstractStructBase
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
     * - documentation: Informa os dados do estabelecimento que registrou a saída.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EstabelecimentoType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao registro de entrada de medicamento a ser retificado.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ProdutoVinculadoEntradaType
     */
    public $produto;
    /**
     * Constructor method for RetificarEntradaMedicamentoType
     * @uses RetificarEntradaMedicamentoType::setIdentificacao()
     * @uses RetificarEntradaMedicamentoType::setEstabelecimento()
     * @uses RetificarEntradaMedicamentoType::setProduto()
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @param \StructType\ProdutoVinculadoEntradaType $produto
     */
    public function __construct(\StructType\IdentificacaoProtocoloType $identificacao = null, \StructType\EstabelecimentoType $estabelecimento = null, \StructType\ProdutoVinculadoEntradaType $produto = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto);
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
     * @return \StructType\RetificarEntradaMedicamentoType
     */
    public function setIdentificacao(\StructType\IdentificacaoProtocoloType $identificacao = null)
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
     * @return \StructType\RetificarEntradaMedicamentoType
     */
    public function setEstabelecimento(\StructType\EstabelecimentoType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoVinculadoEntradaType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoVinculadoEntradaType $produto
     * @return \StructType\RetificarEntradaMedicamentoType
     */
    public function setProduto(\StructType\ProdutoVinculadoEntradaType $produto = null)
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
     * @return \StructType\RetificarEntradaMedicamentoType
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
