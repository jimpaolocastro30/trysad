<?php

namespace App\Controller;
use App\Entity\Uploads;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileUploadController extends AbstractController
{
    /**
     * @Route("/file/upload", name="file_upload")
     */
    public function upload(Request $request): Response
    {
        $uploads = new Uploads();
        $form = $this->createForm(UploadFilesType::class, $uploads);
        $form->handleRequest($request);

        return $this->render('file_upload/index.html.twig', [
            'controller_name' => 'FileUploadController',
            'uploadFiles' => $form->createView(),
        ]);
    }

    

}
