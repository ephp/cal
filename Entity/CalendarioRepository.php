<?php

namespace Ephp\CalendarBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CalendarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CalendarioRepository extends EntityRepository
{
    
    public function createCalendario($sigla, $nome, $note = '') {
        $cal = new Calendario();
        $cal->setNome($nome);
        $cal->setSigla($sigla);
        $cal->setNote($note);
        $this->getEntityManager()->persist($cal);
        $this->getEntityManager()->flush();
        return $cal;
    }
    
}