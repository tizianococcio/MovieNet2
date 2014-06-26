<?php

namespace Tiziano\MovieNetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tiziano\MovieNetBundle\Form\Type\GenreType;
use Tiziano\MovieNetBundle\Entity\Genre;

class GeneriController extends Controller
{
	public function nuovoAction(Request $request)
	{
		$messaggio = '';
    	// Generazione form
    	$genere = new Genre();
    	$form = $this->createForm(new GenreType(), $genere);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($genere);
            $em->flush();
            $messaggio = 'Salvato!';
        }

		return $this->render('TizianoMovieNetBundle:Generi:nuovo.html.twig', array('messaggio' => $messaggio, 'form' => $form->createView()));		
	}
}