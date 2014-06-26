<?php

namespace Tiziano\MovieNetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Tiziano\MovieNetBundle\Form\Type\MovieType;
use Tiziano\MovieNetBundle\Form\Type\SearchType;
use Tiziano\MovieNetBundle\Entity\Movie;
use Tiziano\MovieNetBundle\Entity\Document;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $movies = array();
        $defaultData = array('termine' => '');
        $form = $this->createFormBuilder($defaultData)
            ->add('termine', 'text')
            ->add('Cerca', 'submit')
            ->getForm();

        $form->handleRequest($request);
        if ($form->isValid()) {
            $defaultData = $form->getData();

            $movies = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Movie')
                ->createQueryBuilder('p')
                ->where('p.titolo LIKE :titolo')
                ->setParameter('titolo', '%' . $defaultData['termine'] . '%')
                ->getQuery()
                ->getResult();

        }         
        return $this->render('TizianoMovieNetBundle:Default:index.html.twig', 
            array(
                'form_ricerca' => $form->createView(),
                'dati' => $defaultData,
                'movies' => $movies,
            )
        );
    }

public function uploadAction(Request $request)
{

    $document = new Document();
    $form = $this->createFormBuilder($document)
        ->add('name')
        ->add('file', 'file')
        ->add('Salva', 'submit')
        ->getForm();
    $form->handleRequest($request);
    if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
/*
        $file = $form['file']->getData();
        $dir = __DIR__.'/../../../../web/uploads/documents';
        $extension = $file->guessExtension();
        if (!$extension) {
            $extension = 'bin';
        }
        $file->move($dir, rand(1, 99999).'.'.$extension);
*/
        $document->upload();
        $em->persist($document);
        $em->flush();
        //return $this->redirect($this->generateUrl(...));
    }

    return $this->render('TizianoMovieNetBundle:Default:upload.html.twig', array('form' => $form->createView()));
}

    public function listaAction()
    {
        $movies = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Movie')->findAll();
        return $this->render('TizianoMovieNetBundle:Default:lista_film.html.twig', array('movies' => $movies));
    }

    public function dettaglioAction($id)
    {
        //$movie = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Movie')->find($id);
        $movie = $this->getDoctrine()
            ->getRepository('TizianoMovieNetBundle:Movie')
            ->findOneByIdJoined($id);
        return $this->render('TizianoMovieNetBundle:Default:dettaglio_film.html.twig', array('movie' => $movie));        
    }

    public function modificaAction($id, Request $request)
    {
        $azione = 'Modifica';
        $messaggio = '';

        // Generazione form
        $movie = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Movie')->find($id);

        $form = $this->createForm(new MovieType(), $movie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();
            $messaggio = 'Salvato!';
        }       
        return $this->render('TizianoMovieNetBundle:Default:nuovo.html.twig', 
            array(
                'azione' => $azione,
                'messaggio' => $messaggio, 
                'form' => $form->createView(),
            )
        );
    }    

    public function nuovoAction(Request $request)
    {
        $azione = 'Nuovo';
        $messaggio = '';

    	// Generazione form
    	$movie = new Movie();

    	$form = $this->createForm(new MovieType(), $movie);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();
            $messaggio = 'Salvato!';
        }    	
        return $this->render('TizianoMovieNetBundle:Default:nuovo.html.twig', 
            array(
                'azione' => $azione,
                'messaggio' => $messaggio, 
                'form' => $form->createView(),
            )
        );
    }

    public function registiAction($id)
    {
    	$registi = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Director')->findAll();
    	$regista = $this->getDoctrine()->getRepository('TizianoMovieNetBundle:Director')->find($id);
    	if (!$regista)
    	{
    		throw $this->createNotFoundException('Nessun regista trovato con id ' . $id);
    	}
    	return $this->render('TizianoMovieNetBundle:Default:registi.html.twig', 
    		array(
    			'regista' => $regista,
    			'registi' => $registi
    			)
    		);
    }
}
