<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InconsistenciaProcessamentoLoteType StructType
 * @subpackage Structs
 */
class InconsistenciaProcessamentoLoteType extends AbstractStructBase
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
     * The inconsistencias
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\Inconsistencias[]
     */
    public $inconsistencias;
    /**
     * Constructor method for InconsistenciaProcessamentoLoteType
     * @uses InconsistenciaProcessamentoLoteType::setIdentificacao()
     * @uses InconsistenciaProcessamentoLoteType::setInconsistencias()
     * @param \StructType\IdentificacaoType $identificacao
     * @param \StructType\Inconsistencias[] $inconsistencias
     */
    public function __construct(\StructType\IdentificacaoType $identificacao = null, array $inconsistencias = array())
    {
        $this
            ->setIdentificacao($identificacao)
            ->setInconsistencias($inconsistencias);
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
     * @return \StructType\InconsistenciaProcessamentoLoteType
     */
    public function setIdentificacao(\StructType\IdentificacaoType $identificacao = null)
    {
        $this->identificacao = $identificacao;
        return $this;
    }
    /**
     * Get inconsistencias value
     * @return \StructType\Inconsistencias[]|null
     */
    public function getInconsistencias()
    {
        return $this->inconsistencias;
    }
    /**
     * This method is responsible for validating the values passed to the setInconsistencias method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInconsistencias method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInconsistenciasForArrayContraintsFromSetInconsistencias(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $inconsistenciaProcessamentoLoteTypeInconsistenciasItem) {
            // validation for constraint: itemType
            if (!$inconsistenciaProcessamentoLoteTypeInconsistenciasItem instanceof \StructType\Inconsistencias) {
                $invalidValues[] = is_object($inconsistenciaProcessamentoLoteTypeInconsistenciasItem) ? get_class($inconsistenciaProcessamentoLoteTypeInconsistenciasItem) : var_export($inconsistenciaProcessamentoLoteTypeInconsistenciasItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The inconsistencias property can only contain items of \StructType\Inconsistencias, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set inconsistencias value
     * @throws \InvalidArgumentException
     * @param \StructType\Inconsistencias[] $inconsistencias
     * @return \StructType\InconsistenciaProcessamentoLoteType
     */
    public function setInconsistencias(array $inconsistencias = array())
    {
        // validation for constraint: array
        if ('' !== ($inconsistenciasArrayErrorMessage = self::validateInconsistenciasForArrayContraintsFromSetInconsistencias($inconsistencias))) {
            throw new \InvalidArgumentException($inconsistenciasArrayErrorMessage, __LINE__);
        }
        $this->inconsistencias = $inconsistencias;
        return $this;
    }
    /**
     * Add item to inconsistencias value
     * @throws \InvalidArgumentException
     * @param \StructType\Inconsistencias $item
     * @return \StructType\InconsistenciaProcessamentoLoteType
     */
    public function addToInconsistencias(\StructType\Inconsistencias $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Inconsistencias) {
            throw new \InvalidArgumentException(sprintf('The inconsistencias property can only contain items of \StructType\Inconsistencias, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->inconsistencias[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\InconsistenciaProcessamentoLoteType
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
