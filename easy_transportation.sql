
Create database easy_transportation;
use easy_transportation;
CREATE TABLE `driverlogin` (
  `first_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL
);


INSERT INTO `driverlogin` (`first_name`, `password`, `phone_number`, `location`) VALUES
('Fab', 'asldfj123', '741123360', 'Kwabenya'),
('Ish', 'aslfdkahwkwh', '784578754', 'Atomic junction'),
('Fab', 'asdflkwhwww', '741123360', 'Haatso'),
('Jude', 'asdgeees', '741123360', 'Aburi');



CREATE TABLE `drivers_info` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(8) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `drivers_ID` int(11) NOT NULL
);



INSERT INTO `drivers_info` (`first_name`, `last_name`, `email`, `password`, `phone_number`, `location`, `drivers_ID`) VALUES
('Fab', 'Rice', 'fab1rice@gmail.com', 'gt&7ferD', '0741123360', 'Kwabenya', 1),
('Eme', 'Rance', 'Emerance9@gmail.com', 'RF41pj$y', '0758129365', 'Berekuso', 2),
('Ish', 'Cia', 'Ciaish20@gmail.com', '79WMp*da', '0768139368', 'Atomic junction', 3),
('Rida', 'Bazi', 'Bazirida36@gmail.com', '13QW5p%2', '07381287652', 'Haatso', 4),
('Vine', 'Nkuru', 'vineru30@gmail.com', '$ab85POz', '0798722361', 'Sibakon', 5),
('Kibebe', 'Wase', 'kiwase91@gmail.com', 'ebu^PO5$', '0778228360', 'Accra mall', 6),
('Jude', 'Kayihura', 'Juhura0@gmail.com', 'SG09pj$k', '0789124365', 'Aburi', 7),
('Uwase', 'Jay', 'wajay@gmail.com', '49AMp%dy', '0718199362', 'Ashongman', 8);


CREATE TABLE `location_payment` (
  `departure` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `payment` int(11) NOT NULL,
  `ID` int(11) NOT NULL
);


INSERT INTO `location_payment` (`departure`, `destination`, `payment`, `ID`) VALUES
('Ashesi', 'Kwabenya', 20, 1),
('Ashesi', 'Haatso ', 25, 2),
('Ashesi', 'Atomic Junction', 30, 3),
('Ashesi', 'Accra mall', 35, 4),
('Ashesi', 'Sibakon', 15, 5),
('Ashesi', 'Berekuso', 10, 6),
('Kwabenya', 'Accra mall', 20, 7),
('Haatso', 'Atomic Junction', 15, 8);


CREATE TABLE `studentlogin` (
  `Ashesi_email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `studentlogin` (`Ashesi_email`,`password`, `phone_number`, `location`) VALUES
('lom.kabebe@ashesi.edu.gh','ashdfasdj12312', '0968130362', 'Ashesi Univerity'),
('pita.bonke@ashesi.edu.gh', 'aslkdfh1231d','0998721368', 'Berekuso now'),
('jed.wusu@ashesi.edu.gh', 'asdkf22312', '0918159362', 'right now off campus');



CREATE TABLE `students_info` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `Ashesi_email` varchar(30) NOT NULL,
  `password` char(8) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `students_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `students_info` (`first_name`, `last_name`, `Ashesi_email`, `password`, `phone_number`, `students_ID`) VALUES
('Lom', 'Kabebe', 'lom.kabebe@ashesi.edu.gh', 'EM8lk#47', '0968130362', 96142023),
('Nold', 'Buga', 'nold.buga@ashesi.edu.gh', 'DA9po@21', '0941123368', 99452022),
('Bosiko', 'Buna', 'bosiko.buno@ashesi.edu.gh', 'OA7mn%50', '0938138765', 99452023),
('Pita', 'Bonke', 'pita.bonke@ashesi.edu.gh', 'AE6qw!18', '0998721368', 99452024),
('Div', 'Shimwa', 'div.shimwa@ashesi.edu.gh', 'VA5as*82', '0978128365', 99452025),
('Tifa', 'Genera', 'tifa.genera@ashesi.edu.gh', 'AA4&zx61', '0986122364', 99452026),
('Gaju', 'Angel', 'gaju.angel@ashesi.edu.gh', 'UL3#cd29', '0918379365', 99452027),
('Jed', 'Wusu', 'jed.wusu@ashesi.edu.gh', 'DU2&bk36', '0918159362', 99452028);


ALTER TABLE `drivers_info`
  ADD PRIMARY KEY (`drivers_ID`);


ALTER TABLE `location_payment`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `students_info`
  ADD PRIMARY KEY (`students_ID`);



ALTER TABLE `drivers_info`
  MODIFY `drivers_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `location_payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `students_info`
  MODIFY `students_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99452031;
COMMIT;
