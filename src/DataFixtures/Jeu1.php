<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Disc;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $artist4 = new Artist();

        $artist4->setArtistName("Queens Of The Stone Age");
        $artist4->setArtistUrl("https://qotsa.com/");

        
        
        $manager->persist($artist4);
      

        $artist1 = new Artist();

        $artist1->setArtistName("Neil Young");
        $artist1->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist1);
      

        $artist2 = new Artist();

        $artist2->setArtistName("YES");
        $artist2->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist2);
        

        $artist3 = new Artist();

        $artist3->setArtistName("Rolling Stones");
        $artist3->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist3);
       

        $artist5 = new Artist();

        $artist5->setArtistName("Serge Gainsbourg");
        $artist5->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist5);
        

        $artist6 = new Artist();

        $artist6->setArtistName("AC/DC");
        $artist6->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist6);
       

        $artist7 = new Artist();

        $artist7->setArtistName("Marillion");
        $artist7->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist7);
         

        $artist8 = new Artist();

        $artist8->setArtistName("Bob Dylan");
        $artist8->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist8);
       

        $artist9 = new Artist();

        $artist9->setArtistName("Fleshtones");
        $artist9->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist9);
        

        $artist10 = new Artist();

        $artist10->setArtistName("The Clash");
        $artist10->setArtistUrl("https://qotsa.com/");
        
        $manager->persist($artist10);
       


        $disc1 = new Disc();
        $disc1->setDiscTitle("Fugazi");
        $disc1->setDiscPicture("Fugazi.jpeg");
        $disc1->setDiscYear("1984");
        $disc1->setDiscLabel("EMI");
        $disc1->setDiscGenre("Prog");
        $disc1->setDiscPrice("14.99");
        $disc1->setArtist($artist7);
        $manager->persist($disc1);

        $disc2 = new Disc();
        $disc2->setDiscTitle("Songs for the Deaf");
        $disc2->setDiscPicture("https://en.wikipedia.org/wiki/Songs_for_the_Deaf#/media/File:Queens_of_the_Stone_Age_-_Songs_for_the_Deaf.png");
        $disc2->setDiscYear("2002");
        $disc2->setDiscLabel("Interscope Records");
        $disc2->setDiscGenre("Rock/Stoner");
        $disc2->setDiscPrice("12.99");
        $disc2->setArtist($artist4);
        $manager->persist($disc2);


        $disc3 = new Disc();
        $disc3->setDiscTitle("Harvest Moon");
        $disc3->setDiscPicture("picture/Harvest Moon.jpeg");
        $disc3->setDiscYear("1992");
        $disc3->setDiscLabel("Reprise Records");
        $disc3->setDiscGenre("Rock");
        $disc3->setDiscPrice("4.20");
        $disc3->setArtist($artist1);
        $manager->persist($disc3);
     
        $disc4 = new Disc();
        $disc4->setDiscTitle("Initials BB");
        $disc4->setDiscPicture("picture/Initials BB.jpeg");
        $disc4->setDiscYear("1968");
        $disc4->setDiscLabel("Philips");
        $disc4->setDiscGenre("Chanson, Pop Rock");
        $disc4->setDiscPrice("12.99");
        $disc4->setArtist($artist5);
        $manager->persist($disc4);
 
        $disc5 = new Disc();
        $disc5->setDiscTitle("After the Gold Rush");
        $disc5->setDiscPicture("picture/After the Gold Rush.jpeg");
        $disc5->setDiscYear("1970");
        $disc5->setDiscLabel("Reprise Records");
        $disc5->setDiscGenre("Country Rock");
        $disc5->setDiscPrice("20.00");
        $disc5->setArtist($artist1);
 
        $manager->persist($disc5);

        $disc6 = new Disc();
        $disc6->setDiscTitle("Broken Arrow");
        $disc6->setDiscPicture("picture/Broken Arrow.jpeg");
        $disc6->setDiscYear("1996");
        $disc6->setDiscLabel("Reprise Records");
        $disc6->setDiscGenre("Country Rock, Classic Rock");
        $disc6->setDiscPrice("15.00");
        $disc6->setArtist($artist1);

        $manager->persist($disc6);

        $disc7 = new Disc();
        $disc7->setDiscTitle("Highway To Hell");
        $disc7->setDiscPicture("picture/Highway To Hell.jpeg");
        $disc7->setDiscYear("1979");
        $disc7->setDiscLabel("Atlantic");
        $disc7->setDiscGenre("Hard Rock");
        $disc7->setDiscPrice("15.00");
        $disc7->setArtist($artist6);
        $manager->persist($disc7);

        $disc8 = new Disc();
        $disc8->setDiscTitle("Drama");
        $disc8->setDiscPicture("picture/Drama.jpeg");
        $disc8->setDiscYear("1980");
        $disc8->setDiscLabel("Atlantic");
        $disc8->setDiscGenre("Prog");
        $disc8->setDiscPrice("15.00");
        $disc8->setArtist($artist2);
      
        $manager->persist($disc8);
        $disc9 = new Disc();
        $disc9->setDiscTitle("Year of the Horse");
        $disc9->setDiscPicture("picture/Year of the Horse.jpeg");
        $disc9->setDiscYear("1997");
        $disc9->setDiscLabel("Reprise Records");
        $disc9->setDiscGenre("Country Rock, Classic Rock");
        $disc9->setDiscPrice("7.50");
        $disc9->setArtist($artist1);
       
        $manager->persist($disc9);
        
        
        $disc10 = new Disc();
        $disc10->setDiscTitle("Ragged Glory");
        $disc10->setDiscPicture("picture/Ragged Glory.jpegjpeg");
        $disc10->setDiscYear("1990");
        $disc10->setDiscLabel("Reprise Records");
        $disc10->setDiscGenre("Country Rock, Grunge");
        $disc10->setDiscPrice("11.00");
        $disc10->setArtist($artist4);
        $manager->persist($disc10);

           
        $disc11 = new Disc();
        $disc11->setDiscTitle("Rust Never Sleeps");
        $disc11->setDiscPicture("picture/Rust Never Sleeps.jpeg");
        $disc11->setDiscYear("1979");
        $disc11->setDiscLabel("Reprise Records");
        $disc11->setDiscGenre("Country Rock, Classic Rock");
        $disc11->setDiscPrice("15.00");
        $disc11->setArtist($artist1);
        $manager->persist($disc11);

                   
        $disc12 = new Disc();
        $disc12->setDiscTitle("Exile on main street");
        $disc12->setDiscPicture("picture/Exile on main street.jpeg");
        $disc12->setDiscYear("1972");
        $disc12->setDiscLabel("Reprise Records");
        $disc12->setDiscGenre("Classic Rock, Arena Rock");
        $disc12->setDiscPrice("33.00");
        $disc12->setArtist($artist1);
   
        $manager->persist($disc12);

        $disc13 = new Disc();
        $disc13->setDiscTitle("London Calling");
        $disc13->setDiscPicture("picture/London Calling.jpeg");
        $disc13->setDiscYear("1971");
        $disc13->setDiscLabel("CBS");
        $disc13->setDiscGenre("Punk, New Wave");
        $disc13->setDiscPrice("33.00");
        $disc13->setArtist($artist10);
   
        $manager->persist($disc13);

        $disc14 = new Disc();
        $disc14->setDiscTitle("Beggars Banquet");
        $disc14->setDiscPicture("picture/Beggars Banquet.jpeg");
        $disc14->setDiscYear("1968");
        $disc14->setDiscLabel("Rolling Stones Records");
        $disc14->setDiscGenre("Blues Rock, Classic Rock");
        $disc14->setDiscPrice("33.00");
        $disc14->setArtist($artist1);
        $manager->persist($disc14);

        $disc15= new Disc();
        $disc15->setDiscTitle("Laboratory of sound");
        $disc15->setDiscPicture("picture/Laboratory of sound.jpeg");
        $disc15->setDiscYear("1995");
        $disc15->setDiscLabel("Rebel Rec");
        $disc15->setDiscGenre("Rock");
        $disc15->setDiscPrice("33.00");
        $disc15->setArtist($artist9);
        $manager->persist($disc15);
        

$manager->flush();
    }
}
