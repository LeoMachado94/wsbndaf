<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespostaAvaliacaoRetificadaType StructType
 * @subpackage Structs
 */
class RespostaAvaliacaoRetificadaType extends AbstractStructBase
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
     * @var \StructType\ProtocoloRetificadoType
     */
    public $protocolo;
    /**
     * Constructor method for RespostaAvaliacaoRetificadaType
     * @uses RespostaAvaliacaoRetificadaType::setAvaliacao()
     * @uses RespostaAvaliacaoRetificadaType::setProtocolo()
     * @param \StructType\AvaliacaoVinculadaSimplesType $avaliacao
     * @param \StructType\ProtocoloRetificadoType $protocolo
     */
    public function __construct(\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null, \StructType\ProtocoloRetificadoType $protocolo = null)
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
     * @return \StructType\RespostaAvaliacaoRetificadaType
     */
    public function setAvaliacao(\StructType\AvaliacaoVinculadaSimplesType $avaliacao = null)
    {
        $this->avaliacao = $avaliacao;
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
     * @return \StructType\RespostaAvaliacaoRetificadaType
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
     * @return \StructType\RespostaAvaliacaoRetificadaType
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
