<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticlesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

for($i=0;$i<=10;$i++)
{
    $article = new Article();
    $article->setTitle("Le titre d'article N $i")
            ->setContent("<p>contenu de l'article n $i</p>")
            ->setImage("https://palaceold.it/350x150")
            ->setCreatedAt(new \DateTime());
    $manager->persist($article);
    

}
        $manager->flush();
    }
}
