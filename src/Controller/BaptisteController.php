<?php

// src/Controller/BaptisteController.php
namespace App\Controller;

// ...
use App\Entity\Baptiste;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaptisteController extends AbstractController
{
	/**
	 * @Route("/baptiste", name="create_baptiste")
	 */
	public function createBaptiste(): Response
	{
		// you can fetch the EntityManager via $this->getDoctrine()
		// or you can add an argument to the action: createBaptiste(EntityManagerInterface $entityManager)
		$entityManager = $this->getDoctrine()->getManager();

		$baptiste = new Baptiste();
		$baptiste->setAge('20');

		// tell Doctrine you want to (eventually) save the Baptiste (no queries yet)
		$entityManager->persist($baptiste);

		// actually executes the queries (i.e. the INSERT query)
		$entityManager->flush();

		return new Response('Saved new baptiste with id '.$baptiste->getId());
	}

	/**
	 * @Route("/baptiste/{id}", name="baptiste_show")
	 */
	public function show($id)
	{
		$baptiste = $this->getDoctrine()
			->getRepository(Baptiste::class)
			->find($id);

		if (!$baptiste) {
			throw $this->createNotFoundException(
				'No baptiste found for id '.$id
			);
		}

		return new Response('Check out this great baptiste: '.$baptiste->getAge());

		// or render a template
		// in the template, print things with {{ baptiste.name }}
		// return $this->render('baptiste/show.html.twig', ['baptiste' => $baptiste]);
	}
}