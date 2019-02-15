<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registro StructType
 * Meta informations extracted from the WSDL
 * - documentation: Informa os registros de entrada no estoque. | Informa os registros de entrada no estoque a serem retificados. | Informa os registros de entrada de medicamento. | Informa as entradas de medicamentos que devem ser retificadas. |
 * Informa os registros de saída de medicamento. | Informa as saídas de medicamentos que devem ser retificadas. | Informa os registros de dispensação. | Informa as dispensações de medicamentos que devem ser retificadas. | Identifica os registros
 * que foram processados.
 * @subpackage Structs
 */
class Registro extends AbstractStructBase
{
    /**
     * The estabelecimento_destino
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento de destino. | Informa os dados do estabelecimento de destino.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EstabelecimentoCNESCNPJType
     */
    public $estabelecimento_destino;
    /**
     * The paciente
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao paciente. | Informa os dados relativos ao paciente.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\PacienteType
     */
    public $paciente;
    /**
     * The estabelecimento
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados do estabelecimento que registrou a saída. | Informa os dados do estabelecimento que registrou a saída. | Informa os dados do estabelecimento que registrou a saída. | Informa os dados do estabelecimento que
     * registrou a saída. | Informa os dados do estabelecimento que registrou a saída. | Informa os dados do estabelecimento que registrou a saída. | Informa os dados do estabelecimento que registra a dispensação. | Informa os dados do estabelecimento
     * que registra a dispensação. | Os dados do estabelecimento processado.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EstabelecimentoType
     */
    public $estabelecimento;
    /**
     * The produto
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao produto de entrada no estoque. | Informa os dados relativos ao registro de entrada no estoque a ser retificado. | Informa os dados relativos ao medicamento de entrada. | Informa os dados relativos ao
     * registro de entrada de medicamento a ser retificado. | Informa os dados relativos ao medicamento de saída. | Informa os dados relativos ao medicamento de saída. | Informa os dados relativos ao medicamento. | Informa os dados relativos ao
     * medicamento. | Os dados relativos ao produto processado.
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ProdutoType
     */
    public $produto;
    /**
     * The prescritor
     * Meta informations extracted from the WSDL
     * - documentation: Informa os dados relativos ao prescritor. | Informa os dados relativos ao prescritor.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PrescritorType
     */
    public $prescritor;
    /**
     * The avaliacao
     * Meta informations extracted from the WSDL
     * - documentation: Os dados relativos a avaliacao processada.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\AvaliacaoProtocoloType[]
     */
    public $avaliacao;
    /**
     * The situacao
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $situacao;
    /**
     * Constructor method for registro
     * @uses Registro::setEstabelecimento_destino()
     * @uses Registro::setPaciente()
     * @uses Registro::setEstabelecimento()
     * @uses Registro::setProduto()
     * @uses Registro::setPrescritor()
     * @uses Registro::setAvaliacao()
     * @uses Registro::setSituacao()
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     * @param \StructType\PacienteType $paciente
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @param \StructType\ProdutoType $produto
     * @param \StructType\PrescritorType $prescritor
     * @param \StructType\AvaliacaoProtocoloType[] $avaliacao
     * @param string $situacao
     */
    public function __construct(\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null, \StructType\PacienteType $paciente = null, \StructType\EstabelecimentoType $estabelecimento = null, \StructType\ProdutoType $produto = null, \StructType\PrescritorType $prescritor = null, array $avaliacao = array(), $situacao = null)
    {
        $this
            ->setEstabelecimento_destino($estabelecimento_destino)
            ->setPaciente($paciente)
            ->setEstabelecimento($estabelecimento)
            ->setProduto($produto)
            ->setPrescritor($prescritor)
            ->setAvaliacao($avaliacao)
            ->setSituacao($situacao);
    }
    /**
     * Get estabelecimento_destino value
     * @return \StructType\EstabelecimentoCNESCNPJType
     */
    public function getEstabelecimento_destino()
    {
        return $this->{'estabelecimento-destino'};
    }
    /**
     * Set estabelecimento_destino value
     * @param \StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino
     * @return \StructType\Registro
     */
    public function setEstabelecimento_destino(\StructType\EstabelecimentoCNESCNPJType $estabelecimento_destino = null)
    {
        $this->estabelecimento_destino = $this->{'estabelecimento-destino'} = $estabelecimento_destino;
        return $this;
    }
    /**
     * Get paciente value
     * @return \StructType\PacienteType
     */
    public function getPaciente()
    {
        return $this->paciente;
    }
    /**
     * Set paciente value
     * @param \StructType\PacienteType $paciente
     * @return \StructType\Registro
     */
    public function setPaciente(\StructType\PacienteType $paciente = null)
    {
        $this->paciente = $paciente;
        return $this;
    }
    /**
     * Get estabelecimento value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EstabelecimentoType|null
     */
    public function getEstabelecimento()
    {
        return isset($this->estabelecimento) ? $this->estabelecimento : null;
    }
    /**
     * Set estabelecimento value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EstabelecimentoType $estabelecimento
     * @return \StructType\Registro
     */
    public function setEstabelecimento(\StructType\EstabelecimentoType $estabelecimento = null)
    {
        if (is_null($estabelecimento) || (is_array($estabelecimento) && empty($estabelecimento))) {
            unset($this->estabelecimento);
        } else {
            $this->estabelecimento = $estabelecimento;
        }
        return $this;
    }
    /**
     * Get produto value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ProdutoType|null
     */
    public function getProduto()
    {
        return isset($this->produto) ? $this->produto : null;
    }
    /**
     * Set produto value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ProdutoType $produto
     * @return \StructType\Registro
     */
    public function setProduto(\StructType\ProdutoType $produto = null)
    {
        if (is_null($produto) || (is_array($produto) && empty($produto))) {
            unset($this->produto);
        } else {
            $this->produto = $produto;
        }
        return $this;
    }
    /**
     * Get prescritor value
     * @return \StructType\PrescritorType|null
     */
    public function getPrescritor()
    {
        return $this->prescritor;
    }
    /**
     * Set prescritor value
     * @param \StructType\PrescritorType $prescritor
     * @return \StructType\Registro
     */
    public function setPrescritor(\StructType\PrescritorType $prescritor = null)
    {
        $this->prescritor = $prescritor;
        return $this;
    }
    /**
     * Get avaliacao value
     * @return \StructType\AvaliacaoProtocoloType[]|null
     */
    public function getAvaliacao()
    {
        return $this->avaliacao;
    }
    /**
     * This method is responsible for validating the values passed to the setAvaliacao method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAvaliacao method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAvaliacaoForArrayContraintsFromSetAvaliacao(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $registroAvaliacaoItem) {
            // validation for constraint: itemType
            if (!$registroAvaliacaoItem instanceof \StructType\AvaliacaoProtocoloType) {
                $invalidValues[] = is_object($registroAvaliacaoItem) ? get_class($registroAvaliacaoItem) : var_export($registroAvaliacaoItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The avaliacao property can only contain items of \StructType\AvaliacaoProtocoloType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set avaliacao value
     * @throws \InvalidArgumentException
     * @param \StructType\AvaliacaoProtocoloType[] $avaliacao
     * @return \StructType\Registro
     */
    public function setAvaliacao(array $avaliacao = array())
    {
        // validation for constraint: array
        if ('' !== ($avaliacaoArrayErrorMessage = self::validateAvaliacaoForArrayContraintsFromSetAvaliacao($avaliacao))) {
            throw new \InvalidArgumentException($avaliacaoArrayErrorMessage, __LINE__);
        }
        $this->avaliacao = $avaliacao;
        return $this;
    }
    /**
     * Add item to avaliacao value
     * @throws \InvalidArgumentException
     * @param \StructType\AvaliacaoProtocoloType $item
     * @return \StructType\Registro
     */
    public function addToAvaliacao(\StructType\AvaliacaoProtocoloType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AvaliacaoProtocoloType) {
            throw new \InvalidArgumentException(sprintf('The avaliacao property can only contain items of \StructType\AvaliacaoProtocoloType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->avaliacao[] = $item;
        return $this;
    }
    /**
     * Get situacao value
     * @return string|null
     */
    public function getSituacao()
    {
        return $this->situacao;
    }
    /**
     * Set situacao value
     * @uses \EnumType\Situacao::valueIsValid()
     * @uses \EnumType\Situacao::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $situacao
     * @return \StructType\Registro
     */
    public function setSituacao($situacao = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Situacao::valueIsValid($situacao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Situacao', is_array($situacao) ? implode(', ', $situacao) : var_export($situacao, true), implode(', ', \EnumType\Situacao::getValidValues())), __LINE__);
        }
        $this->situacao = $situacao;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Registro
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
