<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use Doctrine\ORM\EntityManagerInterface;
use  App\Repository\EvenementRepository;

class EventController extends AbstractController
{
    /**
     * @Route("/event", name="event")
     */
    public function index(EvenementRepository $repo): Response
    {
        $events = $repo->findAll();
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
            'events' => $events,
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function createEvent( Evenement $event = null  , EntityManagerInterface $manager){
        
        $event = new Evenement();
        $target_dir = realpath("../public/uploads");
        $imageFileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION)); 
   
        $originalFilename = pathinfo($_FILES["image"]["name"], PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $safeFilename = $safeFilename.'-'.uniqid().'.'.$imageFileType;
       
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir.'/'.$safeFilename);
             
        
        $event->setTitre($_POST["title"]);
        $event->setOrganisateur($_POST["organizer"]);
        $event->setType($_POST["type"]);
        $event->setLieu($_POST["place"]);
        $event->setDate($_POST["date"]);
        $event->setImage($safeFilename);
        $event->setCreatedAt(new \DateTimeImmutable()); 
        
            $manager->persist($event);
            $manager->flush();
           $eventId = $event->getId();    

            return $this->json(['code' => 200, "message" => "event ajouté",
            "id"=>$eventId,
            "title"=>$event->getTitre(),
            "organizer"=>$event->getOrganisateur(),
            "type"=>$event->getType(),
            "place"=>$event->getLieu(),
            "date"=>$event->getDate(),
            "image"=>$event->getImage(),
        ], 200);
    }
}
