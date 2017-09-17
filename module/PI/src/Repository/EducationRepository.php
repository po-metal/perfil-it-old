<?php

namespace PI\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EducationRepository
 *
 *
 *
 * @author Cristian Incarnato
 * @license -
 * @link -
 */
class EducationRepository extends EntityRepository
{

    public function save(\PI\Entity\Education $entity)
    {
        $this->getEntityManager()->persist($entity); $this->getEntityManager()->flush();
    }

    public function remove(\PI\Entity\Education $entity)
    {
        $this->getEntityManager()->remove($entity); $this->getEntityManager()->flush();
    }


}

