<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Retificar ServiceType
 * @subpackage Services
 */
class Retificar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named retificarPosicaoEstoque
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a posição de estoque do produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarPosicaoEstoqueType $retificarPosicaoEstoque
     * @return \StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarPosicaoEstoque(\StructType\RetificarPosicaoEstoqueType $retificarPosicaoEstoque)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarPosicaoEstoque($retificarPosicaoEstoque));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarEntradaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica entrada de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarEntradaMedicamentoType $retificarEntradaMedicamento
     * @return \StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarEntradaMedicamento(\StructType\RetificarEntradaMedicamentoType $retificarEntradaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarEntradaMedicamento($retificarEntradaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarSaidaMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a saída de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarSaidaMedicamentoType $retificarSaidaMedicamento
     * @return \StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarSaidaMedicamento(\StructType\RetificarSaidaMedicamentoType $retificarSaidaMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarSaidaMedicamento($retificarSaidaMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarDispensacaoMedicamento
     * Meta informations extracted from the WSDL
     * - documentation: Retifica a dispensação de um produto de um dado estabelecimento.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarDispensacaoMedicamentoType $retificarDispensacaoMedicamento
     * @return \StructType\RespostaProdutoRetificadoType|bool
     */
    public function retificarDispensacaoMedicamento(\StructType\RetificarDispensacaoMedicamentoType $retificarDispensacaoMedicamento)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarDispensacaoMedicamento($retificarDispensacaoMedicamento));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarAvaliacaoDeferida
     * Meta informations extracted from the WSDL
     * - documentation: Retifica uma avaliação deferida de um dado estabelecimento e usuário do SUS.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarAvaliacaoType $retificarAvaliacaoDeferida
     * @return \StructType\RespostaAvaliacaoRetificadaType|bool
     */
    public function retificarAvaliacaoDeferida(\StructType\RetificarAvaliacaoType $retificarAvaliacaoDeferida)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarAvaliacaoDeferida($retificarAvaliacaoDeferida));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarPosicaoEstoqueEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as informações de posição de estoque em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarPosicaoEstoqueEmLoteType $retificarPosicaoEstoqueEmLote
     * @return \StructType\ProtocoloRetificadoType|bool
     */
    public function retificarPosicaoEstoqueEmLote(\StructType\RetificarPosicaoEstoqueEmLoteType $retificarPosicaoEstoqueEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarPosicaoEstoqueEmLote($retificarPosicaoEstoqueEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarEntradaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as entradas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarEntradaMedicamentoEmLoteType $retificarEntradaMedicamentoEmLote
     * @return \StructType\ProtocoloRetificadoType|bool
     */
    public function retificarEntradaMedicamentoEmLote(\StructType\RetificarEntradaMedicamentoEmLoteType $retificarEntradaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarEntradaMedicamentoEmLote($retificarEntradaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarSaidaMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as saídas de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarSaidaMedicamentoEmLoteType $retificarSaidaMedicamentoEmLote
     * @return \StructType\ProtocoloRetificadoType|bool
     */
    public function retificarSaidaMedicamentoEmLote(\StructType\RetificarSaidaMedicamentoEmLoteType $retificarSaidaMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarSaidaMedicamentoEmLote($retificarSaidaMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * retificarDispensacaoMedicamentoEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as dispensações de produtos em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarDispensacaoMedicamentoEmLoteType $retificarDispensacaoMedicamentoEmLote
     * @return \StructType\ProtocoloRetificadoType|bool
     */
    public function retificarDispensacaoMedicamentoEmLote(\StructType\RetificarDispensacaoMedicamentoEmLoteType $retificarDispensacaoMedicamentoEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarDispensacaoMedicamentoEmLote($retificarDispensacaoMedicamentoEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named retificarAvaliacaoDeferidaEmLote
     * Meta informations extracted from the WSDL
     * - documentation: Retifica as avaliações deferidas em lote. Só é permitido o registro de informações de um determinado município ou estado por lote.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RetificarAvaliacaoEmLoteType $retificarAvaliacaoDeferidaEmLote
     * @return \StructType\ProtocoloRetificadoType|bool
     */
    public function retificarAvaliacaoDeferidaEmLote(\StructType\RetificarAvaliacaoEmLoteType $retificarAvaliacaoDeferidaEmLote)
    {
        try {
            $this->setResult($this->getSoapClient()->retificarAvaliacaoDeferidaEmLote($retificarAvaliacaoDeferidaEmLote));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ProtocoloRetificadoType|\StructType\RespostaAvaliacaoRetificadaType|\StructType\RespostaProdutoRetificadoType
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
