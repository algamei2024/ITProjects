-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 02:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `deptnews`
--

CREATE TABLE `deptnews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deptnews`
--

INSERT INTO `deptnews` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`, `dept_id`) VALUES
(1, 'سيمنارات طلبة المرحلة الرابعة في قسم علوم الحاسوب', 'لتعزيز التعلم الذاتي عند الطلبة وتنمية روح العمل الجماعي، أقام طلبة المرحلة الرابعة في قسم علوم الحاسوب سيمنارات في مادة \"تنقيب البيانات\" تحت عنوان \"تطبيقات تعلم الآلة وتنقيب البيانات\" بإشراف أ.م.د. زينب نعمة عبدالله، حيث تم استعراض أهمية هذا التخصص في مجال علوم الحاسوب. تناولت السيمنارات مجموعة متنوعة من المجالات مثل الصحة والتعليم والتسويق ووسائل التواصل الاجتماعي وتحليل النصوص والمشاعر، بالإضافة إلى تطبيقات عملية مثل Alexa و Waze. تأتي هذه الفعالية ضمن جهود الطلبة لتعزيز الوعي بأهمية هذا المجال الحديث والمتطور في الحياة العملية والأبحاث العلمية.', 'dh_ihhgw0aaigey.jpg', '2024-04-24 17:29:43', '2024-05-01 15:25:20', 3),
(2, 'اجتماع مجلس قسم الرياضيات', 'عقد مجلس قسم الرياضيات وتطبيقات الحاسوب جلسته (١٣) برئاسة (م.د. فاطمة صاحب كاظم) وبحضور السيدات والسادة التدريسيين من أعضاء مجلس القسم الموقر. هذا وتناول المجلس توصيات عامة منها تشكيل لجان من تدريسيي القسم لإقامة ورش عمل لتوضيح متطلبات الاعتماد البرامجي كما وأكدت السيدة رئيس القسم على حث التدريسيين الحاصلين على درجات تقييم أداء سنوي منخفضة لرفع أدائهم للارتقاء بمستوى القسم.', '2014_1388351122_215.jpg', '2024-04-24 17:31:31', '2024-04-29 19:17:06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `depts`
--

CREATE TABLE `depts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objectives` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outputs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `depts`
--

INSERT INTO `depts` (`id`, `name`, `description`, `objectives`, `outputs`, `email`, `phone`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'تقنية معلومات', 'قسم تقنية معلومات يضم العديد من البرامج', 'يوجد عدة انشطة', 'اخراج طالب يجيد المهارات', 'collage@gmail.com', '7156389888', 'شعار جامعة إب  شفاف .png', '2024-04-24 17:27:53', '2024-04-24 17:27:53'),
(2, 'قسم الرياضيات وتطبيقات الحاسوب', 'تأسس قسم الرياضيات وتطبيقات الحاسوب في عام 1990م بعد تأسيس كليه العلوم في جامعة النهرين ويُعنى القسم بتخريج كادر متخصص في علوم الرياضيات التطبيقيه قد اثبت جدارته في العمل في العديد من المؤسسات. وقد رفد القسم هذه المؤسسات بكفاءات متميزة عملت في مجالات الطب, الهندسة, العلوم التطبيقيه, الاقتصاد... الخ. وبذلك أثبت خريجوا القسم كفاءة عالية بما أنيط أليهم من مسؤوليات ومهام في حل المشاكل الواقعية, الامر الذي حفز القسم على تطوير مناهجه وتنويعها بأستمرار وبما يواكب التطور العلمي الحاصل في هذا المجال.', 'إعداد ملاكات علمية تعتمد الجانب التطبيقي وبمستوى تعليم متميز وينسجم مع معايير الجودة و الاعتماد من خلال اجراء البحوث والدراسات و تقديم الاستشارات التي تصوغ في خدمة الجامعة و المجتمع. أضافة الى اكتساب الطالب المعارف و المفاهيم الاساسية في علوم الرياضيات وتطبيقات الحاسوب التي تساعده على الربط بين العلوم الاكاديمية التطبيقية طبقا لاحتياجات المجتمع.', 'تهدف أقسام الرياضيات وتطبيقات الحاسوب الى:\r\n1 . إعداد جيل قادر على خدمة المجتمع عن طريق رفده باناس متخصصين في الرياضيات التطبيقية.\r\n2 . الشراكة والتوأمة بين القسم والاقسام المناظرة في الجامعات العراقية والاقليمية والعالمية.\r\n3 . تحسين نوعية التعليم لمواكبة التطور التقني القائم حالي اً في الجامعات العالمية.\r\n4 . تحقيق الربط بين العلوم الاكاديمية والتطبيقية طبقا لاحتياجات المجتمع ومراجع التطوير في العراق من خلال\r\nالادراك بأن لاختصاص الرياضيات وتطبيقات الحاسوب اهمية بالغة في التخطيط واتخاذ القرار من خلال تحليل\r\nالبيانات التي تجمع من قبل الباحث الرياضياتي في جميع المجالات، على سبيل المثال البنوك و وزارة الدفاع\r\nوالتأمين وكذلك من خلال حل المسائل التي تعود بتطوير الصناعة والزراعة والنقل والطب والهندسة بما يخدم\r\nويؤدي الى تطوير كافة المجالات المذكورة في العراق.\r\n5 . القدرة على تصميم وتطبيق تجارب وكذلك تحليلها وتقدير نتائجها، وهذا يتم من خلال انشاء نماذج تحاكي الواقع\r\nالعملي ومن ثم دراسة نتائج هذه النماذج مع امكانية تطويرها مستقبلاً بما يتلائم والمعطيات والاهداف الجديدة\r\nبشكل عملي وايضا القدرة على الاستنباط والتحليل والابتكار.\r\n6 . تنفيذ برامج بحثية وتنظيم ندوات ومؤتمرات، ودعم المشاركة في الملتقيات العلمية، وتشجيع التعاون مع\r\nالمختصين في مجالات العلوم الاخرى.', 'math@gmail.com', '71*******8', 'laplac.jpg', '2024-04-29 19:15:23', '2024-04-29 19:15:23'),
(3, 'قسم علوم الحاسوب', 'أسس قسم علوم الحاسبات عام ١٩٨٣-١٩٨٤ ويعنى باستخدام الأساليب النظرية والعملية لمعالجة نقل المعلومات عن طريق أجهزة الكمبيوتر.\r\n\r\n يقبل القسم خريجي الفرع العلمي من المرحلة الاعداديةـ وتكون مدة الدراسة أربع سنوات، ويتم منح الخريجين درجة البكالوريوس في علوم الكمبيوتر.\r\n\r\n يهتم القسم بشدة بجودة التعليم ومخرجاته، ولديه أعضاء هيئة تدريس مؤهلينب أهم المجالات الأكاديمية في علوم الحاسبات، ومختبرات وفصول دراسية مؤهلة.\r\n\r\nيهتم تخصص علوم الحاسوب ببناء المعرفة المتخصصة للطالب في مجال الحاسوب، وذلك لإعداده للعمل في مجالات البرمجة وشبكات الحاسوب، وتطوير أنظمة الحاسوب الآلية المختلفة في مختلف المؤسسات الرسمية، فضلا عن القطاع الخاص و المؤسسات والشركات، و يتعلم الطالب أيضًا الدورات التي تبني معرفته بالبرمجة، و يدرس عددًا من لغات البرمجة المتقدمة، وأسس تصميم الخوارزميات وتحليلها، وهياكل البيانات، والبرمجة المرئية والكائنات، وأنظمة قواعد البيانات، كما يتعرف على أحدث طرق تحليل الأنظمة وتصميمها باستخدام أحدث الأنظمة المستخدمة لهذا الغرض .\r\n\r\nيضم قسم علوم الحاسوب قاعات دراسية مجهزة بأجهزة العرض وأجهزة التكييف ومختبرات الحاسوب المجهزة بكافة برامج الحاسب الآلي وأجهزة العرض واللوحات الذكية.\r\n\r\nيتميز قسم علوم الحاسبات ببرنامج الدراسات العليا في علوم الحاسبات وتكنولوجيا المعلومات، و ينهي الطالب دراسته في هذا التخصص بعمل مشروع تطبيقي يوظف فيه المهارات والمعرفة التي تعلمها في دراسته الجامعية مما يؤهله للانتقال إلى سوق العمل بنجاح.', 'إنشاء قاعدة علمية من المبدعين والمتخصصين في علوم الحاسوب والبرمجيات والمجالات المتعلقة بعلوم الحاسوب وتطبيقاته، والسعي لإعداد خطط لتطوير أدوات الدراسة لضمان استيفاء متطلبات معايير الجودة. والحرص على إعداد خريجين متميزين قادرين على تغطية احتياجات سوق العمل ومواكبة التطور المذهل في مجال تكنولوجيا المعلومات والاتصالات. وقادرون على إكمال دراساتهم العليا للحصول على درجتي الماجستير والدكتوراه في مجالات التخصص وإجراء البحوث العلمية ذات الجودة العالية .', 'تخريج ملاكات متخصصة في علوم الحاسوب قادرة على تلبية احتياجات سوق العمل وامتلاك المعرفة النظرية والعملية والمهارات الأساسية لاستخدام الحاسوب لتلبية احتياجات المجتمع في الجامعات العراقية ودعم الدراسات التطبيقية المتعلقة بتطوير الأنظمة والحلول البرمجية.\r\n\r\nواستحداث برامج تدريبية تهدف إلى رفع مستوى استخدام الحاسوب في مختلف المجالات، بما يتيح للمواطنين الاستفادة من هذه الدورات، وتقديم المشورة والدعم الفني لمختلف قطاعات المجتمع.\r\n\r\nو تقديم برامج أكاديمية متميزة في مجال علوم الحاسب الآلي وفق معايير ضمان الجودة، وتزويد خريجي علوم الكمبيوتر بالمعرفة الأساسية لإجراء البحوث ومتابعة الدراسات العليا و تزويد الخريجين بالمهارات اللازمة ليكونوا قادرين على التواصل مع الآخرين بشكل فردي ، أو العمل ضمن الفريق .', 'collage@gmail.com', '71*******8', 'الحاسبات-1.jpg', '2024-04-30 20:11:17', '2024-04-30 20:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_26_144024_create_depts_table', 1),
(6, '2024_02_26_144225_create_programs_table', 1),
(7, '2024_02_26_144331_create_years_table', 1),
(8, '2024_02_26_144513_create_supervisors_table', 1),
(9, '2024_02_26_144559_create_projects_table', 1),
(10, '2024_02_26_144824_create_deptnews_table', 1),
(11, '2024_02_26_145403_create_project_supervisor_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `dept_id`) VALUES
(1, 'هندسة البرمجيات', 'هندسة البرمجيات (بالإنجليزية: Software Engineering)‏ المجال الذي يهتم بتطوير، وتصميم البرمجيات، عالية الجودة آخذة بعين الاعتبار تخصيصات المستخدم، ومتطلباته على جميع المستويات. تهتم هندسة البرمجيات بتكوين البرنامج منذ مراحله الأولى أثناء تحليل المشكلة، ومن ثم التصميم، وكتابة البرنامج حتى القيام بتجريبه، واختباره، وتنصيبه على الأجهزة، والقيام بعملية صيانته. وهي حديثاً يمكن أن تنقسم لقسمين الحوسبة اللينة والحوسبة الصلبة.', '0c2dbf0cd66d7d8394f3a8f1c9c960fa.jpg', '2024-04-24 17:41:05', '2024-05-01 12:20:32', 1),
(2, 'الشبكات', 'برمجة الشبكات Network programming هي العملية التي يكتب فيها المطورون الشيفرات البرمجية لتمكين الأجهزة من التواصل مع بعضها البعض، عن طريق ربطها ضمن شبكة واحدة تجمع هذه الأجهزة معًا. يسمح هذا التواصل بمشاركة كل شيء، مثل الملفات والمجلدات والبيانات الخاصة بالعمل التي تتضمنها، بالإضافة إلى الرسائل المختلفة. كما يمكن لجميع الأجهزة المتصلة عبر الشبكة الاتصال بالإنترنت أيضًا.\r\n\r\nتتنوع تبعًا لذلك الأجهزة التي تتضمنها الشبكة؛ وتشمل الحواسيب بأنواعها والطابعات والكاميرات وأجهزة الشبكة كالموجّهات Routers والمُبدّلات Switches ولا تقتصر عليها فقط؛ إذ تتضمن الشبكات الحديثة مجموعة من الأنظمة المترابطة التي تشمل التطبيقات والآلات الافتراضية Virtual machines، والنُسخ السحابية Cloud instances والحاويات Containers وغيرها.', 'hat.png', '2024-04-29 19:33:53', '2024-05-20 15:59:35', 2);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstract` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `team` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evaluation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `year_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `abstract`, `team`, `evaluation`, `pdf`, `image`, `confirmed`, `program_id`, `year_id`, `created_at`, `updated_at`) VALUES
(1, 'البوابة الموحدة بين الطالب والدكتور', 'جيميناي ‏ هو نموذج أولي لبوت الدردشة الذي صممته جوجل استنادًا إلى نموذج اللغة التحاوري لاماد. طُور استجابة مباشرة لظهور شات جي بي تي الخاص بشركة أوبن أيه آي، وأُصدر بقدرة محدودة في مارس 2023 للاستجابات المحدودة، قبل التوسع إلى بلدان أخرى. ويكيبيديا', '1. عبدالله حسين سعيد الشرعبي\r\n2. معتصم إبراهيم محمد الشرعبي\r\n3. محمد عبدالله حمود الشطوة\r\n4. صادق امين محمد علي\r\n5. عمر علي احمد عثمان الصبان\r\n6.بكر جمال عبدالواحد الحميري\r\n7. معتز عبدالله ناجي محمد ملهي', '10/10', 'homwrok.pdf', 'j.png', 1, 1, 6, '2024-04-29 17:01:03', '2024-04-29 17:01:03'),
(2, 'منصة تواصل علمية', 'مشروع منصة تواصل علمية هي منصة تواصل شبية بمنصة كورا ولكنها مطورة اكثر فاكثر', '1.علي محمد الشاوري\r\n2.فواد الصناعي\r\n3.نزار\r\n4.انس ابولحوم\r\n5.زياد ياسين', '10/10', 'one.pdf', 'images.jpeg', 1, 2, 6, '2024-05-01 08:20:11', '2024-05-01 08:20:11'),
(3, 'مشروع لتطوير شبكة لرصد المعدات في كلية الهندسة - جامعة إب', 'مشروع تم في استخدام طريقة اعلى الي اسفل تبدا من المنظور العام ثم الي التفاصيل وتحتوي الشبكة على 3 طبقات طبقة النواة وطبقة التوزيع وطبقة الوصول', 'محمد حمود غالب قاسم', '10/10', 'مشروع الشبكات.pdf', 'ws-mountain-sunrise-8k_72335.jpg', 1, 2, 6, '2024-08-17 08:54:13', '2024-08-17 08:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `project_supervisor`
--

CREATE TABLE `project_supervisor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `supervisor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_supervisor`
--

