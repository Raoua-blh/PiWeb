<?php

namespace App\Controller;
use App\Entity\Coach;
use App\Form\CoachType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class CoachController extends AbstractController
{
    /**
     * @Route("/coach", name="coach")
     */
    public function index(): Response
    {
        return $this->render('coach/index.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }
     /**
     * @Route("/coach/ajouter", name="coachAjouter")
     */
    public function ajouterCoach(Request $request): Response
    {
        $coach = new Coach();
        $formcoach = $this->createForm(CoachType::class, $coach);
        $formcoach->handleRequest($request);

        if ($formcoach->isSubmitted() && $formcoach->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formcoach);
            $entityManager->flush();
            return $this->redirectToRoute('listcoach');
        }
            return $this->render('coach/CoachForm.html.twig', [
                'formCoach' => $formcoach->createView(),
            ]);

    }

     /**
     * @Route("coach/listcoach", name="listcoach")
     */
    public function list(): Response
    {
        $coach =$this->getDoctrine()->getRepository(Coach::class)->findAll();
        return $this->render('coach/listeCoach.html.twig', [
            'listcoach' => $coach,
        ]);
    }

    /** 
    * @Route("Supprimercoach/{id}", name="Supprimercoach")
    */
   public function SupprimerCoach($id):Response 
   {

     $coach = $this->getDoctrine()->getRepository(Coach::Class)->find($id);
     $em =$this->getDoctrine()->getManager();
     $em->remove($coach);
     $em->flush();
     return $this->redirectToRoute('listcoach');
   }

   /**
     * @Route("ModifierCoach/{id}", name="ModifierCoach")
     */
    public function ModifierCoach(Request $request,$id)
    {
        $coach = $this->getDoctrine()->getRepository(Coach::class)->find($id);
        $form = $this->createForm(CoachType::class, $coach);
        $form->add('modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('listcoach');
        }
        return $this->render('coach/update.html.twig',array('s'=>$form->createView()));
    }

}
