-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2016 at 01:15 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jean_thoi_trang`
--

-- --------------------------------------------------------

--
-- Table structure for table `bai_viet`
--

CREATE TABLE `bai_viet` (
  `ma_bai_viet` int(11) NOT NULL,
  `ma_loai_bai_viet` int(11) DEFAULT NULL,
  `ma_nguoi_dung` int(11) NOT NULL,
  `tieu_de` varchar(200) CHARACTER SET utf8 NOT NULL,
  `noi_dung_tom_tat` text CHARACTER SET utf8 NOT NULL,
  `noi_dung_chi_tiet` text CHARACTER SET utf8 NOT NULL,
  `ngay_gui_bai` datetime NOT NULL,
  `ngay_xuat_ban` datetime DEFAULT NULL,
  `ngay_het_han` datetime DEFAULT NULL,
  `so_lan_xem` int(11) NOT NULL,
  `xuat_ban` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bai_viet`
--

INSERT INTO `bai_viet` (`ma_bai_viet`, `ma_loai_bai_viet`, `ma_nguoi_dung`, `tieu_de`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `ngay_gui_bai`, `ngay_xuat_ban`, `ngay_het_han`, `so_lan_xem`, `xuat_ban`) VALUES
(1, 0, 1, 'Giới thiệu về công ty', '', '<p>\n	<strong>C&ocirc;ng ty </strong><strong>Cổ Phần Thương Mại Dịch Vụ</strong><strong> </strong><span style="font-weight: bold;">Alphatek Computer </span>l&agrave; C&ocirc;ng ty hoạt động trong nhiều lĩnh vực trong đ&oacute; m&aacute;y vi t&iacute;nh v&agrave; thiết bị văn ph&ograve;ng l&agrave; ng&agrave;nh chủ lực. <span style="font-weight: bold;">Alphatek Computer</span>c&oacute; một đội ngũ nh&acirc;n vi&ecirc;n c&oacute; tr&igrave;nh độ chuy&ecirc;n m&ocirc;n cao, đủ khả năng để c&oacute; thể đ&aacute;p ứng mọi y&ecirc;u cầu khắt khe nhất của qu&iacute; kh&aacute;ch h&agrave;ng.<br />\n	Kh&ocirc;ng những thế, đội ngũ nh&acirc;n vi&ecirc;n của <span style="font-weight: bold;">Alphatek Computer</span>c&ograve;n l&agrave; những người đầy l&ograve;ng nhiệt t&igrave;nh v&agrave; c&oacute; th&aacute;i độ rất niềm nở trong cung c&aacute;ch phục vụ kh&aacute;ch h&agrave;ng.</p>\n<p>\n	<strong>C&ocirc;ng ty Cổ Phần Thương Mại Dịch Vụ </strong><strong>Alphatek Computer</strong> tọa lạc ngay khu vực trung t&acirc;m th&agrave;nh phố, tại số 357 L&ecirc; Hồng Phong, Quận 10, TP Hồ Ch&iacute; Minh.</p>\n<p>\n	Được th&agrave;nh lập từ th&aacute;ng 04 năm 1997, Phong Vũ lu&ocirc;n l&agrave; nh&agrave; ph&acirc;n phối c&aacute;c sản phẩm v&agrave; linh kiện m&aacute;y t&iacute;nh, thiết bị văn ph&ograve;ng, th&ocirc;ng tin li&ecirc;n lạc v&agrave; giải tr&iacute; do c&aacute;c h&atilde;ng điện tử h&agrave;ng đầu tr&ecirc;n thế giới sản xuất. Mức gi&aacute; sản phẩm do Phong Vũ cung cấp lu&ocirc;n ph&ugrave; hợp trong m&ocirc;i trường cạnh tranh, chất lượng sản phẩm lu&ocirc;n được Phong Vũ đảm bảo.</p>\n<p>\n	<strong>Alphatek Computer</strong> c&ograve;n l&agrave; địa chỉ tin cậy đối với kh&aacute;ch h&agrave;ng c&oacute; nhu cầu bảo h&agrave;nh v&agrave; bảo tr&igrave; cho c&aacute;c loại m&aacute;y t&iacute;nh để b&agrave;n, m&aacute;y t&iacute;nh x&aacute;ch tay, m&aacute;y in, UPS (thiết bị điện), v&agrave; c&aacute;c thiết bị ngoại vi. Với c&aacute;c loại h&igrave;nh dịch vụ bảo h&agrave;nh v&agrave; bảo tr&igrave; tận nơi, bảy ng&agrave;y trong tuần, ch&uacute;ng t&ocirc;i bảo đảm tối ưu h&oacute;a năng lực c&aacute;c m&aacute;y m&oacute;c, thiết bị của kh&aacute;ch h&agrave;ng.</p>\n<p>\n	<span style="font-weight: bold;">Alphatek Computer</span> đ&atilde; v&agrave; đang cung cấp giải ph&aacute;p mạng cho c&aacute;c tổ chức, doanh nghiệp hoặc c&aacute; nh&acirc;n kinh doanh internet. Ch&uacute;ng t&ocirc;i hiện c&oacute; trong tay c&aacute;c phương tiện hiện đại nhất, c&oacute; thể lắp đặt phần cứng v&agrave; c&agrave;i đặt phần mềm quản l&yacute;, duy tr&igrave; t&iacute;nh ổn định, k&eacute;o d&agrave;i tối đa tuổi thọ của to&agrave;n bộ hệ thống.</p>\n<p>\n	Đội ngũ nh&acirc;n vi&ecirc;n v&agrave; quản l&yacute; của <strong>Alphatek Computer</strong> lu&ocirc;n được lựa chọn kỹ c&agrave;ng trước khi trải qua qu&aacute; tr&igrave;nh huấn luyện v&agrave; cập nhật thường xuy&ecirc;n những th&agrave;nh tựu mới nhất về dịch vụ kh&aacute;ch h&agrave;ng, dịch vụ kỹ thuật v&agrave; sản phẩm.</p>\n<p>\n	<strong>&quot;Lấy sự H&agrave;i l&ograve;ng của kh&aacute;ch h&agrave;ng l&agrave;m niềm Hạnh ph&uacute;c của ch&uacute;ng ta&quot; l&agrave; những g&igrave; m&agrave; to&agrave;n thể nh&acirc;n vi&ecirc;n c&ocirc;ng ty Alphatek Computer đang ng&agrave;y đ&ecirc;m phấn đấu !&quot;</strong></p>\n', '2011-03-10 00:00:00', '2011-03-10 00:00:00', '0000-00-00 00:00:00', 0, 1),
(2, 0, 1, 'Chính sách bảo hành', '', '<p>\r\n	<strong>I- Cam kết bảo h&agrave;nh của Alphatek Computer:</strong></p>\r\n<p>\r\n	1.1- Đối với những thiết bị được bảo h&agrave;nh từ 24 th&aacute;ng trở l&ecirc;n b&aacute;n ra trong v&ograve;ng 01&gt;06 th&aacute;ng nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Ch&uacute;ng t&ocirc;i sẽ đổi ngay cho c&aacute;c bạn một sản phẩm mới 100% ngay lập tức</p>\r\n<p>\r\n	1.2- Đối với những thiết bị b&aacute;n ra trong v&ograve;ng từ&nbsp; 06 &gt; 12 th&aacute;ng nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Ch&uacute;ng t&ocirc;i cam kết trả h&agrave;ng bảo h&agrave;nh cho c&aacute;c bạn tối đa trong v&ograve;ng 40h l&agrave;m việc.</p>\r\n<p>\r\n	* Trong thời gian đ&oacute; bạn sẽ được Ch&uacute;ng t&ocirc;i cho mượn thiết bị kh&aacute;c để sử dụng tạm thời.</p>\r\n<p>\r\n	1.3- Đối với những thiết bị b&aacute;n ra trong v&ograve;ng từ 12 th&aacute;ng trở l&ecirc;n nếu c&oacute; vấn đề g&igrave; trục trặc:</p>\r\n<p>\r\n	* Alphatek cam kết trả h&agrave;ng bảo h&agrave;nh cho c&aacute;c bạn tối đa trong v&ograve;ng 72h l&agrave;m việc.</p>\r\n<p>\r\n	* Trong thời gian đ&oacute; bạn sẽ được Ch&uacute;ng t&ocirc;i cho mượn thiết bị kh&aacute;c để sử dụng tạm thời.</p>\r\n<p>\r\n	1.4- Đối với c&aacute;c kh&aacute;ch h&agrave;ng c&oacute; đăng k&yacute; dịch vụ bảo h&agrave;nh tại nơi sử dụng:</p>\r\n<p>\r\n	* Khi c&oacute; bất cứ trục trặc g&igrave; về m&aacute;y t&iacute;nh, trong v&ograve;ng 2h kể từ khi nhận được th&ocirc;ng b&aacute;o ch&uacute;ng t&ocirc;i sẽ c&oacute; mặt để khắc phục sự cố. Trong trường hợp ngo&agrave;i thời gian l&agrave;m việc, ch&uacute;ng t&ocirc;i sẽ khắc phục ngay v&agrave;o đầu giờ của buổi l&agrave;m việc tiếp theo.</p>\r\n<p>\r\n	* Tất cả c&aacute;c thiết bị sẽ được khắc phục ngay tại chỗ, trường hợp kh&ocirc;ng thể sửa chữa được, ch&uacute;ng t&ocirc;i sẽ c&oacute; ngay thiết bị kh&aacute;c để qu&iacute; kh&aacute;ch sử dụng tạm thời.</p>\r\n<p>\r\n	<strong>II. Một v&agrave;i lưu &yacute; về c&aacute;c cam kết n&agrave;y :</strong></p>\r\n<p>\r\n	2.1 Điều kiện được đổi ngay: Sản phẩm bị lỗi c&ograve;n nguy&ecirc;n hiện trạng ban đầu (kh&ocirc;ng bị trầy xước, biến dạng v&agrave; c&ograve;n đầy đủ c&aacute;c phụ kiện k&egrave;m theo như vỏ hộp, s&aacute;ch hướng dẫn, đĩa c&agrave;i, &hellip;)</p>\r\n<p>\r\n	-&nbsp;&nbsp;&nbsp; Mục n&agrave;y chỉ &aacute;p dụng với đối tượng kh&aacute;ch h&agrave;ng l&agrave; người ti&ecirc;u d&ugrave;ng cuối c&ugrave;ng, kh&ocirc;ng &aacute;p dụng đối với c&aacute;c sản phẩm l&agrave; m&aacute;y t&iacute;nh x&aacute;ch tay, m&aacute;y chiếu, m&aacute;y fax, m&aacute;y in, m&aacute;y photocopy, m&aacute;y huỷ t&agrave;i liệu.</p>\r\n<p>\r\n	-&nbsp;&nbsp;&nbsp; Chỉ &aacute;p dụng với c&aacute;c sản phẩm bị lỗi do nh&agrave; Sản xuất.</p>\r\n<p>\r\n	<strong><em>2.2. Bảo h&agrave;nh trong cả trường hợp ch&aacute;y nổ IC, phồng tụ.</em></strong></p>\r\n<p>\r\n	Mặc d&ugrave; như c&aacute;c bạn đ&atilde; biết (theo qui chế bảo h&agrave;nh ở Việt Nam &amp; tr&ecirc;n Thế giới) l&agrave; trong trường hợp n&agrave;y c&ocirc;ng ty Alphatek sẽ kh&ocirc;ng được c&aacute;c nh&agrave; cung cấp &amp; c&aacute;c h&atilde;ng chấp nhận bảo h&agrave;nh. Thế nhưng c&ocirc;ng ty&nbsp; vẫn hỗ trợ c&aacute;c kh&aacute;ch h&agrave;ng của m&igrave;nh một c&aacute;ch tối đa c&oacute; thể nhằm khẳng định sự vượt trội về Chất lượng dịch vụ của Alphatek</p>\r\n<p>\r\n	Đối với những sản phẩm vi phạm điều kiện bảo h&agrave;nh của h&atilde;ng như: ch&aacute;y nổ IC, phồng tụ, ch&uacute;ng t&ocirc;i sẵn s&agrave;ng hỗ trợ bảo h&agrave;nh cho kh&aacute;ch h&agrave;ng (<em>chỉ &aacute;p dụng đối với kh&aacute;ch h&agrave;ng l&agrave; người ti&ecirc;u d&ugrave;ng cuối c&ugrave;ng</em>).</p>\r\n<p>\r\n	<strong><em>2.3. Cho kh&aacute;ch h&agrave;ng mượn sản phẩm để sử dụng trong thời gian gửi bảo h&agrave;nh.</em></strong></p>\r\n<p>\r\n	Để c&ocirc;ng việc của Qu&yacute; kh&aacute;ch h&agrave;ng kh&ocirc;ng bị gi&aacute;n đoạn, trong thời gian sản phẩm của Qu&yacute; kh&aacute;ch đang được bảo h&agrave;nh, ch&uacute;ng t&ocirc;i tạm thời cho Qu&yacute; kh&aacute;ch mượn 01 sản phẩm c&oacute; t&iacute;nh năng tương tự để sử dụng, việc n&agrave;y ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n<p>\r\n	<strong><em>24. Trường hợp kh&aacute;ch h&agrave;ng muốn n&acirc;ng cấp sản phẩm.</em></strong></p>\r\n<p>\r\n	Trong một số trường hợp, khi kh&aacute;ch h&agrave;ng muốn n&acirc;ng cấp, thay đổi sản phẩm, C&ocirc;ng ty sẽ nhập lại sản phẩm cũ với gi&aacute; thoả thuận.</p>\r\n<p>\r\n	<strong><em>2.5. Hỗ trợ kh&aacute;ch h&agrave;ng trong việc t&igrave;m lại th&ocirc;ng tin bảo h&agrave;nh.</em></strong></p>\r\n<p>\r\n	Đối với c&aacute;c sản phẩm được mua tại C&ocirc;ng ty Alphatek nhưng vi phạm điều kiện về thủ tục bảo h&agrave;nh như: phiếu bảo h&agrave;nh bị mất, r&aacute;ch, nh&agrave;u n&aacute;t. Ch&uacute;ng t&ocirc;i sẽ hỗ trợ kh&aacute;ch h&agrave;ng trong việc t&igrave;m lại th&ocirc;ng tin về sản phẩm (trong khả năng c&oacute; thể) để sản phẩm của Qu&yacute; kh&aacute;ch được bảo h&agrave;nh theo quy định.</p>\r\n<p>\r\n	<strong><em>2.6. Nhận sửa chữa dịch vụ với ph&iacute; ưu đ&atilde;i.</em></strong></p>\r\n<p>\r\n	Đối với c&aacute;c sản phẩm vi phạm điều kiện bảo h&agrave;nh của C&ocirc;ng ty dẫn tới việc sản phẩm kh&ocirc;ng được hưởng dịch vụ bảo h&agrave;nh, C&ocirc;ng ty ch&uacute;ng t&ocirc;i c&oacute; ch&iacute;nh s&aacute;ch nhận sửa chữa dịch vụ với ph&iacute; ưu đ&atilde;i. Căn cứ v&agrave;o kết quả kiểm tra t&igrave;nh trạng của sản phẩm, ch&uacute;ng t&ocirc;i sẽ đề xuất hướng giải quyết tốt nhất cho kh&aacute;ch h&agrave;ng v&agrave; thực hiện b&aacute;o gi&aacute; chi ph&iacute; sửa chữa trong thời gian 2 ng&agrave;y để Qu&yacute; kh&aacute;ch h&agrave;ng xem x&eacute;t.</p>\r\n<p>\r\n	<strong><em>2.7. Ưu đ&atilde;i đặc biệt d&agrave;nh cho bất kỳ kh&aacute;ch h&agrave;ng n&agrave;o đến với Alphatek.</em></strong></p>\r\n<p>\r\n	Trong bất kể thời gian l&agrave;m việc n&agrave;o của Trung t&acirc;m bảo h&agrave;nh Alphatek , Trung t&acirc;m tổ chức bảo tr&igrave;, bảo dưỡng, c&agrave;i đặt phần mềm miễn ph&iacute; cho tất cả c&aacute;c kh&aacute;ch h&agrave;ng đến với Trung t&acirc;m. Trung t&acirc;m cung cấp dịch vụ miễn ph&iacute; cả với những sản phẩm kh&ocirc;ng phải do C&ocirc;ng ty cung cấp. Ngo&agrave;i ra, trong qu&aacute; tr&igrave;nh sử dụng c&aacute;c sản phẩm Tin học của m&igrave;nh, nếu gặp bất kỳ vướng mắc, trở ngại n&agrave;o Qu&yacute; kh&aacute;ch vui l&ograve;ng li&ecirc;n hệ với Trung t&acirc;m bảo h&agrave;nh Alphatek để được giải đ&aacute;p ho&agrave;n to&agrave;n miễn ph&iacute;.</p>\r\n<p>\r\n	<strong>III. Thời hạn bảo h&agrave;nh.</strong></p>\r\n<p>\r\n	Qu&yacute; kh&aacute;ch h&agrave;ng vui l&ograve;ng xem th&ocirc;ng tin về thời hạn bảo h&agrave;nh của c&aacute;c sản phẩm tr&ecirc;n phiếu bảo h&agrave;nh, b&aacute;o gi&aacute; in, b&aacute;o gi&aacute; tr&ecirc;n hệ thống Website của C&ocirc;ng ty.</p>\r\n<p>\r\n	<strong>IV. Điều kiện bảo h&agrave;nh.</strong></p>\r\n<p>\r\n	4.1. C&aacute;c điều kiện bảo h&agrave;nh của sản phẩm được tu&acirc;n thủ theo quy định của nh&agrave; ph&acirc;n phối hoặc của h&atilde;ng sản xuất.</p>\r\n<p>\r\n	4.2. C&aacute;c trường hợp bị coi l&agrave; vi phạm điều kiện bảo h&agrave;nh, bao gồm:</p>\r\n<p>\r\n	- Sản phẩm hết thời hạn bảo h&agrave;nh;</p>\r\n<p>\r\n	- Kh&ocirc;ng c&oacute; Phiếu bảo h&agrave;nh;</p>\r\n<p>\r\n	- Phiếu bảo h&agrave;nh bị nh&agrave;u n&aacute;t kh&ocirc;ng đọc được;</p>\r\n<p>\r\n	- Phiếu v&agrave; tem bảo h&agrave;nh tr&ecirc;n sản phẩm kh&ocirc;ng đồng nhất;</p>\r\n<p>\r\n	- Th&ocirc;ng tin tr&ecirc;n Phiếu bảo h&agrave;nh bị sửa đổi, tẩy xo&aacute;;</p>\r\n<p>\r\n	- R&aacute;ch tem hoặc kh&ocirc;ng c&oacute; tem của C&ocirc;ng ty, của nh&agrave; ph&acirc;n phối, h&atilde;ng sản xuất;</p>\r\n<p>\r\n	- Số seri, m&atilde; vạch, th&ocirc;ng số kỹ thuật tr&ecirc;n sản phẩm bị mờ kh&ocirc;ng đọc được, bị cạo, bị sửa hoặc r&aacute;ch;</p>\r\n<p>\r\n	- Hỏng do thi&ecirc;n tai, hoả hoạn, nguồn điện kh&ocirc;ng b&igrave;nh thường;</p>\r\n<p>\r\n	- Sản phẩm bị rơi, bị va đập. Sản phẩm bị lỗi do Qu&yacute; kh&aacute;ch vận chuyển hoặc lắp đặt sai quy c&aacute;ch;</p>\r\n<p>\r\n	- Sản phẩm kh&ocirc;ng c&ograve;n nguy&ecirc;n trạng th&aacute;i vật l&yacute; ban đầu;</p>\r\n<p>\r\n	- Sản phẩm c&oacute; dấu hiệu đ&atilde; bị c&ocirc;n tr&ugrave;ng x&acirc;m nhập;</p>\r\n<p>\r\n	- C&aacute;c phụ kiện ti&ecirc;u hao trong qu&aacute; tr&igrave;nh sử dụng như hộp mực, băng mực, đầu kim, băng xo&aacute;, quạt, c&aacute;c loại c&aacute;p&hellip;</p>\r\n<p>\r\n	Sản phẩm bị lỗi do kh&aacute;ch h&agrave;ng tự &yacute; sửa chữa trước khi đem đi bảo h&agrave;nh</p>\r\n<p>\r\n	- Đối với những thiết bị của qu&iacute; kh&aacute;ch mua qu&aacute; thời gian 01 th&aacute;ng th&igrave; c&aacute;c thiết bị trả h&agrave;ng bảo h&agrave;nh của c&ocirc;ng ty Alphatek&nbsp; c&oacute; thể l&agrave; mới 100% hoặc c&oacute; thể kh&ocirc;ng mới 100% nhưng tất cả đều trong trạng th&aacute;i hoạt động tốt.</p>\r\n<p>\r\n	- Ch&iacute;nh s&aacute;ch bảo h&agrave;nh &quot;1 đổi 1&quot; kh&ocirc;ng được &aacute;p dụng cho một số thiết bị đặc biệt như: Notebook, Server, Projector, Photocopy... &amp; c&aacute;c thiết bị m&agrave; qu&iacute; kh&aacute;ch h&agrave;ng đ&atilde; chọn phương thức tự mang đến TT bảo h&agrave;nh của h&atilde;ng.</p>\r\n<p align="justify">\r\n	- Những thiết bị mang đến bảo h&agrave;nh phải c&oacute; đầy đủ điều kiện để được bảo h&agrave;nh theo qui chế bảo h&agrave;nh của Alphatek<br />\r\n	<br />\r\n	- Trong trường hợp thiết bị hỏng của qu&iacute; kh&aacute;ch kh&ocirc;ng thể sửa chữa được m&agrave; kh&ocirc;ng c&ograve;n mua được tr&ecirc;n thị trường th&igrave; ch&uacute;ng t&ocirc;i sẽ đổi cho qu&iacute; kh&aacute;ch thiết bị kh&aacute;c ho&agrave;n to&agrave;n tương đương với thiết bị hỏng nhưng ở t&igrave;nh trạng hoạt động tốt. Trường hợp qu&iacute; kh&aacute;ch chưa ưng &yacute; với thiết bị thay thế tương đương th&igrave; ch&uacute;ng t&ocirc;i sẽ nhập lại theo gi&aacute; thoả thuận giữa hai b&ecirc;n</p>\r\n', '2011-03-10 00:00:00', '2011-03-10 00:00:00', '0000-00-00 00:00:00', 0, 1),
(3, 0, 1, 'Hỗ trợ trực tuyến', '', '<div style="padding-left: 30px;">\r\n	<p>\r\n		<b>Ph&ograve;ng kỹ thuật</b></p>\r\n	<p style="padding-left: 30px;">\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a></p>\r\n	<p>\r\n		<b>Ph&ograve;ng kinh doanh</b></p>\r\n	<p style="padding-left: 30px;">\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a><br />\r\n		<a href="ymsgr:sendIM?quoccuong"><img border="0" src="http://opi.yahoo.com/online?u=quoccuong&amp;m=g&amp;t=2" vspace="3" /></a></p>\r\n</div>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(4, 195, 1, 'MacBook Pro 15 inch dùng chip Intel Core i5 và Core i7', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\n	<tbody>\n		<tr>\n			<td>\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\n					<tbody>\n						<tr valign="top">\n							<td width="100">\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=637"><img src="http://vitinhphongvu.com/multidata/news/13933166MT1.jpg" style="width: 100px; height: 90px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\n							<td width="5">\n								&nbsp;</td>\n							<td>\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\n									<tbody>\n										<tr>\n											<td>\n												&nbsp;</td>\n										</tr>\n										<tr>\n											<td style="text-align: justify;">\n												Một điểm nổi bật kh&aacute;c của d&ograve;ng sản phẩm n&agrave;y l&agrave; ứng dụng c&ocirc;ng nghệ chuyển đổi đồ họa mới giữa card NVIDIA GeForce GT330M v&agrave; Intel HD Graphic.</td>\n										</tr>\n									</tbody>\n								</table>\n							</td>\n						</tr>\n					</tbody>\n				</table>\n			</td>\n		</tr>\n	</tbody>\n</table>\n<p>\n	&nbsp;</p>\n', '<div align="justify">\n	<strong><font color="#5f5f5f"><font size="3"><font face="Times">Một điểm nổi bật kh&aacute;c của d&ograve;ng sản phẩm n&agrave;y l&agrave; ứng dụng c&ocirc;ng nghệ chuyển đổi đồ họa mới giữa card NVIDIA GeForce GT330M v&agrave; Intel HD Graphic. </font></font></font></strong>\n	<p class="normal">\n		<font size="3"><font face="Times">Cả hai bộ vi xử l&yacute; Core i7 v&agrave; Core i5 đều ứng dụng c&ocirc;ng nghệ tăng tốc Turbo Boost, gi&uacute;p tăng hiệu suất m&aacute;y t&iacute;nh th&ecirc;m 20%. Nhờ đ&oacute;, hệ thống hoạt động nhanh hơn, đồng thời k&eacute;o d&agrave;i thời lượng pin bằng c&aacute;ch tự điều chỉnh xung nhịp của từng nh&acirc;n độc lập cho ph&ugrave; hợp nhu cầu xử l&yacute;. B&ecirc;n cạnh đ&oacute;, mạch điều khiển bộ nhớ t&iacute;ch hợp (integrated memory controller) cũng được Intel ứng dụng v&agrave;o chip, gi&uacute;p tốc độ trao đổi dữ liệu giữa nh&acirc;n v&agrave; bộ nhớ nhanh hơn hẳn khi c&aacute;c th&agrave;nh tố nằm t&aacute;ch biệt tr&ecirc;n bảng mạch.</font></font></p>\n	<p class="normal">\n		<font size="3"><font face="Times">Đặc biệt, chip Core i5 v&agrave; Core i7 c&ograve;n được ứng dụng c&ocirc;ng nghệ si&ecirc;u ph&acirc;n luồng (Hyper-Threading), cung cấp 2 luồng (thread) tr&ecirc;n mỗi nh&acirc;n, tức l&agrave; tăng gấp đ&ocirc;i số t&aacute;c vụ m&agrave; một bộ vi xử l&yacute; c&oacute; thể thực thi. N&oacute;i một c&aacute;ch đơn giản, chip 4 nh&acirc;n Core i7 c&oacute; thể chạy c&ugrave;ng một l&uacute;c 8 luồng (nhờ c&ocirc;ng nghệ Si&ecirc;u ph&acirc;n luồng) v&agrave; tăng hiệu suất l&ecirc;n th&ecirc;m 20% (nhờ c&ocirc;ng nghệ Turbo Boost). Chip 2 nh&acirc;n Core i5 cũng tương tự. Bởi vậy, bạn c&oacute; thể thoải m&aacute;i chơi game &ldquo;nặng&rdquo;, xem phim HD hay thậm ch&iacute; chạy 3Ds Max. </font></font></p>\n	<p class="normal">\n		<font size="3"><font face="Times"><img alt="align=baseline" border="0" hspace="0" src="http://vnexpress.net/Files/Subject/3B/A2/00/82/09mbp17aperture.jpg" /></font></font></p>\n	<div align="center">\n		<p align="left" class="Normal">\n			Với m&aacute;y t&iacute;nh t&iacute;ch hợp chip Core i5, bạn c&oacute; thể chuyển đổi định dạng ba đoạn phim c&oacute; độ d&agrave;i 10 ph&uacute;t để đăng tải l&ecirc;n YouTube trong v&ograve;ng 79 gi&acirc;y &ndash; nhanh gấp 3 lần so với chip Pentium Dual Core (gần 4 ph&uacute;t). Core i5 cũng c&oacute; thể chỉnh sửa ảnh nhanh gấp gần 2 lần so với Pentium Dual Core; chuyển đổi hơn 10 b&agrave;i h&aacute;t chỉ trong 5 ph&uacute;t v&agrave; ti&ecirc;u thụ &iacute;t điện năng hơn đ&aacute;ng kể so với những d&ograve;ng vi xử l&yacute; trước đ&oacute;. Ri&ecirc;ng Core i7 thậm ch&iacute; nhanh hơn gấp 4 lần Pentium Dual Core khi chạy thử nghiệm một số tr&ograve; chơi điện tử.</p>\n		<p align="left" class="Normal">\n			Nhờ ứng dụng c&ocirc;ng nghệ mới về xử l&yacute; đồ họa, sản phẩm cho chất lượng h&igrave;nh ảnh đẹp, đồng thời vẫn k&eacute;o d&agrave;i thời gian sử dụng pin. MacBook Pro 15&rdquo; c&ograve;n được t&iacute;ch hợp 2 chip đồ họa: NVIDIA GeForce GT 330M mới cho những xử l&yacute; đồ họa cao, Intel HD Graphics cho những xử l&yacute; thấp hơn v&agrave; được ứng dụng c&ocirc;ng nghệ tự động chuyển đổi đồ họa. C&ocirc;ng nghệ n&agrave;y của Apple sẽ x&aacute;c định y&ecirc;u cầu về h&igrave;nh ảnh của ứng dụng bạn đang mở, từ đ&oacute; thay đổi bộ vi xử l&yacute; h&igrave;nh ảnh nhằm mang lại hiệu suất cao đồng thời vẫn tiết kiệm năng lượng.</p>\n		<p align="left" class="Normal">\n			D&ograve;ng MacBook Pro 15&rdquo; kế thừa những t&iacute;nh năng độc đ&aacute;o truyền thống của sản phẩm m&aacute;y t&iacute;nh Apple. Thiết kế vỏ nh&ocirc;m unibody đem lại cho MacBook Pro sự chắc chắn nhưng cũng kh&ocirc;ng k&eacute;m phần thời trang. B&agrave;n di chuột đa chạm được chế tạo từ thủy tinh hỗ trợ di chuyển một c&aacute;ch trực quan hơn, gi&uacute;p bạn dễ d&agrave;ng duyệt văn bản hay trang web d&agrave;i v&agrave; truy cập c&aacute;c thư viện h&igrave;nh ảnh lớn. Hệ thống đ&egrave;n LED-backlist m&agrave;n h&igrave;nh s&aacute;ng, g&oacute;c hiển thị rộng v&agrave; dải m&agrave;u phong ph&uacute;. Một ưu điểm nữa của MacBook Pro l&agrave; sản phẩm rất &ldquo;green&rdquo; v&igrave; được sản xuất với c&aacute;c loại vật liệu c&oacute; thể t&aacute;i chế v&agrave; kh&ocirc;ng chứa c&aacute;c chất độc hại đối với m&ocirc;i trường.</p>\n		<p align="left" class="Normal">\n			C&ocirc;ng ty Ph&acirc;n Phối FPT sẽ tặng phiếu mua phụ kiện m&aacute;y t&iacute;nh trị gi&aacute; 960.000 đồng cho c&aacute;c bạn sinh vi&ecirc;n khi mua c&aacute;c sản phẩm m&aacute;y t&iacute;nh Apple ch&iacute;nh h&atilde;ng tại c&aacute;c đại l&yacute; ủy quyền của C&ocirc;ng ty từ 4 đến 19/9.</p>\n		<p align="left" class="Normal">\n			Để biết th&ecirc;m th&ocirc;ng tin chi tiết, vui l&ograve;ng truy cập website: <a class="Normal" href="http://istore.vn/">http://istore.vn/</a></p>\n		<p align="right" class="Normal">\n			(Nguồn: <em>C&ocirc;ng ty TNHH Ph&acirc;n Phối FPT</em>)</p>\n	</div>\n</div>\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(5, 196, 1, 'Compaq Presario CQ42AX tiết kiệm năng lượng', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=669"><img src="http://vitinhphongvu.com/multidata/news/1368594compact5.jpg" style="width: 100px; height: 100px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Laptop n&agrave;y sử dụng chip AMD Phenom thế hệ 2 c&oacute; thể hoạt động mạnh mẽ với 3 hoặc 4 l&otilde;i ho&agrave;n chỉnh (4 l&otilde;i Intel chỉ c&oacute; ở i7-7xxM) nhưng mức ti&ecirc;u thụ năng lượng chỉ bằng Core i3 (35 Watts).</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\n	<b>Laptop n&agrave;y sử dụng chip AMD Phenom thế hệ 2 c&oacute; thể hoạt động mạnh mẽ với 3 hoặc 4 l&otilde;i ho&agrave;n chỉnh (4 l&otilde;i Intel chỉ c&oacute; ở i7-7xxM) nhưng mức ti&ecirc;u thụ năng lượng chỉ bằng Core i3 (35 Watts).</b></p>\n<p class="Normal">\n	Compaq Presario CQ42-223AX t&iacute;ch hợp c&ocirc;ng nghệ Vision Ultimate của AMD cho trải nghiệm giải tr&iacute; HD mượt m&agrave; với Card ATI Mobility Radeon HD 545v. M&aacute;y c&oacute; ổ cứng tốc độ cao (7.200 v&ograve;ng mỗi ph&uacute;t) v&agrave; dung lượng 320 GB gi&uacute;p người d&ugrave;ng c&oacute; thể giải tr&iacute; chất lượng si&ecirc;u tốc độ cũng như chia sẻ v&agrave; lưu trữ nhiều dữ liệu.</p>\n<p align="center">\n	<img alt="align=baseline" border="0" hspace="0" src="http://vnexpress.net/Files/Subject/3b/a2/74/c4/compact5.jpg" /></p>\n<h1 align="center" class="Title">\n	<strong><font size="3">Cấu h&igrave;nh Compaq Presario CQ42-223AX </font></strong></h1>\n<p align="center" class="Normal">\n	<font color="#000000" size="2">Vi xử l&yacute;: AMD Phenom II X4 N930 Mobile processor (2,0 GHz, 2MB L2 Cache).</font></p>\n<p align="center" class="Normal">\n	<font color="#000000" size="2">Cấu h&igrave;nh: 2 GB DDR3, 320GB HDD 7200rpm, DVD&plusmn;RW Double Layer.</font></p>\n<p align="center" class="Normal">\n	<font color="#000000" size="2">M&agrave;n h&igrave;nh 14 inch HD LED BrightView. </font></p>\n<p align="center" class="Normal">\n	<font color="#000000" size="2">Đồ hoạ 512MB DDR3 ATI Mobility Radeon HD 545v graphics (Dedicated).</font></p>\n<p align="center" class="Normal">\n	<font color="#000000" size="2">Kết nối: Wireless 802.11b/g.</font></p>\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(6, 196, 1, 'LCD Razor LED mỏng 12,9 mm', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=653"><img src="http://vitinhphongvu.com/multidata/news/14018614E943FW.jpg" style="width: 100px; height: 100px; border-width: 0px; border-style: solid; margin: 2px 5px; float: left;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Kh&ocirc;ng chỉ si&ecirc;u mỏng, AOC Razor LED c&ograve;n c&oacute; thể v&agrave;o gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n. Sản phẩm c&oacute; độ tương phản động l&ecirc;n tới 50.000.000:1.</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	<b>Kh&ocirc;ng chỉ si&ecirc;u mỏng, AOC Razor LED c&ograve;n c&oacute; thể v&agrave;o gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n. Sản phẩm c&oacute; độ tương phản động l&ecirc;n tới 50.000.000:1.</b></p>\r\n<p align="left" class="Normal">\r\n	AOC cho ra mắt m&agrave;n h&igrave;nh Razor LED 43ID mỏng nhất từ trước đến nay, với bề d&agrave;y chỉ 12,9 mm. Kh&ocirc;ng chỉ mạnh về thiết kế si&ecirc;u mỏng, ch&acirc;n đế của AOC Razor LED c&ograve;n c&oacute; khả năng gắn tường v&agrave; điều chỉnh độ nghi&ecirc;ng ph&ugrave; hợp với mọi g&oacute;c nh&igrave;n của bạn. Kiểu d&aacute;ng thanh mảnh, thời trang, AOC Razor LED gi&uacute;p kh&ocirc;ng gian l&agrave;m việc của bạn trở n&ecirc;n gọn g&agrave;ng v&agrave; ấn tượng hơn. AOC Razor LED ứng dụng tối đa hiệu quả của c&ocirc;ng nghệ LED mới nhất cho độ tương phản động l&ecirc;n đến 50.000.000:1.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="310" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh_1_400x310.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Razor LED e943Fw v&agrave; e2043F &ndash; Rực rỡ hơn với độ tương phản l&ecirc;n đến 50.000.000:1</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Hai model mới nhất của Razor l&agrave; e943Fw (18,5 inch) v&agrave; e2043F (20 inch) c&oacute; thiết kế giống nhau. C&aacute;c ph&iacute;m điều khiển cảm ứng c&ugrave;ng với c&aacute;c biểu tượng đồ họa OSD l&agrave;m cho menu điều chỉnh dễ sử dụng ngay cả trong điều kiện ph&ograve;ng thiếu &aacute;nh s&aacute;ng. Đ&egrave;n nền LED kh&ocirc;ng chứa chất thủy ng&acirc;n tiết kiệm đến 50% năng lượng so với m&agrave;n h&igrave;nh CCFL truyền thống. Năng lượng ti&ecirc;u thụ tiếp tục giảm nhờ c&ocirc;ng nghệ e-Saver. Thử nghiệm cho thấy mức ti&ecirc;u thụ của E943Fw v&agrave; E2043F chỉ khoảng 21W cho điều kiện s&aacute;ng tối đa, điều n&agrave;y g&oacute;p phần tăng cao tuổi thọ m&agrave;n h&igrave;nh. M&agrave;n h&igrave;nh kh&aacute; mỏng nhưng AOC Razor 43ID được trang bị c&ocirc;ng nghệ mới n&ecirc;n rất m&aacute;t khi sử dụng. Sau khi sử dụng 2 giờ li&ecirc;n tục, nhiệt độ mặt sau của m&agrave;n h&igrave;nh chỉ khoảng 28 độ C.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="290" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh-2_400x290.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				M&agrave;n h&igrave;nh AOC Razor LED &ndash; Ấn tượng với độ mỏng chỉ 12.9mm.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	B&ecirc;n cạnh d&ograve;ng Razor LED, AOC c&ograve;n cho ra mắt m&agrave;n h&igrave;nh Luvia e2237Fwh (21,5 inch) sử dụng bộ cảm biến i-Care được d&ugrave;ng để tự động điều chỉnh độ s&aacute;ng của m&agrave;n h&igrave;nh t&ugrave;y theo &aacute;nh s&aacute;ng m&ocirc;i trường xung quanh. Đơn giản l&agrave; khi ngồi l&agrave;m việc m&agrave;n h&igrave;nh sẽ cảm ứng với &aacute;nh s&aacute;ng m&ocirc;i trường v&agrave; cho ph&eacute;p người d&ugrave;ng sử dụng với độ s&aacute;ng tốt nhất. Khi bạn rời b&agrave;n l&agrave;m việc, m&agrave;n h&igrave;nh sẽ tự động tối đi gi&uacute;p tiết kiệm tối đa điện năng ti&ecirc;u thụ.</p>\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" width="1">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<img border="1" height="293" src="http://vnexpress.net/Files/Subject/3B/A2/3B/40/Hinh_3_400x293.jpg" width="400" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td class="Image">\r\n				Luvia e2237Fwh với chức năng cảm biến cảm biến &aacute;nh s&aacute;ng i-Care độc đ&aacute;o.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p class="Normal">\r\n	Bộ ba AOC tương t&aacute;c tốt th&ocirc;ng qua chế độ hỗ trợ 14 ng&ocirc;n ngữ v&agrave; được trang bị đầy đủ cổng kết nối cho c&aacute;c thiết bị ngoại vi. Tần số qu&eacute;t nằm ở mức 60 Hz sản phẩm hiển thị độ ph&acirc;n giải cụ thể: e943Fw l&agrave; 1366x768, e2043F l&agrave; 1600x900 v&agrave; e2237Fwh l&agrave; 1920x1080.</p>\r\n<p align="right" class="Normal">\r\n	(Nguồn<em>: H&atilde;ng AOC Việt Nam)</em></p>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(7, 196, 1, 'Dell làm mới dòng Vostro V13 với nhiều cải tiến', '<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n					<tbody>\r\n						<tr valign="top">\r\n							<td width="100">\r\n								<a href="http://vitinhphongvu.com/index.php?ava=show&amp;ArtID=651"><img src="http://vitinhphongvu.com/multidata/news/11914143464cf51a1c9970d_vostro-v130-overview1.jpg" style="border-width: 0px; border-style: solid; margin: 2px 5px; float: left; width: 100px; height: 70px;" /></a></td>\r\n							<td width="5">\r\n								&nbsp;</td>\r\n							<td>\r\n								<table border="0" cellpadding="0" cellspacing="0" width="100%">\r\n									<tbody>\r\n										<tr>\r\n											<td>\r\n												&nbsp;</td>\r\n										</tr>\r\n										<tr>\r\n											<td style="text-align: justify;">\r\n												Dell vừa qua đ&atilde; ch&iacute;nh thức giới thiệu d&ograve;ng laptop si&ecirc;u mỏng, gi&aacute; rẻ mới nhất của m&igrave;nh với t&ecirc;n gọi Vostro V130 thay thế cho V13 đ&atilde; ra mắt được 1 năm nay. Đ&acirc;y cũng ch&iacute;nh l&agrave; ch&uacute; laptop đầu ti&ecirc;n sử dụng c&ocirc;ng nghệ l&agrave;m m&aacute;t mới của Intel &quot;Hyperbaric Cooling&quot;. M&aacute;y sử dụng một quạt với nhiệm vụ l&agrave; h&uacute;t kh&ocirc;ng kh&iacute; từ b&ecirc;n ngo&agrave;i v&agrave;o để l&agrave;m m&aacute;t hệ thống, đặc biệt l&agrave; CPU. C&ocirc;ng nghệ mới n&agrave;y cho ph&eacute;p quạt chạy ở tốc độ thấp nhằm giảm thiệu tiếng ồn v&agrave; gi&uacute;p m&aacute;y chạy &ecirc;m hơn.</td>\r\n										</tr>\r\n									</tbody>\r\n								</table>\r\n							</td>\r\n						</tr>\r\n					</tbody>\r\n				</table>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', '<p>\r\n	<b>Dell vừa qua đ&atilde; ch&iacute;nh thức giới thiệu d&ograve;ng laptop si&ecirc;u mỏng, gi&aacute; rẻ mới nhất của m&igrave;nh với t&ecirc;n gọi Vostro V130 thay thế cho V13 đ&atilde; ra mắt được 1 năm nay. Đ&acirc;y cũng ch&iacute;nh l&agrave; ch&uacute; laptop đầu ti&ecirc;n sử dụng c&ocirc;ng nghệ l&agrave;m m&aacute;t mới của Intel &quot;Hyperbaric Cooling&quot;. M&aacute;y sử dụng một quạt với nhiệm vụ l&agrave; h&uacute;t kh&ocirc;ng kh&iacute; từ b&ecirc;n ngo&agrave;i v&agrave;o để l&agrave;m m&aacute;t hệ thống, đặc biệt l&agrave; CPU. C&ocirc;ng nghệ mới n&agrave;y cho ph&eacute;p quạt chạy ở tốc độ thấp nhằm giảm thiệu tiếng ồn v&agrave; gi&uacute;p m&aacute;y chạy &ecirc;m hơn. </b></p>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a1c9970d_vostro-v130-overview1.jpg" /></div>\r\n<p>\r\n	<font color="#000000">Với thiết kế gần giống đ&agrave;n anh V13, vỏ m&aacute;y Vostro V130 được cấu tạo từ hợp kim magie v&agrave; khung nh&ocirc;m chắc chắn. Kiểu d&aacute;ng si&ecirc;u mỏng với điểm mỏng nhất l&agrave; 16.5 mm v&agrave; dầy nhất l&agrave; 19.8mm. Với pin 6 cell gắn liền th&acirc;n, khối lượng tổng l&agrave; 1,59kg.</font> Vostro V130 vẫn sử dụng m&agrave;n h&igrave;nh 13.3 nhưng xử dụng BXL mới Core i3 hay Core i5 tiết kiệm điện năng (CULV) của Intel. M&aacute;y c&oacute; ram 4GB v&agrave; ổ đĩa cứng 640GB, ngo&agrave;i ra c&ograve;n được bổ xung th&ecirc;m cổng kết nối HDMI, hai USB, eSATA v&agrave; cổng ra VGA.<br />\r\n	<br />\r\n	<font color="#000000">Dell Vostro V130&nbsp;cấu h&igrave;nh ti&ecirc;u chuẩn:</font></p>\r\n<br />\r\n<ul>\r\n	<li>\r\n		<font color="#000000">OS: Ubuntu 10.04</font></li>\r\n	<li>\r\n		<font color="#000000">BXL: Intel&reg; Celeron&trade; Processor ULV U3400 (2M Cache, 1.06GHz, 800 MHz FSB)</font></li>\r\n	<li>\r\n		<font color="#000000">RAM: 2.0GB, DDR3-1333MHz, 1 thanh</font></li>\r\n	<li>\r\n		<font color="#000000">HDD: 250GB 5400RPM</font></li>\r\n	<li>\r\n		<font color="#000000">M&agrave;n h&igrave;nh: 13.3 inch WLED (1366x768), Anti-Glare Mobile Intel&reg; Graphics Media Accelerator HD</font></li>\r\n	<li>\r\n		<font color="#000000">Kết nối: wifi 802.11n, bluetooth 3.0</font></li>\r\n	<li>\r\n		<font color="#000000">Webcame: 2.0MP k&egrave;m mic</font></li>\r\n	<li>\r\n		<font color="#000000">Pin gắn trong 6-cell 30WHr</font></li>\r\n</ul>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a249533f_vostrov130081000031500f00rd.jpg" /></div>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a2917e9a_vostrov1300810000300180b90rd.jpg" /></div>\r\n<div align="center">\r\n	<img alt="align=baseline" border="0" hspace="0" src="http://photo.tinhte.vn/attach/public_image/btv/46/464cf51a2102085_vostrov130081000030090l90rd.jpg" /><br />\r\n	<br />\r\n	&nbsp;</div>\r\n<p>\r\n	<font color="#000000"><i><b>Nguồn: <a href="http://www.engadget.com/2010/11/30/dell-vostro-v130-updated-with-more-ports-fancy-hyperbaric-coo/" rel="nofollow" target="_blank"><font color="#00528b">engadget</font></a></b></i></font></p>\r\n', '2011-03-20 00:00:00', '2011-03-20 00:00:00', '0000-00-00 00:00:00', 0, 1),
(8, 0, 1, 'Công ty cổ phần thương mại dịch vụ Alphatek Computer', '', '<div style="padding-left: 30px;">\n	<div>\n		Địa chỉ: 357 L&ecirc; Hồng Ph&ograve;ng, P2, Q10</div>\n	<div>\n		ĐT: 38337980 - Fax: 38337982</div>\n<div>\n		Email: alphatek@hcmuns.edu.vn</div>\n</div>\n<h3>\n	Bản đồ đường đi</h3>\n<p>\n	<img alt="ban do" src="images/tin_tuc/dia_chi_cua_hang.png" /></p>\n', '2011-03-23 00:00:00', '2011-03-23 00:00:00', '0000-00-00 00:00:00', 0, 1),
(12, 194, 17, 'baiviet1', '<p>baiviet</p>\r\n', '<p>baiviet</p>\r\n', '2016-10-30 04:56:45', '2016-10-31 00:00:00', '2016-11-02 00:00:00', 0, 122),
(10, 200, 17, 'sadasd', '<p>asdasd</p>\r\n', '<p>asdasdass</p>\r\n', '2016-10-30 11:36:46', '2016-10-30 00:00:00', '2016-10-30 00:00:00', 0, 12),
(11, 0, 17, 'asdas1', '<p>asdas</p>\r\n', '<p>asdasdas<img alt="" src="http://localhost:10000/smart_shop/images/a3.png" style="height:291px; width:255px" /></p>\r\n', '2016-10-30 11:37:21', '2016-10-30 00:00:00', '2016-10-30 00:00:00', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoa_don`
--

CREATE TABLE `ct_hoa_don` (
  `ma_hoa_don` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ma_san_pham` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_hoa_don`
--

INSERT INTO `ct_hoa_don` (`ma_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`, `stt`) VALUES
('1', '210', 5, 305000, 1),
('1', '211', 10, 310000, 3),
('1', '216', 10, 305000, 4),
('1', '219', 2, 1000000, 6),
('2', '229', 1, 450000, 7),
('2', '222', 2, 550000, 8),
('2', '221', 1, 1149000, 9),
('3', '227', 1, 1000000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma_hoa_don` int(11) NOT NULL,
  `ngay_hd` date NOT NULL,
  `ma_khach_hang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `tri_gia` double NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma_hoa_don`, `ngay_hd`, `ma_khach_hang`, `tri_gia`, `trang_thai`) VALUES
(1, '2011-03-09', '1', 9675000, 2),
(2, '2011-03-21', '10', 2699000, 1),
(3, '2011-03-24', '12', 1000000, 1),
(4, '2016-11-22', '2', 1000000, 1),
(5, '2016-11-20', '3', 1000000, 1),
(6, '2016-11-10', '5', 1111111, 1),
(7, '2016-11-16', '12', 1000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_khach_hang` int(11) NOT NULL,
  `ten_dang_nhap` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ten_khach_hang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phai` tinyint(1) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dien_thoai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma_khach_hang`, `ten_dang_nhap`, `mat_khau`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`) VALUES
(1, 'phuong', '202cb962ac59075b964b07152d234b70', 'Khuất Thùy Phương', 1, '1982-02-24', 'A21 Nguyễn Oanh quận Gò Vấp', '01698741251', 'ktphuong@hcmuns.edu.vn'),
(2, 'thien', '202cb962ac59075b964b07152d234b70', 'Đỗ Lâm Thiên', 0, '1979-06-17', '357 Lê Hồng Phong Q.10 ', '8351056', 'dlthien@hcmuns.edu.vn'),
(3, 'nhung', '202cb962ac59075b964b07152d234b70', 'Phạm Thị Nhung', 1, '1975-11-22', '56 Đinh Tiên Hoàng quận 1', '9745698', 'ptnhung@hcmuns.edu.vn'),
(4, 'thien123', '202cb962ac59075b964b07152d234b70', 'Nguyễn Khắc Thiện', 0, '1977-08-06', '12bis Đường 3-2 quận 10', '8769128', 'nkthien@hcmuns.edu.vn'),
(5, 'giang', '202cb962ac59075b964b07152d234b70', 'Tô Trần Hồ Giảng', 0, '1973-04-15', '75 Nguyễn Kiệm quận Gò Vấp', '5792564', 'tthgiang@hcmuns.edu.vn'),
(10, 'cuong', '202cb962ac59075b964b07152d234b70', 'Quốc Cường', 0, '1982-04-05', '357 Lê Hồng Phong', '8351056', 'cqcuong.php@gmail.com'),
(12, 'abc', '202cb962ac59075b964b07152d234b70', 'abc', 0, '2016-10-12', 'abc', '012345678910', 'abc@fasfa.com');

-- --------------------------------------------------------

--
-- Table structure for table `lien_he`
--

CREATE TABLE `lien_he` (
  `ma_lien_he` int(11) NOT NULL,
  `ten_khach` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lien_he`
--

INSERT INTO `lien_he` (`ma_lien_he`, `ten_khach`, `email`, `noi_dung`, `trang_thai`) VALUES
(1, 'Nguyễn Tấn Đô', 'donguyen0311@gmail.com', 'Test Form Liên Hệ', 1),
(2, 'Nguyễn Tấn Đô', 'donguyen0311@gmail.com', 'Test Form Liên Hệ 1-1-1-1-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai_bai_viet`
--

CREATE TABLE `loai_bai_viet` (
  `ma_loai_bai_viet` int(11) NOT NULL,
  `ten_loai_bai_viet` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `ma_loai_cha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_bai_viet`
--

INSERT INTO `loai_bai_viet` (`ma_loai_bai_viet`, `ten_loai_bai_viet`, `mo_ta`, `ma_loai_cha`) VALUES
(194, 'Tin khuyến mãi', '', 0),
(195, 'Tin công nghệ', '', 194),
(196, 'Sản phẩm mới', '', 194),
(199, 'abcde', 'abc', 202),
(200, 'test', 'test', 202),
(201, 'abcd', 'abcd', 0),
(202, 'test_2', 'test_2', 194);

-- --------------------------------------------------------

--
-- Table structure for table `loai_nguoi_dung`
--

CREATE TABLE `loai_nguoi_dung` (
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ten_loai_nguoi_dung` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_nguoi_dung`
--

INSERT INTO `loai_nguoi_dung` (`ma_loai_nguoi_dung`, `ten_loai_nguoi_dung`) VALUES
(1, 'Quản trị'),
(2, 'Khách hàng'),
(3, 'Nhân viên'),
(4, 'Kỹ thuật'),
(5, 'Kế toán'),
(6, 'Trưởng phòng'),
(7, 'Phó phòng'),
(8, 'Giám đốc'),
(9, 'Phó giám đốc');

-- --------------------------------------------------------

--
-- Table structure for table `loai_san_pham`
--

CREATE TABLE `loai_san_pham` (
  `ma_loai_san_pham` int(11) NOT NULL,
  `ten_loai_san_pham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` text COLLATE utf8_unicode_ci,
  `ma_loai_cha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_san_pham`
--

INSERT INTO `loai_san_pham` (`ma_loai_san_pham`, `ten_loai_san_pham`, `mo_ta`, `ma_loai_cha`) VALUES
(9, 'Jean Nam', NULL, 0),
(10, 'Quần Jean', NULL, 9),
(11, 'Quần Shorts', NULL, 9),
(12, 'Áo khoác Jeans', NULL, 9),
(13, 'Nón Jeans', NULL, 9),
(14, 'Áo Jeans', NULL, 9),
(15, 'Jean Nữ', NULL, 0),
(21, 'Quần Jean', NULL, 15),
(22, 'Quần Shorts', NULL, 15),
(23, 'Áo khoác Jeans', NULL, 15),
(24, 'Nón Jeans', NULL, 15),
(25, 'Áo Jeans', NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `ma_nguoi_dung` int(11) NOT NULL,
  `ma_loai_nguoi_dung` tinyint(3) NOT NULL,
  `ho_ten` varchar(100) CHARACTER SET utf8 NOT NULL,
  `ten_dang_nhap` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mat_khau` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `ngay_dang_ky` date DEFAULT NULL,
  `ngay_dang_nhap_cuoi` date DEFAULT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`ma_nguoi_dung`, `ma_loai_nguoi_dung`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `ngay_dang_ky`, `ngay_dang_nhap_cuoi`, `active`) VALUES
(1, 1, 'Khuất Thùy Phương', 'phuong', '123456', 'ktphuong@hcmuns.edu.vn', '2007-11-01', NULL, 0),
(2, 2, 'Đỗ Lâm Thiên', 'thien', 'e10adc3949ba59abbe56e057f20f883e', 'dlthien@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(3, 3, 'Trương Hữu Quý', 'quy', '123456', 'thquy@hcmuns.edu.vn', '2007-11-03', NULL, 0),
(4, 4, 'Nguyễn Kiến Thy', 'thy', '123456', 'nkthy@hcmuns.edu.vn', '2007-11-04', NULL, 0),
(5, 3, 'Phạm Thị Nhung', 'nhung', '123456', 'ptnhung@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(6, 4, 'Lâm Thị Thu Hồng', 'hong', '123456', 'ltthong@hcmuns.edu.vn', '2007-11-06', NULL, 0),
(7, 3, 'Nguyễn Tiến Dũng', 'dung', '123456', 'ntd@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(8, 4, 'Nguyễn Hữu Thiện', 'huuthien', '123456', 'nhthien@hcmuns.edu.vn', '2007-11-04', NULL, 0),
(9, 3, 'Nguyễn Thị Minh Hằng', 'hang', '123456', 'ntmhang@hcmuns.edu.vn', '2007-11-05', NULL, 0),
(10, 7, 'Nguyễn Thị Minh Trang', 'trang', '123456', 'ntmtrang@hcmuns.edu.vn', '2007-11-06', NULL, 0),
(11, 4, 'Nguyễn Thị Phương Lan', 'lan', '123456', 'ntplan@hcmuns.edu.vn', '2007-11-02', NULL, 0),
(12, 4, 'Nguyễn Đăng Thái Bình', 'binh', '123456', 'ndtbinh@hcmuns.edu.vn', '2007-11-09', NULL, 0),
(13, 8, 'Khách', 'khach', '123456', '', '2007-11-01', NULL, 0),
(15, 7, 'Mai Lê Toàn', '', '123456', 'mltoan@yahoo.com', '2007-11-08', '0000-00-00', 0),
(16, 8, 'quốc cường', 'quoccuong', '01514652cabb16dc2bbe38a631d56f32', 'cqcuong.php@gmail.com', '2011-01-07', NULL, 1),
(17, 9, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2011-01-07', NULL, 1),
(18, 1, 'test1', 'test1', '202cb962ac59075b964b07152d234b70', 'test@test.com', '2016-10-30', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma_san_pham` int(11) NOT NULL,
  `ten_san_pham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai_cha` int(11) NOT NULL,
  `ma_loai` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta_tom_tat` text COLLATE utf8_unicode_ci,
  `mo_ta_chi_tiet` text COLLATE utf8_unicode_ci,
  `don_gia` int(11) NOT NULL DEFAULT '0',
  `hinh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `san_pham_moi` tinyint(4) NOT NULL DEFAULT '0',
  `so_lan_xem` int(11) NOT NULL,
  `ngay_tao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma_san_pham`, `ten_san_pham`, `ma_loai_cha`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`) VALUES
(210, 'Quần jean nữ sneakpeak QD305-26', 15, '21', 'Dáng basic nhưng được phá cách bằng những đường chỉ trần nổi màu vàng làm tôn vòng 3 quyến rũ và đôi chân thon dài của các nàng là một chấm phá đặc biệt nổi bật của quần jean nữ  QD305-26 của thương hiệu Sneakpeak.', 'Thông tin sản phẩm:\r\n\r\nDáng basic nhưng được phá cách bằng những đường chỉ trần nổi màu vàng làm tôn vòng 3 quyến rũ và đôi chân thon dài của các nàng là một chấm phá đặc biệt nổi bật của quần jean nữ  QD305-26 của thương hiệu Sneakpeak.\r\n\r\n- Chất jean đẹp, co giãn tốt , độ bai ít.\r\n\r\n- Tỷ lệ phai màu là 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 2 gam màu xanh đậm và xanh nhạt dễ dàng mix với nhiều kiểu, Size 1, 3, 5, 7\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 1\r\nKÍCH CỠ (cm)\r\n 	SIZE	XS (0)	S (1)	M (3)	L (5)	XL (7)\r\nÁO	Ngang vai	33	34	36	38	40\r\nNgực	80	84	88	92	96\r\nEo 	30	64	68	72	76\r\nHông	80	84	88	92	96\r\nQUẦN	Eo	60	64	68	72	76\r\nHông	80	84	88	92	96\r\nDài	85	86	87	88	90\r\nỐng	11	11	11	12	13', 305000, '2606-jean nu.jpg', 0, 1, '2014-10-06'),
(211, 'Quần jean nữ F21 QD310-06', 15, '21', 'Mạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda', 'Thông tin sản phẩm:\r\n\r\nMạnh mẽ ,cá tính nhưng vẫn đầy quyến rũ quần jean QD310-06 của thương hiệu Forever21 vẫn chiếm được lòng phái đẹp. Thiết kế đặc biệt với đường chỉ trần nổi toàn quần, đường cắt ngang mông giúp tôn vòng 3 gợi cảm, và bản can 3cm dọc 2 sườn quần tạo cảm giác kéo dài đôi chân miên man. Là sản phẩm độc quyền của Zenda\r\n\r\n- Quần dáng body, bản cạp nối, 2 khuy \r\n\r\n- Vải 98%cotton, 2%spandex, vải độc quyền của nhà máy không có trên thị trường Việt Nam\r\n\r\n- Tỷ lệ phai màu 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n- Chất jean dày dăn, co giãn ít, có độ bền cao.\r\n\r\n- Tỷ lệ phai màu là 1/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 3 gam màu xanh đậm, xanh vừa và xanh nhạt dễ dàng mix với nhiều kiểu, Size 1,3,5,7,9\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 1', 310000, 'f21 jean nu.jpg', 1, 1, '2014-10-06'),
(212, 'Quần jean nữ MNG QD305-24', 15, '21', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 3 khuy, cạp cao của MNG, điểm nhấn là sự sắp xếp của những chiếc đỉa trên bản cạp cao 7cm.\r\n\r\n- Chất jean co giãn tốt, độ bai ít, tỉ lệ phai chiếm 0,2%, mặc cực ôm và tôn dáng chuẩn, đường cắt cúp thân sau làm tôn vòng 3 quyến rũ\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu xanh đậm và xanh trung, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 3 khuy, cạp cao của MNG, điểm nhấn là sự sắp xếp của những chiếc đỉa trên bản cạp cao 7cm.\r\n\r\n- Chất jean co giãn tốt, độ bai ít, tỉ lệ phai chiếm 0,2%, mặc cực ôm và tôn dáng chuẩn, đường cắt cúp thân sau làm tôn vòng 3 quyến rũ\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu xanh đậm và xanh trung, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 305000, 'qd305 jean nu.jpg', 1, 1, '2014-10-06'),
(213, 'Quần jean nữ Zara woman QD305-22', 15, '21', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 5 khuy đồng của Zara woman\r\n\r\n- Chất jean co giãn tốt, mặc cực ôm và tôn dáng chuẩn\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu đen và xanh đậm, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1\r\n\r\n ', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 5 khuy đồng của Zara woman\r\n\r\n- Chất jean co giãn tốt, mặc cực ôm và tôn dáng chuẩn\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu đen và xanh đậm, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1\r\n\r\n ', 305000, 'qd305-jean nu.JPG', 1, 1, '2014-10-06'),
(214, 'Quần Jean Leara Wonman QD310-05', 15, '21', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ Leara Wonman , dáng cơ bản, có khóa hai bên ống chân.\r\n\r\n- Chất jean jean cực đẹp, không nhuộm, không phai, vải xuất dư, co giãn tốt, điểm nhấn là khóa 2 bên, mặc cực ôm và tôn dáng chuẩn\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 1 màu đen duy nhất,  Size 1, 3, 5, 7\r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ Leara Wonman , dáng cơ bản, có khóa hai bên ống chân.\r\n\r\n- Chất jean jean cực đẹp, không nhuộm, không phai, vải xuất dư, co giãn tốt, điểm nhấn là khóa 2 bên, mặc cực ôm và tôn dáng chuẩn\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 1 màu đen duy nhất,  Size 1, 3, 5, 7\r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 310000, 'quan-jean-leara-wonman-qd310.JPG', 1, 1, '2014-10-06'),
(215, 'Quần jean nữ pull&bear QD305-25', 15, '21', 'Thông tin sản phẩm:\r\n\r\nĐộc đáo và lạ mắt với jean dập ô vuông, mài nhẹ thân trước của thương hiệu thời trang pull & bear, form chuẩn, ôm và tôn vòng vòng 3 \r\n\r\n- Quần được dập 2 ô vuông bên trái, 1 ô bên phải, 2 túi sau dấu miệng bổ cơi, bản cạp 4cm có đỉa\r\n\r\n- Chất jean đẹp, co giãn tốt , độ bai ít.\r\n\r\n- Tỷ lệ phai màu là 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 2 gam màu xanh đậm và xanh nhạt dễ dàng mix với nhiều kiểu, Size 34, 36, 38, 40, 42\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 34', 'Thông tin sản phẩm:\r\n\r\nĐộc đáo và lạ mắt với jean dập ô vuông, mài nhẹ thân trước của thương hiệu thời trang pull & bear, form chuẩn, ôm và tôn vòng vòng 3 \r\n\r\n- Quần được dập 2 ô vuông bên trái, 1 ô bên phải, 2 túi sau dấu miệng bổ cơi, bản cạp 4cm có đỉa\r\n\r\n- Chất jean đẹp, co giãn tốt , độ bai ít.\r\n\r\n- Tỷ lệ phai màu là 2/10 nhưng vẫn giữ được màu căn bản của quần\r\n\r\n-Sản phẩm được phép giặt máy nhưng không được giặt chung với cácsản phẩm sáng màu\r\n\r\n- Quần có 2 gam màu xanh đậm và xanh nhạt dễ dàng mix với nhiều kiểu, Size 34, 36, 38, 40, 42\r\n\r\n Thông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 81 - 62 - 89\r\n\r\n- Size người mẫu mặc: 34', 305000, 'quan-jean-leara-wonman-qd311.JPG', 1, 111, '2014-10-06'),
(216, 'quan-jean-leara-wonman-qd312.JPG', 15, '21', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 3 khuy, cạp cao của MNG, điểm nhấn là sự sắp xếp của những chiếc đỉa trên bản cạp cao 7cm.\r\n\r\n- Chất jean co giãn tốt, độ bai ít, tỉ lệ phai chiếm 0,2%, mặc cực ôm và tôn dáng chuẩn, đường cắt cúp thân sau làm tôn vòng 3 quyến rũ\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu xanh đậm và xanh trung, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 'Thông tin sản phẩm:\r\n\r\n- Quần jean nữ 3 khuy, cạp cao của MNG, điểm nhấn là sự sắp xếp của những chiếc đỉa trên bản cạp cao 7cm.\r\n\r\n- Chất jean co giãn tốt, độ bai ít, tỉ lệ phai chiếm 0,2%, mặc cực ôm và tôn dáng chuẩn, đường cắt cúp thân sau làm tôn vòng 3 quyến rũ\r\n\r\n- Mix đồ với áo thun, áo sơ mi cơ bản và đóng thùng rất đẹp\r\n\r\n- Có 2 màu xanh đậm và xanh trung, Size 1, 3, 5, 7 \r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m62\r\n\r\n- Cân nặng: 47kg\r\n\r\n-  Số đo 3 vòng: 84 - 62 - 88cm\r\n\r\n- Size người mẫu mặc: 1', 305000, 'quan-jean-leara-wonman-qd312.JPG', 1, 122, '2014-10-06'),
(217, 'Quần jean nữ Sneakpeek - QD295-04', 15, '21', 'Thông tin sản phẩm:  \r\n\r\n- Quần jean nữ gập gấu của Sneakpeek\r\n\r\n- Quần jean dáng cơ bản, gập gấu chỉ đỏ, 4 bọ túi sau\r\n\r\n- Quần co giãn tốt, hai màu xanh đậm, xanh nhạt dễ mix đồ\r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 80 - 66 - 87', 'Thông tin sản phẩm:  \r\n\r\n- Quần jean nữ gập gấu của Sneakpeek\r\n\r\n- Quần jean dáng cơ bản, gập gấu chỉ đỏ, 4 bọ túi sau\r\n\r\n- Quần co giãn tốt, hai màu xanh đậm, xanh nhạt dễ mix đồ\r\n\r\nThông tin người mẫu:\r\n\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 80 - 66 - 87', 295000, 'quan-jean-leara-wonman-qd313.JPG', 1, 1, '2014-10-06'),
(218, 'Quần jean nữ MNG - QD305', 15, '21', 'Thông tin sản phẩm: \r\n\r\n- Quần jean nữ MNG dáng basic, chất jean mịn đẹp\r\n\r\n- Ống côn tôn dáng, kéo dài chân \r\n\r\n- Form chuẩn, mix đồ gì cũng đẹp, nhìu màu sắc đa dạng\r\n\r\nThông tin người mẫu:\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 80 - 66 - 87\r\n\r\n- Size người mẫu đang mặc: 32', 'Thông tin sản phẩm: \r\n\r\n- Quần jean nữ MNG dáng basic, chất jean mịn đẹp\r\n\r\n- Ống côn tôn dáng, kéo dài chân \r\n\r\n- Form chuẩn, mix đồ gì cũng đẹp, nhìu màu sắc đa dạng\r\n\r\nThông tin người mẫu:\r\n- Chiều cao: 1m65\r\n\r\n- Cân nặng: 47kg\r\n\r\n- Số đo 3 vòng: 80 - 66 - 87\r\n\r\n- Size người mẫu đang mặc: 32', 305000, 'quan-jean-leara-wonman-qd314.JPG', 1, 1, '2014-10-06'),
(219, 'BURTON MENSWEAR', 9, '10', 'Quần jeans màu xanh đậm của thương hiệu Burton Menswear London với thiết kế dáng ôm sẽ là trang phục yêu thích trong bộ sưu tập thời trang của bạn\r\n\r\n- Chất liệu cotton pha\r\n- Lưng quần có đỉa và nút cài\r\n- Quần có 5 túi cổ điển\r\n- Dáng ôm', 'Quần jeans màu xanh đậm của thương hiệu Burton Menswear London với thiết kế dáng ôm sẽ là trang phục yêu thích trong bộ sưu tập thời trang của bạn\r\n\r\n- Chất liệu cotton pha\r\n- Lưng quần có đỉa và nút cài\r\n- Quần có 5 túi cổ điển\r\n- Dáng ôm', 1000000, 'quan-jean-ong-dung-xanh-duong-qj1180-thumb.jpg', 0, 1, '2014-10-06'),
(220, 'BURTON MENSWEAR', 9, '10', 'Quần jeans màu đen của thương hiệu Burton Menswear London với thiết kế dáng ôm sẽ là trang phục yêu thích trong bộ sưu tập thời trang của bạn\r\n\r\n- Chất liệu cotton pha\r\n- Lưng quần có đỉa và nút cài\r\n- Quần có 5 túi cổ điển\r\n- Dáng ôm', 'Quần jeans màu đen của thương hiệu Burton Menswear London với thiết kế dáng ôm sẽ là trang phục yêu thích trong bộ sưu tập thời trang của bạn\r\n\r\n- Chất liệu cotton pha\r\n- Lưng quần có đỉa và nút cài\r\n- Quần có 5 túi cổ điển\r\n- Dáng ôm', 1079000, 'quan-jean-ong-dung-xanh-den-qj1179-thumb.jpg', 1, 1, '2014-10-06'),
(221, 'BURTON MENSWEAR', 9, '10', '\r\nSKU (simple)	BU071AA82QCFVN\r\nMàu sắc	Xanh\r\nHướng dẫn sử dụng	Giặt máy nhiệt độ không quá 40°C\r\nKhông được tẩy\r\nKhông được sấy khô\r\nỦi nhiệt độ trung bình\r\nKhông được giặt khô\r\nChỉ dùng nước giặt có chất tẩy nhẹ\r\nGiặt và ủi mặt trái\r\nPhơi khô trong bóng râm\r\nThành phần chất liệu	99% Cotton 1% Elastane\r\nXuất xứ	Nhập khẩu', '\r\nSKU (simple)	BU071AA82QCFVN\r\nMàu sắc	Xanh\r\nHướng dẫn sử dụng	Giặt máy nhiệt độ không quá 40°C\r\nKhông được tẩy\r\nKhông được sấy khô\r\nỦi nhiệt độ trung bình\r\nKhông được giặt khô\r\nChỉ dùng nước giặt có chất tẩy nhẹ\r\nGiặt và ủi mặt trái\r\nPhơi khô trong bóng râm\r\nThành phần chất liệu	99% Cotton 1% Elastane\r\nXuất xứ	Nhập khẩu', 1149000, 'quan-jean-ong-dung-xanh-den-qj1178-thumb.jpg', 1, 1, '2014-10-06'),
(222, 'THE BLUES', 9, '10', 'SKU (simple)	TH296AA21QXUVN\r\nMàu sắc	Đen\r\nHướng dẫn sử dụng	Giặt riêng với bột giặt có chất tẩy nhẹ\r\nKhông được ngâm\r\nKhông được tẩy\r\nKhông được sấy khô\r\nĐể khô trên mặt phẳng\r\nỦi mặt trái với nhiệt độ nóng vừa\r\nThành phần chất liệu	98% cotton 2% spandex\r\nSản phẩm không giảm giá	Sản phẩm này không được áp dụng với voucher hoặc các khuyến mại khác.', 'SKU (simple)	TH296AA21QXUVN\r\nMàu sắc	Đen\r\nHướng dẫn sử dụng	Giặt riêng với bột giặt có chất tẩy nhẹ\r\nKhông được ngâm\r\nKhông được tẩy\r\nKhông được sấy khô\r\nĐể khô trên mặt phẳng\r\nỦi mặt trái với nhiệt độ nóng vừa\r\nThành phần chất liệu	98% cotton 2% spandex\r\nSản phẩm không giảm giá	Sản phẩm này không được áp dụng với voucher hoặc các khuyến mại khác.', 550000, 'quan-jean-ong-dung-xanh-den-qj1177-thumb.jpg', 1, 1, '2014-10-06'),
(223, 'ATYPICAL', 9, '10', '\r\nSKU (simple)	AT987AA66WARVN\r\nMàu sắc	Xanh Đậm\r\nHướng dẫn sử dụng	Giặt ở nhiệt độ trung bình với sản phẩm cùng màu\r\nKhông dùng chất tẩy\r\nSấy nhẹ bằng máy\r\nỦi hơi nếu cần thiết', '\r\nSKU (simple)	AT987AA66WARVN\r\nMàu sắc	Xanh Đậm\r\nHướng dẫn sử dụng	Giặt ở nhiệt độ trung bình với sản phẩm cùng màu\r\nKhông dùng chất tẩy\r\nSấy nhẹ bằng máy\r\nỦi hơi nếu cần thiết', 399000, 'quan-jean-ong-dung-den-qj1176-thumb.jpg', 1, 1, '2014-10-06'),
(224, 'ATYPICAL Quần Jeans Nam', 9, '10', 'SKU (simple)	AT987AA65WASVN\r\nMàu sắc	Xanh Đen\r\nHướng dẫn sử dụng	Giặt ở nhiệt độ trung bình với sản phẩm cùng màu\r\nKhông dùng chất tẩy\r\nSấy nhẹ bằng máy\r\nỦi hơi nếu cần thiết', 'SKU (simple)	AT987AA65WASVN\r\nMàu sắc	Xanh Đen\r\nHướng dẫn sử dụng	Giặt ở nhiệt độ trung bình với sản phẩm cùng màu\r\nKhông dùng chất tẩy\r\nSấy nhẹ bằng máy\r\nỦi hơi nếu cần thiết', 399000, 'quan-jean-xanh-den-qj1170-thumb.jpg', 1, 1, '2014-10-06'),
(225, 'COLA Quần Jeans Rách', 9, '10', 'SKU (simple)	CO811AA95YMYVN\r\nMàu sắc	Xanh\r\nHướng dẫn sử dụng	Giặt riêng với bột giặt có chất tẩy nhẹ\r\nKhông được ngâm\r\nKhông được tẩy\r\nKhông được sấy khô\r\nĐể khô trên mặt phẳng\r\nỦi mặt trái với nhiệt độ nóng vừa', 'SKU (simple)	CO811AA95YMYVN\r\nMàu sắc	Xanh\r\nHướng dẫn sử dụng	Giặt riêng với bột giặt có chất tẩy nhẹ\r\nKhông được ngâm\r\nKhông được tẩy\r\nKhông được sấy khô\r\nĐể khô trên mặt phẳng\r\nỦi mặt trái với nhiệt độ nóng vừa', 390000, 'quan-jean-xanh-den-qj1170-thumb (1).jpg', 1, 1, '2014-10-06'),
(226, 'THE BLUES Quần Dài Jean Nam', 9, '10', 'SKU (simple)	TH296AA18QXXVN\r\nMàu sắc	Xanh Jean\r\nHướng dẫn sử dụng	Giặt máy ở nhiệt độ lạnh\r\nKhông được tẩy\r\nSấy khô ở nhiệt độ thấp\r\nỦi hơi nếu cần\r\nThành phần chất liệu	98% cotton 2% spandex\r\nSản phẩm không giảm giá	Sản phẩm này không được áp dụng với voucher hoặc các khuyến mại khác.', 'SKU (simple)	TH296AA18QXXVN\r\nMàu sắc	Xanh Jean\r\nHướng dẫn sử dụng	Giặt máy ở nhiệt độ lạnh\r\nKhông được tẩy\r\nSấy khô ở nhiệt độ thấp\r\nỦi hơi nếu cần\r\nThành phần chất liệu	98% cotton 2% spandex\r\nSản phẩm không giảm giá	Sản phẩm này không được áp dụng với voucher hoặc các khuyến mại khác.', 550000, 'quan-jean-xanh-den-qj1174-thumb (1).jpg', 1, 1, '2014-10-06'),
(227, 'BURTON MENSWEAR Quần Jeans Wash', 9, '10', 'SKU (simple)	BU071AA76XXJVN\r\nMàu sắc	Xanh Dương\r\nHướng dẫn sử dụng	Giặt máy nhiệt độ không quá 40°C với tốc độ nhẹ\r\nKhông được tẩy\r\nSấy khô với nhiệt độ thấp\r\nỦi nhiệt độ cao\r\nKhông được giặt khô\r\nGiặt riêng, không giặt cùng sản phẩm sáng màu\r\nKhông vò mạnh các vết bẩn dính vào sản phẩm\r\nGiặt mặt trái sản phẩm\r\nThành phần chất liệu	98% Cotton 2% Elastane\r\nXuất xứ	Nhập khẩu', 'SKU (simple)	BU071AA76XXJVN\r\nMàu sắc	Xanh Dương\r\nHướng dẫn sử dụng	Giặt máy nhiệt độ không quá 40°C với tốc độ nhẹ\r\nKhông được tẩy\r\nSấy khô với nhiệt độ thấp\r\nỦi nhiệt độ cao\r\nKhông được giặt khô\r\nGiặt riêng, không giặt cùng sản phẩm sáng màu\r\nKhông vò mạnh các vết bẩn dính vào sản phẩm\r\nGiặt mặt trái sản phẩm\r\nThành phần chất liệu	98% Cotton 2% Elastane\r\nXuất xứ	Nhập khẩu', 1000000, 'quan-jean-xanh-den-qj1173-thumb.jpg', 1, 1, '2014-10-06'),
(228, 'Quần Jean Xanh Đen QJ1156', 9, '9', 'Quần Jean Xanh Đen QJ1156\r\n- Màu sắc:  Xanh Đen\r\n- Chất liệu: 100% cotton, có thun co giãn tạo cảm giác thoải mái khi mặc\r\n- Xuất xứ: Việt Nam.\r\n- Size: 28,29,30,31,32 Form quần skinny giúp tôn lên vóc dáng của người mặc.\r\n- Điểm nổi bât: Đường may tỉ mỉ và khéo léo, thiết kế tuí quần sau có đính nút cá tính, có thể dể dàng mix cùng các kiểu sơ mi hoặc áo thun trẻ trung, để diện khi đến công sở hay cà phê cuối tuần ....', '<p><strong><em>Quần Jean Xanh Đen QJ1156</em></strong><br />\r\n<em>- M&agrave;u sắc:&nbsp; Xanh Đen</em><br />\r\n<em>-&nbsp;Chất liệu:&nbsp;100% cotton, c&oacute; thun co gi&atilde;n tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</em><br />\r\n<em>- Xuất xứ:&nbsp;Việt Nam.</em><br />\r\n<em>- Size:&nbsp;28,29,30,31,32 Form quần skinny gi&uacute;p t&ocirc;n l&ecirc;n v&oacute;c d&aacute;ng của người mặc.<br />\r\n- Điểm nổi b&acirc;t:&nbsp;Đường may tỉ mỉ v&agrave; kh&eacute;o l&eacute;o, thiết kế tu&iacute; quần sau c&oacute; đ&iacute;nh n&uacute;t c&aacute; t&iacute;nh, c&oacute; thể dể d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu sơ mi hoặc &aacute;o thun trẻ trung, để diện khi đến c&ocirc;ng sở hay c&agrave; ph&ecirc; cuối tuần ....</em></p>\r\n\r\n<p><strong><em>Quần Jean Xanh Đen QJ1156</em></strong><br />\r\n<em>- M&agrave;u sắc:&nbsp; Xanh Đen</em><br />\r\n<em>-&nbsp;Chất liệu:&nbsp;100% cotton, c&oacute; thun co gi&atilde;n tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</em><br />\r\n<em>- Xuất xứ:&nbsp;Việt Nam.</em><br />\r\n<em>- Size:&nbsp;28,29,30,31,32 Form quần skinny gi&uacute;p t&ocirc;n l&ecirc;n v&oacute;c d&aacute;ng của người mặc.<br />\r\n- Điểm nổi b&acirc;t:&nbsp;Đường may tỉ mỉ v&agrave; kh&eacute;o l&eacute;o, thiết kế tu&iacute; quần sau c&oacute; đ&iacute;nh n&uacute;t c&aacute; t&iacute;nh, c&oacute; thể dể d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu sơ mi hoặc &aacute;o thun trẻ trung, để diện khi đến c&ocirc;ng sở hay c&agrave; ph&ecirc; cuối tuần ....</em></p>\r\n', 400000, 'quan-jean-xanh-den-qj1166-thumb.jpg', 1, 1, '2014-10-07'),
(229, 'Quần Jean Xanh Đen QJ1165', 9, '9', 'Quần Jean Xanh Đen QJ1165\r\n- Màu sắc:  Xanh Đen\r\n- Chất liệu: 100% cotton, có thun co giãn tạo cảm giác thoải mái khi mặc\r\n- Xuất xứ: Việt Nam.\r\n- Size: 28,29,30,31,32 Form quần skinny giúp tôn lên vóc dáng của người mặc.\r\n- Điểm nổi bât: Đường may tỉ mỉ và khéo léo, thiết kế tuí quần sau có đính  lo go da bò đẹp mắt, có thể dể dàng mix cùng các kiểu sơ mi hoặc áo thun trẻ trung, để diện khi đến công sở hay cà phê cuối tuần ..', '<p><strong><em>Quần Jean Xanh Đen QJ1165</em></strong><br />\r\n<em>- M&agrave;u sắc:&nbsp; Xanh Đen</em><br />\r\n<em>-&nbsp;Chất liệu:&nbsp;100% cotton, c&oacute; thun co gi&atilde;n tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</em><br />\r\n<em>- Xuất xứ:&nbsp;Việt Nam.</em><br />\r\n<em>- Size:&nbsp;28,29,30,31,32 Form quần skinny gi&uacute;p t&ocirc;n l&ecirc;n v&oacute;c d&aacute;ng của người mặc.<br />\r\n- Điểm nổi b&acirc;t:&nbsp;Đường may tỉ mỉ v&agrave; kh&eacute;o l&eacute;o, thiết kế tu&iacute; quần sau c&oacute; đ&iacute;nh &nbsp;lo go da b&ograve; đẹp mắt, c&oacute; thể dể d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu sơ mi hoặc &aacute;o thun trẻ trung, để diện khi đến c&ocirc;ng sở hay c&agrave; ph&ecirc; cuối tuần ..</em></p>\r\n\r\n<p><strong><em>Quần Jean Xanh Đen QJ1165</em></strong><br />\r\n<em>- M&agrave;u sắc:&nbsp; Xanh Đen</em><br />\r\n<em>-&nbsp;Chất liệu:&nbsp;100% cotton, c&oacute; thun co gi&atilde;n tạo cảm gi&aacute;c thoải m&aacute;i khi mặc</em><br />\r\n<em>- Xuất xứ:&nbsp;Việt Nam.</em><br />\r\n<em>- Size:&nbsp;28,29,30,31,32 Form quần skinny gi&uacute;p t&ocirc;n l&ecirc;n v&oacute;c d&aacute;ng của người mặc.<br />\r\n- Điểm nổi b&acirc;t:&nbsp;Đường may tỉ mỉ v&agrave; kh&eacute;o l&eacute;o, thiết kế tu&iacute; quần sau c&oacute; đ&iacute;nh &nbsp;lo go da b&ograve; đẹp mắt, c&oacute; thể dể d&agrave;ng mix c&ugrave;ng c&aacute;c kiểu sơ mi hoặc &aacute;o thun trẻ trung, để diện khi đến c&ocirc;ng sở hay c&agrave; ph&ecirc; cuối tuần ..</em></p>\r\n', 450000, 'quan-jean-xanh-den-qj1161-thumb.jpg', 1, 1, '2014-10-07'),
(230, 'abc', 9, '10', '<p>abc</p>\r\n', '<p>abc</p>\r\n', 100000, '10391451_618193918278407_666360243523664014_n.jpg', 0, 0, '2016-10-31'),
(231, 'abcd1', 9, '12', '<p>abc1</p>\r\n', '<p>abc121</p>\r\n', 100000, '1505075_644174055680393_4192378984502609458_n.jpg', 1, 0, '2016-10-31'),
(233, 'testkhuyenmaik', 9, '12', '<p>abc</p>\r\n', '<p>abcd</p>\r\n', 100000, '1505075_644174055680393_4192378984502609458_n.jpg', 1, 0, '2016-11-01'),
(234, 'khuyenmai', 15, '23', '<p>avbasdaaaaaaaaaaa1</p>\r\n', '<p>asdasdasdsas</p>\r\n', 100000, '10002919_758472097504141_2091493009_n.jpg', 1, 0, '2016-11-01'),
(235, 'asdsadasdsa11111111', 9, '13', '<p>asdasd</p>\r\n', '<p>asdsadasdasd</p>\r\n', 100000, '1505075_644174055680393_4192378984502609458_n.jpg', 1, 0, '2016-11-01'),
(236, 'asdasdsadasdasd', 9, '13', '<p>adasdas</p>\r\n', '<p>asdasd</p>\r\n', 100000, '1505075_644174055680393_4192378984502609458_n.jpg', 1, 0, '2016-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham_khuyen_mai`
--

CREATE TABLE `san_pham_khuyen_mai` (
  `ma_khuyen_mai` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `ngay_khuyen_mai` date NOT NULL,
  `ngay_het_han` date NOT NULL,
  `noi_dung_khuyen_mai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `san_pham_khuyen_mai`
--

INSERT INTO `san_pham_khuyen_mai` (`ma_khuyen_mai`, `ma_san_pham`, `ngay_khuyen_mai`, `ngay_het_han`, `noi_dung_khuyen_mai`) VALUES
(1, 210, '2016-11-08', '2016-11-03', '1+1'),
(2, 211, '2016-11-10', '2016-11-22', '-10%'),
(3, 234, '2016-11-24', '2016-11-29', '-30%'),
(5, 236, '2016-11-01', '2016-11-17', '-10%'),
(6, 235, '2016-11-01', '2016-11-24', '-50%');

-- --------------------------------------------------------

--
-- Table structure for table `vvisit_counter`
--

CREATE TABLE `vvisit_counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vvisit_counter`
--

INSERT INTO `vvisit_counter` (`id`, `tm`, `ip`) VALUES
(2, 1409823904, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`ma_bai_viet`),
  ADD KEY `ma_the_loai` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia` (`ma_nguoi_dung`),
  ADD KEY `ma_the_loai_2` (`ma_loai_bai_viet`),
  ADD KEY `ma_tac_gia_2` (`ma_nguoi_dung`);

--
-- Indexes for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  ADD PRIMARY KEY (`stt`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma_hoa_don`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_khach_hang`);

--
-- Indexes for table `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`ma_lien_he`);

--
-- Indexes for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  ADD PRIMARY KEY (`ma_loai_bai_viet`);

--
-- Indexes for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  ADD PRIMARY KEY (`ma_loai_nguoi_dung`);

--
-- Indexes for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  ADD PRIMARY KEY (`ma_loai_san_pham`);

--
-- Indexes for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`ma_nguoi_dung`),
  ADD KEY `ma_loai_nguoi_dung` (`ma_loai_nguoi_dung`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma_san_pham`);

--
-- Indexes for table `san_pham_khuyen_mai`
--
ALTER TABLE `san_pham_khuyen_mai`
  ADD PRIMARY KEY (`ma_khuyen_mai`);

--
-- Indexes for table `vvisit_counter`
--
ALTER TABLE `vvisit_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `ma_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ct_hoa_don`
--
ALTER TABLE `ct_hoa_don`
  MODIFY `stt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma_hoa_don` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma_khach_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `ma_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loai_bai_viet`
--
ALTER TABLE `loai_bai_viet`
  MODIFY `ma_loai_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `loai_nguoi_dung`
--
ALTER TABLE `loai_nguoi_dung`
  MODIFY `ma_loai_nguoi_dung` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loai_san_pham`
--
ALTER TABLE `loai_san_pham`
  MODIFY `ma_loai_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `ma_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma_san_pham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;
--
-- AUTO_INCREMENT for table `san_pham_khuyen_mai`
--
ALTER TABLE `san_pham_khuyen_mai`
  MODIFY `ma_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `vvisit_counter`
--
ALTER TABLE `vvisit_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
