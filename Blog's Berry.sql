
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Articles`
--

CREATE TABLE `BlogsBerry__Articles` (
  `ID` int(11) NOT NULL,
  `Published` datetime NOT NULL,
  `Deleted` datetime DEFAULT NULL,
  `BlogID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Articles`
--

INSERT INTO `BlogsBerry__Articles` (`ID`, `Published`, `Deleted`, `BlogID`, `Title`, `Content`, `Link`, `Image`) VALUES
(1, '2020-06-03 21:27:11', NULL, 1, 'Hello World from Pythony', 'When starting a new programming language, the tradition is to start with a program that displays the message &amp;quot;Hello World !&amp;quot; on the screen. And it is also with this message that I wanted to start my first article on this blog. During my life, I have had the opportunity to work on many projects, and this site is one of them. For many years, I have dreamed of being able to live off my passion, and I am about to do so.\n\nBut is this dream achievable, or is it just an illusion ?', 'https://www.pythony.dev/English/Blog/Hello-World-from-Pythony/BlogsBerry', 3854329),
(2, '2020-06-03 21:28:07', NULL, 2, 'Hello World de Pythony', 'Lorsque l\'on débute un nouveau langage de programmation, la tradition est de commencer par un programme affichant le message &amp;quot;Hello World !&amp;quot; à l\'écran. Et c\'est également par ce message que je tenais à commencer mon premier article sur ce blog. Au cours de ma vie, j\'ai eu l\'occasion de travailler sur de nombreux projets, et ce site est l\'un d\'entre eux. Depuis de longues années, je rêve de pouvoir vivre de ma passion, et je suis sur le point d\'y parvenir.\n\nMais ce rêve est-il réalisable, ou est-ce une simple illusion ?', 'https://www.pythony.dev/French/Blog/Hello-World-de-Pythony/BlogsBerry', 2767034),
(3, '2020-06-03 21:28:42', NULL, 1, 'Effectively Center in CSS with Flexbox', 'Since the advent of CSS, centering an element has always been a problem for many developers. Many techniques were developed, but none of them allowed for reliable horizontal and vertical centering. Fortunately, the flexbox property greatly simplifies the task, allowing us to have an optimal rendering in a few lines.\n\nDiscover this incredible property right away.', 'https://www.pythony.dev/English/Blog/Effectively-Center-in-CSS-with-Flexbox/BlogsBerry', 10203046),
(4, '2020-06-03 21:29:26', NULL, 2, 'Centrer Efficacement en CSS avec Flexbox', 'Depuis l\'apparition du CSS, le centrage d\'un élément a toujours été un problème pour de nombreux développeurs. De nombreuses techniques ont vu le jour, mais aucune ne permettait de centrer horizontalement et verticalement de façon fiable. Heureusement, la propriété flexbox nous simplifie grandement la tâche, en nous permettant d\'avoir un rendu optimal en quelques lignes.\n\nDécouvrez tout de suite cette incroyable propriété.', 'https://www.pythony.dev/French/Blog/Centrer-Efficacement-en-CSS-avec-Flexbox/BlogsBerry', 2523664),
(5, '2020-06-03 21:30:20', NULL, 1, 'Create Dynamic Forms with AJAX', 'While browsing the web, you may have already seen a form to fill out. They allow you to enter information, then redirect you to a page that stores it in a database. But there is now a method to simplify this operation, and thus avoid any page change.\n\nThis is AJAX, and its use has increased tenfold in recent years.', 'https://www.pythony.dev/English/Blog/Create-Dynamic-Forms-with-AJAX/BlogsBerry', 13278515),
(6, '2020-06-03 21:31:11', NULL, 2, 'Créer des Formulaires Dynamiques avec AJAX', 'En vous baladant sur le web, vous avez sûrement déjà aperçu un formulaire à remplir. Ils vous permettent de saisir des informations, puis vous redirigent vers une page les enregistrant en base de données. Mais il existe aujourd\'hui une méthode permettant de simplifier ce fonctionnement, et d\'éviter ainsi tout changement de page.\n\nIl s\'agit de l\'AJAX, et son utilisation s\'est décuplée au cours des dernières années.', 'https://www.pythony.dev/French/Blog/Creer-des-Formulaires-Dynamiques-avec-AJAX/BlogsBerry', 10594863),
(7, '2020-06-03 21:32:34', NULL, 1, 'Mastering the Terminal', 'Although not well known to the general public, the terminal is an essential element in the proper functioning of any operating system. Behind these lines, incomprehensible to most people, lies the precise operation of each action that your computer will be required to perform. From the simple creation of a file to the compilation of source code, the terminal hides many unsuspected resources.\n\nBut what can you really do with a terminal ?', 'https://www.pythony.dev/English/Blog/Mastering-the-Terminal/BlogsBerry', 675562),
(8, '2020-06-03 21:33:13', NULL, 2, 'Maîtriser le Terminal', 'Bien que méconnu du grand public, le terminal est un élément essentiel au bon fonctionnement de tout système d\'exploitation. Derrière ces lignes, incompréhensibles pour la majorité des personnes, se cache le fonctionnement précis de chaque action que votre ordinateur sera amené à exécuter. De la simple création de fichier, à la compilation d\'un code source, le terminal cache de nombreuses ressources insoupçonnées.\n\nMais que peut-on réellement faire avec un terminal ?', 'https://www.pythony.dev/French/Blog/Maitriser-le-Terminal/BlogsBerry', 5921202),
(9, '2020-06-03 21:34:07', NULL, 1, 'Discover the Model-View-Controller Architecture', 'When you start a new project, one of the first steps is to determine the architecture of your application. This defines how the different files in your project will communicate with each other, from the user request to the generation of an HTML page. There are indeed several methods to design the same site, and it is therefore important to think about it properly before starting a project.\n\nThe MVC architecture is one of them, and offers many advantages in terms of development time and source code maintenance.', 'https://www.pythony.dev/English/Blog/Discover-the-Model-View-Controller-Architecture/BlogsBerry', 16317211),
(10, '2020-06-03 21:35:04', NULL, 2, 'Découvrez l\'Architecture Model-View-Controller', 'Lorsque vous démarrez un nouveau projet, l\'une des premières étapes est de déterminer l\'architecture de votre application. Celle-ci définie la façon dont les différents fichiers de votre projet vont communiquer entre eux, depuis la requête de l\'utilisateur, jusqu\'à la génération d\'une page HTML. Il existe en effet plusieurs méthodes pour concevoir un même site, et il est donc important d\'y réflechir correctement avant de commencer un projet.\n\nL\'architecture MVC est l\'une d\'entre elles, et offre de nombreux avantages en terme de temps de développement et de maintenance du code source.', 'https://www.pythony.dev/French/Blog/Decouvrez-l-Architecture-Model-View-Controller/BlogsBerry', 5680815),
(11, '2020-06-03 21:35:49', NULL, 1, 'Optimize your Applications with Multithreading', 'An application developed with a programming language is a sequence of instructions, executing one after the other. However, such an operation has a major disadvantage, which is the dependence of each instruction on the previous instructions. As a result, the slightest slowdown in one of these operations may impact your entire application.\n\nTo avoid this, there is a technique called multithreading, which allows you to execute different instructions in parallel, thus increasing efficiency.', 'https://www.pythony.dev/English/Blog/Optimize-your-Applications-with-Multithreading/BlogsBerry', 6056271),
(12, '2020-06-03 21:36:50', NULL, 2, 'Optimisez vos Applications avec le Multithreading', 'Une application développée avec un langage de programmation est une suite d\'instructions, s\'exécutant les unes à la suite des autres. Un tel fonctionnement dispose toutefois d\'un inconvénient majeur, qui est la dépendance de chaque instruction envers les instructions précédentes. De ce fait, le moindre ralentissement de l\'une de ces opérations risque d\'impacter l\'intégralité de votre application.\n\nPour éviter cela, il existe une technique appelée multithreading, qui permet d\'exécuter différentes instructions en parallèle, et ainsi gagner en efficacité.', 'https://www.pythony.dev/French/Blog/Optimisez-vos-Applications-avec-le-Multithreading/BlogsBerry', 877220);

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Blogs`
--

