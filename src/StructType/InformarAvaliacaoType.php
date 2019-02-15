<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarAvaliacaoType StructType
 * @subpackage Structs
 */
class InformarAvaliacaoType extends AbstractStructBase
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
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos a avaliação deferida.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\AvaliacaoType
     */
    public $avaliacao;
    /**
     * Constructor method for InformarAvaliacaoType
     * @uses InformarAvaliacaoType::setIdentificacao()
     * @uses InformarAvaliacaoType::setAvaliacao()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\AvaliacaoType $avaliacao
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, \StructType\AvaliacaoType $avaliacao = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setAvaliacao($avaliacao);
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
     * @return \StructType\InformarAvaliacaoType
     */
    public function setIdentificacao(\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \StructType\AvaliacaoType
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \StructType\AvaliacaoType $avaliacao
     * @return \StructType\InformarAvaliacaoType
     */
    public function setAvaliacao(\StructType\AvaliacaoType $avaliacao = null)
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
     * @return \StructType\InformarAvaliacaoType
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
