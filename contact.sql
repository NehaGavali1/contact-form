
-- Table structure for table `detail`
--

create table `detail` (
  `id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `divi` varchar(20) DEFAULT NULL,
  `adde` text DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `father` varchar(20) NOT NULL,
  `faqu` varchar(20) DEFAULT NULL,
  `mother` varchar(20) DEFAULT NULL,
  `moqu` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



insert into `detail` (`id`, `fname`, `lname`, `class`, `divi`, `adde`, `blood`, `dob`, `father`, `faqu`, `mother`, `moqu`) VALUES
(0, '', '', '', '', '', '', '0000-00-00', '', '', '', ''),
(5, 'prita', 'lname', 'First year', 'B', 'goreaon', 'AB+', '1998-11-19', 'sandesh', '10th pass', 'meena', 'bachelor'),
(6, 'Neha', 'lname', 'Second year', 'A', 'oshiwara depot, oshiwara industry, link road, goregaon( w)mumbai 400104.', 'AB-', '1998-11-19', 'sandesh', '10th pass', 'meena', 'bachelor'),
(7, 'mitha', 'lname', 'Third year', 'C', 'oshiwara depot, oshiwara industry, link road, goregaon( w)mumbai 400104.', 'A-', '1998-11-19', 'sandesh', '10th pass', 'meena', 'bachelor'),
(80, 'RENUKA', 'lname', 'Third year', 'A', '79/87 LAD PATH, HAKOBA MILL COMPOUND ', 'AB-', '0000-00-00', 'SANDESH', '10th ', 'MEENA', '8th');



ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`,`fname`),
  ADD UNIQUE KEY `fname` (`fname`);
COMMIT;

