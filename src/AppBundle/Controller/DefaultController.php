<?php

namespace AppBundle\Controller;
use AppBundle\database\Project;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/contact.html.twig');
    }

    /**
     * @Route("/bio", name="bio")
     */
    public function bioAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/bio.html.twig');
    }

    /**
     * @Route("/projects", name="projects")
     */
    public function projectsAction(Request $request)
    {
        // replace this example code with whatever you need
        $project = new \AppBundle\Entity\Project();
        $project->setName('Associació Casal La formiga');
        $project->setDescription('Associació Casal La formiga');
        $project->setImage('n');

        $em = $this->getDoctrine()->getManager();

        $em->persist($project);
        $em->flush();

        return $this->render('default/projects.html.twig', array('project'=>$project));
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('auth/admin.html.twig');
    }


    /**
     * @Route("/projects/{id}", defaults={"id" = 1})
     */
    public function projectAction($id)
    {
        $project = $this->getDoctrine()
            ->getRepository('AppBundle:Project')
            ->find($id);
        if(!$project){
            throw $this->createNotFoundException('No project found for id '.$id);
        }

        return $this->render('default/projects.html.twig', array('project'=>$project, 'hola'=>'hola'));
    }

}
