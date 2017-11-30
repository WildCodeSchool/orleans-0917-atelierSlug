<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 29/11/17
 * Time: 10:15
 */

namespace AppBundle\Tests\Service;


use AppBundle\Service\SlugGenerator;
use PHPUnit\Framework\TestCase;

class SlugTest extends TestCase
{
    public function testSlug()
    {
        $slugGenerator = new SlugGenerator();
        $this->assertEquals('mon-super-titre', $slugGenerator->generate('Mon super Titre'));
        $this->assertEquals('qui-est-le-meilleur-formateur', $slugGenerator->generate(' Qui est le meilleur formateur ? '));
    }
}