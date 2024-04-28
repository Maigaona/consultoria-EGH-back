<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultoriaController extends AbstractController
{
    /**
     * @Route("/formulario", methods={"POST"})
     */
    public function recibeFormulario(
        Request $request,
        LoggerInterface $logger
    ): Response
    {
        $name = $request->get('fname');
        $email = $request->get('femail');
        $phone = $request->get('fphone');
        $message = $request->get('fmessage');

        $logger->info("Recibí nombre $name");
        $logger->info("Recibí email $email");
        $logger->info("Recibí teléfono $phone");
        $logger->info("Recibí mensaje $message");

        return new Response();
    }
}