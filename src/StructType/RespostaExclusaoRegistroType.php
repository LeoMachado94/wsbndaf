<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaExclusaoRegistroType StructType
 * @subpackage Structs
 */
class RespostaExclusaoRegistroType extends AbstractStructBase
{
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\ProtocoloExclusaoType
     */
    public $protocolo;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ProdutoVinculadoSimplesType
     */
    public $produto;
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\ProdutoVinculadoSimplesType
     */
    public $avaliacao;
    /**
     * Constructor method for RespostaExclusaoRegistroType
     * @uses RespostaExclusaoRegistroType::setProtocolo()
     * @uses RespostaExclusaoRegistroType::setProduto()
     * @uses RespostaExclusaoRegistroType::setAvaliacao()
     * @param \StructType\ProtocoloExclusaoType $protocolo
     * @param \StructType\ProdutoVinculadoSimplesType $produto
     * @param \StructType\ProdutoVinculadoSimplesType $avaliacao
     */
    public function __construct(\StructType\ProtocoloExclusaoType $protocolo = null, \StructType\ProdutoVinculadoSimplesType $produto = null, \StructType\ProdutoVinculadoSimplesType $avaliacao = null)
    {
        $this
            ->setProtocolo($protocolo)
            ->setProduto($produto)
            ->setAvaliacao($avaliacao);
    }
    /**
     * Get protocolo value
     * @return \StructType\ProtocoloExclusaoType
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \StructType\ProtocoloExclusaoType $protocolo
     * @return \StructType\RespostaExclusaoRegistroType
     */
    public function setProtocolo(\StructType\ProtocoloExclusaoType $protocolo = null)
    {
        $this->protocolo = $protocolo;
        return $this;
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoVinculadoSimplesType|null
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoVinculadoSimplesType $produto
     * @return \StructType\RespostaExclusaoRegistroType
     */
    public function setProduto(\StructType\ProdutoVinculadoSimplesType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \StructType\ProdutoVinculadoSimplesType|null
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \StructType\ProdutoVinculadoSimplesType $avaliacao
     * @return \StructType\RespostaExclusaoRegistroType
     */
    public function setAvaliacao(\StructType\ProdutoVinculadoSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RespostaExclusaoRegistroType
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
