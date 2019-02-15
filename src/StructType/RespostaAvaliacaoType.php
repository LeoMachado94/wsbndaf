<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaAvaliacaoType StructType
 * @subpackage Structs
 */
class RespostaAvaliacaoType extends AbstractStructBase
{
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Dados da avaliacao.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\AvaliacaoVinculadaSimplesType
     */
    public $avaliacao;
    /**
     * The protocolo
     * Meta informations extracted from the WSDL
     * - documentation: Dados do protocolo de registro.
     * - minOccurs: 0
     * @var \StructType\ProtocoloType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaAvaliacaoType
     * @uses RespostaAvaliacaoType::setAvaliacao()
     * @uses RespostaAvaliacaoType::setProtocolo()
     * @param \StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @param \StructType\ProtocoloType $protocolo
     */
    public function __construct(\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null, \StructType\ProtocoloType $protocolo = null)
    {
        $this
            ->setAvaliacao($avaliacao)
            ->setProtocolo($protocolo);
    }
    /**
     * Get avaliacao value
     * @return \StructType\AvaliacaoVinculadaSimplesType
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * Set avaliacao value
     * @param \StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @return \StructType\RespostaAvaliacaoType
     */
    public function setAvaliacao(\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Get protocolo value
     * @return \StructType\ProtocoloType|null
     */
    public function getProtocolo()
    {
        return $this->protocolo;
    }
    /**
     * Set protocolo value
     * @param \StructType\ProtocoloType $protocolo
     * @return \StructType\RespostaAvaliacaoType
     */
    public function setProtocolo(\StructType\ProtocoloType $protocolo = null)
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
     * @return \StructType\RespostaAvaliacaoType
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
