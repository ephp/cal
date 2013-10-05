<?php

namespace Ephp\CalendarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="cal_eventi")
 * @ORM\Entity(repositoryClass="Ephp\CalendarBundle\Entity\EventoRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Evento {

    use Traits\Evento;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

}