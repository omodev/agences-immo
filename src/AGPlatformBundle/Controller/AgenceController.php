<?php

// src/AGPlatformBundle/Controller/AgenceController.php

namespace AGPlatformBundle\Controller;

use AGPlatformBundle\Entity\Vannonce;
use AGPlatformBundle\Form\VannonceType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AGPlatformBundle\Form\VannonceEditType;
use AGPlatformBundle\Form\VannonceEditVenduType;



class AgenceController extends Controller
{
    public function homeAction()
    {
        $content = $this->render('AGPlatformBundle:Agence:home.html.twig');
    return new Response($content);
    }

	 public function vendreAction()
    {
        $content = $this->render('AGPlatformBundle:Agence:vendre.html.twig');
    return new Response($content);
    }

	 public function louerAction()
    {
        $content = $this->render('AGPlatformBundle:Agence:louer.html.twig');
    return new Response($content);
    }

	public function vconsulterAction()
    {

   $repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('AGPlatformBundle:Vannonce')
;

$listAnnonce = $repository->findBy(array('vendu'=>false,'test'=>false));

 return $this->render('AGPlatformBundle:Agence:vu.html.twig', array(
      'listannonce' => $listAnnonce
    ));



    }

	 public function ajouterAction(Request $request)
    {
    $annonce = new Vannonce();
    $annonce->setVendu(false) ;
    $annonce->setTest(false) ;

    $form   = $this->get('form.factory')->create(VannonceType::class, $annonce);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($annonce);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

      return $this->redirectToRoute('ag_platform_vconsulter');
    }

    return $this->render('AGPlatformBundle:Agence:ajouter.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  public function vmodifierAction(Request $request, $id)
   {
     $em = $this->getDoctrine()->getManager();
   $annonce = $em->getRepository('AGPlatformBundle:Vannonce')->find($id);
   $form   = $this->get('form.factory')->create(VannonceEditType::class, $annonce);
   if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     $em = $this->getDoctrine()->getManager();
     $em->persist($annonce);
     $em->flush();

     return $this->redirectToRoute('ag_platform_vconsulter');
   }

   return $this->render('AGPlatformBundle:Agence:ajouter.html.twig', array(
     'form' => $form->createView(),
   ));
 }

	 public function rechercherAction()
    {
        $content = $this->render('AGPlatformBundle:Agence:home.html.twig');
    return new Response($content);
    }

	 public function vsupprimerAction($id)
    {
       $em = $this->getDoctrine()->getManager();
	    $annonce = $em->find('AGPlatformBundle:Vannonce',$id);

	   $em->remove($annonce);
	   $em->flush();

	   $repository = $em->getRepository('AGPlatformBundle:Vannonce') ;
	   $listAnnonce = $repository->findAll();

 return $this->render('AGPlatformBundle:Agence:vu.html.twig', array(
      'listannonce' => $listAnnonce
    ));

    }
    public function vvendreAction(Request $request, $id)
     {
       $em = $this->getDoctrine()->getManager();
     $annonce = $em->getRepository('AGPlatformBundle:Vannonce')->find($id);
     $annonce->setVendu(true) ;
     $form   = $this->get('form.factory')->create(VannonceEditVenduType::class, $annonce);
     if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
       $em = $this->getDoctrine()->getManager();
       $em->persist($annonce);
       $em->flush();

       return $this->redirectToRoute('ag_platform_vvendu');
     }

     return $this->render('AGPlatformBundle:Agence:vvendre.html.twig', array(
       'form' => $form->createView(),
     ));
    }

    public function vvenduAction()
      {

     $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('AGPlatformBundle:Vannonce')
    ;

    $listAnnonce = $repository->findBy(array('vendu'=>true , 'test'=>false));

    return $this->render('AGPlatformBundle:Agence:vvendu.html.twig', array(
        'listannoncevendus' => $listAnnonce
      ));



      }









      public function lconsulterAction()
        {

       $repository = $this
      ->getDoctrine()
      ->getManager()
      ->getRepository('AGPlatformBundle:Vannonce')
      ;

      $listAnnonce = $repository->findBy(array('loue'=>false,'test'=>true));

      return $this->render('AGPlatformBundle:Agence:vul.html.twig', array(
          'listannonce' => $listAnnonce
        ));
      }
      public function ajouterlAction(Request $request)
       {
       $annonce = new Vannonce();
       $annonce->setLoue(false) ;
       $annonce->setTest(true) ;
       $form   = $this->get('form.factory')->create(VannonceType::class, $annonce);

       if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($annonce);
         $em->flush();

         $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

         return $this->redirectToRoute('ag_platform_lconsulter');
       }

       return $this->render('AGPlatformBundle:Agence:ajouterl.html.twig', array(
         'form' => $form->createView(),
       ));
      }

      public function lmodifierAction(Request $request, $id)
       {
         $em = $this->getDoctrine()->getManager();
       $annonce = $em->getRepository('AGPlatformBundle:Vannonce')->find($id);
       $form   = $this->get('form.factory')->create(VannonceEditType::class, $annonce);
       if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
         $em = $this->getDoctrine()->getManager();
         $em->persist($annonce);
         $em->flush();

         return $this->redirectToRoute('ag_platform_lconsulter');
       }

       return $this->render('AGPlatformBundle:Agence:ajouterl.html.twig', array(
         'form' => $form->createView(),
       ));
      }

      public function lsupprimerAction($id)
       {
          $em = $this->getDoctrine()->getManager();
         $annonce = $em->find('AGPlatformBundle:Vannonce',$id);

        $em->remove($annonce);
        $em->flush();

        $repository = $em->getRepository('AGPlatformBundle:Vannonce') ;
        $listAnnonce = $repository->findAll();

    return $this->render('AGPlatformBundle:Agence:vul.html.twig', array(
         'listannonce' => $listAnnonce
       ));

       }
       public function llouerAction(Request $request, $id)
        {
          $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('AGPlatformBundle:Vannonce')->find($id);
        $annonce->setLoue(true) ;
        $form   = $this->get('form.factory')->create(VannonceEditVenduType::class, $annonce);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
          $em = $this->getDoctrine()->getManager();
          $em->persist($annonce);
          $em->flush();

          return $this->redirectToRoute('ag_platform_lloue');
        }

        return $this->render('AGPlatformBundle:Agence:llouer.html.twig', array(
          'form' => $form->createView(),
        ));
       }

       public function lloueAction()
         {

        $repository = $this
       ->getDoctrine()
       ->getManager()
       ->getRepository('AGPlatformBundle:Vannonce')
       ;

       $listAnnonce = $repository->findBy(array('loue'=>true ,'test'=>true));

       return $this->render('AGPlatformBundle:Agence:lloue.html.twig', array(
           'listannonceloues' => $listAnnonce
         ));



         }
}
