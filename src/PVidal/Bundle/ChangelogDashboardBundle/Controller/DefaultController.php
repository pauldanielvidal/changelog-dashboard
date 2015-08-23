<?php

namespace PVidal\Bundle\ChangelogDashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

use \JamesMoss\Flywheel\Document;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")Activity.php
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/test")
     */
    public function testAction() {
        $flywheel = $this->get("flywheel")->setTablename("post");

        // Storing a new document
        $post = new Document(array(
            'title' => 'An introduction to Flywheel',
            'dateAdded' => new \DateTime('2013-10-10'),
            'body' => 'A lightweight, flat-file, document database for PHP...',
            'wordCount' => 7,
        ));

        echo $post->title; // An introduction to Flywheel
        echo $post->wordCount; // 7

        $id = $flywheel->repo->store($post);
//
//        // A unique ID is automatically generated for you if you don't specify your own when storing.
//        // The generated ID consists of upper/lowercase letters and numbers so is URL safe.
//        echo $id; // Czk6SPu4X
//        echo $post->getId(); // Czk6SPu4X
//
//        // If you set your own then it cannot contain the following characters: / ? * : ; { } \ or newline
//        $post->setId('a-review-of-2013');
//
//        // Retrieving documents
//        $posts = $repo->query()
//            ->where('dateAdded', '>', new \DateTime('2013-11-18'))
//            ->orderBy('wordCount DESC')
//            ->limit(10, 5)
//            ->execute();
//
//        echo count($posts); // 5 the number of documents returned in this result
//        echo $posts->total() // 33 the number of documents if no limit was applied. Useful for pagination.
//
//        foreach ($posts as $post) {
//            echo $post->title;
//        }
//
//        // Updating documents
//        $post->title = 'How to update documents';
//
//        // Updates the document (only if it already exists)
//        $repo->update($post);
//
//
//        // Deleting documents - you can pass a document or it's ID.
//        $repo->delete($post);
//        // or you can do the following
//        $repo->delete('Czk6SPu4X');

        return new Response("item created!");
    }
}
