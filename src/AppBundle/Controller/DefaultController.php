<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
       /* return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));*/
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/test", name="testpage")
     */
    public function testAction(Request $request)
    {
        // replace this example code with whatever you need
        /* return $this->render('default/index.html.twig', array(
             'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
         ));*/
        $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('AppBundle:employe:index.html.twig',array(
            'employees' => $employees,
        ));
    }

    /**
     * @Route("/{id}/show", name="employee_show")
     */
    public function showAction(User $employee) {
        return $this->render('AppBundle:employee:test.html.twig', array(
            'employee'    => $employee,
        ));
    }


}
