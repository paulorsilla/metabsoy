<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Colaborador.
 * @ORM\Entity(repositoryClass="MetabSoy\Repository\Colaborador")
 * @ORM\Table(name="sigrh.colaborador")
 */
class Resultado extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="ID_Amo", type="integer")
     */
    protected $Id;
    
    /**
     * @ORM\Column(name="ID_Exp", type="integer")
     */
    protected $Id_exp;
    
    /**
     * @ORM\Column(name="GENOTIPO", type="string")
     */
    protected $genotipo;

    /**
     * @ORM\Column(name="TRATAMENTO", type="string")
    */
    protected $tratamento;
    
    /**
     * @ORM\Column(name="GALIC", type="float")
    */
    protected $galic;

    /**
     * @ORM\Column(name="PROTOC", type="float")
    */
    protected $protoc;

    
// `GALIC`  'Ácido Galico',
//  `PROTOC` 'Ácido Protocatechuico',
//  `o-FTAL` 'Ácido o-Ftálico',
//  `VANILO` 'Ácido Vanílico',
//  `SIRIN` 'Ácido Siríngico',
//  `CAFEI` 'Ácido Cafeico',
//  `VANILA` 'Vanilina',
//  `DZI` 'Daidzina',
//  `ESCOP` 'Escopoletina',
//  `ORIENT` 'Orientin',
//  `p-CUM` 'Ácido p-Cumárico',
//  `GLI` 'Glicitina',
//  `FERUL` 'Ácido Ferúlico',
//  `GNI` 'Genistina',
//  `AS` 'Ácido Salicílico',
//  `M-DZI` 'Malonil-Daidzina',
//  `RUT` 'Rutina',
//  `M-GLI` 'Malonil-Glicitina',
//  `347THI` '3linha,4linha,7-Trihidroxi-Isoflavona',
//  `M-GNI` 'Malonil-Genistina',
//  `CINAM` 'Ácido Cinâmico',
//  `CLORG` 'Ácido Clorogênico',
//  `A-DZI` 'Acetil-Daidzina',
//  `A-GLI` 'Acetil-Glicitina',
//  `DZE` 'Daidzeína',
//  `QUERC` 'Quercitina',
//  `GLE` 'Gliciteína',
//  `A-GNI` 'Acetil-Genistina',
//  `SALME` 'Salicilato de metila',
//  `GNE` 'Genisteína',
//  `COUM` 'Coumestrol',
//  `FORMN` 'Formononetina',
//  `467TMI` '4linha,6,7-Trimetoxi-Isoflavona',
//  `GNE47DE` 'Genisteína-4linha,7-Dimetil-Éter',
//  `47DMI` '4linha,7-Dimetoxi-Isoflavona',


    
}



//
//  `MATERIAL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Folha  /  Grão  /  Vagem  /  Raiz',
//  `PARCELA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Identificação da parcela do delineamento experimental',
//  `REP` int(10) DEFAULT NULL COMMENT 'Número da parcela do delineamento experimental',
//  `INDUTOR` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Substância, inseto, manejo ou microrganismo utilizado como indutor',
//  `TRATAMENTO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Campo genérico para descrição do tratamento',
//  `HORAS` int(10) DEFAULT NULL COMMENT 'Número de horas decorridas desde a indução até a coleta da amostra',
//  `ESTADIO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Fase de desenvolvimento da planta no momento da coleta da amostra',
//  `SANIDADE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Estado fitossanitário da planta no momento da coleta da amostra',
//  `AMBIENTE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'CV - Casa de Vegetação  /  CE - Campo Experimental  /  FT - Fitotron',
//  `MANEJO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Manejo utilizado no cultivo quando especificado no delineamento experimental',
//  `DT_Incl_Result` date DEFAULT NULL COMMENT 'Data da inclusão dos resultados no banco de dados',
//  `OBS` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Observações relevantes sobre a amostra',
//  `PROP_EXT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Proporção do material/solvente utilizado na extração',
//  `DILUICAO` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL


