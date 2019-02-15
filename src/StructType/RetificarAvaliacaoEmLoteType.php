<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarAvaliacaoEmLoteType StructType
 * @subpackage Structs
 */
class RetificarAvaliacaoEmLoteType extends AbstractStructBase
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
     * The avaliacoes
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\Avaliacoes
     */
    public $avaliacoes;
    /**
     * Constructor method for RetificarAvaliacaoEmLoteType
     * @uses RetificarAvaliacaoEmLoteType::setIdentificacao()
     * @uses RetificarAvaliacaoEmLoteType::setAvaliacoes()
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @param \StructType\Avaliacoes $avaliacoes
     */
    public function __construct(\StructType\IdentificacaoProtocoloType $identificacao = null, \StructType\Avaliacoes $avaliacoes = null)
    {
        $this
            ->setIdentificacao($identificacao)
            ->setAvaliacoes($avaliacoes);
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
     * @return \StructType\RetificarAvaliacaoEmLoteType
     */
    public function setIdentificacao(\StructType\IdentificacaoProtocoloType $identificacao = null)
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
     * @return \StructType\RetificarAvaliacaoEmLoteType
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
     * @return \StructType\RetificarAvaliacaoEmLoteType
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
