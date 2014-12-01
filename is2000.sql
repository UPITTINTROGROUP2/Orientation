
--
-- Database: `is2000`
--

-- --------------------------------------------------------

--
-- 表的结构 `todolistprocess`
--

CREATE TABLE IF NOT EXISTS `todolistprocess` (
  `email` varchar(255) NOT NULL,
  `TD1` tinyint(1) NOT NULL,
  `TD2` tinyint(1) NOT NULL,
  `TD3` tinyint(1) NOT NULL,
  `TD4` tinyint(1) NOT NULL,
  `TD5` tinyint(1) NOT NULL,
  `TD6` tinyint(1) NOT NULL,
  `TD7` tinyint(1) NOT NULL,
  `TD8` tinyint(1) NOT NULL,
  `TD9` tinyint(1) NOT NULL,
  `TD10` tinyint(1) NOT NULL,
  `TD11` tinyint(1) NOT NULL,
  `TD12` tinyint(1) NOT NULL,
  `TD13` tinyint(1) NOT NULL,
  `TD14` tinyint(1) NOT NULL,
  `TD15` tinyint(1) NOT NULL,
  `TD16` tinyint(1) NOT NULL,
  `TD17` tinyint(1) NOT NULL,
  `TD18` tinyint(1) NOT NULL,
  `TD19` tinyint(1) NOT NULL,
  `TD20` tinyint(1) NOT NULL,
  `TD21` tinyint(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `todolistprocess`
--

INSERT INTO `todolistprocess` (`email`, `TD1`, `TD2`, `TD3`, `TD4`, `TD5`, `TD6`, `TD7`, `TD8`, `TD9`, `TD10`, `TD11`, `TD12`, `TD13`, `TD14`, `TD15`, `TD16`, `TD17`, `TD18`, `TD19`, `TD20`, `TD21`) VALUES
('abc@pitt.edu', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('j@pitt.edu', 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`email`, `password`, `firstname`, `lastname`, `telephone`) VALUES
('abc@pitt.edu', '202cb962ac59075b964b07152d234b70', 'a', 'b', 123456789),
('j@pitt.edu', 'c4ca4238a0b923820dcc509a6f75849b', '1', '2', 345678);
