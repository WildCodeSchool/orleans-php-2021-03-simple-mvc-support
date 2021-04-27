<?php

namespace App\Model;

class PetManager extends AbstractManager
{
    public const TABLE = 'pet';

    /**
     * Select all pets by species
     */
    public function selectAllBySpecies(string $speciesName): array
    {
        $query = 'SELECT pet.name, species.name AS species, species.type FROM ' . self::TABLE
        . ' JOIN species ON species.id = pet.species_id WHERE species.name = "' . $speciesName . '"';

        $statement = $this->pdo->query($query);
        $pets = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $pets;
    }
}
