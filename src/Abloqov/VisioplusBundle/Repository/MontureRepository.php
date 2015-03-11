<?php

namespace Abloqov\VisioplusBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * MontureRepository class regroupant les requetes de l'entités Monture
 *
 * @author Delrodie AMOIKON
 * @license http://www.abloqov-group.com/visio+/ 
 * @since version 0.1 | 02/03/2015 16:00
 */
class MontureRepository extends EntityRepository {
    
    /**
     * nombreTotalMonture permet d'avoir le nombre total de monture enregistrées
     * dans la base de données
     * @since version 0.1 | 02/03/2015 16:02
     */
    public function nombreTotalMonture()
    {
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)');
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * nombreTotalMontureEnfant permet d'avoir le nombre total de monture d'enfant
     * enregistrées dans la base de données
     * @since version 0.1 | 02/03/2015 16:06
     */
    public function nombreToatlMontureEnfant()
    {
        $enfant = 'ENFANT';
        
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->where('m.genre = :genre')
                ->setParameter('genre', $enfant);
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * nombreTotalMontureFemme, requête permettant d'avoir le nombre total de montures
     * femme enregistrées dans le système
     * @since version 0.1 | 02/03/2015 16:14
     */
    public function nombreTotalMontureFemme()
    {
        $femme = 'FEMME';
        
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->where('m.genre = :genre')
                ->setParameter('genre', $femme);
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * nombreTotalMontureHomme, requête permettant d'avoir le nombre total de montures
     * homme enregistrées dans le système
     * @since version 0.1 | 02/03/2015 16:24
     */
    public function nombreTotalMontureHomme()
    {
        $homme = 'HOMME';
        
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->where('m.genre = :genre')
                ->setParameter('genre', $homme);
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * nombreTotalMontureMixte, requête permettant d'avoir le nombre total de montures
     * Mixtes enregistrées dans le système
     * @since version 0.1 | 02/03/2015 16:26
     */
    public function nombreTotalMontureMixte()
    {
        $mixte = 'MIXTE';
        
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->where('m.genre = :genre')
                ->setParameter('genre', $mixte);
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * nombreTotalMontureSolaire, requête permettant d'avoir le nombre total de montures
     * Solaires enregistrées dans le système
     * @since version 0.1 | 02/03/2015 16:26
     */
    public function nombreTotalMontureSolaire()
    {
        $solaire = 'SOLAIRE';
        
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->where('m.genre = :genre')
                ->setParameter('genre', $solaire);
        
        $query = $qb->getQuery();
        
        return $query->getSingleScalarResult();
    }
    
    /**
     * listeMontures permet de rechercher les montures concernées par la requete
     * @author Delrodie AMOIKON
     * @since  0.1 | 02/03/2014 23:57
     */
    public function listeMontures($id)
    {
        $qb = $this->createQueryBuilder('m')
                ->join('m.marque', 'ma')
                ->where('ma.id = :id')
                ->setParameter('id', $id);
        
        $query = $qb->getQuery();
 
        try{
            return $query->getResult();
        } catch (Exception $ex) {
            return null;

        }
        
    }
    
    /**
     * nombreMontureMarque cacul le stock de montures de la marque dans le système
     * @author Delrodie AMOIKON
     * @since version 0.1 | 04/03/2015  00:21
     */
    public function nombreMontureMarque($id)
    {
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->join('m.marque', 'ma')
                ->where('ma.id = :id')
                ->setParameter('id', $id);
        
        $query = $qb->getQuery();
        
        try{
            return $query->getSingleScalarResult();
        } catch (Exception $ex) {
            return null;
        }
    }
    
    /**
     * nombreMontureEnfant cacul le stock de montures d'homme de la marque dans le système
     * @author Delrodie AMOIKON
     * @since version 0.1 | 04/03/2015  21:26
     */
    public function nombreMontureGenre($id, $genre)
    {
        $qb = $this->createQueryBuilder('m')
                ->select('sum(m.stock)')
                ->join('m.marque', 'ma')
                ->where('ma.id = :id')
                ->andWhere('m.genre = :genre')
                ->setParameters(array('id' => $id, 'genre' => $genre));
        
        $query = $qb->getQuery();
        
        try{
            return $query->getSingleScalarResult();
        } catch (Exception $ex) {
            return null;
        }
    }
       
}
