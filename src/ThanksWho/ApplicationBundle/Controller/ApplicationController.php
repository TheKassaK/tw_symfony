<?php

namespace ThanksWho\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ApplicationController extends Controller
{
    /**
     * @Route("/" , name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => "ok");

    }

    /**
     * @Route("/memberarea" , name="timeline")
     * @Template()
     */
    public function timelineAction()
    {
        return array('name' => "ok");

    }

    /**
     * @Route("/memberarea/navbar" , name="navbar")
     * @Template()
     */
    public function navbarAction()
    {

    }

    /**
     * @Route("/memberarea/mailbox" , name="mailbox")
     * @Template()
     */
    public function mailboxAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/settings" , name="settings")
     * @Template()
     */
    public function settingsAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/frenks" , name="frenks")
     * @Template()
     */
    public function frenksAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/help" , name="help")
     * @Template()
     */
    public function helpAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/bug" , name="bug")
     * @Template()
     */
    public function bugAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/cgu" , name="cgu")
     * @Template()
     */
    public function cguAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/mailing" , name="mailing")
     * @Template()
     */
    public function mailingAction()
    {
        return array('name' => "ok");
    }

    /**
     * @Route("/memberarea/charte" , name="charte")
     * @Template()
     */
    public function charteAction()
    {
        return array('name' => "ok");
    }
}
