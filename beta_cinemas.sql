-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 01:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beta_cinemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT 0,
  `roles` text DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `phone`, `email`, `image`, `username`, `password`, `type`, `roles`, `modified`, `created`) VALUES
(1, 'Admin', '0812345678', NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `pos` int(11) DEFAULT 0,
  `status` int(11) DEFAULT 1,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `link`, `description`, `images`, `type`, `pos`, `status`, `modified`, `created`) VALUES
(1, 'Banner trang chu 123', 'xxxx 23423', 'aaaaa', 'http://127.0.0.1:8000/fileuploads/1716501075.jpg', 'slider', 0, 1, 1716501077, 1715625241);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `title`, `image`, `description`, `status`, `modified`, `created`) VALUES
(1, 'beta Hai Ba Trung', 'http://127.0.0.1:8000/fileuploads/1715791778.jpg', 'xxx', NULL, 1715791779, 1715791629),
(2, 'beta Hai Ha Dong', 'http://127.0.0.1:8000/fileuploads/1715791844.png', 'xxxxx', NULL, 1715791845, 1715791845);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `node_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `menu` int(11) DEFAULT NULL,
  `home_menu` int(11) DEFAULT NULL,
  `footer_1` int(11) DEFAULT NULL,
  `footer_2` int(11) DEFAULT NULL,
  `footer_3` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `node_id`, `title`, `link`, `image`, `images`, `description`, `content`, `menu`, `home_menu`, `footer_1`, `footer_2`, `footer_3`, `type`, `modified`, `created`) VALUES
(2, 5, 'Danh sách sản phẩm', NULL, 'http://127.0.0.1:8000/fileuploads/1716160490.jpg', NULL, 'test', 'test ahihi', NULL, NULL, NULL, NULL, NULL, 'film', 1716160491, 1716160491),
(3, 6, 'Tin tức', NULL, 'http://127.0.0.1:8000/fileuploads/1716160579.jpg', NULL, 'Danh sách tin tức', 'Danh sách tin tức', 1, NULL, 1, NULL, NULL, 'new', 1716499819, 1716160581),
(4, 7, 'Khuyến mãi', NULL, '', NULL, '', '', 1, NULL, 1, NULL, NULL, 'new', 1716499837, 1716225272),
(6, 11, 'Phim đang chiếu', NULL, NULL, NULL, '', '', 1, 1, NULL, 1, NULL, 'film', 1716499337, 1716499337),
(7, 12, 'Phim sắp chiếu', NULL, NULL, NULL, '', '', 1, 1, NULL, 1, NULL, 'film', 1716499348, 1716499348),
(8, 13, 'Suất chiếu đặc biệt', NULL, NULL, NULL, '', '', 1, 1, NULL, 1, NULL, 'film', 1716499358, 1716499358),
(9, 14, 'Giới thiệu', NULL, 'http://127.0.0.1:8000/fileuploads/1716499558.jpg', NULL, '', 'Công ty Cổ phần Beta Media với tiền thân là Công ty TNHH Beta Media thành lập ngày 08 tháng 09 năm 2014, trụ sở chính đặt tại Tầng 3, số 595, đường Giải Phóng, Phường Giáp Bát, Quận Hoàng Mai, Thành phố Hà Nội.\r\n\r\n \r\n\r\nBeta Media được thành lập với mục tiêu đem tới khách hàng các sản phẩm và dịch vụ chất lượng tốt nhất, giá cả hợp lý nhất; với hai mảng kinh doanh chính là Tổ hợp dịch vụ ăn uống giải trí và cung cấp dịch vụ truyền thông. Chúng tôi đặt ra mục tiêu đem lại những trải nghiệm văn hoá và giải trí tuyệt vời nhất cho người dân Việt Nam, đặc biệt là giới trẻ. Những hoạt động của Beta Media bao gồm:\r\n\r\nHoạt động chiếu phim\r\nHoạt động sản xuất phim điện ảnh, phim video và chương trình truyền hình\r\nHoạt động phát hành phim điện ảnh, phim video và chương trình truyền hình\r\nNhà hàng và các dịch vụ ăn uống phục vụ lưu động\r\nQuảng cáo\r\n \r\n\r\nVới sứ mệnh mong muốn mang tới giá trị văn hóa hiện đại và chất lượng, Beta luôn lắng nghe, nghiên cứu nhằm thấu hiểu và thoả mãn nhu cầu của khách hàng, sáng tạo trong từng sản phẩm, tận tâm đem đến chất lượng dịch vụ hàng đầu.\r\n\r\n \r\n\r\nCÔNG TY CỔ PHẦN BETA MEDIA\r\n\r\nGiấy CNĐKKD số: 0106633482 - Đăng ký lần đầu ngày 08/09/2014 tại Sở Kế hoạch và Đầu tư Thành phố Hà Nội\r\n\r\nĐịa chỉ trụ sở: Tầng 3, số 595 Giải Phóng, P. Giáp Bát, Q. Hoàng Mai, TP. Hà Nội\r\n\r\nHotline: 0934 632 682\r\n\r\nEmail: cskh@betacorp.vn', 1, NULL, NULL, NULL, NULL, 'page', 1716499559, 1716499559);

-- --------------------------------------------------------

--
-- Table structure for table `category_linkeds`
--

CREATE TABLE `category_linkeds` (
  `id` int(11) NOT NULL,
  `node_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_linkeds`
--

INSERT INTO `category_linkeds` (`id`, `node_id`, `category_id`) VALUES
(5, 9, 3),
(6, 9, 4),
(40, 10, 6),
(41, 10, 7),
(42, 10, 8),
(43, 15, 6),
(44, 16, 6),
(45, 17, 6),
(46, 18, 6),
(47, 18, 7);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `node_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `title`, `image`, `code`, `time`, `percent`, `price`, `status`, `content`, `modified`, `created`) VALUES
(1, 'Test1', 'http://127.0.0.1:8000/fileuploads/1715796280.png', NULL, 1716512640, 10, 0, 1, 'aaaaa', 1715796689, 1715796315);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `node_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT 0,
  `description` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `trailer` text DEFAULT NULL,
  `genres` varchar(255) DEFAULT NULL,
  `characters` varchar(255) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `featured` int(11) DEFAULT 0,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `node_id`, `title`, `price`, `description`, `content`, `image`, `images`, `trailer`, `genres`, `characters`, `director`, `time`, `language`, `release_date`, `type`, `featured`, `modified`, `created`) VALUES
(1, 10, 'PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ BẢN GIAO HƯỞNG ĐỊA CẦU', 150000, 'Đôrêmon và những người bạn thực hiện chuyến phiêu lưu để gặp gỡ những người bạn mới, kết nối mọi người bằng âm nhạc và cứu thế giới khỏi khủng hoảng. Liệu những người bạn nhỏ có thể cứu được &quot;tương lai âm nhạc&quot; và cả địa cầu này?', 'ahihih', 'http://127.0.0.1:8000/fileuploads/1716527180.png', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/Yug8gbDd5EQ?si=bsiNXrc3U_cK-Ucc&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hoạt Hình', 'Wasabi Mizuta, Megumi Ôhara, Yumi Kakazu', 'Kazuaki Imai', '115 phút', 'Tiếng Nhật - Phụ đề Tiếng Việt; Lồng tiếng', '24/05/2024', NULL, 0, 1718074368, 1716498438),
(2, 15, 'Ngôi Đền Kỳ Quái 4', 100000, 'Min Joon bj de dọa bởi một linh hồn Pee Nak bi ẩn và phài thực hiện lời hứa trong quá khứ của mình. Nếu không hoàn thành lời hứa ấy, những tội lỗi mà anh từng gây nên sẽ quay trở lại nguyên rủa và trừng phạt cuộc đời anh.', '', 'http://127.0.0.1:8000/fileuploads/1716526212.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/JToYSVWY4N8?si=n2jjy1hPH4YvlCKR&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hài hước, Kinh dị', 'Witthawat Rattanaboonbaramee, Bhuripat Vejvongsatechawat, Phiravich Attachitsataporn', 'Phontharis Chotkijsadarsopon', '111 phút', 'Tiếng Thái', '31/05/2024', NULL, 0, 1718074381, 1716526213),
(3, 16, 'Furiosa: Câu Chuyện Từ Max Điên', 100000, 'Fury Road, câu chuyện kể về thời trẻ của nữ chiến binh Furiosa khi cô bị tách ra khỏi nơi ẩn náu ở Green Place of Many Mothers và lần đầu tiên buộc phải đối mặt với sự điên rồ của thế giới bên ngoài. Nhưng cô ấy luôn nuôi trong mình một khát vọng “trở về đất mẹ” mãnh liệt.', '', 'http://127.0.0.1:8000/fileuploads/1716526281.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/vPwSfR_O9Jo?si=g6qUoMvncniidXVk&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hành động, Phiêu lưu', 'Anya Taylor-Joy, Chris Hemsworth, Alyla Brown, Tom Burke', 'George Miller', '148 phút', 'Tiếng Anh', '24/05/2024', NULL, 0, 1718074392, 1716526301),
(4, 17, 'Lật Mặt 7', 100000, 'Qua những lát cắt đan xen, ẩn chứa nhiều nụ cười và cả nước mắt, &quot;Lật Mặt 7: Một Điều Ước&quot; là câu chuyện cảm động về đại gia đình bà Hai 73 tuổi - người mẹ đơn thân tự mình nuôi 5 người con khôn lớn. Khi trưởng thành, mỗi người đều có cuộc sống và gia đình riêng. Bất chợt, biến cố ập đến, những góc khuất dần được hé lộ, những nỗi niềm, lo lắng, trĩu nặng ẩn sâu trong trái tim người mẹ. Trách nhiệm thuộc về ai?', '', 'http://127.0.0.1:8000/fileuploads/1716526387.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/QdtPQ0wV53M?si=46jVG94-cBVR3O_x&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Tâm lý, Gia đình', 'Thanh Hiền, Trương Minh Cường, Đinh Y Nhung, Quách Ngọc Tuyên, Trâm Anh, Trần Kim Hải,..', 'Lý Hải', '138 phút', 'Tiếng Việt', '26/04/2024', NULL, 0, 1718074412, 1716526393),
(5, 18, 'Án Mạng Lầu 4', 120000, 'Một cặp vợ chồng hạnh phúc đang bị mắc kẹt trong những tình huống và thử thách kinh hoàng. Một vụ án mạng nhưng hiện trường lại không có vết máu, tội ác lại càng không. Vậy chuyện gì đã thực sự diễn ra ở lầu 4?', '', 'http://127.0.0.1:8000/fileuploads/1716527272.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/fSOxL_swa18?si=dBUE0KX9OSSc0XX1&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Tâm lý, Hồi Hộp', 'Trương Thế Vinh, Lương Bích Hữu', 'Nguyễn Hữu Tuấn', '106 phút', 'Tiếng Việt', '17/05/2024', NULL, 0, 1718074426, 1716527273);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_05_06_231318_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `node_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `featured` int(11) DEFAULT 0,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `node_id`, `title`, `image`, `images`, `content`, `description`, `featured`, `modified`, `created`) VALUES
(1, 9, 'Ưu đãi khủng khi xem phim', 'http://127.0.0.1:8000/fileuploads/1716338399.jpg', NULL, 'ahihi ahihi', 'ahihi', 0, 1716338400, 1716226572);

