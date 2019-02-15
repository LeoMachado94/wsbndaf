<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'InconsistenciaType' => '\\StructType\\InconsistenciaType',
            'SistemaExceptionType' => '\\StructType\\SistemaExceptionType',
            'ProdutoVinculadoSimplesType' => '\\StructType\\ProdutoVinculadoSimplesType',
            'ProdutoVinculadoType' => '\\StructType\\ProdutoVinculadoType',
            'ProdutoVinculadoSaidaType' => '\\StructType\\ProdutoVinculadoSaidaType',
            'ProdutoVinculadoEntradaType' => '\\StructType\\ProdutoVinculadoEntradaType',
            'ProdutoVinculadoDispensacaoType' => '\\StructType\\ProdutoVinculadoDispensacaoType',
            'ProdutoDispensacaoType' => '\\StructType\\ProdutoDispensacaoType',
            'ProdutoSaidaType' => '\\StructType\\ProdutoSaidaType',
            'ProdutoEntradaType' => '\\StructType\\ProdutoEntradaType',
            'ProdutoType' => '\\StructType\\ProdutoType',
            'ProdutoNovoType' => '\\StructType\\ProdutoNovoType',
            'PacienteType' => '\\StructType\\PacienteType',
            'PrescritorType' => '\\StructType\\PrescritorType',
            'ProtocoloExclusaoType' => '\\StructType\\ProtocoloExclusaoType',
            'ProtocoloRetificadoType' => '\\StructType\\ProtocoloRetificadoType',
            'ProtocoloType' => '\\StructType\\ProtocoloType',
            'IdentificacaoType' => '\\StructType\\IdentificacaoType',
            'IdentificacaoProtocoloType' => '\\StructType\\IdentificacaoProtocoloType',
            'EstabelecimentoType' => '\\StructType\\EstabelecimentoType',
            'EstabelecimentoCNESCNPJType' => '\\StructType\\EstabelecimentoCNESCNPJType',
            'EstabelecimentoNovoType' => '\\StructType\\EstabelecimentoNovoType',
            'AvaliacaoProtocoloType' => '\\StructType\\AvaliacaoProtocoloType',
            'AvaliacaoVinculadaSimplesType' => '\\StructType\\AvaliacaoVinculadaSimplesType',
            'AvaliacaoType' => '\\StructType\\AvaliacaoType',
            'InformarPosicaoEstoqueEmLoteType' => '\\StructType\\InformarPosicaoEstoqueEmLoteType',
            'registro' => '\\StructType\\Registro',
            'RetificarPosicaoEstoqueEmLoteType' => '\\StructType\\RetificarPosicaoEstoqueEmLoteType',
            'InformarEntradaMedicamentoEmLoteType' => '\\StructType\\InformarEntradaMedicamentoEmLoteType',
            'RetificarEntradaMedicamentoEmLoteType' => '\\StructType\\RetificarEntradaMedicamentoEmLoteType',
            'InformarSaidaMedicamentoEmLoteType' => '\\StructType\\InformarSaidaMedicamentoEmLoteType',
            'RetificarSaidaMedicamentoEmLoteType' => '\\StructType\\RetificarSaidaMedicamentoEmLoteType',
            'InformarDispensacaoMedicamentoEmLoteType' => '\\StructType\\InformarDispensacaoMedicamentoEmLoteType',
            'RetificarDispensacaoMedicamentoEmLoteType' => '\\StructType\\RetificarDispensacaoMedicamentoEmLoteType',
            'InformarAvaliacaoEmLoteType' => '\\StructType\\InformarAvaliacaoEmLoteType',
            'avaliacoes' => '\\StructType\\Avaliacoes',
            'RetificarAvaliacaoEmLoteType' => '\\StructType\\RetificarAvaliacaoEmLoteType',
            'RespostaProcessamentoLoteType' => '\\StructType\\RespostaProcessamentoLoteType',
            'RespostaReprocessamentoLoteType' => '\\StructType\\RespostaReprocessamentoLoteType',
            'InconsistenciaProcessamentoLoteType' => '\\StructType\\InconsistenciaProcessamentoLoteType',
            'inconsistencias' => '\\StructType\\Inconsistencias',
            'InformarPosicaoEstoqueType' => '\\StructType\\InformarPosicaoEstoqueType',
            'RetificarPosicaoEstoqueType' => '\\StructType\\RetificarPosicaoEstoqueType',
            'InformarEntradaMedicamentoType' => '\\StructType\\InformarEntradaMedicamentoType',
            'RetificarEntradaMedicamentoType' => '\\StructType\\RetificarEntradaMedicamentoType',
            'InformarSaidaMedicamentoType' => '\\StructType\\InformarSaidaMedicamentoType',
            'RetificarSaidaMedicamentoType' => '\\StructType\\RetificarSaidaMedicamentoType',
            'InformarDispensacaoMedicamentoType' => '\\StructType\\InformarDispensacaoMedicamentoType',
            'RetificarDispensacaoMedicamentoType' => '\\StructType\\RetificarDispensacaoMedicamentoType',
            'ExclusaoRegistroType' => '\\StructType\\ExclusaoRegistroType',
            'RespostaExclusaoRegistroType' => '\\StructType\\RespostaExclusaoRegistroType',
            'RespostaProdutoRetificadoType' => '\\StructType\\RespostaProdutoRetificadoType',
            'RespostaProdutoType' => '\\StructType\\RespostaProdutoType',
            'RespostaProdutoEntradaType' => '\\StructType\\RespostaProdutoEntradaType',
            'RespostaProdutoSaidaType' => '\\StructType\\RespostaProdutoSaidaType',
            'RespostaProdutoDispensacaoType' => '\\StructType\\RespostaProdutoDispensacaoType',
            'InformarAvaliacaoType' => '\\StructType\\InformarAvaliacaoType',
            'RetificarAvaliacaoType' => '\\StructType\\RetificarAvaliacaoType',
            'RespostaAvaliacaoType' => '\\StructType\\RespostaAvaliacaoType',
            'RespostaAvaliacaoRetificadaType' => '\\StructType\\RespostaAvaliacaoRetificadaType',
        );
    }
}
