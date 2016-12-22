<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 21/12/16
 * Time: 20:51
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmployeeController extends Controller
{

    /**
     * @Route("/emp/index", name="IndexUser")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:employe:index.html.twig');
       /* $em = $this->getDoctrine()->getManager();
        $employees = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('AppBundle:employe:index.html.twig',array(
            'employees' => $employees,
        ));*/
    }

}