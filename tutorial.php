<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://horusws.saude.gov.br/horus-ws-service/HorusWSService/HorusWS?wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://horusws.saude.gov.br/horus-ws-service/HorusWSService/HorusWS?wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Informar ServiceType
 */
$informar = new \ServiceType\Informar($options);
/**
 * Sample call for informarPosicaoEstoque operation/method
 */
if ($informar->informarPosicaoEstoque(new \StructType\InformarPosicaoEstoqueType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarEntradaMedicamento operation/method
 */
if ($informar->informarEntradaMedicamento(new \StructType\InformarEntradaMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarSaidaMedicamento operation/method
 */
if ($informar->informarSaidaMedicamento(new \StructType\InformarSaidaMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarDispensacaoMedicamento operation/method
 */
if ($informar->informarDispensacaoMedicamento(new \StructType\InformarDispensacaoMedicamentoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarAvaliacaoDeferida operation/method
 */
if ($informar->informarAvaliacaoDeferida(new \StructType\InformarAvaliacaoType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarPosicaoEstoqueEmLote operation/method
 */
if ($informar->informarPosicaoEstoqueEmLote(new \StructType\InformarPosicaoEstoqueEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarEntradaMedicamentoEmLote operation/method
 */
if ($informar->informarEntradaMedicamentoEmLote(new \StructType\InformarEntradaMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarSaidaMedicamentoEmLote operation/method
 */
if ($informar->informarSaidaMedicamentoEmLote(new \StructType\InformarSaidaMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarDispensacaoMedicamentoEmLote operation/method
 */
if ($informar->informarDispensacaoMedicamentoEmLote(new \StructType\InformarDispensacaoMedicamentoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Sample call for informarAvaliacaoDeferidaEmLote operation/method
 */
if ($informar->informarAvaliacaoDeferidaEmLote(new \StructType\InformarAvaliacaoEmLoteType()) !== false) {
    print_r($informar->getResult());
} else {
    print_r($informar->getLastError());
}
/**
 * Samples for Retificar ServiceType
 */
$retificar = new \ServiceType\Retificar($options);
/**
 * Sample call for retificarPosicaoEstoque operation/method
 */
if ($retificar->retificarPosicaoEstoque(new \StructType\RetificarPosicaoEstoqueType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarEntradaMedicamento operation/method
 */
if ($retificar->retificarEntradaMedicamento(new \StructType\RetificarEntradaMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarSaidaMedicamento operation/method
 */
if ($retificar->retificarSaidaMedicamento(new \StructType\RetificarSaidaMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarDispensacaoMedicamento operation/method
 */
if ($retificar->retificarDispensacaoMedicamento(new \StructType\RetificarDispensacaoMedicamentoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarAvaliacaoDeferida operation/method
 */
if ($retificar->retificarAvaliacaoDeferida(new \StructType\RetificarAvaliacaoType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarPosicaoEstoqueEmLote operation/method
 */
if ($retificar->retificarPosicaoEstoqueEmLote(new \StructType\RetificarPosicaoEstoqueEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarEntradaMedicamentoEmLote operation/method
 */
if ($retificar->retificarEntradaMedicamentoEmLote(new \StructType\RetificarEntradaMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarSaidaMedicamentoEmLote operation/method
 */
if ($retificar->retificarSaidaMedicamentoEmLote(new \StructType\RetificarSaidaMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarDispensacaoMedicamentoEmLote operation/method
 */
if ($retificar->retificarDispensacaoMedicamentoEmLote(new \StructType\RetificarDispensacaoMedicamentoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Sample call for retificarAvaliacaoDeferidaEmLote operation/method
 */
if ($retificar->retificarAvaliacaoDeferidaEmLote(new \StructType\RetificarAvaliacaoEmLoteType()) !== false) {
    print_r($retificar->getResult());
} else {
    print_r($retificar->getLastError());
}
/**
 * Samples for Excluir ServiceType
 */
$excluir = new \ServiceType\Excluir($options);
/**
 * Sample call for excluirRegistros operation/method
 */
if ($excluir->excluirRegistros(new \StructType\ExclusaoRegistroType()) !== false) {
    print_r($excluir->getResult());
} else {
    print_r($excluir->getLastError());
}
/**
 * Samples for Consultar ServiceType
 */
$consultar = new \ServiceType\Consultar($options);
/**
 * Sample call for consultarResultadoProcessamento operation/method
 */
if ($consultar->consultarResultadoProcessamento(new \StructType\ProtocoloType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarInconsistencias operation/method
 */
if ($consultar->consultarInconsistencias(new \StructType\ProtocoloType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for consultarReprocessamento operation/method
 */
if ($consultar->consultarReprocessamento(new \StructType\IdentificacaoType()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
