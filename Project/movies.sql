-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 15 Mar 2016 la 10:47
-- Versiune server: 5.6.12-log
-- Versiune PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Bază de date: `movies`
--
CREATE DATABASE IF NOT EXISTS `movies` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movies`;

--
-- Salvarea datelor din tabel `actors`
--

INSERT INTO `actors` (`list_nr`, `name`, `yob`, `awards_nr`, `uploader`, `actor_image`, `actor_biography`) VALUES
(1, 'Eddie Albert ', 1906, 4, 'Spam97', 'Eddie Albert.jpg', 'A graduate of the University of Minnesota, Eddie Albert was a circus trapeze flier before becoming a stage and radio actor. He made his film debut in 1938 and has worked steadily since, often cast as the friendly, good-natured buddy of the hero but occasionally being cast as a villain; one of his most memorable roles was as the cowardly, glory-seeking army officer in Robert Aldrich''s World War 2 film, Atac (1956).'),
(2, 'Paul Anka', 1941, 2, 'Spam97', 'Paul Anka.jpg', 'Canadian-born Paul Anka first achieved success in the 1950s as a teenage singing star (and, for the times, an unusual one in that he wrote many of his own songs). Although he appeared in several films, and was quite believable as a nervous, hyper young soldier in The Longest Day (1962) (for which he also composed the theme music), Anka''s main interest was music, and he concentrated his efforts into composing (he wrote lyrics for Frank Sinatra''s classic "My Way") and nightclub appearances in Las Vegas.'),
(3, 'Arletty', 1898, 0, 'Spam97', 'Arletty.jpg', 'Before Arlette-Leonie Bathiat went to the movies she was a secretary and had posed several times as a model for different painters and photographers. In 1920 she debuted on stage at a theatre. She only began to work in movies after 1930. After World War II she was condemned to prison for having been the lover of a German official during the ocupation of France. In 1963 she had an accident which left her almost blind. Her most important movies were filmed and directed by Marcel Carné ("Hotel du Nord (1938)" or "Enfants du Paradis, Les (1945)").'),
(4, 'Sean Connery', 1930, 37, 'Spam97', 'Sean Connery.jpg', 'Thomas Sean Connery was born on August 25, 1930 in Fountainbridge, Edinburgh. His mother, Euphamia McBain (Maclean), was a cleaning lady, and his father, Joseph Connery, was a factory worker and truck driver. He also has a brother named Neil Connery, who works as a plasterer in Edinburgh. He is of Irish and Scottish descent. Before going into acting, Sean had many different jobs, such as a Milkman, lorry driver, a laborer, artist''s model for the Edinburgh College of Art, coffin polisher and bodybuilder. He also joined the Royal Navy, but was later discharged because of medical problems. At the age of 23, he had a choice between becoming a professional footballer or an actor, and even though he showed much promise in the sport, he chose acting and said it was one of his more intelligent moves.'),
(5, 'Frank Welker', 1946, 3, 'Spam97', 'Frank Welker.jpg', 'Frank Welker was born on March 12, 1946 in Denver, Colorado, USA as Franklin Wendell Welker. He is an actor, known for Aladdin (1992), The Real Ghost Busters (1986) and Smurfs (1981).'),
(6, 'Tim Daly', 1956, 6, 'Spam97', 'Tim Daly.jpg', 'Tim Daly was born on March 1, 1956 in New York City, New York, USA as James Timothy Daly. He is an actor and producer, known for Wings (1990), Private Practice (2007) and Superman (1996). He was previously married to Amy Van Nostrand.'),
(7, 'Pat Carroll', 1927, 3, 'Spam97', 'Pat Carroll.jpg', 'She has played everything from chatterbox wives to wicked stepsisters on TV, and from Gertrude Stein to Shakespeare''s Falstaff on stage. At age 80 plus, the plucky comedienne shows no signs of stopping any time soon. The riotous Pat Carroll was born in Shreveport, Louisiana in 1927, the daughter of Kathryn Angela Meagher and Maurice Clifton Carroll. Her family moved to Los Angeles when Pat was five, and there began performing in local stage productions. She graduated from Hollywood''s Immaculate Heart High School, an all-girls Catholic school, then attended Immaculate College, also in Los Angeles, and Catholic University of America.'),
(8, 'Lea Salonga', 1971, 2, 'Spam97', 'Lea Salonga.jpg', 'Lea Salonga began her singing career at the age of ten, when she recorded her first album, Small Voice. She also hosted her own musical TV show, "Love, Lea". She starred in "Miss Saigon" and was then offered the role of the singing voice of Jasmine in the Disney film Aladdin (1992). She has continued to record albums. Lea has performed for Queen Elizabeth II, George Bush, and Bill Clinton.'),
(9, 'Dakota Fanning', 1994, 17, 'Spam97', 'Dakota Fanning.jpg', 'Hannah Dakota Fanning was born on the 23rd of February 1994, in Conyers, Georgia, USA, to Heather Joy (Arrington) and Steven Fanning. Her mother played professional tennis, and her father, now an electronics salesman, played minor league baseball. She is of German, Irish, English, French, and Channel Islander descent. Before her debut into the cinematic world, Dakota did her own acting around her house. She was very active for her age, and often put a blanket under her shirt and pretended to be having a baby, using her younger sister, Elle Fanning, who is also an actress now, as the baby. Dakota went to a playhouse near her home, where the children that attended put on a play every week to show to their parents. But the people running the playhouse noticed that Dakota stood out, and advised her parents to take her to an agency. They believed that she was extremely talented.'),
(10, 'Ryan Reynolds', 1976, 0, 'Spam97', 'Ryan Reynolds.jpg', 'Ryan Rodney Reynolds was born on October 23, 1976 in Vancouver, British Columbia, Canada, the youngest of four children. His father, Jim, was a food wholesaler and his mother, Tammy, was a retail-store saleswoman. Between 1991-93, Ryan appeared in Hillside (1990), a Nickleodeon series taped in Florida with many other Canadian actors. After the series ended, he returned to Vancouver where he played in a series of forgettable television movies. He did small roles in Glenn Close''s Serving in Silence: The Margarethe Cammermeyer Story (1995) and CBS''s update of In Cold Blood (1996). However, his run of luck had led him to decide to quit acting.'),
(11, 'Ed Skrein', 1983, 0, 'Spam97', 'Ed Skrein.jpg', 'Following a BA Hons degree from Central St Martins in Fine Art, Ed explored his passion for performing through music with Foreign Beggars, Plan B, Asian Dub Foundation and Nathan ''Flutebox'' Lee. His first acting role was the lead in iLL Manors, a role written specifically for him by best friend, Ben Drew. This was followed by key roles in Kieron Hawkes''s ''Piggy'' and Nick Love''s ''The Sweeney''. In 2013 Ed appeared on HBO''s ''Game of Thrones'' and made his British TV debut.'),
(12, 'Michael Benyaer', 1970, 0, 'Spam97', 'Michael Benyaer.jpg', 'Michael Benyaer was born on May 25, 1970 in Vancouver, British Columbia, Canada. He is an actor, known for Deadpool (2016), Transformers: Revenge of the Fallen (2009) and G.I. Joe: The Rise of Cobra (2009).'),
(13, 'Karan Soni', 1990, 0, 'Spam97', 'Karan Soni.jpg', 'Karan Soni is an actor, known for Deadpool (2016), Safety Not Guaranteed (2012) and Goosebumps (2015).'),
(14, 'T J Miller', 1981, 1, 'Spam97', 'T J Miller.jpg', 'A comedian. Improvisation, Sketch and Stand-up comedy are his forte.\r\n\r\nOriginally from Denver, Colorado, (an East Angel), he went to college in Washington, D.C. There he performed with the group receSs for 4 years, being the only person in his class out of 100 to audition and be accepted into the group. He remained the sole member of receSs until his junior year, when he was joined by Michael "Tuck The Ruckus" Tokaruk, an acclaimed comedian and equestrian, who taught T.J. how to ride a horse, a pastime he calls "droll." He met his future wife, Kate Gorney, when they performed in "A Chorus Line" in university production of the musical. She played The Ballerina (being an accomplished ballerina herself) and he played Richie, the African American character. He credits the casting to East High School, which was a primarily black and Latino high school, and also that no black people auditioned for the part.'),
(15, 'Ben Whishaw', 1980, 8, 'Spam97', 'Ben Whishaw.jpg', 'Proclaimed by many critics as one of the best young actors of his generation, Benjamin John Whishaw was born in Clifton, Bedfordshire, to Linda (Hope), who works in cosmetics, and Jose Whishaw, who works in information technology. He has a twin brother, James. He is of French, German, Russian (father) and English (mother) descent.'),
(16, 'Ralph Fiennes', 1962, 32, 'Spam97', 'Ralph Fiennes.jpg', 'Ralph Nathaniel Twisleton-Wykeham-Fiennes was born on December 22, 1962 in Suffolk, England, to Jennifer Anne Mary Alleyne (Lash), a novelist, and Mark Fiennes, a photographer. He is the eldest of six children. Four of his siblings are also in the arts: Martha Fiennes, a director; Magnus Fiennes, a musician; Sophie Fiennes, a producer; and Joseph Fiennes, an actor. He is of English, Irish, and Scottish origin.\r\n\r\nFiennes has been honored with two Academy Award nominations, the first in 1994 for his performance in Steven Spielberg''s Oscar-winning Best Picture, Schindler''s List (1993). Fiennes'' chilling portrayal of Nazi Commandant Amon Goeth also brought him a Golden Globe nomination and a BAFTA Award, as well as Best Supporting Actor honors from numerous critics groups, including the National Society of Film Critics, and the New York, Chicago, Boston and London Film Critics associations. Four years later, Fiennes earned his second Oscar nomination, for Best Actor, in another Best Picture winner, Anthony Minghella''s The English Patient  (1996). He also garnered Golden Globe and BAFTA Award nominations, as well as two Screen Actors Guild (SAG) Award nominations, one for Best Actor and another shared with the film''s ensemble cast.'),
(17, 'Daniel Craig', 1968, 13, 'Spam97', 'Daniel Craig.jpg', 'Daniel Craig, one of British theatre''s most famous faces, who waited tables as a struggling teenage actor with the National Youth Theatre, went on to star as "James Bond" in Casino Royale (2006), Quantum of Solace (2008), Skyfall (2012) and Spectre (2015).\r\n\r\nHe was born Daniel Wroughton Craig on March 2, 1968, at 41 Liverpool Road, Chester, Cheshire, England. His father, Timothy John Wroughton Craig, was a merchant seaman turned steel erector, and then became landlord of the "Ring O'' Bells" pub in Frodsham, Cheshire. His mother, Carol Olivia (Williams), was an art teacher. Craig is of English, as well as Welsh, Scottish, and Irish, ancestry. His parents split up in 1972, and young Daniel was raised with his older sister, Lea, in Liverpool, then in Hoylake, Wirral, in the home of his mother. His interest in acting was encouraged by visits to the Liverpool Everyman Theatre arranged by his mother. From the age of 6, Craig started acting in school plays, making his debut in the Frodsham Primary School production of "Oliver!", and his mother was the driving force behind his artistic aspirations. The first Bond movie he ever saw at the cinema was Roger Moore''s Live and Let Die (1973); young Daniel Craig saw it with his father, so it took a special place in his heart. He was also a good athlete and was a rugby player at Hoylake Rugby Club.'),
(18, 'Christoph Waltz', 1956, 79, 'Spam97', 'Christoph Waltz.jpg', 'Christoph Waltz was born in Vienna, Austria, to Elisabeth Urbancic, an Austrian-born costume designer, and Johannes Waltz, a German-born stage builder. He has 3 siblings. He was born into a theater family, as his maternal grandmother was Viennese Burgtheater actress Maria Mayen, and his step-grandfather was fellow Burgtheater actor Emmerich Reimers. His maternal grandfather, Rudolf von Urban, was a psychologist and psychiatrist who wrote the 1949 book "Sex Perfection and Marital Happiness".'),
(19, 'Naomie Harris', 1976, 6, 'Spam97', 'Naomie Harris.jpg', 'British actress Naomie Harris was born in London, the only child of television scriptwriter Lisselle Kayla. Her father is from Jamaica and her mother is from Trinidad. She showed an interest in acting from an early age and attended the prestigious Anna Scher Theatre School. From here, Harris won roles in various projects, such as Simon and the Witch (1987) and The Tomorrow People (1992). She went on to study social and political sciences at Pembroke College, Cambridge University, an experience Harris did not enjoy.'),
(20, 'Margot Robbie', 1990, 3, 'admin', 'Margot Robbie.jpg', ' Margot Robbie is an Australian actress born in Dalby, Queensland, and raised on the Gold Coast, spending much of her time at the farm belonging to her grandparents. Her mother, Sarie Kessler, is a physiotherapist. Robbie attended and graduated from Somerset College. In her late teens, she moved to Melbourne to pursue an acting career. Her first break came when she appeared in two films directed by Aash Aaron - Vigilante (2008) and I.C.U. (2009). In 2008, she began appearing as "Donna Freeman" in the soap opera, Neighbours (1985). The role and performance was popular and Robbie was nominated for several Logie Awards. She left the show in 2010 and set off to pursue Hollywood opportunities, quickly landing the role of "Laura Cameron" in the ABC drama, Pan Am (2011).'),
(21, 'Ben Affleck', 1972, 64, 'admin', 'Ben Affleck.jpg', ' Benjamin Géza Affleck-Boldt was born on August 15, 1972 in Berkeley, California, USA, and was raised in Cambridge, Massachusetts, USA. His mother, Chris Anne (née Boldt), is a school teacher, and his father, Timothy Byers Affleck, is a social worker; the two are now divorced. Ben has a younger brother, actor Casey Affleck, who was born in 1975. He is mostly of English, Irish, German, and Scottish ancestry. His middle name, "Géza", is after a family friend.'),
(22, 'Will Smith', 1968, 55, 'admin', 'Will Smith.jpg', ' Willard Christopher Smith, Jr. was born in West Philadelphia, Pennsylvania, the second of four children of Caroline (Bright), a school board employee, and Willard Carroll Smith, Sr., who owned a refrigeration company. He grew up in a middle class area in West Philadelphia called Wynnefield. Will attended the Overbrook High School located in the Overbrook section of Philadelphia, Pennsylvania. He got the nickname "Prince" because of the way he could charm his way out of trouble. Bright student Will also signed up with the high-status Julia Reynolds Masterman Laboratory and Demonstration School in Philadelphia.'),
(23, 'Jared Leto', 1971, 48, 'admin', 'Jared Leto.jpg', ' In the vein of musicians-turned-actors, Jared Leto is a very familiar face in recent film history. Although he has always been the lead vocals, rhythm guitar, and songwriter for American band 30 Seconds to Mars, Leto will always be remembered as an accomplished actor for the numerous, challenging projects he has taken in his life.'),
(24, 'Scott Eastwood', 1986, 1, 'admin', 'Scott Eastwood.jpg', ' Scott Eastwood (born Scott Clinton Reeves; March 21, 1986) is an American actor and model. He has appeared in the films Flags of Our Fathers (2006), Gran Torino (2008), Invictus (2009), The Forger (2012), Trouble with the Curve (2012), and Fury (2014). He co-starred in the 2013 horror film Texas Chainsaw 3D with Alexandra Daddario and starred in the romantic film The Longest Ride (2015) with Britt Robertson. He has also been the model for the fragrance Cool Water by Davidoff. He is the youngest son of award-winning actor-director Clint Eastwood.'),
(25, 'Jeffrey Dean Morgan', 1966, 0, 'admin', 'Jeffrey Dean Morgan.jpg', ' Jeffrey Dean Morgan endeared himself to audiences with his recurring role on ABC''s smash hit series, Anatomia lui Grey (2005). His dramatic arc as heart patient "Denny Duquette", who wins the heart of intern "Izzie Stevens" (Katherine Heigl) in a star-crossed romance, made him a universal fan favorite. He also had recurring roles on The CW and Warner Bros. Television''s drama series, Supernatural (2005), and on Showtime and Lions Gate Television''s award-winning comedy series, Weeds (2005).'),
(26, 'Henry Cavill', 1983, 1, 'admin', 'Henry Cavill.jpg', ' Henry William Dalgliesh Cavill is a British actor. He was born on the Bailiwick of Jersey, a British Crown dependency in the Channel Islands.\r\n\r\nHis mother, Marianne (Dalgliesh), a housewife, was also born on Jersey, and is of Irish, Scottish, and English ancestry. Henry''s father, Colin Richard Cavill, a stockbroker, is of English origin (born in Chester, England). Henry is the second youngest son, with four brothers. He was privately educated at St. Michael''s Preparatory School in Saint Saviour, Jersey before attending Stowe School in Buckinghamshire, England.\r\n\r\nHenry''s interest in acting started at an early age with school play renditions of Shakespeare''s "A Midsummer Night''s Dream", and Sonny in "Grease". He also starred and directed Hamlet in "40 Minutes".'),
(27, 'Jason Momoa', 1979, 1, 'admin', 'Jason Momoa.jpg', ' Jason Momoa was born Joseph Jason Namakaeha Momoa in Honolulu, Hawaii, on August first, 1979. He is the son of Coni (Lemke), a photographer, and Joseph Momoa, a painter. His father is of Hawaiian descent and his mother has German, Irish, and North American ancestry. Jason was raised in Norwalk, Iowa by his mother. After high school, he moved to Hawaii where he landed a lead role out of thousands of hopefuls in the T.V. series, Baywatch (1989) (known as "Baywatch Hawaii" in its tenth season).'),
(28, 'Gal Gadot', 1985, 0, 'admin', 'Gal Gadot.jpg', ' Gal Gadot is an Israeli actress and model. She was born in Rosh Ha''ayin, Israel, to a Jewish family (from Poland, Austria, Germany, and Czechoslovakia). She served in the IDF for two years, and won the Miss Israel title in 2004.\r\n Gal began modeling in the late 2000s, and made her film debut in the fourth film of the Fast and Furious franchise, Furios si iute 4 - Piese originale (2009), as Gisele. Her role was expanded in the sequels Furios si iute... în viteza a cincea (2011) and Furios si iute 6 (2013), in which her character was romantically linked to Han Seoul-Oh (Sung Kang). In the films, Gal performed her own stunts. She also appeared in the 2010 films Date Night (2010) and Knight and Day (2010). In early December 2013, Gal was cast as Wonder Woman in the upcoming superhero team-up film Batman v Superman: Începutul Justitiei (2016), with filming beginning in 2014 for a March 2016 release.');

--
-- Salvarea datelor din tabel `genres`
--

INSERT INTO `genres` (`name`) VALUES
('action'),
('adventure'),
('comedy'),
('history');

--
-- Salvarea datelor din tabel `movies`
--

INSERT INTO `movies` (`list_nr`, `title`, `yor`, `description`, `runtime`, `uploader`, `movie_image`, `movie_url_code`) VALUES
(1, 'The Longest Day', 1962, 'Tells the story of the D-Day invasion of Normandy in WWII. There are dozens of characters, some seen only briefly, who together weave the story of five separate invasion points that made up the operation.', 178, 'Spam97', 'The Longest Day.jpg', 'RW5t1V4xm3M'),
(2, 'My Neighbor Totoro', 1988, 'When two girls move to the country to be near their ailing mother, they have adventures with the wonderous forest spirits who live nearby.', 86, 'Spam97', 'My Neighbor Totoro.jpg', '92a7Hj0ijLs'),
(3, 'Deadpool', 2016, 'This is the origin story of former Special Forces operative turned mercenary Wade Wilson, who after being subjected to a rogue experiment that leaves him with accelerated healing powers, adopts the alter ego Deadpool. Armed with his new abilities and a dark, twisted sense of humor, Deadpool hunts down the man who nearly destroyed his life.', 108, 'Spam97', 'Deadpool.jpg', 'Xithigfg7dA'),
(4, 'Spectre', 2015, 'A cryptic message from the past sends James Bond on a rogue mission to Mexico City and eventually Rome, where he meets Lucia, the beautiful and forbidden widow of an infamous criminal. Bond infiltrates a secret meeting and uncovers the existence of the sinister organisation known as SPECTRE. Meanwhile back in London, Max Denbigh, the new head of the Centre of National Security, questions Bond''s actions and challenges the relevance of MI6 led by M. Bond covertly enlists Moneypenny and Q to help him seek out Madeleine Swann, the daughter of his old nemesis Mr White, who may hold the clue to untangling the web of SPECTRE. As the daughter of the assassin, she understands Bond in a way most others cannot. As Bond ventures towards the heart of SPECTRE, he learns a chilling connection between himself and the enemy he seeks.', 148, 'Spam97', 'Spectre.jpg', 'z4UDNzXD3qA'),
(5, 'Suicide Squad', 2016, ' A secret government agency run by Amanda Waller, named A.R.G.U.S creates a task force comprising super villains, the "Suicide Squad". They are assigned to execute dangerous tasks in exchange for shorter prison sentences.', 130, 'admin', 'Suicide Squad.jpg', 'WI3hecGO_04'),
(6, 'Batman vs Superman', 2016, ' Fearing the actions of Superman are left unchecked, Batman takes on the man of steel, while the world wrestles with what kind of a hero it really needs. With Batman and Superman fighting each other, a new threat, Doomsday, is created by Lex Luthor. It''s up to Superman and         Batman to set aside their differences along with Wonder Woman to stop Lex Luthor and Doomsday from destroying Metropolis.', 151, 'admin', 'Batman vs Superman.jpg', 'Cle_rKBpZ28');

--
-- Salvarea datelor din tabel `movie_actors`
--

INSERT INTO `movie_actors` (`actor_list_nr`, `movie_list_nr`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(21, 6),
(25, 6),
(26, 6),
(27, 6),
(28, 6);

--
-- Salvarea datelor din tabel `movie_genres`
--

INSERT INTO `movie_genres` (`genre_name`, `movie_list_nr`) VALUES
('action', 1),
('history', 1),
('adventure', 2),
('comedy', 2),
('action', 3),
('adventure', 3),
('comedy', 3),
('action', 4),
('adventure', 4),
('action', 5),
('adventure', 5),
('action', 6),
('adventure', 6);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
