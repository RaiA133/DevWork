-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 01:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devwork_polardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `about` mediumtext NOT NULL,
  `company` varchar(128) NOT NULL,
  `job` varchar(128) NOT NULL,
  `country` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `web_link` varchar(256) NOT NULL,
  `github_link` varchar(256) NOT NULL,
  `fb_link` varchar(256) NOT NULL,
  `ig_link` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `unique_id`, `name`, `username`, `email`, `image`, `password`, `tgl_lahir`, `tempat_lahir`, `about`, `company`, `job`, `country`, `address`, `phone`, `web_link`, `github_link`, `fb_link`, `ig_link`, `role_id`, `is_active`, `date_created`, `status`) VALUES
(12, 1137937970, 'Raie Aswajjillah', 'Admin', 'rai010303@gmail.com', 'pp3.png', '$2y$10$uZRqcMG0sffklkPlNP1E5eX9baU.edz3b34flEq7tVV9fnakUG9aq', '2003-03-01', 'Bandung', 'I\'am a second year student in universitas islam nusantara, my major is informatics engineering, I really love about teechnology & computer, instead of that i\'ve other interest to design & graphic. this website app is one of my creation that i make to compete PolarDB Hackaton 2023.', 'Universitas Islam Nusantara', 'Student', 'Indonesia', 'Jl. Baladewa Utara No.32', '085156292115', '-', 'https://github.com/RaiA133', 'https://www.facebook.com/rai.aswajjillah/', 'https://www.instagram.com/rai___a/', 1, 1, 1673548914, 'Online Now'),
(18, 392030410, 'Ari E', 'ariiiiii11', 'ari123@gmail.com', 'pp2.jpg', '$2y$10$vlxv2oBbJ.NMyWqrvdKdZ.BjO8sBFmlqOlbnMXB/p06vqE43iXHGi', '2007-03-02', 'Jakarta', '', '', '', '', '', '', '', '', '', '', 2, 1, 1673706645, 'Online Now'),
(26, 3, 'asd123', 'asd123', 'asd123@gmail.com', 'default.png', '$2y$10$3tYw9Yz1T1sAQVfs61N3au3iiGZN8Tb5zCRSCVLe9HyKzzp/V4ek2', '2023-01-03', 'bandung', '', '', '', '', '', '', '', 'https://github.com/RaiA133', 'https://www.facebook.com/rai.aswajjillah/', 'https://www.youtube.com/', 2, 1, 1673811720, 'Offline Now'),
(27, 1272836382, 'adam', 'inferno133', 'adam123@gmail.com', 'default.png', '$2y$10$VAG2Z5nJ4Pj3hmSznRWvi.GlVxxoLWUio9US17bDf4T6qWf7h3qFa', '0000-00-00', 'Belum isi', '', '', '', '', '', '', '', '', '', '', 2, 1, 1678441057, 'Offline Now'),
(28, 675099863, 'Ridwan Firmansyah', 'Firmansyah232', 'ridwan@gmail.com', 'jepg3.jpg', '$2y$10$1uCEV3FWSxeAy/lGPAWfJuXvxSpmlOYJMboYr9DDNENccdo2Gmvli', '2004-02-02', 'Jakarta', 'test', 'test', 'test', 'Indonesia', 'Jl. Moh. Kahfi 22 ', '123', '-', 'https://github.com/aaridwann', '-', '-', 2, 1, 1678628323, 'Offline Now');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(8, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1137937970, 392030410, 'hallo'),
(2, 392030410, 1137937970, 'sd'),
(3, 1137937970, 392030410, 'p'),
(4, 392030410, 1137937970, 'ya'),
(5, 3, 1137937970, 'p'),
(6, 392030410, 1, 'hey'),
(7, 1, 392030410, 'p'),
(8, 392030410, 1, 'asdasdasdsdasd'),
(9, 1, 3, 'test'),
(10, 392030410, 1137937970, 'aaaaaaaaaaaaaaaaaaaaa'),
(11, 1137937970, 392030410, 'dddddddddddddddddddddddddddddddddddddddddddddd'),
(12, 392030410, 1137937970, 'asd'),
(13, 392030410, 1137937970, 'asd'),
(14, 392030410, 675099863, 'hallo'),
(15, 392030410, 3, 'test'),
(16, 3, 392030410, 'ya?'),
(17, 392030410, 1137937970, 'hai'),
(18, 392030410, 1137937970, 'iam raie aswajjillah, can you give me some more detail about your posted'),
(19, 1137937970, 392030410, 'yes wait'),
(20, 675099863, 392030410, 'hello'),
(21, 675099863, 392030410, 'can i do you issue about ci 3'),
(22, 392030410, 675099863, 'p'),
(23, 675099863, 392030410, 'p'),
(24, 392030410, 675099863, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `id` int(11) NOT NULL,
  `unique_id` int(225) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `date_posted` int(11) NOT NULL,
  `post_title` varchar(128) NOT NULL,
  `post_category` varchar(128) NOT NULL,
  `post_desc` mediumtext NOT NULL,
  `post_thumb` varchar(128) NOT NULL,
  `post_tags` varchar(128) NOT NULL,
  `post_days` int(128) NOT NULL,
  `post_pricing` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`id`, `unique_id`, `nama`, `username`, `email`, `image`, `date_posted`, `post_title`, `post_category`, `post_desc`, `post_thumb`, `post_tags`, `post_days`, `post_pricing`) VALUES
