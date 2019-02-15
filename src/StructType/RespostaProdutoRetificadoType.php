<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaProdutoRetificadoType StructType
 * @subpackage Structs
 */
class RespostaProdutoRetificadoType extends AbstractStructBase
{
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\ProdutoVinculadoSimplesType
     */
    public $produto;
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ProtocoloRetificadoType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaProdutoRetificadoType
     * @uses RespostaProdutoRetificadoType::setProduto()
     * @uses RespostaProdutoRetificadoType::setProtocolo()
     * @param \StructType\ProdutoVinculadoSimplesType $produto
     * @param \StructType\ProtocoloRetificadoType $protocolo
     */
    public function __construct(\StructType\ProdutoVinculadoSimplesType $produto = null, \StructType\ProtocoloRetificadoType $protocolo = null)
    {
        $this
            ->setProduto($produto)
            ->setProtocolo($protocolo);
    }
    /**
     * Get produto value
     * @return \StructType\ProdutoVinculadoSimplesType
     */
    public function getProduto()
    {
        return $this->produto;
    }
    /**
     * Set produto value
     * @param \StructType\ProdutoVinculadoSimplesType $produto
     * @return \StructType\RespostaProdutoRetificadoType
     */
    public function setProduto(\StructType\ProdutoVinculadoSimplesType $produto = null)
    {
        $this->produto = $produto;
        return $this;
    }
    /**
     * Get protocolo value
     * @return \StructType\ProtocoloRetificadoType|null
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \StructType\ProtocoloRetificadoType $protocolo
     * @return \StructType\RespostaProdutoRetificadoType
     */
    public function setProtocolo(\StructType\ProtocoloRetificadoType $protocolo = null)
    {
        $this->protocolo = $protocolo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RespostaProdutoRetificadoType
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
