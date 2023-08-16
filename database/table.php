<?php 
CREATE TABLE IF NOT EXISTS 'my_contacts' (
    'id' int(11) NOT NULL AUTO_INCREMENT,
    'full_names' varchar(255) NOT NULL,
    'gender' varchar(6) NOT NULL,
    'contact_no' varchar(75) NOT NULL,
    'email' varchar(255) NOT NULL,
    'city' varchar(255) NOT NULL,
    'country' varchar(255) NOT NULL,
    PRIMARY KEY('id')
)   EGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5;
INSERT INTO `my_contacts` (`id`,`full_names`,`gender`,`contact_no`,`email`,`city`,`country`) VALUES 
(1, 'zesus', 'Male', '111', 'zesus@olympus.mt.com', 'Agos', 'Greece'),
(2, 'Anthena', 'Female', '123', 'anthena@olympus.mt.com', 'Athens', 'Greece'),
(3, 'Jupiter', 'Male', '783', 'jupiter@planet.pt.com', 'Rome', 'Italy'),
(4, 'Venius', 'Female', '987', 'venus@planet.pt.com', 'Rome', 'Italy');
?>