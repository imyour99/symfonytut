<?php

namespace App\Controller;

use App\Entity\Employees;
use App\Form\EmployeeFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Translation\LocaleSwitcher;
use Twig\Environment;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    public function __construct(
        private LocaleSwitcher $localeSwitcher,
    ) {}

    /**
     * @Route("/register")
     */
    public function register(Environment $twig, Request $request, EntityManagerInterface $entityManager)
    {
        // setting up language
        $this->localeSwitcher->setLocale('de');
        //
        $employee = new Employees();
        $form = $this->createForm(EmployeeFormType::class, $employee);
        $form->handleRequest($request);
        $agreTerms = $form->get('agreeTerms')->getData();

        if($form->isSubmitted() && $form->isValid() && $agreTerms){

            $entityManager->persist($employee);
            $entityManager->flush();
            return new Response('New Employee No '.$employee->getId().' is created.');

        }
        return new Response($twig->render('employee/register.html.twig',[
            'form_register'     => $form->createView(),
            'csrf_security'     => true,
            'csrf_token_name'   => '_token',
            'csrf_token_id'     => 'employee_item'


        ]));

    }


    //#[Route('/listing'), name:'employee_listing'] or
    // routes defined in the config\routes.yam file as
    // employee_listing
     public function listing(int $id)
     {
         //return new Response('Id is '. $id);
         return $this->redirectToRoute('employee_show', ['slug'=> 'diana-jhones']);

     }


    public function show(Employees $employees, $slug)
    {
        return new Response('Name :'. $employees->getFirstName().' '. $employees->getLastName(). ', Country is :'. $employees->getCountry());
     }

}