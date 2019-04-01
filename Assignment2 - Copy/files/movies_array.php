<?php

// This is the multidimensional array that holds all of the movie information for the top 10 horror films of 2018.
// I hope to be able to transition this over into a SQL database at some point!

        $movies = array( 

           "1" =>  array( //// A QUIET PLACE
                'rank'=>'1',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMjI0MDMzNTQ0M15BMl5BanBnXkFtZTgwMTM5NzM3NDM@._V1_UY209_CR0,0,140,209_AL_.jpg',
                'title'=>'A Quiet Place',
                'date'=>'6 April 2018',
                'runtime'=>'1h 30min',
                'rating'=>'7.6/10',
                'letterRating'=>'PG-13',
                'summary'=>'In a post-apocalyptic world, a family is forced to live in silence while hiding from monsters with ultra-sensitive hearing.',
                'director'=>'John Krasinski',
                'writers'=>'Bryan Woods (screenplay by), Scott Beck (screenplay by)',
                'stars'=>'Emily Blunt, John Krasinski, Millicent Simmonds',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/WR7cc5t7tv8" frameborder="0" allow="accelerometer;autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'At a brisk 90 minutes, it\'s one of the most inventive and beautifully crafted and acted horror movies I\'ve seen in a very long time, and I think the main reason for its power is the family crisis at its core. - Peter Rainer',
                    '2'=>'But there are moments when the movie takes us firmly by the hand and escorts us down a darkened path, and they lead to one of the most profound of communal pleasures: the sound of a movie audience screaming as one. - Sam Adams',
                    '3'=>'
                     A Quiet Place is a superb exercise in understated terror that puts to shame "horror" films that rely on jump scaresand cheap theatrics. - James Berardinelli',
                    '4'=>'This is a movie about the sound of fear, but it gives us a great deal more to listen to. - Josephine Livingstone'
                ),
            ),

            "2" => array(   // UPGRADE
                'rank'=>'2',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMjI0NzcyMjM5Ml5BMl5BanBnXkFtZTgwMzk2NzAyNTM@._V1_UY209_CR0,0,140,209_AL_.jpg',
                'title'=>'Upgrade',
                'date'=>'1 June 2018',
                'runtime'=>'1h 40min',
                'rating'=>'7.6/10',
                'letterRating'=>'R',
                'summary'=>'Set in the near-future, technology controls nearly all aspects of life. But when Grey, a self-identified technophobe, has his world turned upside down, his only hope for revenge is an experimental computer chip implant called Stem.',
                'director'=>'Leigh Whannell',
                'writers'=>'Leigh Whannell',
                'stars'=>'Logan Marshall-Green, Melanie Vallejo, Steve Danielsen',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/36PDeN9NRZ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Upgrade is as fluid and exhilarating as anything the Wachowskis signed their names to in the days when they were 
                    brothers: the kind of nifty, sometimes nasty surprise our multiplexes sorely need. - Mike McCahill',
                    '2'=>'Upgrade is a brutish, efficient and well-executed slice of cyberpunk action-horror with a silly streak. - Katie Walsh',
                    '3'=>'The well-told Upgrade maintains the dystopian vibrancy until the end, compensating the less vivid moments with a
                     subtle dark humor that fits hand in glove. - Filipe Freitas',
                    '4'=>'Upgrade explores a very interesting dynamic between humans and technology. It\'s not a new concept, but the way it\'s
                     explored feels fresh and different. - Emmanuel Noisette'
                ),
            ),
                
            "3" => array(   // CLIMAX
                'rank'=>'3',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMjllYmQ2OGQtN2IxZC00ODJiLWI4NjQtYmNlZjYzNzUzYjkyXkEyXkFqcGdeQXVyNTAzMTY4MDA@._V1_UY209_CR7,0,140,209_AL_.jpg',
                'title'=>'Climax',
                'date'=>'1 March 2019',
                'runtime'=>'1h 35min',
                'rating'=>'7.4/10',
                'letterRating'=>'PG-13',
                'summary'=>'French dancers gather in a remote, empty school building to rehearse on a wintry night. The all-night celebration morphs into a hallucinatory nightmare when they learn their sangria is laced with LSD.',
                'director'=>'Gaspar Noé',
                'writers'=>'Gaspar Noé',
                'stars'=>'Sofia Boutella, Romain Guillermic, Souheila Yacoub',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/Hi69nL_VrTE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Typically, the results are not nearly as originally dreaded, because no matter how far Noé\'s films can go off the rails -- 
                    some of us are still not over the final few minutes of Enter the Void -- they are always at the very least interesting 
                    to consume. - Barry Hertz',
                    '2'=>'Climax isn\'t so much about the inevitability of chaos, but about the sadness of watching something beautiful fall apart. 
                    And it is never less than electrifying. - Bilge Ebiri',
                    '3'=>'More brilliantly deranged, in its microscopic vision of society in collapse, than anything the director has ever inflicted
                     on us. - A.A. Dowd',
                    '4'=>'Climax is an orgy of youthful enthusiasm, beautifully humanistic repugnance, compellingly animalistic repulsion, dazzlingly
                     choreographed exhilaration and assuredly controlled grace; all soaked in hallucinogen-spiked sangria. - Harris Dang'
                ),
            ),

            "4" => array(   // HEREDITARY
                'rank'=>'4',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BOTU5MDg3OGItZWQ1Ny00ZGVmLTg2YTUtMzBkYzQ1YWIwZjlhXkEyXkFqcGdeQXVyNTAzMTY4MDA@._V1_UY209_CR0,0,140,209_AL_.jpg',
                'title'=>'Hereditary',
                'date'=>'8 June 2018',
                'runtime'=>'2h 7min',
                'rating'=>'7.3/10',
                'letterRating'=>'PG-13',
                'summary'=>'After the family matriarch passes away, a grieving family is haunted by tragic and disturbing occurrences, and begin to unravel dark secrets.',
                'director'=>'Ari Aster',
                'writers'=>'Ari Aster',
                'stars'=>'Toni Collette, Milly Shapiro, Gabriel Byrne',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/V6wWKNij_1M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Hereditary feels like an endless drawing out of that queasy, shocking, falling dream sensation, as the ground beneath the
                     Graham family, and the viewer, crumbles. - Andrew Whalen',
                    '2'=>'It has the nerve to suggest that the social unit is, by definition, self-menacing, and that the home is no longer a sanctuary
                     but a crumbling fortress, under siege from within. - Anthony Lane',
                    '3'=>'There\'s a lot going on and a lot that\'s been used before in "Hereditary". Ari Aster pushes scenes as far as they can possibly 
                    go. Yet it works. Toni Collette is its heart; she\'s superlative, her face moving from utter terror to delight to pure evil joy. - Sarah Cartland',
                    '4'=>'It\'s that patient, character-driven, tension-building, psychological horror that firmly plants itself into your mind, and
                     just refuses to let go. - Marianna Neal'
                ),
            ),

            "5" => array(   //THE PERFECTION
                'rank'=>'5',
                'poster'=>'https://bloody-disgusting.com/wp-content/uploads/2018/09/The-Perfection-Still-1-approved-_.jpg',
                'title'=>'The Perfection',
                'date'=>'20 September 2018',
                'runtime'=>'N/A',
                'rating'=>'7.1/10',
                'letterRating'=>'PG-13',
                'summary'=>'A cello prodigy\'s pursuit for perfection takes a sinister turn.',
                'director'=>'Richard Shepard',
                'writers'=>'Eric C. Charmelo, Richard Shepard',
                'stars'=>'Allison Williams, Steven Weber, Alaina Huffman',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/xI3you5K9RU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'This film is an absolute blast. It\'s an empowering message marred in horror, tragedy and overall WTF gasps. It\'s surely one 
                    of the most riveting films of the year and will be burned into your brain long after its ghastly crescendo. - James Clay',
                    '2'=>'The demented subject matter will likely turn off some viewers, but if you can stomach it, don\'t miss The Perfection. It is 
                    the embodiment of its namesake. - Trace Thurman',
                    '3'=>'Shepard\'s feature violently plucks at your heartstrings and cements itself as a relevant, albeit brutal allegory for 
                    conversation topics revolving around trauma. - Marisa Maribal',
                    '4'=>'THE PERFECTION\'s playfulness and body horror anchor an uncommon film into some incredibly entertaining waters. A strong 
                    stomach and good humor will be rewarded kindly by this one. - Deirdre Crimmins'
                ),
            ),

            "6" => array(   // SUSPIRIA
                'rank'=>'6',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMjQ2MTIyNjM2MF5BMl5BanBnXkFtZTgwMDE3NDMyNjM@._V1_UX140_CR0,0,140,209_AL_.jpg',
                'title'=>'Suspiria',
                'date'=>'2 November 2018',
                'runtime'=>'2h 32min',
                'rating'=>'7.0/10',
                'letterRating'=>'PG-13',
                'summary'=>'A darkness swirls at the center of a world-renowned dance company, one that will engulf the artistic director, an ambitious young dancer, and a grieving psychotherapist. Some will succumb to the nightmare. Others will finally wake up.',
                'director'=>'Luca Guadagnino',
                'writers'=>'Dario Argento (characters), Daria Nicolodi (characters)',
                'stars'=>'Chloë Grace Moretz, Tilda Swinton, Doris Hick',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/BY6QKRl56Ok" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Guadagnino is so intent on fulfilling his vision he doesn\'t seem to have room for any perspective besides his own, 
                    leaving the women in his narrative underserved in spite of his incredibly skilled efforts. - Andrea Thompson',
                    '2'=>'This Suspiria is beautifully enigmatic in its processes and vast in its delights, and for those willing to follow along 
                    and vibe along with it, its rewards are plentiful. - Nick Johnston',
                    '3'=>'The wit of David Kajganich\'s script is that organized religion, even the satanic Old Religion, is just politics by 
                    other means. Suspiria takes The Red Shoes or Black Swan to the next level of horror. - Richard von Busack',
                    '4'=>'Might be genius, or might be nonsense, but it\'s a unique and petrifying cinematic experience that will crawl 
                    into your soul and lodge there for a good while. - Jack Blackwell'
                ),
            ),

            "7" => array(   // THE HOUSE THAT JACK BUILT
                'rank'=>'7',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BNDQ4Y2E5ODktODI5ZS00ZGVkLTgyZTEtNWY1ZjNiZTFjOTE3XkEyXkFqcGdeQXVyODY3Nzc0OTk@._V1_UY209_CR0,0,140,209_AL_.jpg',
                'title'=>'The House That Jack Built',
                'date'=>'14 December 2018',
                'runtime'=>'2h 32min',
                'rating'=>'7.0/10',
                'letterRating'=>'PG-13',
                'summary'=>'A darkness swirls at the center of a world-renowned dance company, one that will engulf the artistic director, an ambitious 
                young dancer, and a grieving psychotherapist. Some will succumb to the nightmare. Others will finally wake up.',
                'director'=>'Lars von Trier',
                'writers'=>'Lars von Trier',
                'stars'=>'Matt Dillon, Bruno Ganz, Uma Thurman',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/BYF2tfdD1fA" frameborder="0" allow="accelerometer; 
                autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Here, examined, we\'re given instead raw narcissism, humdrum in the end, a soul worth glimpsing only for a second before 
                    casting aside. Nothing to behold. - Anne Elizabeth Moore',
                    '2'=>'To dismiss "Jack" out of hand in offense is not just to miss von Trier\'s point, but to prove it. - Barbara VanDenburgh',
                    '3'=>'The film finds von Trier wrestling with the claims of misogyny and misanthropy that have followed him his entire career, 
                    but not in the way you\'d expect. - Brian Tallerico',
                    '4'=>'[Von Trier] has managed to completely control the excesses of self-indulgence that entail such a tremendous gesture of sincerity. 
                    [Full Review in Spanish] - Sergi Sánchez'
                ),
            ),

            "8" => array(   // OVERLORD
                'rank'=>'8',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BYTUzYmJlNDgtMzM2ZS00N2ZkLWJjY2ItNzM0ZmVjMWU5OTA3XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UX140_CR0,0,140,209_AL_.jpg',
                'title'=>'Overlord',
                'date'=>'9 November 2018',
                'runtime'=>'1h 40min',
                'rating'=>'6.9/10',
                'letterRating'=>'PG-13',
                'summary'=>'A darkness swirls at the center of a world-renowned dance company, one that will engulf the artistic director, an ambitious 
                young dancer, and a grieving psychotherapist. Some will succumb to the nightmare. Others will finally wake up.',
                'director'=>'Julius Avery',
                'writers'=>'Billy Ray (screenplay by), Mark L. Smith (screenplay by)',
                'stars'=>'Jovan Adepo, Wyatt Russell, Mathilde Ollivier',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/USPd0vX2sdc" frameborder="0" allow="accelerometer; 
                autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Overlord takes many elements you\'ve seen before and creates a mashup that\'s able to deliver some gory fun, riveting suspense, 
                    zombie horrors, and terrifying depictions of modern war in equal measure. - Andrea Thompson',
                    '2'=>'It helps to be in the mood for a period Nazi zombie shoot-\'em-up but it\'s very successful at being a bit of fun and bloody
                     counterprogramming. - Brian Truitt',
                    '3'=>'It\'s reasonably good, creepy fun, provided you\'re not troubled by fleeting, uncomfortable thoughts like "Hey, that screaming 
                    bloodthirsty mutant monster could theoretically be a reanimated Anne Frank." - Mike D\'Angelo',
                    '4'=>'If anyone ever wished "Saving Private Ryan" were more of a B-movie splatterfest, "Overlord" is the movie for you. - Katie Walsh'
                ),
            ),

            "9" => array(   // ANNIHILATION
                'rank'=>'9',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMTk2Mjc2NzYxNl5BMl5BanBnXkFtZTgwMTA2OTA1NDM@._V1_UX140_CR0,0,140,209_AL_.jpg',
                'title'=>'Annihilation',
                'date'=>'23 February 2018',
                'runtime'=>'1h 55min',
                'rating'=>'6.9/10',
                'letterRating'=>'PG-13',
                'summary'=>'A darkness swirls at the center of a world-renowned dance company, one that will engulf the artistic director, an ambitious 
                young dancer, and a grieving psychotherapist. Some will succumb to the nightmare. Others will finally wake up.',
                'director'=>'Alex Garland',
                'writers'=>'Alex Garland (written for the screen by), Jeff VanderMeer (based on the novel by)',
                'stars'=>'Natalie Portman, Jennifer Jason Leigh, Tessa Thompson',
                'trailer'=>'<iframe width="560" height="315" src="https://www.youtube.com/embed/89OP78l9oF0" frameborder="0" allow="accelerometer; 
                autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'Annihilation\'s commitment to older psychoanalytic (and deconstructionist) models for the self and its inexpressible shadows 
                    makes this a readily accessible drama of emotion. - Josephine Livingstone',
                    '2'=>'Making movies steeped in vagueness these days is proving to be an excellent way to earn critical praise, but being artfully 
                    ambiguous strikes me as a way to cover for not being able to finish the job. - Kyle Smith',
                    '3'=>'
                    Annihilation is some heady nightmare fuel, but its most striking quality may be how little it has in common with the current trends 
                    in mainstream science fiction. - Alison Willmore',
                    '4'=>'It\'s excellent, a moviegoing experience unlike anything we\'re likely to see again anytime soon. - Allen Adams'
                ),
            ),

            "10" => array(  // BIRDBOX
                'rank'=>'10',
                'poster'=>'https://m.media-amazon.com/images/M/MV5BMjAzMTI1MjMyN15BMl5BanBnXkFtZTgwNzU5MTE2NjM@._V1_UY209_CR0,0,140,209_AL_.jpg',
                'title'=>'Birdbox',
                'date'=>'21 December 2018',
                'runtime'=>'2h 4min',
                'rating'=>'6.7/10',
                'letterRating'=>'PG-13',
                'summary'=>'Five years after an ominous unseen presence drives most of society to suicide, a mother and her two children make a desperate bid to reach safety.',
                'director'=>'Susanne Bier',
                'writers'=>'Eric Heisserer (screenplay), Josh Malerman (novel)',
                'stars'=>'Sandra Bullock, Trevante Rhodes, John Malkovich',
                'trailer'=>'<iframe width="460" height="315" src="https://www.youtube.com/embed/o2AsIXSh2xo" frameborder="0" allow="accelerometer; 
                autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'reviews'=> array(

                    '1'=>'It squanders an opportunity for thoughtful commentary on trauma and survival. - Cody Corrall',
                    '2'=>'Birdbox entertained me, but stressed me the hell out all at the same time. I spent half the film 
                    peeping through my fingers and jumping...just saying. - Carla Renata',
                    '3'=>'Unfortunately, Bird Box puts these performers through familiar paces, in roles of such tight typecasting that they seem like 
                    recurring characters in an extended TV series... - Richard Brody',
                    '4'=>'Bird Box, led by a strong Sandra Bullock, does a solid job of telling a story that compares the desire to destroy oneself with the 
                    constantly challenging nature of being a parent. - Roxana Hadadi'
                ),
            )
        );
        

        ?>