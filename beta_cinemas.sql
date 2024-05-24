-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 07:13 AM
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
(29, 15, 6),
(30, 16, 6),
(31, 17, 6),
(35, 10, 6),
(36, 10, 7),
(37, 10, 8),
(38, 18, 6),
(39, 18, 7);

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

INSERT INTO `films` (`id`, `node_id`, `title`, `description`, `content`, `image`, `images`, `trailer`, `genres`, `characters`, `director`, `time`, `language`, `release_date`, `type`, `featured`, `modified`, `created`) VALUES
(1, 10, 'PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ BẢN GIAO HƯỞNG ĐỊA CẦU', 'Đôrêmon và những người bạn thực hiện chuyến phiêu lưu để gặp gỡ những người bạn mới, kết nối mọi người bằng âm nhạc và cứu thế giới khỏi khủng hoảng. Liệu những người bạn nhỏ có thể cứu được &quot;tương lai âm nhạc&quot; và cả địa cầu này?', 'ahihih', 'http://127.0.0.1:8000/fileuploads/1716527180.png', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/Yug8gbDd5EQ?si=bsiNXrc3U_cK-Ucc&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hoạt Hình', 'Wasabi Mizuta, Megumi Ôhara, Yumi Kakazu', 'Kazuaki Imai', '115 phút', 'Tiếng Nhật - Phụ đề Tiếng Việt; Lồng tiếng', '24/05/2024', NULL, 0, 1716527181, 1716498438),
(2, 15, 'Ngôi Đền Kỳ Quái 4', 'Min Joon bj de dọa bởi một linh hồn Pee Nak bi ẩn và phài thực hiện lời hứa trong quá khứ của mình. Nếu không hoàn thành lời hứa ấy, những tội lỗi mà anh từng gây nên sẽ quay trở lại nguyên rủa và trừng phạt cuộc đời anh.', '', 'http://127.0.0.1:8000/fileuploads/1716526212.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/JToYSVWY4N8?si=n2jjy1hPH4YvlCKR&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hài hước, Kinh dị', 'Witthawat Rattanaboonbaramee, Bhuripat Vejvongsatechawat, Phiravich Attachitsataporn', 'Phontharis Chotkijsadarsopon', '111 phút', 'Tiếng Thái', '31/05/2024', NULL, 0, 1716526213, 1716526213),
(3, 16, 'Furiosa: Câu Chuyện Từ Max Điên', 'Fury Road, câu chuyện kể về thời trẻ của nữ chiến binh Furiosa khi cô bị tách ra khỏi nơi ẩn náu ở Green Place of Many Mothers và lần đầu tiên buộc phải đối mặt với sự điên rồ của thế giới bên ngoài. Nhưng cô ấy luôn nuôi trong mình một khát vọng “trở về đất mẹ” mãnh liệt.', '', 'http://127.0.0.1:8000/fileuploads/1716526281.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/vPwSfR_O9Jo?si=g6qUoMvncniidXVk&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Hành động, Phiêu lưu', 'Anya Taylor-Joy, Chris Hemsworth, Alyla Brown, Tom Burke', 'George Miller', '148 phút', 'Tiếng Anh', '24/05/2024', NULL, 0, 1716526301, 1716526301),
(4, 17, 'Lật Mặt 7', 'Qua những lát cắt đan xen, ẩn chứa nhiều nụ cười và cả nước mắt, &quot;Lật Mặt 7: Một Điều Ước&quot; là câu chuyện cảm động về đại gia đình bà Hai 73 tuổi - người mẹ đơn thân tự mình nuôi 5 người con khôn lớn. Khi trưởng thành, mỗi người đều có cuộc sống và gia đình riêng. Bất chợt, biến cố ập đến, những góc khuất dần được hé lộ, những nỗi niềm, lo lắng, trĩu nặng ẩn sâu trong trái tim người mẹ. Trách nhiệm thuộc về ai?', '', 'http://127.0.0.1:8000/fileuploads/1716526387.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/QdtPQ0wV53M?si=46jVG94-cBVR3O_x&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Tâm lý, Gia đình', 'Thanh Hiền, Trương Minh Cường, Đinh Y Nhung, Quách Ngọc Tuyên, Trâm Anh, Trần Kim Hải,..', 'Lý Hải', '138 phút', 'Tiếng Việt', '26/04/2024', NULL, 0, 1716526393, 1716526393),
(5, 18, 'Án Mạng Lầu 4', 'Một cặp vợ chồng hạnh phúc đang bị mắc kẹt trong những tình huống và thử thách kinh hoàng. Một vụ án mạng nhưng hiện trường lại không có vết máu, tội ác lại càng không. Vậy chuyện gì đã thực sự diễn ra ở lầu 4?', '', 'http://127.0.0.1:8000/fileuploads/1716527272.jpg', NULL, '&lt;iframe width=&quot;560&quot; height=&quot;315&quot; src=&quot;https://www.youtube.com/embed/fSOxL_swa18?si=dBUE0KX9OSSc0XX1&quot; title=&quot;YouTube video player&quot; frameborder=&quot;0&quot; allow=&quot;accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share&quot; referrerpolicy=&quot;strict-origin-when-cross-origin&quot; allowfullscreen&gt;&lt;/iframe&gt;', 'Tâm lý, Hồi Hộp', 'Trương Thế Vinh, Lương Bích Hữu', 'Nguyễn Hữu Tuấn', '106 phút', 'Tiếng Việt', '17/05/2024', NULL, 0, 1716527273, 1716527273);

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
(10, 'PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ BẢN GIAO HƯỞNG ĐỊA CẦU', 'phim-dien-anh-doraemon-nobita-va-ban-giao-huong-dia-cau', 'film', 1, 0, 1716527181, 1716498438),
(11, 'Phim đang chiếu', 'phim-dang-chieu', 'category', 1, 0, 1716499337, 1716499337),
(12, 'Phim sắp chiếu', 'phim-sap-chieu', 'category', 1, 0, 1716499348, 1716499348),
(13, 'Suất chiếu đặc biệt', 'suat-chieu-dac-biet', 'category', 1, 0, 1716499358, 1716499358),
(14, 'Giới thiệu', 'gioi-thieu', 'category', 1, 0, 1716499559, 1716499559),
(15, 'Ngôi Đền Kỳ Quái 4', 'ngoi-den-ky-quai-4', 'film', 1, 0, 1716526213, 1716526213),
(16, 'Furiosa: Câu Chuyện Từ Max Điên', 'furiosa-cau-chuyen-tu-max-dien', 'film', 1, 0, 1716526301, 1716526301),
(17, 'Lật Mặt 7', 'lat-mat-7', 'film', 1, 0, 1716526393, 1716526393),
(18, 'Án Mạng Lầu 4', 'an-mang-lau-4', 'film', 1, 0, 1716527273, 1716527273);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `title`, `image`, `content`, `price`, `status`, `modified`, `created`) VALUES
(1, 'Bỏng ngô 1 người', 'http://127.0.0.1:8000/fileuploads/1716157255.jpg', 'ahihi ahihi', 70000, 1, 1716157283, 1716157257);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `option_ids` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cart_sum` int(11) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
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

INSERT INTO `rooms` (`id`, `title`, `image`, `content`, `total_chair`, `status`, `modified`, `created`) VALUES
(1, 'phòng A1', 'http://127.0.0.1:8000/fileuploads/1715794114.jpg', 'Phòng bình thường ahihi', 50, NULL, 1715794263, 1715794116);

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
('WMr9Yo6oaDQu8xSVzZqgPq0KYHUD1N0ZaYPxHe2z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMmJ1MmdVckdVS01zSTdpeVlKdVpNZW5EU0MzcGJLalJMam5QQ1RmRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiYWRtaW4iO2E6MTE6e3M6MjoiaWQiO2k6MTtzOjg6ImZ1bGxuYW1lIjtzOjU6IkFkbWluIjtzOjU6InBob25lIjtzOjEwOiIwODEyMzQ1Njc4IjtzOjU6ImVtYWlsIjtOO3M6NToiaW1hZ2UiO047czo4OiJ1c2VybmFtZSI7czo1OiJhZG1pbiI7czo4OiJwYXNzd29yZCI7czozMjoiMjEyMzJmMjk3YTU3YTVhNzQzODk0YTBlNGE4MDFmYzMiO3M6NDoidHlwZSI7aTowO3M6NToicm9sZXMiO047czo4OiJtb2RpZmllZCI7TjtzOjc6ImNyZWF0ZWQiO047fXM6NDoidXNlciI7YTo5OntzOjI6ImlkIjtpOjE7czo4OiJmdWxsbmFtZSI7czoxMzoiRG9yYVNoYW5nIDEyMyI7czo1OiJwaG9uZSI7czoxMDoiMDgxMjM0NTY3OCI7czo1OiJlbWFpbCI7czoxOToiZG9yYXNoYW5nQGdtYWlsLmNvbSI7czo1OiJpbWFnZSI7czo0ODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2ZpbGV1cGxvYWRzLzE3MTYxNDIzNjIuanBnIjtzOjg6InVzZXJuYW1lIjtzOjk6IkRvcmFTaGFuZyI7czo0OiJ0eXBlIjtOO3M6NzoiY3JlYXRlZCI7TjtzOjg6Im1vZGlmaWVkIjtpOjE3MTYxNDIzNjM7fX0=', 1716527323);

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
(1, 'DoraShang 123', '0812345678', 'dorashang@gmail.com', 'http://127.0.0.1:8000/fileuploads/1716142362.jpg', 'DoraShang', '202cb962ac59075b964b07152d234b70', NULL, NULL, 1716142363);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
