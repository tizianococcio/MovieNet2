<?php

namespace Tiziano\MovieNetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tiziano\MovieNetBundle\Form\Type\DirectorType;
use Tiziano\MovieNetBundle\Entity\Director;

class RegistiController extends Controller
{
	public function nuovoAction(Request $request)
	{
		$messaggio = '';
    	// Generazione form
    	$regista = new Director();
    	$form = $this->createForm(new DirectorType(), $regista);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($regista);
            $em->flush();
            $messaggio = 'Salvato!';
        }

		return $this->render('TizianoMovieNetBundle:Registi:nuovo.html.twig', array('messaggio' => $messaggio, 'form' => $form->createView()));		
	}
}