(5, 392030410, 'ari e', 'ariiiiii11', 'ari123@gmail.com', 'pp2.jpg', 1678557691, 'can someone make me a yt tumbnail?', 'Art', '<p>hello i need this yt thumbnail for my yt channel, please</p>\r\n<p>if you can help help please contact me to <a href=\"mailto:ari123@gmail.com\">ari123@gmail.com</a> or just chat me</p>\r\n<p>thanks</p>', 'yt_tumb.png', '#youtube', 14, 30),
(7, 1272836382, 'adam', 'black_adam', 'adam123@gmail.com', 'default.png', 1678441112, 'adam', 'Business', '<p>test seadsadsdsdsdsd</p>', 'default.jpg', '#games', 0, 0),
(10, 1137937970, 'Raie Aswajjillah', 'Admin', 'rai010303@gmail.com', 'default.jpg', 1678630356, 'can anyone make me a responsive web library ?', 'Web', '<p>the website need to be good in ui ux, have login and register member function, and can allow someone to access book online</p>\r\n<p>for more info just <strong>chat me</strong>, so we can discuss this futher more</p>', 'library.png', '#web', 14, 30),
(11, 1137937970, 'Raie Aswajjillah', 'Admin', 'rai010303@gmail.com', 'pp3.png', 1678586194, 'I need someone who really expert in video animation 3D with blender for add video', 'Video & Animation', '<p><strong>I need someone who really expert in video animation 3D with blender</strong></p>\r\n<p>if you familiar with blender or any other software about orange juice add 3D video, the duration in not more that 30 second of video. and the project is 14 days of work</p>\r\n<p>please consider to contact me, or just say something in chat</p>', 'orange1.png', '#video_editing', 30, 100),
(16, 675099863, 'Ridwan Firmansyah', 'Firmansyah232', 'ridwan@gmail.com', 'jepg3.jpg', 1678629949, 'i have an error in CI 3 ', 'Web', '<div>\r\n<div><span style=\"font-size: 18pt;\"><strong>i really frustated with this error of my CI 3 project, can anyone help me to solve it?</strong></span></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div style=\"padding-left: 40px;\">A PHP Error was encountered</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Severity: Warning</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Message: Cannot modify header information - headers already sent by (output started at C:\\xampp\\htdocs\\uas\\system\\core\\Exceptions.php:272)</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Filename: helpers/url_helper.php</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Line Number: 565</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Backtrace:</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; File: C:\\xampp\\htdocs\\uas\\application\\controllers\\Auth.php</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Line: 49</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Function: redirect</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; File: C:\\xampp\\htdocs\\uas\\application\\controllers\\Auth.php</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Line: 27</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Function: _login</div>\r\n<br>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; File: C:\\xampp\\htdocs\\uas\\index.php</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Line: 289</div>\r\n<div style=\"padding-left: 40px;\">&nbsp; &nbsp; Function: require_once</div>\r\n<div>&nbsp;</div>\r\n<div><strong><span style=\"font-size: 18pt;\">this is the Code</span></strong></div>\r\n<div>&nbsp;</div>\r\n<div style=\"padding-left: 40px;\">\r\n<div>\r\n<div><!--?php</div--> <br>\r\n<div>// fungsi helper baru untuk cek ada data di session (sudah login) &amp; cek role ketika sudah login</div>\r\n<div>function cek_login()</div>\r\n<div>{</div>\r\n<div>&nbsp; &nbsp; $ci = get_instance(); // karena $this tidak bisa dipanggil disini, gunakan ini untuk memanggil library CI</div>\r\n<div>&nbsp; &nbsp; if (!$ci-&gt;session-&gt;userdata(\'email\')) {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; redirect(\'auth\'); // redirect ke laman login jika tidak ada data disession</div>\r\n<div>&nbsp; &nbsp; } else {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; $role_id = $ci-&gt;session-&gt;userdata(\'role_id\'); // ambil data role di session</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; $menu = $ci-&gt;uri-&gt;segment(1); //ambil data nama controller dari url, (1) = controller, (2) = method, (3) = params, seterusnya....</div>\r\n<br>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; // query tabel user_menu (dari database), role_id akses tergantung kondisi yg ditetapkan</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; $queryMenu = $ci-&gt;db-&gt;get_where(\'user_menu\', [\'menu\' =&gt; $menu])-&gt;row_array(); // SELECT * FROM user_menu WHERE menu = $menu</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; $menu_id = $queryMenu[\'id\']; // taro idnya aja &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;// atau ambil data di database dari dari tabel user_menu yg memiliki value menu sama dengan $menu</div>\r\n<br>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; $userAccess = $ci-&gt;db-&gt;get_where(\'user_access_menu\', [ //SELECT * FROM user_menu WHERE role_id = $role_id AND menu_id = $menu_id</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'role_id\' =&gt; $role_id,</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; \'menu_id\' =&gt; $menu_id</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; ]);</div>\r\n<br>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; if ($userAccess-&gt;num_rows() &lt; 1) {</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; redirect(\'auth/blocked\');</div>\r\n<div>&nbsp; &nbsp; &nbsp; &nbsp; } //jika $userAccess ada isi nya dan jumlah baris &lt; 1</div>\r\n<div>&nbsp; &nbsp; }</div>\r\n<div>}</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'ss1.png', '#CI3', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', '<i class=\"bi bi-grid\"></i>', 1),
(2, 2, 'My Profile', 'user', '<i class=\"bi bi-person\"></i>', 1),
(3, 2, 'Edit Profile', 'user/edit', '<i class=\"bi bi-pencil\"></i>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