INSERT INTO `project_supervisor` (`id`, `project_id`, `supervisor_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 3, 1, NULL, NULL),
(6, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `description`, `email`, `phone`, `image`, `created_at`, `updated_at`, `program_id`) VALUES
(1, 'د/عادل العفيري', 'الدكتور عادل دكتور وباحث من افضل الدكاتره في كلية العلوم', 'adel@gmail.com', '7156389888', '6e7d12d1cfacef00dbb514146680803a.jpg', '2024-04-27 17:05:26', '2024-08-17 08:47:58', 1),
(2, 'د. رشيد الشعيبي', 'دكتور متخصص في هندسة البرمجيات ومن افضل الدكاتره', 'm.algamei20@gmail.com', '7156389888', 'moon.jpg', '2024-04-27 18:17:04', '2024-08-17 08:48:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `name`, `start`, `end`, `created_at`, `updated_at`) VALUES
(6, '2024', '2024-04-11', '2024-04-29', '2024-04-29 16:09:56', '2024-04-29 16:09:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deptnews`
--
ALTER TABLE `deptnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deptnews_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `depts`
--
ALTER TABLE `depts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programs_dept_id_foreign` (`dept_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_program_id_foreign` (`program_id`),
  ADD KEY `projects_year_id_foreign` (`year_id`);

--
-- Indexes for table `project_supervisor`
--
ALTER TABLE `project_supervisor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_supervisor_project_id_foreign` (`project_id`),
  ADD KEY `project_supervisor_supervisor_id_foreign` (`supervisor_id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supervisors_program_id_foreign` (`program_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deptnews`
--
ALTER TABLE `deptnews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `depts`
--
ALTER TABLE `depts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_supervisor`
--
ALTER TABLE `project_supervisor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deptnews`
--
ALTER TABLE `deptnews`
  ADD CONSTRAINT `deptnews_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `depts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_year_id_foreign` FOREIGN KEY (`year_id`) REFERENCES `years` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_supervisor`
--
ALTER TABLE `project_supervisor`
  ADD CONSTRAINT `project_supervisor_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_supervisor_supervisor_id_foreign` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`);

--
-- Constraints for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD CONSTRAINT `supervisors_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
