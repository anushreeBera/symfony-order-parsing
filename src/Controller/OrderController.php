<?php

namespace App\Controller;

use App\Form\Type\ChangePasswordType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Rs\JsonLines\JsonLines;

/**
 * Controller used to manage order.
 *
 * @author Anushree B <anushreejsr@gmail.com>
 */
#[Route('/order')]
class OrderController extends AbstractController
{
    #[Route('/', methods: ['GET'], name: 'order_get')]
    public function get(Request $request, EntityManagerInterface $entityManager): Response
    {
        $json = (new JsonLines())->delineFromFile(__DIR__ . "/../../assets/data/coding-challenge-1.jsonl");
        $json = json_decode($json, true);
        var_dump($json);die();
    }
}