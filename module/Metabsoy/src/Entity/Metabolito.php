<?php

namespace Metabsoy\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe Metabolito.
 * @ORM\Entity(repositoryClass="Metabsoy\Repository\Metabolito")
 * @ORM\Table(name="metabolitos")
 */
class Metabolito extends AbstractEntity {

    /**
     * @ORM\Id
     * @ORM\Column(name="id")
     * @ORM\GeneratedValue
     */
    protected $id;
    
    protected $classe;

    
    /**
     * @ORM\Column(name="nome", type="string")
     */    
    protected $nome;
    
    protected $nomeIupac;
    
    protected $massaMonoiso;
    
    protected $formMolec;
    
    protected $rt;
    
    protected $pubchem;
    public function getId() {
        return $this->id;
    }

    public function getClasse() {
        return $this->classe;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNomeIupac() {
        return $this->nomeIupac;
    }

    public function getMassaMonoiso() {
        return $this->massaMonoiso;
    }

    public function getFormMolec() {
        return $this->formMolec;
    }

    public function getRt() {
        return $this->rt;
    }

    public function getPubchem() {
        return $this->pubchem;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setClasse($classe): void {
        $this->classe = $classe;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNomeIupac($nomeIupac): void {
        $this->nomeIupac = $nomeIupac;
    }

    public function setMassaMonoiso($massaMonoiso): void {
        $this->massaMonoiso = $massaMonoiso;
    }

    public function setFormMolec($formMolec): void {
        $this->formMolec = $formMolec;
    }

    public function setRt($rt): void {
        $this->rt = $rt;
    }

    public function setPubchem($pubchem): void {
        $this->pubchem = $pubchem;
    }
    
}
