<?php

namespace App\Controller;
use App\Form\PFEType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\PFE;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class PFEController extends AbstractController
{
    #[Route('/p/f/e', name: 'app_p_f_e')]
    public function index(): Response
    {

        return $this->render('pfe/index.html.twig', [
            'controller_name' => 'PFEController',
        ]);
    }
    #[Route('/add', name: 'personne.add')]
    public function addPFE(
        ManagerRegistry $manager,
        Request $request,

    ): Response
    {$pfe = new PFE();

        $form = $this->createForm(PFEType::class, $pfe);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $manager->persist($pfe);
            $manager->flush();
            $this->addFlash('succès', $pfe->getTitle() . "a éte bien ajoutée");
            return $this->render('pfeadd/html.twig', ['pfeTitle' => $pfe->getTitle(),
                'pfeStudent'=>$pfe->getStudent(),
                'pfeEntreprise'=> $pfe->getEntreprise()]);

        } else {

            return $this->render('pfe/index.html.twig', [
                'form' => $form->createView()
            ]);
        }








    }
}