CREATE TABLE `BlogsBerry__Blogs` (
  `ID` int(11) NOT NULL,
  `Published` datetime NOT NULL,
  `Deleted` datetime DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Link` varchar(255) NOT NULL,
  `Image` int(11) NOT NULL,
  `RSS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Blogs`
--

INSERT INTO `BlogsBerry__Blogs` (`ID`, `Published`, `Deleted`, `UserID`, `Language`, `Title`, `Content`, `Link`, `Image`, `RSS`) VALUES
(1, '2020-06-03 21:23:10', NULL, 1, 'English', 'Pythony', 'Player, Developer, Blogger \nBut above all Passionate', 'https://www.pythony.dev/English/Blog/BlogsBerry', 6521023, NULL),
(2, '2020-06-03 21:23:54', NULL, 1, 'French', 'Pythony', 'Joueur, Développeur, Blogueur \nMais avant tout Passionné', 'https://www.pythony.dev/French/Blog/BlogsBerry', 12721147, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Bookmarks`
--

CREATE TABLE `BlogsBerry__Bookmarks` (
  `ID` int(11) NOT NULL,
  `Created` datetime NOT NULL,
  `Deleted` datetime DEFAULT NULL,
  `UserID` int(11) NOT NULL,
  `BlogID` int(11) DEFAULT NULL,
  `ArticleID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Bookmarks`
--

INSERT INTO `BlogsBerry__Bookmarks` (`ID`, `Created`, `Deleted`, `UserID`, `BlogID`, `ArticleID`) VALUES
(1, '2020-06-03 21:39:14', NULL, 2, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Boosts`
--

CREATE TABLE `BlogsBerry__Boosts` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Start` datetime NOT NULL,
  `End` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Clicks`
--

CREATE TABLE `BlogsBerry__Clicks` (
  `ID` int(11) NOT NULL,
  `Clicked` datetime NOT NULL,
  `RandomID` int(11) NOT NULL,
  `BlogID` int(11) DEFAULT NULL,
  `ArticleID` int(11) DEFAULT NULL,
  `Search` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Clicks`
--

INSERT INTO `BlogsBerry__Clicks` (`ID`, `Clicked`, `RandomID`, `BlogID`, `ArticleID`, `Search`) VALUES
(1, '2020-06-03 21:37:19', 9878154, NULL, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Random`
--

CREATE TABLE `BlogsBerry__Random` (
  `ID` int(11) NOT NULL,
  `Created` datetime NOT NULL,
  `RandomID` int(11) NOT NULL,
  `IPAddress` varchar(255) NOT NULL,
  `UserAgent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Random`
--

INSERT INTO `BlogsBerry__Random` (`ID`, `Created`, `RandomID`, `IPAddress`, `UserAgent`) VALUES
(1, '2020-06-03 21:37:01', 9878154, '127.0.0.1/127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.1 Safari/605.1.15');

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Requests`
--

CREATE TABLE `BlogsBerry__Requests` (
  `ID` int(11) NOT NULL,
  `Requested` datetime NOT NULL,
  `RandomID` int(11) NOT NULL,
  `Request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Requests`
--

INSERT INTO `BlogsBerry__Requests` (`ID`, `Requested`, `RandomID`, `Request`) VALUES
(1, '2020-06-03 21:18:34', 4505862, '/');

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Searches`
--

CREATE TABLE `BlogsBerry__Searches` (
  `ID` int(11) NOT NULL,
  `Searched` datetime NOT NULL,
  `RandomID` int(11) NOT NULL,
  `BlogID` int(11) DEFAULT NULL,
  `ArticleID` int(11) DEFAULT NULL,
  `Search` varchar(255) NOT NULL,
  `Position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Searches`
--

INSERT INTO `BlogsBerry__Searches` (`ID`, `Searched`, `RandomID`, `BlogID`, `ArticleID`, `Search`, `Position`) VALUES
(1, '2020-06-03 21:37:06', 9878154, 1, NULL, 'P', 1);

-- --------------------------------------------------------

--
-- Table structure for table `BlogsBerry__Users`
--

CREATE TABLE `BlogsBerry__Users` (
  `ID` int(11) NOT NULL,
  `Registered` datetime NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Language` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Frequency` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Forgot` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BlogsBerry__Users`
--

INSERT INTO `BlogsBerry__Users` (`ID`, `Registered`, `Status`, `Language`, `Email`, `Username`, `Frequency`, `Password`, `Forgot`) VALUES
(1, '2020-06-03 21:20:34', 'Blogger', 'French', 'hello@pythony.dev', 'Pythony', 'Weekly', 'XXXXX', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BlogsBerry__Articles`
--
ALTER TABLE `BlogsBerry__Articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Blogs`
--
ALTER TABLE `BlogsBerry__Blogs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Bookmarks`
--
ALTER TABLE `BlogsBerry__Bookmarks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Boosts`
--
ALTER TABLE `BlogsBerry__Boosts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Clicks`
--
ALTER TABLE `BlogsBerry__Clicks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Random`
--
ALTER TABLE `BlogsBerry__Random`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Requests`
--
ALTER TABLE `BlogsBerry__Requests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Searches`
--
ALTER TABLE `BlogsBerry__Searches`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `BlogsBerry__Users`
--
ALTER TABLE `BlogsBerry__Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BlogsBerry__Articles`
--
ALTER TABLE `BlogsBerry__Articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `BlogsBerry__Blogs`
--
ALTER TABLE `BlogsBerry__Blogs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `BlogsBerry__Bookmarks`
--
ALTER TABLE `BlogsBerry__Bookmarks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `BlogsBerry__Boosts`
--
ALTER TABLE `BlogsBerry__Boosts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `BlogsBerry__Clicks`
--
ALTER TABLE `BlogsBerry__Clicks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `BlogsBerry__Random`
--
ALTER TABLE `BlogsBerry__Random`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `BlogsBerry__Requests`
--
ALTER TABLE `BlogsBerry__Requests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `BlogsBerry__Searches`
--
ALTER TABLE `BlogsBerry__Searches`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `BlogsBerry__Users`
--
ALTER TABLE `BlogsBerry__Users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
