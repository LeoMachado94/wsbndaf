<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarSaidaMedicamentoType StructType
 * @subpackage Structs
 */
class InformarSaidaMedicamentoType extends AbstractStructBase
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
     * - documentation: Informa os dados relativos ao medicamento de saída.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ProdutoSaidaType
     */
    public $produto;
    /**
     * The estabelecimento_destino
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento de destino.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EstabelecimentoCNESCNPJType
     */
    public $estabelecimento_destino;
    /**
     * Constructor method for InformarSaidaMedicamentoType
     * @uses InformarSaidaMedicamentoType::setIdentificacao()
     * @uses InformarSaidaMedicamentoType::setEstabelecimento()
     * @uses InformarSaidaMedicamentoType::setProduto()
     * @uses InformarSaidaMedicamentoType::setEstabelecimento_destino()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @param \StructType\ProdutoSaidaType $produto
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, \StructType\EstabelecimentoType $estabelecimento = null, \StructType\ProdutoSaidaType $produto = null, \StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto)
            ->setEstabelecimento_destino($estabelecimento_destino);
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
     * @return \StructType\InformarSaidaMedicamentoType
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
     * @return \StructType\InformarSaidaMedicamentoType
     */
    public function setEstabelecimento(\StructType\EstabelecimentoType $estabelecimento = null)
    {
        $this->estabelecimento = $estabelecimento;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoSaidaType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoSaidaType $produto
     * @return \StructType\InformarSaidaMedicamentoType
     */
    public function setProduto(\StructType\ProdutoSaidaType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get estabelecimento_destino value
     * @return \StructType\EstabelecimentoCNESCNPJType
     */
    public function getEstabelecimento_destino()
    {
        return $this->{'estabelecimento-destino'};
    }
    /**
     * Set estabelecimento_destino value
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     * @return \StructType\InformarSaidaMedicamentoType
     */
    public function setEstabelecimento_destino(\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null)
    {
        $this->estabelecimento_destino = $this->{'estabelecimento-destino'} = $estabelecimento_destino;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InformarSaidaMedicamentoType
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
