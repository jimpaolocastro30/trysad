<?php

namespace App\Controller;

use App\Entity\Uploads;
use App\Form\UploadFilesType;
use App\Entity\Animals;
use App\Form\AnimalsType;
use App\Entity\SubAnimal;
use App\Form\SubAnimalType;
use App\Entity\Location;
use App\Form\LocationType;
use App\Entity\Sublocation;
use App\Form\SublocationType;
use App\Entity\Trips;
use App\Form\TripsType;
use App\Entity\Pages;
use App\Form\PagesType;
use App\Form\ManageFilesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


 /**
  * Require ROLE_ADMIN for *every* controller method in this class.
  *
  * @IsGranted("ROLE_ADMIN")
  */
class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function admin(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController'
         ]);
    }

    /**
     * @Route("/admin/upload-photos-and-videos", name="upload_files")
     */
    public function uploadFiles(Request $request): Response
    {
        
        $form = $this->createForm(UploadFilesType::class, null, array(
            'attr' => array(
                'id' => 'upload_form'
            )
        ));
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            $files= $form->get('images')->getData();

            
            $saveToDB = $this->getDoctrine()->getManager();


                foreach($files as $file){
                      
                    $uploads = new Uploads();

                    $filename = md5(uniqid()) . '.' . $file->guessExtension();
                    $mime = $file->getMimetype();
                    $image_path = $this->getParameter('uploads_dir');

                    $file->move(
                        $image_path,
                        $filename
                    );
                  
                    $uploads->setImgName($filename);
                    $uploads->setFtype($mime);
                    $uploads->setPath($image_path);
                    $uploads->setTimestamp(new \DateTime());
                    $saveToDB->persist($uploads);
                    

                   
                }

                $saveToDB->flush();

                $this->addFlash(
                    'info',
                    'Successfully Uploaded!'
                );

              
            return $this->redirectToRoute('upload_files');

        }

        return $this->render('admin/upload-files.html.twig', [
            'controller_name' => 'Upload Photos and Videos',
            'uploadFiles' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/manage-photos-and-videos", name="manage_files")
     */
    public function manageFiles(Request $request): Response
    {

        $files = new Uploads();

        $form = $this->createForm(ManageFilesType::class, $files);

        $form->handleRequest($request);

        return $this->render('admin/manage-files.html.twig', [
            'controller_name' => 'Manage Photos and Videos',
            'manageFiles' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/files.json", name="list_files")
     */
    public function jsonListFiles() :Response
    {

        $uploads = $this->getDoctrine()
                       ->getRepository('App:Uploads')
                       ->findAll();


        $data = array();

        foreach($uploads as $image){

            $data['data'][] = array(
                'imageName' => "<img width='320' src='../uploads/".$image->getImgName()."'>",
                'type' => $image->getFtype(),
                'animal' => $image->getAnimal(),
                'location' => $image->getLocation(),
                'year' =>$image->getYear(),
                'description' => $image->getDescription(),
                'trips' => $image->getTrip(),
                'option' => "<a href='#' rel='modal:open' class='btn btn-primary'>EDIT</a> <a href='#' rel='modal:open' class='btn btn-danger'>DELETE</a>"
            );

        }

        return new JsonResponse($data);

    }

    /**
     * @Route("/admin/animals.json", name="load_animals")
     */

    public function loadAnimals()
    {

        $animals = $this->getDoctrine()
        ->getRepository('App:Animals')
        ->findAll();

        $data = array();

        foreach($animals as $animal){

            $data['data'][] = array(
                "animal" => "<h5><i class='fa fa-pencil text-primary'></i> <i class='fa fa-times fa-clickable text-danger delAnimal' data-id='".$animal->getId()."' title='Delete Category'></i> ".$animal->getAnimal()."</h5><br />
                            <a href='".$this->generateUrl('new_subcategory', array('cat'=>$animal->getId()))."' rel='modal:open' class='add-another'>+ Add Sub Category</a>"
            );

        }

        return new JsonResponse($data);


    }

    /**
     * @Route("/admin/location.json", name="load_location")
     */

    public function loadLocation()
    {

        $locations = $this->getDoctrine()->getRepository('App:Location')->findAll();

        $em = $this->getDoctrine()->getManager();

        $countlocations = $em->getRepository('App:Location');

        $count = $countlocations->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $data = array();

        foreach($locations as $location){

            $data['data'][] = array(
                "location" => "<h5><i class='fa fa-pencil text-primary'></i> <i class='fa fa-times fa-clickable text-danger delAnimal' data-id='".$location->getId()."' title='Delete Category'></i> ".$location->getLocation()."</h5><br />
                            <a href='".$this->generateUrl('new_sublocation', array('loc'=>$location->getId()))."' rel='modal:open' class='add-another'>+ Add Sub Category</a>"
            );

        }

        if($count>0){
            return new JsonResponse($data);
        } else {
            return new JsonResponse(["data"=>[]]);
        }

         


    }

    /**
     * @Route("/admin/pagelist.json", name="load_pagelist")
     */

    public function loadPageList()
    {

        $pages = $this->getDoctrine()->getRepository('App:Pages')->findAll();

        $em = $this->getDoctrine()->getManager();

        $countPages = $em->getRepository('App:Pages');

        $count = $countPages->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $data = array();

        foreach($pages as $page){

            $data['data'][] = array(
                "order" => $page->getMenuOrder(),
                "title" => $page->getPageTitle(),
                "description" => $page->getPageDescription(),
                "url" => $page->getPageName(),
                "createdat" => $page->getDatecreated(),
                "updatedat" => $page->getDateupdated(),
                "opts" => "<button class='btn btn-success del-trips' data-id='".$page->getId()."' >PUBLISH</button> <a class='btn btn-primary' href='#' >EDIT</a>"
            );

        }

        if($count>0){
            return new JsonResponse($data);
        } else {
            return new JsonResponse(["data"=>[]]);
        }

         


    }

    /**
     * @Route("/admin/trips.json", name="load_trips")
     */

    public function loadTrips()
    {

        $trips = $this->getDoctrine()->getRepository('App:Trips')->findAll();

        $em = $this->getDoctrine()->getManager();

        $countTrips = $em->getRepository('App:Trips');

        $count = $countTrips->createQueryBuilder('a')->select('count(a.id)')->getQuery()->getSingleScalarResult();

        $data = array();

        foreach($trips as $trip){

            $data['data'][] = array(
                "trips" => $trip->getTrip(),
                "month" => date('F', mktime(0, 0, 0, $trip->getTripMonth(), 10)),
                "year" => $trip->getTripYear(),
                "opts" => "<button class='btn btn-danger del-trips' data-id='".$trip->getId()."' >Delete</button>"
            );

        }

        if($count>0){
            return new JsonResponse($data);
        } else {
            return new JsonResponse(["data"=>[]]);
        }

         


    }

    /**
     * @Route("/admin/manage-animals", name="manage_animals")
     */
    public function manageAnimals(Request $request): Response
    {

        $animal = new Animals();

        $form = $this->createForm(AnimalsType::class, $animal, array(
            'attr' => array(
                'id' => 'frmanimals'
            )
        ));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();

            $this->addFlash(
                'info',
                'Successfully Added!'
            );

            return $this->redirectToRoute('manage_animals');

        }    

        return $this->render('admin/manage-animals.html.twig', [
            'controller_name' => 'Manage Animals',
            'frmanimals' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/new-sub-category/{cat}", name="new_subcategory")
     */
    public function newSubCategory(Request $request): Response
    {

        $subanimal = new SubAnimal();

        $form = $this->createForm(SubAnimalType::class, $subanimal, array(
            'attr' => array(
                'id' => 'frmsubanimals'
            )
        ));

        $form->handleRequest($request);

        // if($form->isSubmitted() && $form->isValid())
        // {

            //dd($request->request->all());
            // $em = $this->getDoctrine()->getManager();
            // $em->persist($subanimal);
            // $em->flush();

            // $this->addFlash(
            //     'info',
            //     'Successfully Added!'
            // );

           

        //} 

        return $this->render('admin/new-sub-category.html.twig', [
            'controller_name' => 'New Sub Category',
            'frmsubanimals' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/new-sub-location/{loc}", name="new_sublocation")
     */
    public function newSubLocation(Request $request): Response
    {

        $sublocation = new Sublocation();

        $form = $this->createForm(SublocationType::class, $sublocation, array(
            'attr' => array(
                'id' => 'frmsublocation'
            )
        ));

        $form->handleRequest($request);

        

        return $this->render('admin/new-sub-location.html.twig', [
            'controller_name' => 'New Sub Location',
            'frmsublocation' => $form->createView()
        ]);
    }


    /**
     * @Route("/admin/save-sub-category.php", name="add_subcategory")
     */
    public function addSubCategory(Request $request): Response
    {
            dd($request->getContent());
    }

    /**
     * @Route("/admin/manage-locations", name="manage_location")
     */
    public function manageLocation(Request $request): Response
    {

        $location = new Location();

        $form = $this->createForm(LocationType::class, $location, array(
            'attr' => array(
                'id' => 'frmlocation'
            )
        ));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($location);
            $em->flush();

            $this->addFlash(
                'info',
                'Successfully Added!'
            );

            return $this->redirectToRoute('manage_location');

        }  

        return $this->render('admin/manage-location.html.twig', [
            'controller_name' => 'Manage Location',
            'frmlocation' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/manage-trips", name="manage_trips")
     */
    public function manageTrips(Request $request): Response
    {


        $trips = new Trips();

        $form = $this->createForm(TripsType::class, $trips, array(
            'attr' => array(
                'id' => 'frmtrips'
            )
        ));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($trips);
            $em->flush();

            $this->addFlash(
                'info',
                'Successfully Added!'
            );

            return $this->redirectToRoute('manage_trips');

        }  

        return $this->render('admin/manage-trips.html.twig', [
            'controller_name' => 'Manage Trips',
            'frmtrips' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/manage-pages", name="manage_pages")
     */
    public function managePages(): Response
    {
        return $this->render('admin/manage-pages.html.twig', [
            'controller_name' => 'Manage Pages',
        ]);
    }

    /**
     * @Route("/admin/manage-photos", name="manage_photos")
     */
    public function managePhotos(): Response
    {
        return $this->render('admin/manage-photos.html.twig', [
            'controller_name' => 'Manage Photos',
        ]);
    }


    

    /**
     * @Route("/admin/create-page", name="create_page")
     */
    public function createPages(Request $request): Response
    {

        $pages = new Pages();

        $form = $this->createForm(PagesType::class, $pages, array(
            'attr' => array(
                'id' => 'frmpagelist'
            )
        ));

        $form->handleRequest($request);

        return $this->render('admin/create-page.html.twig', [
            'controller_name' => 'Create Page',
            'frmpagelist' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/manage-settings", name="manage_settings")
     */
    public function manageSettings(): Response
    {
        return $this->render('admin/manage-settings.html.twig', [
            'controller_name' => 'Manage Settings',
        ]);
    }

}
