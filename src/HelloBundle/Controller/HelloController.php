<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HelloBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of HelloController
 *
 * @author NGASSAM
 */
class HelloController extends Controller{

    public function HellosAction() { 
        $welcome="bonjour et bienvenue à crc";
        return $this->render('HelloBundle:Hello:Hello.html.twig',
                array('welcome'=>$welcome));
    }
}
