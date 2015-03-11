<?php

namespace Abloqov\VisioplusBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * MarqueRepository class regroupant les requêtes correspondantes à l'enitié Marque
 *
 * @author Delrodie AMOIKON
 * @license http://www.abloqov-group.com/visio+/
 * @since version 0.1 | 01/03/2015 20:54
 */
class MarqueRepository extends EntityRepository {
    
    /**
     * nombreTotalmarque permet de d'avoir le nombre total de marques enregistrées 
     * dans la base de données
     * @since version 0.1 | 01/03/2015 21:50
     */
    public function nombreTotalMarque()
    {
        $qb = $this->createQueryBuilder('m')
                ->select('count(m.id)');
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
}
