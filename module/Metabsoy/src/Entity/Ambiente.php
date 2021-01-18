<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Ambiente.
 * @ORM\Entity(repositoryClass="Metabsoy\Repository\Ambiente")
 * @ORM\Table(name="ambientes")
 */
class Ambiente extends AbstractEntity {

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
    
    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }
}