-- --------------------------------------------------------

--
-- Table structure for table `nodes`
--

CREATE TABLE `nodes` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `pos` int(11) DEFAULT 0,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nodes`
--

INSERT INTO `nodes` (`id`, `title`, `slug`, `type`, `status`, `pos`, `modified`, `created`) VALUES
(5, 'Danh sách sản phẩm', 'danh-sach-san-pham', 'category', 1, 0, 1716160491, 1716160491),
(6, 'Tin tức', 'tin-tuc', 'category', 1, 0, 1716499819, 1716160581),
(7, 'Khuyến mãi', 'khuyen-mai', 'category', 1, 0, 1716499837, 1716225272),
(9, 'Ưu đãi khủng khi xem phim', 'uu-dai-khung-khi-xem-phim', 'new', 1, 0, 1716338400, 1716226572),
(10, 'PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ BẢN GIAO HƯỞNG ĐỊA CẦU', 'phim-dien-anh-doraemon-nobita-va-ban-giao-huong-dia-cau', 'film', 1, 0, 1718074368, 1716498438),
(11, 'Phim đang chiếu', 'phim-dang-chieu', 'category', 1, 0, 1716499337, 1716499337),
(12, 'Phim sắp chiếu', 'phim-sap-chieu', 'category', 1, 0, 1716499348, 1716499348),
(13, 'Suất chiếu đặc biệt', 'suat-chieu-dac-biet', 'category', 1, 0, 1716499358, 1716499358),
(14, 'Giới thiệu', 'gioi-thieu', 'category', 1, 0, 1716499559, 1716499559),
(15, 'Ngôi Đền Kỳ Quái 4', 'ngoi-den-ky-quai-4', 'film', 1, 0, 1718074381, 1716526213),
(16, 'Furiosa: Câu Chuyện Từ Max Điên', 'furiosa-cau-chuyen-tu-max-dien', 'film', 1, 0, 1718074392, 1716526301),
(17, 'Lật Mặt 7', 'lat-mat-7', 'film', 1, 0, 1718074412, 1716526393),
(18, 'Án Mạng Lầu 4', 'an-mang-lau-4', 'film', 1, 0, 1718074426, 1716527273);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `extra` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `image`, `content`, `extra`, `price`, `status`, `modified`, `created`) VALUES
(1, '1 bỏng ngô', 'http://127.0.0.1:8000/fileuploads/1718162515.jpg', 'Dành cho người cô đơn', 'bong', 70000, 1, 1718163738, 1716157257),
(2, 'Combo 2 nước 1 bỏng', 'http://127.0.0.1:8000/fileuploads/1718162614.jpg', 'Com bo tốt dành cho các cặp đôi', 'nuoc,bong', 150000, 1, 1718163750, 1718162615),
(3, 'Combo 1 nước 1 bỏng', 'http://127.0.0.1:8000/fileuploads/1718162624.jpg', 'Đang có chương trình khuyến mãi siu ưu đãi', 'nuoc,bong', 100000, 1, 1718163760, 1718162674),
(4, '1 nước', 'http://127.0.0.1:8000/fileuploads/1718164469.jpg', 'Đang trong thời gian khuyến mãi', 'nuoc', 50000, 1, 1718164471, 1718164471);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `showtime_id` int(11) DEFAULT 0,
  `code` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `option_ids` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cart_sum` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT 0,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_discount` int(255) DEFAULT NULL,
  `node_id` int(11) DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `payment_type` int(11) DEFAULT 0,
  `status` int(11) DEFAULT NULL,
  `is_used` int(11) DEFAULT NULL,
  `datetime` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `showtime_id`, `code`, `image`, `option_ids`, `user_id`, `branch_id`, `fullname`, `phone`, `email`, `cart_sum`, `quantity`, `coupon_code`, `coupon_discount`, `node_id`, `extra`, `content`, `payment_type`, `status`, `is_used`, `datetime`, `modified`, `created`) VALUES
(1, 2, NULL, NULL, NULL, 1, 1, 'DoraShang 123', '0812345678', 'dorashang882@gmail.com', 300000, 2, NULL, NULL, 10, NULL, NULL, 0, 1, NULL, 1717502400, NULL, 1717504486),
(3, 4, NULL, NULL, '3,2', 1, 1, 'DoraShang 123', '0812345678', 'dorashang@gmail.com', 806000, 2, NULL, NULL, 10, '[{\"id\":\"3\",\"quantity\":\"2\"},{\"id\":\"2\",\"quantity\":\"2\"}]', 'abcdef', 0, 0, NULL, 1718277660, NULL, 1718189362),
(4, 5, 'CAM-1718791762', NULL, '', 1, 1, 'DoraShang 123', '0812345678', 'dorashang882@gmail.com', 306000, 2, NULL, NULL, 10, '[]', '', 0, 1, NULL, 1718899200, NULL, 1718791809),
(5, 5, 'CAM-1718796516', NULL, '3', 3, 1, 'Nobita', '0812345678', 'ply.th1002@gmail.com', 406000, 2, NULL, NULL, 10, '[{\"id\":\"3\",\"quantity\":\"1\"}]', 'ahihi', 0, 1, NULL, 1718899200, NULL, 1718796576);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT 0,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `total_chair` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `branch_id`, `title`, `image`, `content`, `total_chair`, `status`, `modified`, `created`) VALUES
(1, 1, 'phòng A1', 'http://127.0.0.1:8000/fileuploads/1715794114.jpg', 'Phòng bình thường ahihi', 50, NULL, 1717123906, 1715794116);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('t1tGOOSygxilllBJcP5ulO6Fp6eF2NlvnsS7GSd9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiM1ZMWDV0YVFGUWlOdkkzbVhORDVyemxFNkh2VGdhYnlqMDgzVmlVOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9vcmRlci9vcmRlcl9saXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MTp7aTowO3M6MzoibXNnIjt9czozOiJuZXciO2E6MDp7fX1zOjQ6InVzZXIiO2E6OTp7czoyOiJpZCI7aTozO3M6ODoiZnVsbG5hbWUiO3M6NjoiTm9iaXRhIjtzOjU6InBob25lIjtzOjEwOiIwODEyMzQ1Njc4IjtzOjU6ImVtYWlsIjtzOjE4OiJwbHkuMTAwMkBnbWFpbC5jb20iO3M6NToiaW1hZ2UiO047czo4OiJ1c2VybmFtZSI7TjtzOjQ6InR5cGUiO047czo3OiJjcmVhdGVkIjtOO3M6ODoibW9kaWZpZWQiO047fXM6NToiYWRtaW4iO2E6MTE6e3M6MjoiaWQiO2k6MTtzOjg6ImZ1bGxuYW1lIjtzOjU6IkFkbWluIjtzOjU6InBob25lIjtzOjEwOiIwODEyMzQ1Njc4IjtzOjU6ImVtYWlsIjtOO3M6NToiaW1hZ2UiO047czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czozMjoiMjEyMzJmMjk3YTU3YTVhNzQzODk0YTBlNGE4MDFmYzMiO3M6NDoidHlwZSI7aTowO3M6NToicm9sZXMiO047czo4OiJtb2RpZmllZCI7TjtzOjc6ImNyZWF0ZWQiO047fXM6MzoibXNnIjtzOjA6IiI7fQ==', 1718796782);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `ckey` varchar(255) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `ckey`, `value`, `status`, `type`) VALUES
(1, 'showtime', '[{\"ngay\":\"2\",\"dem\":\"4\"},{\"ngay\":\"0\",\"dem\":\"0\"},{\"ngay\":\"2\",\"dem\":\"3\"},{\"ngay\":\"1\",\"dem\":\"2\"},{\"ngay\":\"2\",\"dem\":\"3\"},{\"ngay\":\"3\",\"dem\":\"4\"},{\"ngay\":\"10\",\"dem\":\"15\"}]', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT 0,
  `room_id` int(11) DEFAULT 0,
  `node_id` int(11) DEFAULT 0,
  `day` int(11) DEFAULT NULL,
  `hour` int(11) DEFAULT NULL,
  `end_hour` int(11) DEFAULT NULL COMMENT 'Giờ kết thúc',
  `price` int(11) DEFAULT 0,
  `empty` int(11) DEFAULT 0,
  `map` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`id`, `branch_id`, `room_id`, `node_id`, `day`, `hour`, `end_hour`, `price`, `empty`, `map`, `status`, `created`, `modified`) VALUES
(2, 1, 1, 10, 1717459200, 1717502400, 1717509300, 150000, 45, '{\"g1\":\"1\",\"g2\":\"1\",\"g3\":\"1\",\"g4\":\"1\",\"g5\":\"1\",\"g6\":\"1\",\"g7\":0,\"g8\":0,\"g9\":\"1\",\"g10\":\"1\",\"g11\":\"1\",\"g12\":\"1\",\"g13\":\"1\",\"g14\":\"1\",\"g15\":\"1\",\"g16\":0,\"g17\":0,\"g18\":\"1\",\"g19\":\"1\",\"g20\":\"1\",\"g21\":\"1\",\"g22\":\"1\",\"g23\":\"1\",\"g24\":\"1\",\"g25\":\"1\",\"g26\":\"1\",\"g27\":0,\"g28\":\"1\",\"g29\":\"1\",\"g30\":\"1\",\"g31\":\"1\",\"g32\":\"1\",\"g33\":\"1\",\"g34\":\"1\",\"g35\":\"1\",\"g36\":\"1\",\"g37\":\"1\",\"g38\":\"1\",\"g39\":\"1\",\"g40\":\"1\",\"g41\":\"1\",\"g42\":\"1\",\"g43\":\"1\",\"g44\":\"1\",\"g45\":\"1\",\"g46\":\"1\",\"g47\":\"1\",\"g48\":\"1\",\"g49\":\"1\",\"g50\":\"1\"}', 0, 1717495195, 1717495195),
(3, 1, 1, 15, 1718496000, 1718564400, 1718571060, 104000, 50, '{&quot;g1&quot;:&quot;1&quot;,&quot;g2&quot;:&quot;1&quot;,&quot;g3&quot;:&quot;1&quot;,&quot;g4&quot;:&quot;1&quot;,&quot;g5&quot;:&quot;1&quot;,&quot;g6&quot;:&quot;1&quot;,&quot;g7&quot;:&quot;1&quot;,&quot;g8&quot;:&quot;1&quot;,&quot;g9&quot;:&quot;1&quot;,&quot;g10&quot;:&quot;1&quot;,&quot;g11&quot;:&quot;1&quot;,&quot;g12&quot;:&quot;1&quot;,&quot;g13&quot;:&quot;1&quot;,&quot;g14&quot;:&quot;1&quot;,&quot;g15&quot;:&quot;1&quot;,&quot;g16&quot;:&quot;1&quot;,&quot;g17&quot;:&quot;1&quot;,&quot;g18&quot;:&quot;1&quot;,&quot;g19&quot;:&quot;1&quot;,&quot;g20&quot;:&quot;1&quot;,&quot;g21&quot;:&quot;1&quot;,&quot;g22&quot;:&quot;1&quot;,&quot;g23&quot;:&quot;1&quot;,&quot;g24&quot;:&quot;1&quot;,&quot;g25&quot;:&quot;1&quot;,&quot;g26&quot;:&quot;1&quot;,&quot;g27&quot;:&quot;1&quot;,&quot;g28&quot;:&quot;1&quot;,&quot;g29&quot;:&quot;1&quot;,&quot;g30&quot;:&quot;1&quot;,&quot;g31&quot;:&quot;1&quot;,&quot;g32&quot;:&quot;1&quot;,&quot;g33&quot;:&quot;1&quot;,&quot;g34&quot;:&quot;1&quot;,&quot;g35&quot;:&quot;1&quot;,&quot;g36&quot;:&quot;1&quot;,&quot;g37&quot;:&quot;1&quot;,&quot;g38&quot;:&quot;1&quot;,&quot;g39&quot;:&quot;1&quot;,&quot;g40&quot;:&quot;1&quot;,&quot;g41&quot;:&quot;1&quot;,&quot;g42&quot;:&quot;1&quot;,&quot;g43&quot;:&quot;1&quot;,&quot;g44&quot;:&quot;1&quot;,&quot;g45&quot;:&quot;1&quot;,&quot;g46&quot;:&quot;1&quot;,&quot;g47&quot;:&quot;1&quot;,&quot;g48&quot;:&quot;1&quot;,&quot;g49&quot;:&quot;1&quot;,&quot;g50&quot;:&quot;1&quot;}', 0, 1718162063, 1718162063),
(4, 1, 1, 10, 1718236800, 1718277660, 1718284560, 153000, 48, '{\"g1\":\"1\",\"g2\":\"1\",\"g3\":\"1\",\"g4\":\"1\",\"g5\":\"1\",\"g6\":\"1\",\"g7\":\"1\",\"g8\":\"1\",\"g9\":\"1\",\"g10\":\"1\",\"g11\":\"1\",\"g12\":\"1\",\"g13\":\"1\",\"g14\":\"1\",\"g15\":\"1\",\"g16\":\"1\",\"g17\":\"1\",\"g18\":\"1\",\"g19\":\"1\",\"g20\":\"1\",\"g21\":\"1\",\"g22\":\"1\",\"g23\":\"1\",\"g24\":\"1\",\"g25\":\"1\",\"g26\":\"1\",\"g27\":\"1\",\"g28\":\"1\",\"g29\":\"1\",\"g30\":\"1\",\"g31\":\"1\",\"g32\":\"1\",\"g33\":\"1\",\"g34\":\"1\",\"g35\":\"1\",\"g36\":\"1\",\"g37\":\"1\",\"g38\":\"1\",\"g39\":\"1\",\"g40\":\"1\",\"g41\":\"1\",\"g42\":\"1\",\"g43\":\"1\",\"g44\":\"1\",\"g45\":0,\"g46\":0,\"g47\":\"1\",\"g48\":\"1\",\"g49\":\"1\",\"g50\":\"1\"}', 0, 1718166402, 1718166402),
(5, 1, 1, 10, 1718841600, 1718899200, 1718906100, 153000, 44, '{\"1\":\"1\",\"2\":\"1\",\"3\":\"1\",\"4\":\"1\",\"5\":\"1\",\"6\":\"1\",\"7\":\"1\",\"8\":\"1\",\"9\":\"1\",\"10\":\"1\",\"11\":\"1\",\"12\":\"1\",\"13\":\"1\",\"14\":\"1\",\"15\":\"1\",\"16\":\"1\",\"17\":\"1\",\"18\":\"1\",\"19\":\"1\",\"20\":\"1\",\"21\":\"1\",\"22\":\"1\",\"23\":\"1\",\"24\":\"1\",\"25\":\"1\",\"26\":\"1\",\"27\":\"1\",\"28\":\"1\",\"29\":\"1\",\"30\":\"1\",\"31\":\"1\",\"32\":\"1\",\"33\":\"1\",\"34\":\"1\",\"35\":\"1\",\"36\":0,\"37\":\"1\",\"38\":\"1\",\"39\":\"1\",\"40\":\"1\",\"41\":\"1\",\"42\":\"1\",\"43\":\"1\",\"44\":0,\"45\":\"1\",\"46\":0,\"47\":0,\"48\":\"1\",\"49\":\"1\",\"50\":\"1\"}', 0, 1718784541, 1718784541);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phone`, `email`, `image`, `username`, `password`, `type`, `created`, `modified`) VALUES
(1, 'DoraShang 123', '0812345678', 'dorashang@gmail.com', 'http://127.0.0.1:8000/fileuploads/1716142362.jpg', 'DoraShang', '202cb962ac59075b964b07152d234b70', NULL, NULL, 1716142363),
(2, 'DorraDorra', '0812345678', 'dorashang882@gmail.com', NULL, NULL, '$2y$12$U2OmYrzznAHIY2N4BiG3fup83YL83bL6YwrQqU0LRSKUJvNncU7ai', NULL, NULL, NULL),
(3, 'Nobita', '0812345678', 'ply.th1002@gmail.com', NULL, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_linkeds`
--
ALTER TABLE `category_linkeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nodes`
--
ALTER TABLE `nodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_linkeds`
--
ALTER TABLE `category_linkeds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nodes`
--
ALTER TABLE `nodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
