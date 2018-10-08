<?php

namespace App\Controller;

use App\Entity\User;
use function Sodium\add;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    /**
     * @Route("/register", name="register")
     */
    public function index(Request $request)
    {
        $user = new User();
        $user->setEmail("example@truc.com");
        $user->setPassword("");
        $user->setFirstname("ahah");
        $user->setLastname("hehe");

        $registerForm = $this->createFormBuilder($user)
            ->add('email',EmailType::class)
            ->add('password',PasswordType::class)
            ->add('lastname',TextType::class)
            ->add('firstname', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Inscription'))
            ->getForm();

        $registerForm->handleRequest($request);

        if ($registerForm->isSubmitted() && $registerForm->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $user = $registerForm->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('homepage');
        }
        return $this->render('user/register.html.twig', [
            'form' => $registerForm->createView(),
        ]);
    }
}
