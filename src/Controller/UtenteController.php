<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UtenteController extends AbstractController
{

    
/**
 * @Route ("/api/addUtente/",name="add")
 */

public function add(Request $request) : JsonResponse{

    
    $nome = $request->query->get('nome');
    $cognome = $request->query->get('cognome');
    return new JsonResponse([
        'name' => $nome,
        'surname' => $cognome,
        
    ]);

}




}
