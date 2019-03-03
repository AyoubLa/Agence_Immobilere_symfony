<?php

namespace App\Controller;

use App\Entity\Property;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class GaleryController extends AbstractController
{
    /**
     * @Route("/", name="galery.index")
     */
    public function index(Property $property)
    {
        
    }
}