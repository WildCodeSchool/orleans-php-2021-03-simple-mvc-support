<?php

namespace App\Controller;

use App\Model\PetManager;
use App\Model\SpeciesManager;

class PetController extends AbstractController
{
    /**
     * this will list all pets
     */
    public function index(): string
    {
        $petManager = new PetManager();
        $species = (new SpeciesManager())->selectAll();
        $petSpecies = [];

        foreach ($species as $specie) {
            $petSpecies[$specie['name']] = $petManager->selectAllBySpecies($specie['name']);
        }

        return $this->twig->render('Pet/index.html.twig', [
            'petSpecies' => $petSpecies,
        ]);
    }
}
