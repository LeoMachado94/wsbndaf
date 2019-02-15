<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InformarAvaliacaoEmLoteType StructType
 * @subpackage Structs
 */
class InformarAvaliacaoEmLoteType extends AbstractStructBase
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
     * The avaliacoes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\Avaliacoes
     */
    public $avaliacoes;
    /**
     * Constructor method for InformarAvaliacaoEmLoteType
     * @uses InformarAvaliacaoEmLoteType::setIdentificacao()
     * @uses InformarAvaliacaoEmLoteType::setAvaliacoes()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\Avaliacoes $avaliacoes
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, \StructType\Avaliacoes $avaliacoes = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setAvaliacoes($avaliacoes);
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
     * @return \StructType\InformarAvaliacaoEmLoteType
     */
    public function setIdentificacao(\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get avaliacoes value
     * @return \StructType\Avaliacoes
     */
    public function getAvaliacoes()
    {
        return $this->avaliacoes;
    }
    /**
     * Set avaliacoes value
     * @param \StructType\Avaliacoes $avaliacoes
     * @return \StructType\InformarAvaliacaoEmLoteType
     */
    public function setAvaliacoes(\StructType\Avaliacoes $avaliacoes = null)
    {
        $this->avaliacoes = $avaliacoes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InformarAvaliacaoEmLoteType
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
