<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="homepage")
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
     * @Route("/", name="testpage")
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
        return $this->render('AppBundle:employe:show.html.twig', array(
            'employee'    => $employee,
        ));
    }

    /**
     * @Route("/new", name="employee_new")
     */
    public function newAction(Request $request) {
        $employee = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            die('form howa hadak');
        }
        return $this->render('AppBundle:employe:new.html.twig', array(
            'employee' => $employee,
            'form'     => $form->createView(),
        ));
    }




}
