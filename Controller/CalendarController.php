<?php

namespace Ephp\CalendarBundle\Controller;

use Symfony\FrameworkBundle\Controller\Controller;
use Sensio\FrameworkExtraBundle\Configuration\Route;
use Sensio\FrameworkExtraBundle\Configuration\Template;

/**
 * Scheda controller.
 *
 * @Route("/calendario")
 */
class CalendarController extends Controller {

    use \Ephp\UtilityBundle\Controller\Traits\BaseController;

    /**
     * Lists all Scheda entities.
     *
     * @Route("-completo/{calendario}/{utente}", name="calendario_completo", defaults={"gestore"=""})
     * @Template()
     */
    public function indexAction($calendario, $utente) {
        $mode = 0;
        $_calendario = $this->getRepository('EphpCalendarBundle:Calendario');
        $calendario = $_calendario->findOneBy(array('sigla' => $calendario));
        if ($calendario && $utente) {
            $utente = $this->findOneBy('EphpGestoriBundle:Gestore', array('sigla' => $utente));
            $entities = $this->getRepository('EphpCalendarBundle:Evento')->prossimiEventi($calendario, $utente, 100);
        } else {
            $entities = $this->getRepository('EphpCalendarBundle:Evento')->prossimiEventi($calendario, null, 100);
        }
        $gestori = $this->findBy('EphpGestoriBundle:Gestore', array(), array('sigla' => 'ASC'));
        return array(
            'entities' => $entities,
            'mode' => $mode,
            'ospedale' => $calendario,
            'gestori' => $gestori,
            'anni' => range(7, date('y'))
        );
    }

}
