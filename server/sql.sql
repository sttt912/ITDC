CREATE TABLE `transport` (
  `ID` int(11) NOT NULL,
  `numbers` text NOT NULL,
  `driver` text NOT NULL,
  `spu` text NOT NULL,
  `status` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `states` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



INSERT INTO `transport` (`ID`, `numbers`, `driver`, `spu`, `status`, `user_id`, `states`) VALUES
(1, 'Номер1', 'Водитель1', 'ЗПУ1', 'В дорозі', 2, 'Пошкодженно'),
(2, 'Номер2', 'Водитель2', 'ЗПУ2', 'Прибув', 2, 'Пошкодженно');



CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_hash` varchar(32) NOT NULL DEFAULT '',
  `user_ip` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_name` varchar(30) NOT NULL,
  `user_surname` varchar(30) NOT NULL,
  `user_station` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;



INSERT INTO `users` (`user_id`, `user_login`, `user_password`, `user_hash`, `user_ip`, `user_name`, `user_surname`, `user_station`) VALUES
(1, 'sttt912', '066639993e04fca88c40ecb06da5b1da', '', 0, '', '', ''),
(2, 's0979808278', '9db06bcff9248837f86d1a6bcf41c9e7', '912a5a9e8a92154583efb6a9073c2b62', 0, 'Валерчик', 'Васильківський', 'Новофастів'),
(3, 'Lolol', '19cd026cc6944a0ad220ff55b5fa1475', '91018cb3346a99965b3167d6a5f6fd49', 0, 'Максік', 'Максимка', 'Київ');


ALTER TABLE `transport`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `transport`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
