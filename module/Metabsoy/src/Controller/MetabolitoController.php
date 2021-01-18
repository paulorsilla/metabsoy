<?php

namespace Metabsoy\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Metabsoy\Form\MetabolitoForm;
use Zend\View\Model\ViewModel;
use Metabsoy\Entity\Metabolito;

class MetabolitoController extends AbstractActionController
{
	/**
	 * Entity Manager
	 * @var \Doctrine\ORM\EntityManager
	 */
	private $entityManager;
	
	/**
	 * Construtor da classe, utilizado para injetar as dependências
	 */
	public function __construct($entityManager)
	{
            $this->entityManager = $entityManager;
	}
	
	public function indexAction()
	{
            $repo = $this->entityManager->getRepository(Metabolito::class);
            $page = $this->params()->fromQuery('page', 1);
            $search = $this->params()->fromPost();
            $paginator = $repo->getPaginator($page, $search);

            return new ViewModel([
                'metabolitos' => $paginator,
            ]);	
	}
	
	/**
	 * Action para salvar um novo registro
	 */
	public function saveAction()
	{
            $id = $this->params()->fromRoute('id', null);
            //Cria o formulário
            $form = new MetabolitoForm();

            //Verifica se a requisição utiliza o método POST
            if ($this->getRequest()->isPost()) {

                //Recebe os dados via POST
                $data = $this->params()->fromPost();

                //Preenche o form com os dados recebidos e o valida
                $form->setData($data);
                if ($form->isValid()) {
                    $data = $form->getData();
                    $repo = $this->entityManager->getRepository(Metabolito::class);
                    $repo->incluir_ou_editar($data, $id);
                    return $this->redirect()->toRoute('metabsoy/metabolito', ['action' => 'save']);
                }
            } else {
                if ( !empty($id)){
                    $repo = $this->entityManager->getRepository(Metabolito::class);
                    $row = $repo->find($id);
                    if ( !empty($row)){
                        $form->setData($row->toArray());
                    }
                }
            }
            return new ViewModel([
                'form' => $form
            ]);
	}
	
	public function deleteAction()
	{
            $id = (int) $this->params()->fromRoute('id', 0);
            if (!$id) {
                return $this->redirect()->toRoute('metabsoy/metabolito');
            }
            $request = $this->getRequest();
            $repo = $this->entityManager->getRepository(Metabolito::class);

            if ($request->isPost()) {
                $del = $request->getPost('del', 'Não');
                if ($del == 'Sim') {
                    $id = (int) $request->getPost('id');
                    $repo->delete($id);
                }
                // Redireciona para a lista de registros cadastrados
                return $this->redirect()->toRoute('metabsoy/metabolito');
            }
            $metabolito = $repo->find($id);

            return new ViewModel([
                'metabolito' => $metabolito,
            ]);
	}
}