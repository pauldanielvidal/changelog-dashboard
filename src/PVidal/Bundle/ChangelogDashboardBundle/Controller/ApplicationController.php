<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use PVidal\Bundle\ChangelogDashboardBundle\Entity\Application;


class ApplicationController extends Controller
{

    /**
     * @Route("/app")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Application')
            ->findAll();

        $columns = $em->getClassMetadata('PVidalChangelogDashboardBundle:Application')->getFieldNames();

        return $this->render('PVidalChangelogDashboardBundle:Default:list.html.twig', array(
            'entities' => $entities,
            'columns' => $columns,
            'createLink' => "/app/new",
            'type' => "Application",
        ));
    }

    /**
     * @Route("/app/new")
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // create a application and give it some dummy data for this example
        $application = new Application();

        $form = $this->createFormBuilder($application)
            ->add('name', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->submit($request->request->get($form->getName()));

            if ($form->isValid()) {
                $application = $form->getData();

                $em->persist($application);
                $em->flush();

                //return new Response("item created!".$application->getId()." ".$application->getDescription());
                return $this->redirect('/app');
            }
        }

        return $this->render('PVidalChangelogDashboardBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
            'listLink' => "/app",
        ));
    }

    /**
     * @Route("/app/delete/{id}")
     */
    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $item = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Application')
            ->find($request->get('id'));

        $em->remove( $item );
        $em->flush();

        return $this->redirect('/app');
    }
}
