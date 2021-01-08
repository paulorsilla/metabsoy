<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Colaborador.
 * @ORM\Entity(repositoryClass="MetabSoy\Repository\Colaborador")
 * @ORM\Table(name="sigrh.colaborador")
 */
class Colaborador extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="matricula", type="integer")
     */
    protected $matricula;
    
    /**
     * @ORM\Column(name="nome", type="string")
     */
    protected $nome;
    
    /**
     * @ORM\Column(name="login_local", type="string")
     */
    protected $login;
    
    /**
     * @ORM\Column(name="foto", type="string")
     */
    protected $foto;

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    function getFoto() {
        return $this->foto;
    }
   
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}
