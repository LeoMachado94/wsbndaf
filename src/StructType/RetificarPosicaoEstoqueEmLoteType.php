<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RetificarPosicaoEstoqueEmLoteType StructType
 * @subpackage Structs
 */
class RetificarPosicaoEstoqueEmLoteType extends AbstractStructBase
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
     * The registro
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Registro[]
     */
    public $registro;
    /**
     * Constructor method for RetificarPosicaoEstoqueEmLoteType
     * @uses RetificarPosicaoEstoqueEmLoteType::setIdentificacao()
     * @uses RetificarPosicaoEstoqueEmLoteType::setRegistro()
     * @param \StructType\IdentificacaoProtocoloType $identificacao
     * @param \StructType\Registro[] $registro
     */
    public function __construct(\StructType\IdentificacaoProtocoloType $identificacao = null, array $registro = array())
    {
        $this
            ->setIdentificacao($identificacao)
            ->setRegistro($registro);
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
     * @return \StructType\RetificarPosicaoEstoqueEmLoteType
     */
    public function setIdentificacao(\StructType\IdentificacaoProtocoloType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get registro value
     * @return \StructType\Registro[]
     */
    public function getRegistro()
    {
        return $this->registro;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroForArrayContraintsFromSetRegistro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $retificarPosicaoEstoqueEmLoteTypeRegistroItem) {
            // validation for constraint: itemType
            if (!$retificarPosicaoEstoqueEmLoteTypeRegistroItem instanceof \StructType\Registro) {
                $invalidValues[] = is_object($retificarPosicaoEstoqueEmLoteTypeRegistroItem) ? get_class($retificarPosicaoEstoqueEmLoteTypeRegistroItem) : var_export($retificarPosicaoEstoqueEmLoteTypeRegistroItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The registro property can only contain items of \StructType\Registro, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set registro value
     * @throws \InvalidArgumentException
     * @param \StructType\Registro[] $registro
     * @return \StructType\RetificarPosicaoEstoqueEmLoteType
     */
    public function setRegistro(array $registro = array())
    {
        // validation for constraint: array
        if ('' !== ($registroArrayErrorMessage = self::validateRegistroForArrayContraintsFromSetRegistro($registro))) {
            throw new \InvalidArgumentException($registroArrayErrorMessage, __LINE__);
        }
        $this->registro = $registro;
        return $this;
    }
    /**
     * Add item to registro value
     * @throws \InvalidArgumentException
     * @param \StructType\Registro $item
     * @return \StructType\RetificarPosicaoEstoqueEmLoteType
     */
    public function addToRegistro(\StructType\Registro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Registro) {
            throw new \InvalidArgumentException(sprintf('The registro property can only contain items of \StructType\Registro, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->registro[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RetificarPosicaoEstoqueEmLoteType
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
