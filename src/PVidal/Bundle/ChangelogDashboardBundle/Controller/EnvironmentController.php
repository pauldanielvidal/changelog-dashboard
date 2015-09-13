<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use PVidal\Bundle\ChangelogDashboardBundle\Entity\Environment;


class EnvironmentController extends Controller
{

    /**
     * @Route("/env")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Environment')
            ->findAll();

        $columns = $em->getClassMetadata('PVidalChangelogDashboardBundle:Environment')->getFieldNames();

        return $this->render('PVidalChangelogDashboardBundle:Default:list.html.twig', array(
            'entities' => $entities,
            'columns' => $columns,
            'type' => "env",
            'label' => "Environment",
        ));
    }

    /**
     * @Route("/env/new")
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // create a environment and give it some dummy data for this example
        $environment = new Environment();

        $form = $this->createFormBuilder($environment)
            ->add('name', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->submit($request->request->get($form->getName()));

            if ($form->isValid()) {
                $environment = $form->getData();

                $em->persist($environment);
                $em->flush();

                //return new Response("item created!".$environment->getId()." ".$environment->getDescription());
                return $this->redirect('/env');
            }
        }

        return $this->render('PVidalChangelogDashboardBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
            'type' => "env",
        ));
    }

    /**
     * @Route("/env/delete/{id}")
     */
    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $item = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Environment')
            ->find($request->get('id'));

        $em->remove( $item );
        $em->flush();

        return $this->redirect('/env');
    }

    /**
     * @Route("/env/update/{id}")
     */
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $item = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Environment')
            ->find($request->get('id'));

        $form = $this->createFormBuilder($item)
            ->add('name', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->submit($request->request->get($form->getName()));

            if ($form->isValid()) {
                $environment = $form->getData();

                $em->persist($environment);
                $em->flush();

                return $this->redirect('/env');
            }
        }

        return $this->render('PVidalChangelogDashboardBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
            'type' => "env",
        ));
    }
}
