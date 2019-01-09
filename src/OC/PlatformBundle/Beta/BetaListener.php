<?php
// src/OC/PlatformBundle/Beta/BetaListener.php

namespace OC\PlatformBundle\Beta;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpFoundation\Response;

class BetaListener
{
  // L'argument de la méthode est un FilterResponseEvent
  public function processBeta(FilterResponseEvent $event)
  {
    // On teste si la requête est bien la requête principale (et non une sous-requête)
    if (!$event->isMasterRequest()) {
      return;
    }

    $remainingDays = $this->endDate->diff(new \Datetime())->days;

    // Si la date est dépassée, on ne fait rien
    if ($remainingDays <= 0) {
      return;
    }

    // On utilise notre BetaHRML
    $response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);
    
    // On récupère la réponse que le gestionnaire a insérée dans l'évènement
    $response = $event->getResponse();

    // Ici on modifie comme on veut la réponse…

    // Puis on insère la réponse modifiée dans l'évènement
    $event->setResponse($response);

    // On stoppe la propagation de l'évènement en cours (ici, kernel.response)
    $event->stopPropagation();
 
  }
}