<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Material.
 * @ORM\Entity(repositoryClass="Metabsoy\Repository\Material")
 * @ORM\Table(name="materiais")
 */
class Material extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    /**
     * @ORM\Column(name="descricao", type="string")
     */    
    protected $descricao;
    
}
