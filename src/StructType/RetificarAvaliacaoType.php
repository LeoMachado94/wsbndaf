<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarAvaliacaoType StructType
 * @subpackage Structs
 */
class RetificarAvaliacaoType extends AbstractStructBase
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
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos a avaliação deferida.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\AvaliacaoProtocoloType
     */
    public $avaliacao;
    /**
     * Constructor method for RetificarAvaliacaoType
     * @uses RetificarAvaliacaoType::setIdentificacao()
     * @uses RetificarAvaliacaoType::setAvaliacao()
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @param \StructType\AvaliacaoProtocoloType $avaliacao
     */
    public function __construct(\StructType\IdentificacaoProtocoloType $identificacao = null, \StructType\AvaliacaoProtocoloType $avaliacao = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setAvaliacao($avaliacao);
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
     * @return \StructType\RetificarAvaliacaoType
     */
    public function setIdentificacao(\StructType\IdentificacaoProtocoloType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \StructType\AvaliacaoProtocoloType
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \StructType\AvaliacaoProtocoloType $avaliacao
     * @return \StructType\RetificarAvaliacaoType
     */
    public function setAvaliacao(\StructType\AvaliacaoProtocoloType $avaliacao = null)
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
     * @return \StructType\RetificarAvaliacaoType
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
