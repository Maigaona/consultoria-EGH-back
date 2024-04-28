<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConsultoriaController extends AbstractController
{
    /**
     * Recibe información de formulario.
     * @Route("/formulario", methods={"POST"})
     */
    public function recibeFormulario(
        Request $request,
        EntityManagerInterface $entityManager,
        LoggerInterface $logger
    ): Response
    {
        $cn = $entityManager->getConnection();
        $name = $request->get('fname');
        $email = $request->get('femail');
        $phone = $request->get('fphone');
        $message = $request->get('fmessage');

        $logger->info("Recibí nombre $name");
        $logger->info("Recibí email $email");
        $logger->info("Recibí teléfono $phone");
        $logger->info("Recibí mensaje $message");

        $cn->executeStatement("
            INSERT INTO formularios(nombre, email, telefono, mensaje) VALUES
            (:nombre, :email, :telefono, :mensaje) 
        ", [
            "nombre" => $name,
            "email" => $email,
            "telefono" => $phone,
            "mensaje" => $message
        ]);

        return new RedirectResponse("/");
    }

    /**
     * Redirecciona a index.html
     * @Route("/{req}")
     */
    public function redireccionar(Request $request): Response {
        return new RedirectResponse("/", 302, $request->headers->all());
    }
}