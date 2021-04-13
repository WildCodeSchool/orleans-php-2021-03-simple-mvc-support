<?php

namespace App\Controller;

use App\Model\PetManager;

class PetController extends AbstractController
{
    /**
     * this will list all pets
     */
    public function index(): string
    {
        $petManager = new PetManager();
        $pets = $petManager->selectAll();
        return $this->twig->render('Pet/index.html.twig', [
            'pets' => $pets,
        ]);
    }
}
