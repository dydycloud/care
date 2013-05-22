<?php 
namespace Care\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends Controller
{
    public function indexAction()
    {
        return $this->render('CareSiteBundle:Site:index.html.twig');
    }

    public function mailAction()
    {
        // On récupère le service que l'on a crée
        //SiteBundle/Antispam/MonkeyAntispam.php
	    $antispam = $this->get('care_site.antispam');
	 	
	 	$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
	 	Ut enim mauris, sollicitudin nec tincidunt vitae, feugiat eu mi. 
	 	Aliquam at est sem, non molestie dui. Mauris sollicitudin magna et augue eleifend eleifend. Curabitur ut mi elit. 
	 	Ut tincidunt elit at arcu tristique vel tincidunt lorem sodales. 
	 	example1@ex.com example1@ex.fr example1@ex.net";

	    // si plus de 3 liens ou email = spam
	    if ($antispam->isSpam($text)) {
	      throw new \Exception('Votre message a été détecté comme spam !');
	    }
	 		return new Response($text);
	}
}
