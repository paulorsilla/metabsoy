<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Material.
 * @ORM\Entity(repositoryClass="MetabSoy\Repository\Material")
 * @ORM\Table(name="materiais")
 */
class Material extends AbstractEntity {

    
    protected $id;
    
    
    protected $descricao;
    
}
