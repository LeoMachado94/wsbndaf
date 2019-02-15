<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Informar ServiceType
 * @subpackage Services
 */
class Informar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named informarPosicaoEstoque
     * Meta informations extracted from the WSDL
     * - documentation: Informa a posição de estoque do produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarPosicaoEstoqueType $informarPosicaoEstoque
     * @return \StructType\RespostaProdutoType|bool
     */
    public function informarPosicaoEstoque(\StructType\InformarPosicaoEstoqueType $informarPosicaoEstoque)
    {
        try {
            $this->setResult($this->getSoapClient()->informarPosicaoEstoque($informarPosicaoEstoque));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarEntradaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a entrada de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarEntradaMedicamentoType $informarEntradaMedicamento
     * @return \StructType\RespostaProdutoType|bool
     */
    public function informarEntradaMedicamento(\StructType\InformarEntradaMedicamentoType $informarEntradaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarEntradaMedicamento($informarEntradaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarSaidaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a saída de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarSaidaMedicamentoType $informarSaidaMedicamento
     * @return \StructType\RespostaProdutoType|bool
     */
    public function informarSaidaMedicamento(\StructType\InformarSaidaMedicamentoType $informarSaidaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarSaidaMedicamento($informarSaidaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarDispensacaoMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Informa a dispensação de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarDispensacaoMedicamentoType $informarDispensacaoMedicamento
     * @return \StructType\RespostaProdutoType|bool
     */
    public function informarDispensacaoMedicamento(\StructType\InformarDispensacaoMedicamentoType $informarDispensacaoMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->informarDispensacaoMedicamento($informarDispensacaoMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarAvaliacaoDeferida
     * Meta informations extracted from the WSDL
     * - documentation: Registra uma avaliação deferida de um dado estabelecimento e usuário do SUS.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarAvaliacaoType $informarAvaliacaoDeferida
     * @return \StructType\RespostaAvaliacaoType|bool
     */
    public function informarAvaliacaoDeferida(\StructType\InformarAvaliacaoType $informarAvaliacaoDeferida)
    {
        try {
            $this->setResult($this->getSoapClient()->informarAvaliacaoDeferida($informarAvaliacaoDeferida));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarPosicaoEstoqueEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa a posição de estoque de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarPosicaoEstoqueEmLoteType $informarPosicaoEstoqueEmLote
     * @return \StructType\ProtocoloType|bool
     */
    public function informarPosicaoEstoqueEmLote(\StructType\InformarPosicaoEstoqueEmLoteType $informarPosicaoEstoqueEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarPosicaoEstoqueEmLote($informarPosicaoEstoqueEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarEntradaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as entradas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarEntradaMedicamentoEmLoteType $informarEntradaMedicamentoEmLote
     * @return \StructType\ProtocoloType|bool
     */
    public function informarEntradaMedicamentoEmLote(\StructType\InformarEntradaMedicamentoEmLoteType $informarEntradaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarEntradaMedicamentoEmLote($informarEntradaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarSaidaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as saídas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarSaidaMedicamentoEmLoteType $informarSaidaMedicamentoEmLote
     * @return \StructType\ProtocoloType|bool
     */
    public function informarSaidaMedicamentoEmLote(\StructType\InformarSaidaMedicamentoEmLoteType $informarSaidaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarSaidaMedicamentoEmLote($informarSaidaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * informarDispensacaoMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Informa as dispensações de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarDispensacaoMedicamentoEmLoteType $informarDispensacaoMedicamentoEmLote
     * @return \StructType\ProtocoloType|bool
     */
    public function informarDispensacaoMedicamentoEmLote(\StructType\InformarDispensacaoMedicamentoEmLoteType $informarDispensacaoMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarDispensacaoMedicamentoEmLote($informarDispensacaoMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named informarAvaliacaoDeferidaEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Registra as avaliações deferidas em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InformarAvaliacaoEmLoteType $informarAvaliacaoDeferidaEmLote
     * @return \StructType\ProtocoloType|bool
     */
    public function informarAvaliacaoDeferidaEmLote(\StructType\InformarAvaliacaoEmLoteType $informarAvaliacaoDeferidaEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->informarAvaliacaoDeferidaEmLote($informarAvaliacaoDeferidaEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ProtocoloType|\StructType\RespostaAvaliacaoType|\StructType\RespostaProdutoType
     */
    public function getResult()
    {
        return parent::getResult();
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
