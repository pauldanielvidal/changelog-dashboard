<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use PVidal\Bundle\ChangelogDashboardBundle\Entity\Status;


class StatusController extends Controller
{

    /**
     * @Route("/status")
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $entities = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Status')
            ->findAll();

        $columns = $em->getClassMetadata('PVidalChangelogDashboardBundle:Status')->getFieldNames();

        return $this->render('PVidalChangelogDashboardBundle:Default:list.html.twig', array(
            'entities' => $entities,
            'columns' => $columns,
            'type' => "status",
            'label' => "Status",
        ));
    }

    /**
     * @Route("/status/new")
     */
    public function newAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        // create a status and give it some dummy data for this example
        $status = new Status();

        $form = $this->createFormBuilder($status)
            ->add('description', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->submit($request->request->get($form->getName()));

            if ($form->isValid()) {
                $status = $form->getData();

                $em->persist($status);
                $em->flush();

                //return new Response("item created!".$status->getId()." ".$status->getDescription());
                return $this->redirect('/status');
            }
        }

        return $this->render('PVidalChangelogDashboardBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
            'type' => "status",
        ));
    }

    /**
     * @Route("/status/delete/{id}")
     */
    public function deleteAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $item = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Status')
            ->find($request->get('id'));

        $em->remove( $item );
        $em->flush();

        return $this->redirect('/status');
    }

    /**
     * @Route("/status/update/{id}")
     */
    public function updateAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $item = $this->getDoctrine()
            ->getRepository('PVidalChangelogDashboardBundle:Status')
            ->find($request->get('id'));

        $form = $this->createFormBuilder($item)
            ->add('description', 'text')
            ->getForm();

        if ($request->getMethod() == 'POST') {
            $form->submit($request->request->get($form->getName()));

            if ($form->isValid()) {
                $status = $form->getData();

                $em->persist($status);
                $em->flush();

                return $this->redirect('/status');
            }
        }

        return $this->render('PVidalChangelogDashboardBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
            'type' => "status",
        ));
    }
}
