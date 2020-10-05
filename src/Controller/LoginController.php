<?php
namespace App\Controller;

use App\Entity\Utente;
use App\Form\Type\TaskType;
use App\Form\Type\UtenteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */

    public function login(Request $request): Response {

        // just setup a fresh $task object (remove the example data)
        $utente = new Utente();
        $form = $this->createForm(UtenteType::class,$utente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utente);
            $entityManager->flush();

            return $this->redirectToRoute('thanks');
        }
        
       
        return $this->render('login.html.twig',['form' => $form->createView()]);
       

    }
    /**
     * @Route("/thanks", name="thanks")
     */
    public function thanks(): Response {

        return $this->render('thanks.html.twig');
    }

}


?>