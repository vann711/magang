-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2021 pada 15.42
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosepeda_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `category`, `isi`, `slug`, `image`, `create_at`) VALUES
(8, '5 Rekomendasi Anime Sepeda yang Wajib Untuk di Tonton !', 'Film', '<p>Seperti yang kita ketahui dengan adanya corona tentu aktivitas untuk berkegiatan di luar akan sedikit terhambat dikarenakan tentu masyarakat menjadi lebih waspada dengan virus Covid-19 ini. Begitu pula dengan Bersepeda, tentu jika orang orang senang bersepeda namun untuk akhir akhir ini tidak banyak juga orang yang mengurungkan niatnya karena takut tertular virus ini. Namun tidak perlu khawatir, jika kalian menyukai sepeda dan juga anime tentu ada beberapa anime yang akan direkomendasikan kepada kalian untuk menemani dan mengobati rindu kalian untuk bersepeda.&nbsp;</p><p>Anime bergenre olahraga memang sangat menarik, pasalnya anime anime olahraga tersebut biasanya dibumbui mulai dari super power yang dimiliki hingga lebih berfokus kepada kehidupan sehari hari atau slice of life. Dalam hal ini kami akan memberikan rekomendasi anime terkait dengan olahraga sepeda. Simak terus penjelasannya ya!</p><p>&nbsp;</p><p>&nbsp; &nbsp;<strong>1. Hill Climb Girl</strong></p><p>Menceritakan tokoh utama yaitu Hinako yang merupakan seorang murid SMA yang sangat menyukai bersepeda. Selain itu Hinako juga sangat menghormati para atlit sepeda atau para pesepeda profesial. Hinako pun suka bersaing dengan teman sekelasnya dalam mengadu kecepatan sepedanya pada setiap pagi hari. Mereka biasanya bersaing dengan melewati sebuah bukit untuk menuju sekolah mereka. Lucunya, Hinako menggunakan sepeda mama chari yang dimana sepeda itu sebenarnya bukan sepeda balap yang dapat melaju dengan cepat.</p><p>Tentu karena perbedaan sepeda itulah, Hinako selalu kalah dari temannya. Untuk membuatnya berkembang, Hinako melihat berbagai video dari pesepeda professional yang ia idolakan sejak lama dan terus belajar teknik baru, sehingga kemampuan bersepedanya sudah meningkat dibandingkan yang dahulu. Hinako pun siap untuk menghadapi lawan lawan kuat selanjutnya mulai dari teman sekelasnya hingga nanti di pertandingan. Lalu mampukah Hinako berhasil menjadi yang terkuat dan mengalahkan mereka semuanya? Saksikan anime tersebut yaa!</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp;<strong>2. Long Riders</strong></p><p>Anime ini sangat direkomendasikan untuk kalian yang menyukai genre Waifu. Anime ini bercerita tentang Ami Kurata yang merupakan mahasiswi tahun pertama yang tiba tiba jatuh cinta dengan olahraga sepeda ketika Ami mencoba menaiki sepeda lipat yang ada. Ami bahkan rela untuk menabung untuk bisa membeli sepeda lipat yang dia idam idamkan.&nbsp;</p><p>Setelah membeli sebuah sepeda, Ami pun membuat tim yang beranggotakan lima sepeda yang ada di kampusnya. Lalu setelah mengumpulkan timnya, dimulailah perjalanan Ami untuk dapat memenangkan perlombaan balapan jarak jauh yang sangat menantang.&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp;<strong>3. Idaten Jump</strong></p><p>Idaten Jump merupakan anime balap sepeda yang dibumbui dengan kisah super power dan isekai. Dimana di dalamnya berfokus kepada Sho Yamato yang merupakan seorang anak yang sangat mengemari olahraga sepeda. Seuatu hari ketikan Sho melakukan balap sepeda dengan temannya, tiba tiba muncul sebuah asap hitam yang menghisap mereka semua ke dunia yang bernama X-Zone.</p><p>Di dunia tersebut, Sho dan teman temannya harus mampun bertahan hidup dengan melakukan Idaten Battle. Idaten Battle merupakan sebuah balap sepeda dengan terdapat rintangan yang sangat berbahaya. Pemenang dari Idaten Battle tersebut akan mendapat emblem dari yang kalah. Emblem tersebut dapat membawa mereka kembali ke dunia nyata bila berhasil mengumpulkan emblem tertentu. Tentunya mereka harus terus menang untuk dapat mengambil emblem dan kembali pulang.</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp;<strong>4. Overdrive</strong></p><p>Overdrive bercerita tentang Mikoto Shinozaki yang dianggap tak memiliki bakat apapun di bidang olahraga. Hal tersebut membuat Mikoto di jahili dan di buli oleh anak anak di sekolahnya. Hingga suatu ketika, Yuki yang merupakan cewek yang disukai oleh Mikoto mengajaknya untuk bergabung ke klub sepeda kaka Yuki. Tentu karena gadis tersebut merupakan incaran Mikoto, akhirnya Mikoto mengiyakan ajakan tersebut.&nbsp;</p><p>Demi bisa mendapat perhatian cewek yang Mikoto suka, Mikoto pun mulai berlatih keras. Tentu karena pada awalnya dia tidak begitu tertarik dengan sepeda, semuanya terasa berat dan terpaksa dilakukan. Namun lama kelamaan Mikoto pun menjadi menikmati latihannya dan ia akhirnya menyukai olahraga sepeda tersebut. Pada akhirnya Ia pun mempunyai sebuah mimpi untuk menjadi pesepeda terbaik di dunia. Lalu mampukah Mikoto mewujudkan mimpinya tersebut? Atau mimpinya hanya menjadi bualan semata? Simak dan tonton anime tersebut !</p><p>&nbsp; &nbsp; &nbsp;<strong>5. Yowamushi Pedal</strong></p><p>Jika kalian baru pertama kali ingin menonton anime balap sepeda, Yowamushi Pedal merupakan pilihannya. Anime ini merupakan anime balap sepeda yang lebih realistis dan juga seru. Selain itu walaupun mengandung unsur super power, namun tidak sebanyak atau se-lebay Idaten jump. Super power ini lebih kepada kemampuan yang sudah ada di dalam di orang tersebut atau biasanya disebut dengan berbakat. Yowamushi Pedal bercerita tentang anak kelas 1 SMA yaitu Onoda Sakamichi yang mempunyai bakat sepeda. Hal itu diperlihatkan ketikan Onoda sering menaiki bukit dengan mudahnya walaupun hanya menggunakan sepeda mama chari atau sepeda belanja.</p><p>Setelah bertemu Imaizumi Shunsuke, Onoda sadar akan bakatnya tersebut dan akhirnya memutuskan untuk bergabung dengan klub sepeda sekolahnya walaupun sebenarnya Onoda belum pernah melakukan balap sepeda. Nantinya Onoda akan membentuk sebuah tim yang beranggotakan enam orang dan berhadapan dengan banyak sekolah kuat. Mereka pun mempunyai mimpi untuk menjadi juara di kejuaran balap sepeda Inter High. Dimana itu merupakan kejuaran balap sepeda terbesar di jepang untuk golongan SMA. Lalu mampukah Onoda menjadi yang terdepan mengalahkan para monster pesepeda dari sekolah lainnya. Silahkan ditonton dan saksikan secara langsung !</p><p>&nbsp;</p><p>Itu tadi merupakan daftar anime balap sepeda yang bisa ditonton dan dinikmati. Selain dapat mengobati rasa untuk bersepeda, menonton anime ini juga akan membuat kalian menjadi lebih semangat dalam berlatih sepeda. Selain itu tentu ada banyak nilai yang bisa diambil dari anime anime tersebut. Mulai dari persahabatan, kerja keras, hingga terus berusaha. Jadi tunggu apa lagi? Segera siapkan posisi terbaikmu dan mulai untuk menonton !</p>', '5-Rekomendasi-Anime-Sepeda-yang-Wajib-Untuk-di-Tonton', 'film1.jpg', '2020-12-30'),
(9, '5 Rekomendasi Film tentang Sepeda', 'Film', '<p>Bersepeda merupakan hal yang menjadi trend pada saat pandemi Covid-19 ini. Tau kah kalian bahwa Sepeda merupakan sebuah olahraga bertipe Kardiovaskular yang sangat efektif untuk kebugaran tubuh dan kesehatan jantung secara keseluruhan. Namun, Protokol kesehatan harus tetap diikuti bila ingin bersepeda ditengah pandemi ini. Bila bergabung dengan komunitas, disarankan untuk tidak terlalu dekat atau bergerombol satu dengan yang lainnya. Selain itu, Kesehatan lebih mahal bila hanya dibandingkan dengan kehidupan yang gaul dan hanya ingin mendapat pujian semata.&nbsp;</p><p>&nbsp;</p><p>Bila kalian ingin merasakan sensasi bersepeda namun tidak ingin mengeluarkan keringat atau melakukan gowes, menonton film tentang sepeda juga merupakan sebuah rekomendasi untuk merasakan sensasi bersepeda ataupun untuk menambah semangat kalian untuk tetap bersepeda. Berikut adalah 5 Film tentang bersepeda yang dapat kalian tonton.&nbsp;</p><p>&nbsp;</p><p>&nbsp; <strong>&nbsp;1. Breaking Away&nbsp;</strong></p><p>&nbsp;</p><p>Film yang bergenre Comedy ini menceritakan tentang seorang pria bernama Dave dimana setelah lulus SMA, Dave masih belum memutuskan untuk melanjutkan pendidikannya ke jenjang yang lebih tinggi yaitu perguruan. Film yang di sturadarai oleh Peter Yates ini juga menjelaskan bahwa Dave masih menikmati masa masa bersama ketiga sahabatnya yaitu Moocher, Mike, dan Cyril. Strata sosial membuat mereka bertiga sering bersitegang dengan para mahasiswa yang berasal dari Universitas Indiana. Dave juga sebenarnya memiliki sebuah minat yang cukup berbeda dari yang lain yaitu dia memiliki kesukaan yang luar biasa dengan balapan sepeda.</p><p>Untuk membuat hobi tersebut dapat menjadi kenyataan, Dave berusaha untuk membuat tim bersepeda dengan sahabat sahabatnya yang dinamakan Cutters. Mereka pun akhirnya mengikuti kompetisi yang diadakan oleh Universitas Indiana. Dave memimpin timnya Cutters untuk menghadapi para pesaingnya dan berusaha untuk memenangkan lomba balap sepeda tersebut yang sudah ia impikan sejak awal.&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; <strong>2. The Flying Scotsman</strong></p><p>&nbsp;</p><p>The Flying Scotsman merupakan film yang rilis di tahun 2006 dengan mengusung Genre Drama, Sport. Film ini menceritakan tentang kisah nyata seorang pembalap sepeda yang amatir bernama Graeme Obree. Pada saat masih kecil, Graeme menggunakan sepeda untuk meloloskan dirinya dari teman temannya yang begitu usil. Namun semua itu berubah ketika Graeme dewasa, dimana sekarang dia merupakan seorang atlet yang telah berhasil memecahkan sebuah rekor balap dalam sebuah kejuaraan yang bergengsi tentunya</p><p>&nbsp;</p><p>Film yang disutradarai oleh Douglas Mackinnon juga memiliki sebuah plot dimana rekor baru yang dibuat Graeme tidak diakui oleh Federasi Sepeda Dunia dikarenakan Graeme memiliki cara bersepeda yang &ldquo;aneh&rdquo; dan tidak sesuai dengan aturan yang ditetapkan. Sebagai seorang manusia tentu Graeme pasti kecewa, namun dia terus berusaha dan pantang menyerah untuk meyakinkan orang orang tersebut, dengan kegigihannya, Dia mencoba kembali mengikuti kejuaraan sepeda untuk membuat orang lain mengakui kemampuannya.</p><p><br />&nbsp;</p><p>&nbsp; &nbsp; &nbsp; <strong>3 .Icarus</strong></p><p>Film yang bergenre dokumenter ini wajib ditonton untuk para penggemar sepeda. Film dokumenter yang satu ini tentu akan membuat anda semakin tertarik untuk menontonnya. Film yang dirilis pada tahun 2017 ini menceritakan tentang adanya sebuah program doping yang dijalankan di dunia olahraga. Seperti yang kita ketahui doping sebenarnya bukan masalah baru di dalam dunia olahraga, dimana banyak atlet berprestasi dan profesional menggunakan cara yang salah, yaitu dengan doping. Pada saat disituasi seperti itulah cerita dimulai dengan pemeran utama sekaligus sutradara yaitu Bryan Fogel.</p><p>&nbsp;</p><p>Bryan pertama kali ingin menggunakan doping dengan dibantu oleh mantan kepala laboratorium pengujian obat di Moscow yaitu Grigory Rodchenkov yang bersinggungan dengan World Anti Doping Agency. Tujuannya adalah untuk membuktikan bahwa hasil tes doping sukar dipercaya. Namun, malangnya dalam petualangan tersebut Bryan telah membuka skandal yang lebih besar daripada sebelumnya. Lalu apakah yang akan terjadi dengan Bryan? Simak dan tonton untuk mengetahui lebih lanjut.</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; <strong>4. American Flyers</strong></p><p>&nbsp;</p><p>Bila ingin menonton sebuah film lawas yang tetap memberikan alur cerita yang menarik tentu American Flyers adalah jawabannya. Film yang dirilis tahun 1985 dan bergenre Drama, sport ini menceritakan tentang kedua saudara yaitu David dan Marcus. David selalu terus berusaha untuk mengendalikan sepeda dan menjadi lebih cepat agar suatu hari dia dapat menjadi pembalap yang hebat sama seperti kakaknya yang bernama Marcus. Selain menjadi seorang pembalap yang hebat, Markus juga merupakan seorang dokter yang bekerja di sebuah rumah sakit. Namun, suatu hari ayah mereka meninggal dikarenakan pembulu darah di otaknya melemah dan tentu hal ini akan membuat kondisi keluarganya menjadi tidak nyaman dan bisa sering terjadi konflik.</p><p>Walaupun terjadi masalah keluarga, kedua saudara tersebut tetap tegar dan berusaha untuk mengikuti turnamen balap sepeda. Mereka akan mengikuti kejuaraan yang bernama &ldquo;The Hell of The West&rdquo;. David akan bersaing dengan pesepeda hebat yang lainnya dan Marcus akan bersaing dengan Muzzin yang merupakan mantan suami dari teman kencan Marcus saat ini. Lalu mampukah mereka berdua memenangkan kejuaraan tersebut ditengah situasi yang terjadi? Simak dan tonton filmnya !</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; <strong>5. Rishing From Ashes</strong></p><p>&nbsp;</p><p>Rishing From Ashes merupakan film yang dirilis pada tahun 2012 dan bergenre Dokumenter dan olahraga. Film ini menceritakan seorang mantan pembalap sepeda yang bernama Jacques Boyer datang ke suatu tempat bernama Rwanda. Sekelompok warga yang sedang berjuang membentuk tim bersepeda tersebut akhirnya dibantu oleh Jacques. Anggota yang ada berasal dari anak anak yatim piatu yang memiliki sebuah trauma dengan tragedy Genosida yang menyerang negaranya pada tahun 1994.&nbsp;</p><p>&nbsp;</p><p>Film yang disutradarai oleh T.C. Johnstone menjelaskan juga tentang tim Jacques Boyer yang merupakan harapan besar akan kebangkitan kota Rwanda tersebut. walaupun mereka telah pulih dan melupakan efek psikologis genosida tersebut, namun ternyata masih banuak atlet bersepeda di Rwanda yang membutuhkan gizi yang cukup ( kekurangan gizi ). Lalu akhirnya setelah tim ini mulai mendapatkan asupan gizi yang cukup, akhirnya mereka menguji kemampuan bersepeda mereka dengan mengikuti Tour de France. Pada saat perlombaan tersebut mereka berhasil meloloskan satu pembalapnya ke olimpiade 2012. Lalu mau tahu kelanjutnannya ? siapkan snack terbaik mu dan mulai menonton filmnya</p><p>&nbsp;</p><p>Itu adalah 5 rekomendasi Film tentang sepeda yang wajib untuk anda tonton. Jadi tunggu apa lagi? Segera ambil cemilan kamu, posisikan posisi kamu seenak mungkin dan selamat menikmati film film tersebut !</p>', '5-Rekomendasi-Film-tentang-Sepeda', 'film2.jpg', '2020-12-30'),
(10, 'Bagaimana Sepeda pada zaman Dahulu ?', 'Sepeda', '<p>Siapa yang tidak mengenal salah satu alat transportasi yang menggunakan dua roda dan sering dijadikan sebagai ajang komunitas maupun lomba lomba lainnya. Yap sepeda tentu sudah tidak asing lagi bagi kita. Namun pernahkah kalian mengetahui tentang sejarah sepeda pada zaman dahulu? Siapa yang menciptakannya, siapa saja yang dapat membelinya, bagaimana bentuknya tentu merupakan berbagai macam pertanyaan yang akan dilontarkan untuk mengetahui sepeda di jaman dahulu kala. Lalu sebenarnya bagaimana alur cerita sepeda pada zaman dahulu ?&nbsp;</p><p>Seperti yang kita ketahui, bentuk sepeda pada zaman dahulu tentu akan berbeda dengan zaman sekarang. Hal itu dikarenakan oleh kreativitas dan inovasi para ahli yang pandai dalam bidangnya serta saling melengkapi satu sama lain. Awalnya, Baron Karl Drais von Sauerbronn atau yang sering disebut dengan Karl merupakan penemu dari sepeda . pada waktu itu Karl yang lahir pada tanggal 29 April 1785 di Karlsruhe, Jerman merupakan seorang kepala pengawas hutan. Ide Beliau muncul dari masalah yang dihadapinya pada saat itu&nbsp;&nbsp;</p><p>Karl mempunyai suatu masalah pada profesinya sebagai pengawas hutan, dimana pada saat itu Karl membutuhkan sebuah alat ransportasi yang memiliki mobilitas yang tinggi. Hingga dari situlah Karl kemudian mendapatkan ide untuk membuat sebuah alat transportasi yang berfungsi untuk meringankan pekerjaannya. Dari situlah terbentuklah sebuah alat transportasi yang dinamakan sepeda. Sepeda yang dibuat oleh Karl Drais ini memiliki roda tiga tanpa adanya pedal. Ini merupakan cikal bakal sepeda yang tentu kita lihat pada zaman sekarang ini.&nbsp;&nbsp;</p><p>Dia memulai perjalanan pertamanya pada 12 Juni 1817, yang berasal dari kota Manheim menuju Schwetzinger Relaishaus. Lalu Karl melanjutkan perjalannya keduanya dari kota Gernsbach menuju kota Baden pada tahun 1817. Pada saat itu dilaporkan bahwa Karl Drais melaju dengan cepat dikarenakan masyarakat pada saat itu belum mengenal yang namanya sepeda. Karena perjalanan yang dikatakan cepat oleh orang di sekitarnya, Karl dilirik dan diliput oleh banyak media, lebih tepatnya media cetak yaitu koran. Pada saat itu koran merupakan media yang sangat terkenal dan populer. Ia dimuat di korang lokal Jerman pada tahun 1817</p><p>Draisienne merupakan nama sepeda yang dibuat oleh Karl Drais. Namun, sayangnya muncul sepeda dengan merk merk terbaru dengan keunggulan keunggulannya yang membuat Karl Drais pun tersingkirkan. Pada Zaman tersebut, membeli sepeda sama dengan membeli sebuah mobil berkelas, dimana hanya orang orang tertentu saja yang dapat membelinya, seperti para penguasa, para bangsawan, dan para kaum elit lainnya yang dapat menikmati transportasi yang populer pada saat itu&nbsp;&nbsp;</p><p>Seiring dengan perkembangan jaman, pada tahun 1960-an sepeda pun mulai tergeser dari tahtanya pada saat itu dan mulai digantikan dengan raja baru yaitu munculnya kendaraan dengan menggunakan mesin seperti motor dan mobil yang membuat populasi sepeda tidak tinggi seperti sebelumnya.&nbsp;</p><p>Sedangkan di Indonesia, Sepeda masuk dan dikenalkan pertama kali pada masa Kolonial Belanda, dimana orang orang Belanda membawa sepeda buatan eropa sebagai sebuah alat transportasi untuk melakukan penjajahan pada saat itu di Indonesia. Namun sama seperti pada pertama kali sepeda ini masuk, hanya beberapa orang atau orang orang tertentu saja lah yang dapat menggunakan sepeda ini seperti para bangsawan dan juga penguasa. Pernahkah kalian mendengar sepeda jengki? Nama asli dari sepeda jengki adalah &ldquo;yankee&rdquo;. Sebutan ini diperuntukan oleh orang orang Amerika. Istilah ini muncul ketika orang orang Amerika sekitar tahun 1960 an mulai menginvasi Indocina.&nbsp;</p><p>Selain untuk alat transportasi, dengan berkembangnya komunitas yang ada, sepeda pun digunakan sebagai ajang balap. Tahukah kalian, awal mula balap sepeda di Indonesia diadakan di Kota Semarang. Namun sayangnya kegiatan balap sepeda ini&nbsp; sempat terhenti dikarenakan terjadinya penjajahan Jepang kepada Bangsa Indonesia. Kegiatan balap sepeda diadakan kembali ketika negara Indonesia menyatakan merdeka. Balap sepeda juga merupakan cabang olahraga resmi yang diperlombakan tepatnya pada PON ( Pekan Olahraga Nasional ) ke 2 pada tahun 1951. Hal inilah yang membuat terbentuknya komunitas &ndash; komunitas untuk perkumpulan balap sepeda dan akhirnya berdirilah ISSI (Ikatan Sport Sepeda Indonesia) pada tanggal 20 Mei 1956 dan bertempat di Semarang.</p><p>Dengan adanya komunitas dan sepeda yang sudah berinovasi seperti sekarang mulai dari sepeda gunung, sepeda lipat, hingga sepeda balap, membuat sepeda tetap memiliki peminatnya dan tentu sepeda juga dapat digunakan sebagai salah satu alat transportasi dan juga dapat digunakan sebagai sarana olahraga.&nbsp;</p><p>Berikut adalah penjelasan mengenai bagaimana sepeda terbentuk, tentu semuanya berasal dari&nbsp; suatu permasalahan yang ada lalu dibuatlah solusinya yaitu sepeda. Sehingga ide dan inovasi sangat berperan penting untuk membuat bentuk sepeda pada zaman dahulu maupun pada zaman sekarang ini yang memiliki banyak bentuk dan kegunaanya masing masing.</p>', 'Bagaimana-Sepeda-pada-zaman-Dahulu', 'obike.jpg', '2020-12-30'),
(11, 'Brompton : Sepeda Lipat yang jadi Primadona saat Pandemic', 'Sepeda', '<p>Sepeda merupakan suatu olahraga yang sedang terkenal dan marak akhir akhir ini khususnya pada jalanan ibu kota Jakarta yang sangat menyukai olahraga gowes ini. Data membuktikan bahwa pengguna sepeda di Jakarta meningkat 10 kali lipat dari sebelumnya, membuktikan bahwa sepeda merupakan hal yang sedang tinggi untuk masyarakat Indonesia khususnya Jakarta.&nbsp;</p><p>Salah satu syarat penting untuk bersepeda adalah tentu dengan memiliki sepeda. Bagaikan sebuah primadona ada beberapa sepeda yang menjadi pusat perhatian dan menjadi idaman para pesepeda saat ini, salah satunya adalah sepeda lipat Brompton. The Institute for Transportation and Development Policy (ITDP) yang telah melakukan survey kepada para pesepeda di DKI Jakarta pada saat PSBB transisi dari 5 Juni yang lalu mengungkapkan bahwa sepeda lipat Brompton ini sangat diminati oleh masyarakat tersebut.&nbsp;</p><p>Sepeda lipat satu ini memiliki bobot yang ringan dengan harga yang tentu dapat membuat anda terkejut. Dilansir dari lama resmi pada minggu ( 02/08/2020 ), sepeda lipat dengan merk Brompton ini memiliki harga mulai dari Rp 14 jutaan hingga Rp 55 jutaan, dimana perbedaan harga tersebut dikarenakan spesifikasi serta kelebihan yang dimiliki pada beragam tipe sepeda Brompton tersebut. Lalu kenapa Brompton bisa menjadi primadona pada saat pandemic seperti ini? Berikut adalah beberapa penjelaskan yang dapat dijabarkan.</p><p>&nbsp;</p><p>Sebelum lebih jauh, yuk kita berkenalan lebih dekat lagi dengan Sepeda lipat merk Brompton ini. Pada mulanya Brompton merupakan pabrikan sepeda lipat dan juga aksesori yang berkaitan dengan sepeda yang terletak di daerah Greenford, London, Inggris. Sepeda dengan merk Brompton ini dirancang oleh Andrew Ritchie pada tahun 1975. Pada waktu itu Andrew merancang sepeda tersebut di apartemennya di Brompton Oratory, Londond</p><p>Pada awal mulanya, desai sepeda Brompton ini diperkenalkan pada tahun 1977. Pada waktu ini desainnya masih terlihat kaku namun memiliki sebuah kerapihan yaitu dapat terlipat dengan baik dan dalam ukuran yang kecil. Tentu pada saat itu, ini menjadi suatu pertanda kemajuan di dalam industri sepeda lipat tersebut. sejak saat itulah sepeda lipat dengan merk Brompton ini dikenal sebagai salah satu pelopor sepeda lipat yang terbaik di dunia pada saat itu.&nbsp;</p><p>Ada beberapa hal yang membedakan sepeda lipat Brompton dengan sepeda lipat lainnya. Sebut saja dalam hal model kerangka, model kerangka sepeda lipat Brompton ini memiliki ciri khusus, yaitu ciri lengkungan yang sama. Rangka Brompton sendiri terdiri dari tabung utama yang berengsel, garpu depan, handle-bar yang berengsel, hingga poros belakang yang dapat berputar. Tabung dan batang utama pada semua model Brompton ini juga biasanya terbuat dari bahan baja.&nbsp;</p><p>Lalu untuk hal yang lainnya seperti garpu depan maupun segitiga belakangnya terbuat dari titanium atau baja yang semuanya itu tergantung dari model yang digunakan tentunya. Bila menggunakan baja, maka bagian bagian tersebut biasanya digabungkan tidak dengan di las pada sepeda seperti pada umumnya, melainkan dengan menggunakan teknik solder. Selain itu bila berpindah ke bagian roda, Brompton menggunakan pelek yang berukuran 13.7 inci dan roda yang berdiameter 16 inci</p><p>Selanjutnya adalah gear, Sepeda lipat Brompton ini juga menawarkan empat pilihan gear yang tentu disesuaikan dengan medan jalan yang akan ditempuh para pesepeda. Kode simbol angka pada nomor seri mobilnya ini mewakili ukuran gear yang akan dipakai. Sebagai contoh model Brompton S6R dimana memiliki arti Sepeda lipat tersebut dilengkapi dengan gear 6 percepatan.</p><p>&nbsp;</p><p>Brompton menawarkan empat pilihan gear yang disesuaikan dengan medan jalanan yang dilewati. Ukuran gear ini diwakili pada kode simbol angka pada nomor seri mobilnya. Misalnya model S6L artinya model ini dilengkapi dengan gear 6 percepatan. 4 gear yang ditawarkan yaitu 1-speed, 2-speed, 3-speed, dan 6-speed</p><p><strong>1-speed</strong></p><p>Merupakan tingkat percepatan yang paling standar. Seseorang hanya perlu mengayuh saja. Tentu akan menghadapi kesulitan bila ingin digunakan di jalan yang curam atau menanjak.</p><p><strong>2-speed</strong></p><p>Pada 2-speed ini, Gear yang digunakan akan memiliki sebuah sistem yang dinamakan derailleur yang cukup unik pada sepeda lipat Brompton ini. Kelebihannya terdapat pada gigi giginya yang rata dengan sempurna sehingga akan lebih mudah ketika ingin bersepeda di medan yang cukup menantang namun tidak sampai begitu terjal.</p><p><strong>3-speed</strong></p><p>Merupakan sebuah gear yang memiliki hub roda gigi yang tertutup dengan baik dan juga kuat, serta memiliki penempatan tiga gigi roda yang maksimal dan baik. Sistem percepatan tersebut sangat cocok digunakan pada perjalanan yang menempuh jarak sedang dengan syarat tidak begitu berbatu maupun terjal dan jalanan dengan tipikal berbukit.</p><p><strong>6-speed</strong></p><p>Pada sistem 6-speed ini, Brompton tipikal ini memiliki sistem derailleur yang dibuat khusus oleh brompton tersebut. ciri cirnya adalah dengan menggunakan hub roda gigi lebar dan menawarkan enam roda gigi dengan jarak yang sama. Tipikal ini merupakan tipikal yang sangat ideal untuk melakukan perjalanan jarak jauh dan melalui medan yang cukup terjal maupun berbukit.</p><p>Selain itu Brompton hanya menggunakan dua material yang digabungkan. Hal itu digunakan untuk tetap menjaga keringanan pada bobot sepeda Brompton tersebut. dua jenis material yang digunakan adalah baja dan titanium. Baja digunakan untuk memaksimalkan kekuatan yang bisa dikeluarkan oleh sepeda Brompton tersebut, sedangkan titanium digunakan karena bahan tersebut memiliki berat yang sangat ringan dibandingkan bahan lain. Material tersebut digunakan tentu untuk membuat bobot ringan dan membuat para pesepeda tidak keberatan saat ingin mengangkat sepeda Brompton tersebut.</p>', 'Brompton-Sepeda-Lipat-yang-jadi-Primadona-saat-Pandemic', 'brompton.jpg', '2020-12-30'),
(13, 'Manfaat Bersepeda', 'Kesehatan', '<p>Kesehatan merupakan salah satu Harta paling berharga yang tentu harus dijaga. Seperti yang kita ketahui akhir akhir ini kita harus menjaga kesehatan kita dari berbagai penyakit mulai dari flu, Stroke, Diabetes, hingga sekarang ini yaitu Covid-19. Salah satu cara untuk menjaga kesehatan dan tetap bugar tentu dengan berolahraga. Ada berbagai macam olahraga yang dapat dimulai, salah satunya adalah dengan berolahraga. Ini merupakan latihan yang sehat serta dapat dinikmati oleh setiap usia.&nbsp;</p><p>Bersepeda merupakan hal yang mudah. pada dasarnya kita hanya membutuhkan sebuah sepeda dan kita pun dapat berolahraga sesuai dengan rute yang kita inginkan. Berbeda dengan lari, bersepeda dapat menempuh jarak yang lebih jauh dan dapat dijangkau oleh sepeda, sehingga memungkinkan kita untuk berpindah pindah tempat ke tempat yang jauh sekalipun.&nbsp;</p><p>Dengan bersepeda ini, tentu kita akan merasakan berbagai macam manfaat yang akan membuat kita terlindungi dari penyakit penyakit mematikan dikemudian hari seperti obesitas, kanker, penyakit mental, hingga diabetes sekalipun. Selain itu sepeda juga sudah digunakan untuk alat transportasi sehari hari di berbagai belahan dunia. Berikut adalah beberapa manfaat dari bersepeda seperti yang dikutip oleh betterhealth :</p><p>&nbsp; &nbsp; &nbsp; 1. Meningkatkan kekuatan dan fleksibilitas</p><p>Dengan bersepeda tentu akan memperkuat otot otot kaki, dan pada sendi lutut dan juga pinggul, serta otot lengan. Hal tersebut terjadi&nbsp; karena kita banyak mengayuh dan juga menopang diri dengan otot lengan, sehingga hal tersebut yang membuat otot otot tersebut berkembang. Selain itu, bersepeda dapat membuat stamina tubuh meningkat serta membuat daya tahan seseorang meningkat. Hal tersebut disebabkan karena bersepeda dapat meningkatkan tingkat energi kita dan menjadi tidak mudah lelah.</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; 2. Menurunkan berat badan</p><p>Bersepeda merupakan cara yang efisien untuk mengikis lemak yang tidak diinginkan pada tubuh kita. Dengan bersepeda, otot otot paha, bokong, dan betis akan semakin terlatih dan meningkat, sehingga lemak tubuh yang tidak diinginkan akan berkurang dan membuat badan kita menjadi semakin bagus apabila dilakukan dengan konsisten. Satu jam bersepeda dipercaya dapat membakar banyak kalori pada tubuh kita.&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; 3. Peredam stres, depresi, maupun rasa cemas</p><p>Stres, depresi, maupun rasa cemas merupakan suatu gangguan mental yang tentu akan mempengaruhi kualitas hidup kita. Untuk itu ada beberapa cara untuk meminimalisir hal hal tersebut, salah satunya adalah bersepeda. Meskipun tidak dapat menghilangkan perasaan tersebut, namun dengan bersepeda tubuh kita akan mengeluarkan hormon endorfin yang berfungsi untuk memicu perasaan nyaman dan suasana hati yang gembira atau positif. Selain itu hormon endorfin juga berfungsi untuk mengurangi rasa sakit serta beban pikiran yang sedang dipikirkan.</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; 4. Meningkatkan Mobilitas</p><p>Bersepeda tentu akan membuat kita memiliki mobilitas yang tinggi. di zaman sekarang yang serba macet ini, tentu bersepeda merupakan suatu pilihan alternatif yang dapat digunakan untuk membantu kehidupan kita. Selain itu ditengah pandemi Covid-19 yang membuat seseorang takut tertular apabila menaiki sebuah transportasi umum, tentu sepeda adalah jawaban yang tepat atas permasalahan tersebut.&nbsp;</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; 5. Mencegah resiko Kanker&nbsp;</p><p>Jika kita kurang memperhatikan tubuh kita seperti tidak berolahraga dengan teratur, maka kemungkinan untuk terkena kanker akan cukup tinggi. Dr Cannioto yang merupakan ahli epidemiologi di Roswell Park Comperehensive Cancer Center, Bufallo, New York mengemukakan bahwa beberapa aktivitas fisik seperti lari dan bersepeda akan membantu hidup seseorang menjadi lebih baik dan akan lebih rendah terkena kanker daripada tidak ada aktivitas sama sekali. Sehingga bila kita bersepeda secara rutin maka hal tersebut akan membuat kita jauh dari penyakit berbahaya tersebut.</p><p>&nbsp;</p><p>&nbsp; &nbsp; &nbsp; 6. Mencegah Resiko penyakit Jantung</p><p>Selain dapat mencegah resiko kanker yang ada, bersepeda juga memiliki manfaat untuk mencegah resiko penyakit jantung. Wakil Sekretaris Jenderal Perhimpunan Dokter Spesialis Kardiovaskular Indonesia, dr. Ario Soeryo Kuncoro SPJP mengatakan bahwa orang Indonesia memiliki resiko yang lebih besar untuk mengalami penyakit jantung. Hal ini terjadi dikarenakan pola makan dan gaya hidup orang Indonesia yang terbilang kurang sehat. Oleh sebab itu dengan bersepeda setidaknya 20 menit setiap harinya tentu akan membantu mengontrol detak jantung tentu akan mencegah atau meminimalisir resiko terjadinya penyakit jantung.</p><p>&nbsp;</p><p>Berikut adalah beberapa manfaat dari bersepeda. Namun perlu diingat bahwa segala sesuatu hal yang berlebihan tentu akan tidak baik, sehingga bersepedalah dengan mengetahui kapasitas Tubuh kita dan tidak terlalu memaksakannya, sehingga manfaat yang akan diterima akan didapat dengan maksimal dan tidak menjadi malapetaka untuk tubuh kita.</p>', 'Manfaat-Bersepeda', 'download.jpg', '2020-12-30'),
(14, 'Road Bike atau Mountain Bike ?', 'Sepeda', '<p>Bersepeda selain membuat badan menjadi sehat, tentu bersepeda juga dapat dilakukan dengan menyenangkan dan hati menjadi gembiar juga. Jika di[erhatikan lebih lagi, ekspresi orang orang yang melakukan gowes ( mengayuh sepeda ) akan terlihat bahagia atau santai, seakan akan mereka terbebas dari kemacetan yang terus melanda dan membuat pusing semua orang.</p><p>Selain itu, disaat ini, sepeda juga dapat dikatakan menjadi tren di berbagai kalangan masyarakat di Indonesia, data menunjukkan bahwa pada saat adanya Corona seperti ini, minat masyarakat dengan Sepeda menjadi tinggi dan lebih digemari. Hal tersebut juga di dukung dengan maraknya orang orang bersepeda pada saat Car Free Day yang sudah mulai diadakan kembali setiap akhir pekan. Hal tersebut juga dimanfaatkan para pesepeda entah untuk berkumpul ataupun bertemu dengan para komunitas. Namun tahukah anda sepeda mana yang cocok untuk anda jadikan partner bersepeda ?&nbsp;</p><p>&nbsp;</p><p>Sepeda memiliki berbagai jenis, mulai dari sepeda balap, sepeda gunung, hingga sepeda lipat, dan yang lainnya. Namun kali ini, yang dibahas adalah antara Road Bike ( sepeda Balap ) atau Mountain Bike ( Sepeda Gunung ). Kedua sepeda tersebut merupakan sepeda yang cukup terkenal di kalangan masyarakat Indonesia, begitu popular sepeda ini seolah olah hamper menguasai dunia persepedaan dan meninggalkan yang lainnya. Hal ini pun juga di dukung dengan semakin banyaknya orang menggunakan sepeda untuk tujuan mobilitas atau transportasi dan bukan ke arah olahraga seperti atlit dan sebagainya. Bagi kalian yang ingin bersepeda, tentu harus dimulai dengan memilih tipe sepeda seperti apa yang kalian butuhkan. Berikut beberapa hal yang perlu dipertimbangkan dalam memilih jenis jenis sepeda tersebut.&nbsp;</p><p>Road Bike atau sepeda Balap merupakan sepeda yang biasanya digunakan untuk keperluan olahraga seperti dalam hal perlombaan atau hal yang sejenisnya. Hal tersebut juga didukung dengan Frame nya yang ringan dibandingkan dengan yang lainnya, Gear yang dimiliki dapat menambah kecepatan yang ada, dan bentuk sepedanya yang di sesuaikan juga untuk kecepatan yang maksimal. Namun seiring berjalannya waktu, Road Bike sering digunakan untuk bersepeda santai di jalan yang beraspal atau mulus dimana sepeda ini ringan dan juga kokoh serta memiliki kecepatan yang cukup tinggi bila dibandingkan dengan jenis sepeda yang lainnya. Sepeda Road Bike juga nyaman untuk dikendarai, namun perlu diperhatikan oleh poster tubuh seseorang. Sangat tidak disarankan untuk seseorang yang mempunyai sakit atau masalah punggung untuk menaiki Road Bike ini dikarenakan postur badan seseorang akan lebih membungkuk ketika mengendarai Road Bike yang berfungsi untuk menyelaraskan diri dari angin yang ada. Selain itu dalam memilih sepeda Road Bike, perlu dilihat juga kebutuhan yang akan digunakan oleh orang tersebut. sepeda ini cocok untuk di kendarai untuk keperluan olahraga di jalan beraspal dan mulus ataupun untuk keperluan bekerja seperti ke kantor juga merupakan suatu pilihan yang baik dengan catatan berjalan aspal.&nbsp;</p><p>&nbsp;</p><p>Lalu selanjutnya adalah sepeda&nbsp; Mountain Bike atau Sepeda Gunung. Mountain Bike merupakan sepeda yang dikhususkan untuk jalanan terjal, berbatu, dan tidak mulus seperti pada jalan di pegunungan. Biasanya sepeda ini dipakai pada jalan yang&nbsp; berbatu atau ketika ingin masuk ke dalam suatu pedalaman atau pegunungan. Namun pada saat ini, Sepeda gunung dapat juga dipakai ke dalam kehidupan sehari hari. Walaupun sepeda ini lebih lambat dibandingkan dengan Road Bike, namun sepeda ini dapat menggilas segala situasi jalanan yang ada. Baik aspal maupun bergelombang, hingga berpasir, sepeda Mountain Bike ini dapat mengatasi semuanya dengan kelincahannya. Jika jalanan yang anda sering lalui memiliki banyak polisi tidur, hingga berbatu batu, sepeda ini sangat cocok dengan kehidupan daerah anda. Selain itu, Mountai Bike juga di desain dengan kenyamanan yang akan membuat seseorang dapat berlama lama menaiki sepeda tersebut. pasalnya, Mountain Bike biasanya dipersenjatai dengan suspensi belakang, sehingga seseorang tidak akan terlalu bungkuk seperti pada saat menggunakan Road Bike. Ban yang dipakai pun lebih tebal bila dibandingkan dengan Road Bike, dimana ban tersebut berfungsi untuk mencengkram tanah dengan kuat.</p><p>&nbsp;</p><p>Itulah beberapa hal yang dilihat pada saat ingin memilih Mountain Bike ataupun Road Bike. Namun perlu diketahui juga pada saat ingin memilih jenis sepeda yang ada, anda harus memperhatikan Group set serta harga sepeda tersebut. Group Set merupakan komponen komponen yang ada pada sepeda. Tentu komponen ini merupakan hal yang vital untuk sepeda anda seperti crankset, rantai, rear derailleur, dan yang lainnya. Hal hal tersebut harus diperhatikan karena komponen tersebut saling berhubungan satu dengan yang lainnya dan dapat membuat energi gerak yang dihasilkan menjadi maksimal juga. Selain itu, bila anda masih pemula dalam dunia persepedaan atau masih belum yakin untuk menekuni bidang ini, disarankan untuk memilih sepeda baik Road Bike maupun Mountain Bike dengan harga yang relatif murah dan terjangkau. Akan sangat disayangkan bila anda membeli sepeda yang mahal namun tidak sering anda gunakan. Selain itu biasanya Harga sangat berpengaruh pada Groupset yang ada, sehingga akan lebih baik jika anda memilih groupset murah namun tetap berkualitas pada saat memilih sepeda tersebut. kemudian ketika anda ingin menekuni lebih serius, barulah dapat memilih groupset yang bagus. Namun jika harga bukanlah sesuatu hal yang anda anggap, berarti silahkan anda memilih sepeda dengan yang anda inginkan.</p>', 'Road-Bike-atau-Mountain-Bike', 'mtb_vs_rb.jpg', '2020-12-30'),
(15, 'Sepeda yang membuat jiwa kemiskinanku Meronta', 'Sepeda', '<p>Seperti yang kita ketahui, bersepeda merupakan pilihan olahraga yang paling masuk akal dimana pada saat kita harus menjaga jarak dengan orang lain, sepeda merupakan alternatif yang sangat menguntungkan dalam menjalani new normal ini. Seiring dengan perkembangan zaman, sepeda tidak hanya dipakai untuk transportasi, maupun lomba semata. Melainkan gaya hidup sudah mulai masuk dan merambah di dunia sepeda ini. Gaya hidup merupakan nilai prestis tersendiri bagi orang orang tersebut, banyak dari mereka yang rela mengeluarkan kocek hingga ratusan juta hanya demi memiliki kendaraan yang memiliki fitur fitur canggih tersebut yang tentu hanya golongan tertentu saja yang dapat memiliki kendaraan ini. Berikut adalah daftar 10 sepeda termahal di dunia yang tercatat dan dilansir hingga saat ini :</p><p><strong>1 Trek Butterfly Madone: USD500.000 atau setara Rp7,2 miliar (kurs Rp14.563 per USD)</strong></p><p>Lance Armstrong menggunakan jenis sepeda ini dalam lomba Tour de France pada tahun 2009. Desainer Damien Hirst menempelkan sayap kupu-kupu asli di atas kerangka beton dan setiap sisi sepeda tersebut. Dalam acara lelang amal, kendaraan roda dua itu berhasil dijual dengan harga USD500.000. namun, sayangnya berbagai organisasi hewan seperti PETA (People for the Ethical Treatment of Animals) sangat menentang hal tersebut dikarenakan perbuatan tersebut tentu akan merusak dari kupu kupu itu sendiri dan praktek tersebut merupakan praktek yang biadab.</p><p><strong>2 Trek Yoshimoto Nara: USD200.000 atau setara Rp2,9 miliar&nbsp;</strong></p><p>Sepeda ini berhasil dijual dengan harga USD200.000 pada suatu acara lelang amal. Warna kuning terang menempel dengan sangat mempesona pada sepeda tersebut. Seniman Yoshimoto Nara juga menghiasi sepeda ini dengan logo Livestrong dan ditambahkan tema kartun anak anak. Kendaraan ini juga pernah ditunggangi oleh Lance Amstrong pada salah satu baapan Tour de France tepatnya pada tahap ke-18.</p><p><strong>3. Trek Madone: USD160.000 atau setara Rp2,33 miliar&nbsp;</strong></p><p>Seperti kedua sepeda di atas, sepeda ini juga pernah digunakan oleh Lance Amstong. Kuning dan hitam merupakan warna mayoritas di daam sepeda tersebut dan memiliki bentuk seperti motif macan tutul. Sepeda ini berhasil di jual dalam acara pelelangan sebesar USD160.000.&nbsp;</p><p><strong>4 Auramania Crystal Edition Gold Bike: USD114.000 atau setara Rp1,66 miliar&nbsp;</strong></p><p>Perusahaan Prancis merupakan tempat dimana sepeda ini diproduksi. Sepeda ini memiliki berbagai keunggulan mulai dari kerangka, roda, dan jeruji velegnya dilapisi dengan emas serta Kristal Swarovski. Selain itu, Genggaman dan pelana sepeda ini juga terbuat dari kulit berkualitas tinggi dan lencan kulit pada bagian depan sepeda juga menampilkan nomor edisi terbatas. Sepeda ini dipasarkan dengan harga jual fantastis, yaitu USD114.000.&nbsp;</p><p><strong>5 Trek Madone 7 &ndash; Diamond senilai USD75.000 atau setara Rp1,09 miliar&nbsp;</strong></p><p>Sepeda yang sastu ini dilelang di Lala Armstrong Foundation pada acara tahunan di New York 2005 silam serta dijual dengan harga USD75.000. Sepeda ini juga dilengkapi dengan berbagai macam kelebihan, mulai dari lambing lambing diamong tujuh (7) yang dikombinasikan dengan berlian yang begitu menakjubkan. Selain itu ada plakat diamond 7 dengan emas kuning empat belas karat dan emas putih bertatahkan tujuh permata kuning gemesis satu karat.&nbsp;</p><p><strong>6 Chrome Hearts X Cervelo Mountain Bike: USD 60.000 atau setara Rp873,7 juta</strong></p><p>Pembuat sepeda ini adalah perusahaan Cervelo, dimana merupakan pembuat sepeda balap yang sudah terkenal dan memiliki nama yang besar. Selain itu, Cervelo juga sudah berkolaborasi dengan merk aksesoris sepeda motor mewah Amerika yaitu Chrome Hearts. Sepeda ini memiliki motif Chrome Hearts, jok kulit, salib perak, serta hasil karya seni yang sungguh indah dan menakjubkan. Sepeda ini didasarkan pada P4 TT Cervelo yang biasanya dijual seharga sekitar USD 6.000. namun dikarenakan ini merupakan edisi khusus dengan berbagai perlengkapan yang mahal sehingga sepeda ini dihargai dengan harga USD 60.000.</p><p><strong>7. Montante Luxury Gold Collection: USD46,000 atau setara Rp669,9 juta</strong>&nbsp;</p><p>Sepeda ini lebih berfokus kepada perempuan, dimana memiliki desain yang menakjubkan dan pelana yang terbuat dari kulit. Selain itu sepeda ini juga memiliki rem jalan, dinamo tradisional, serta genggaman kulit ular sanca yang mempesona. Dikarenakan terdapat bahan bahan menakjubkan tersebutlah yang membuat harganya meningkat menjadi USD 46.000&nbsp;</p><p><strong>8 eRockit&rsquo;s Electric Assist Bicycle: USD44.000 atau setara Rp640,7 juta&nbsp;</strong></p><p>Sepeda ini memiliki fitur tambahan berupa barerao motor yang mampu bertahan hingga 10 tahun atau 50.000 kilometer. Kendaraan modern ini sangat ideal untuk pengendara motor tidak ingin mengayuh pedal sepanjang waktu. Meskipun sebagian besar e-bikes dijual antara USD1.000 dan USD5.000, yang satu harganya dipatok sebesar USD44.000 karena ada fitur tambahan. Sepeda ini secara tepat disebut mesin manusia-hibrida. Saat Anda mengayuh semakin cepat, maka akan mengisi daya motor dan baterainya. Kendaraan tidak memiliki gagang terpisah atau pedal akselerasi seperti yang dimiliki sepeda motor. Bobotnya adalah 100 kilo yang berarti Anda harus mencari tempat parkir karena Anda tidak akan dapat membawanya ke apartemen Anda.</p><p><strong>9 Litespeed Blade: USD40.788 atau setara Rp593,5 juta&nbsp;</strong></p><p>Sepeda yang inovatif ini memberikan sebuah kegagahan serta kualitas yang tak tertandingi. Sepeda ini juga merupakan sebuah kolaborasi antara Litespeed dengan Merlin pada akhir 1980-an. Sepeda ini juga dipasarkan oleh merk terkenal eropa seperti Eddy Merckx seharga USD 40.788</p><p><strong>10 Phanuel Krencker&rsquo;s &lsquo;Bicyclettes de Luxe&rsquo;: USD34.425 atau setara Rp501,3 juta&nbsp;</strong></p><p>Sepeda ini menawarkan berbagai keunggulan yang menawan. Selain diberikan krom dan serat karbon, sepeda ini juga mencakup suku cadang khusus serta bingkai yang terbuat dari Cyfac. Sepeda ini memiliki penampilan yang mengkilap dan reflektif berkat cat krom dan komponen yang dipoles dengan cermin. Kemudian, dilengkapi dengan rem cakram belakang dan depan, menjadikan kendaraan yang atraktif ini merupakan perpaduan antara desain kreatif dan suku cadang yang luar biasa</p>', 'Sepeda-yang-membuat-jiwa-kemiskinanku-Meronta', 'mahal.jpg', '2020-12-30'),
(16, 'Tips Membersihkan Sepeda', 'Sepeda', '<p>Sepeda merupakan salah satu alternatif yang dapat digunakan sebagai pengganti transportasi umum lainnya. Apabila jarak dari rumah ke kantor ataupun sekolah dekat, menggunakan sepeda tentu adalah alternatif yang cukup baik. Apalagi dalam keadaan pandemi seperti ini, sepeda kerap dijadikan salah satu transportasi pengganti kereta ataupun bus untuk meminimalisir virus Covid-19 ini. Namun, terkadang kita semua hanya berfokus kepada kemampuan yang dimiliki oleh sepeda tersebut seperti spesifikasi yang bagus, memiliki roda yang besar, dapat melaju dengan cepat, ringan, namun tidak memperhatikan kebersihan sepeda tersebut. Padahal membersihkan sepeda merupakan hal yang wajib dilakukan untuk membuat sepeda kita menjadi awet, tahan lama, dan sedap untuk dipandang. Membersihkan sepeda biasanya merupakan kegiatan yang sedikit menyusahkan. Walaupun demikian, mencuci dan membersihkan sepeda merupakan kegiatan wajib yang harus dilakukan untuk membuat sepeda menjadi bersih dan nyaman untuk digunakan. Lalu bagaimana cara mencuci sepeda yang baik dan benar ?&nbsp;</p><p>Sebelum mencuci sepeda, tentu ada beberapa hal yang perlu diperhatikan terlebih dahulu, pasalanya jika kita mencuci sepeda dengan cara yang salah, sepeda akan menjadi lebih cepat untuk rusak. Hal itu disebabkan karena karat yang menggerogoti sepeda kita atau kekurangan pelumas. Walaupun sepeda perlu dibersihkan namun pasalnya ada beberapa komponen yang tidak kedap air, sulit untuk dibersihkan, tidak tahan air, sehingga harus dengan benar untuk mencuci dan membersihkan sepeda. Biasanya cara yang digunakan untuk menghindari kekurangan pelumas adalah dengan memberikan pelumas kembali setelah mencuci sepeda tersebut dikarenakan saat mencuci sepeda, pelumas akan ikut tercuci dan terlarut. Lalu jika berbicara dengan karat, tentu solusinya adalah dengan tidak menggunakan air bertekanan / power washer untuk menyiram sepeda kita apalagi kepada bahan sepeda yang berbahan besi. Jika sudah di semprotkan dengan air, harus dikeringkan dengan benar tanpa ada sisa air yang ada pada bahan sepeda tersebut.&nbsp;</p><p>&nbsp;</p><p>Berikut adalah langkah langkah untuk membersihkan sepeda&nbsp; secara simpel dan cepat tentunya.</p><p>&nbsp;</p><p>Pertama mulailah dengan membasuh sepeda dengan air pada rangka sepeda. Basuh rangka sepeda tersebut dari atas ke bawah. Selanjutnya, mulailah siram dengan menggunakan semacam spons yang diisi dengan air. sekali lagi perlu ditekankan bahwa memaksa untuk menyemprotkan air dengan bertekanan tinggi karena selain dapat membuat karat, hal tersebut akan memaksa air tersebut masuk ke dalam bantalan sepeda ( bearing ). Semprot kerangka sepeda tersebut dengan produk pembersih sepeda , lalu diamkan beberapa saat sesuai dengan ketentuan pembersih sepeda masing masing. Biasanya diberikan petunjuk untuk mendiamkan sepeda sebelum dibilas kembali pada kemasannya atau bagian belakang tutup botol. Setelah itu mulai gosok sepeda dengan tidak terlalu kasar dan dapat menggunakan beberapa peralatan lainnya seperti sikat yang tidak terlalu kasar, dll. Diharapkan untuk tidak mengganti produk pembersih maupun sikat dan beberapa alat yang lainnya dengan spons yang digunakan untuk mencuci piring yang biasa digunakan di dapur. Hal tersebut akan menyebabkan sebuah goresan hingga dapat membuat warna pada sepeda menjadi pudar.&nbsp;</p><p>&nbsp;</p><p>Kedua, bersihkan bantalan rem dan pelek ada sepeda tersebut. Jangan asal menggosok dengan kasar dan cepat, diharapkan untuk membersihkan dengan cermat dan memastikan kotoran yang ada sudah terlepas dari sepeda tersebut. Hal ini tentu diperlukan untuk membuat rem bekerja dengan optimal dan tidak menyebabkan bahaya pada saat dipakai ( kotoran pada bantalan rem dapat menyebabkan pengikisan permukaan pengereman dan tentu akan membuat dampak yang negatif jika tidak dibersihkan secara optimal dan juga berkala.&nbsp;</p><p>&nbsp;</p><p>Ketiga, gunakan degreaser pada derailleur dan roda rantai pada sepeda. Degreaser merupakan sebuah bahan kimia yang memiliki fungsi untuk membersihkan sisa sisa kotoran yang membandel pada lantai maupun peralatan industri. Dalam kaitannya dengan sepeda, Degreaser dapat digunakan untuk membersihkan kotoran oli sepeda kita. Hal tersebut dapat dilakukan karena Degreaser mengandung sebuah detergen non ionic yang bersifat water based yang tentunya mampu bersatu atau menghilangkan kotoran berminyak yang membandel. Selain itu Degreaser ini memliki sifat dapat terurai oleh bakteri dan tidak mudah terbakar, sehingga tentu tidak menimbulkan sebuah pencemaran lingkungan yang berlebih dibanding produk sejenisnya.</p><p>&nbsp;</p><p>Keempat, selain menggunakan Degreaser pada derailleur dan roda rantai, gunakan degreaser pada cassete dan rantai sepeda. Gunakanlah sikat gigi bekas untuk menggosok rantai dan tentu akan membantu untuk membersihkan cassete pada sebuah sepeda. Jika sekiranya masih terdapat sebuah kotoran atau terlihat kotor pada rantai sepeda, gunakan pembersih rantai atau dapat menggunakan degreaser kembali. Cukup dengan memberi degreaser pada rantai sepeda, lalu kayuh dengan pedal untuk membuat semua rantai sepeda dibaluri oleh degreaser tersebut.&nbsp;</p><p>&nbsp;</p><p>Kelima atau terakhir adalah dengan membilas rangka sepeda tersebut. Setelah membilas rangka tersebut, segera keringkan dan jangan lupa untuk melumasi rantai sepeda kembali untuk tidak kering dan dapat bergerak dengan baik.&nbsp;</p><p>&nbsp;</p><p>Berikut adalah beberapa langkah yang simpel dan dapat dilakukan di rumah untuk mencuci sepeda. Sepeda memang merupakan transportasi yang menyenangkan. Namun, dibalik itu semua tentu kita harus menjaga sepeda kita untuk tetap awet dan tahan lama. Apabila dapat digunakan dengan tahan lama tentu kita sendirilah yang akan senang dan puas terhadap performa sepeda tersebut.</p>', 'Tips-Membersihkan-Sepeda', 'roadbike.jpg', '2020-12-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `nama`) VALUES
(1, 'Balita'),
(2, 'Anak'),
(3, 'Dewasa'),
(6, 'Listrik'),
(7, 'lipat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id`, `nama`, `harga`) VALUES
(1, 'JNE', 100000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `no_bank` int(11) NOT NULL,
  `nama_bank` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id`, `bank`, `no_bank`, `nama_bank`) VALUES
(2, 'BCA', 2147483647, 'Stefanus Deo Regy Laksono'),
(3, 'CIMB', 2147483647, 'Fauzi Achmad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `kode_pesan` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_pesanan` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `namarek` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `is_acc` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `warna` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `list_popular` int(1) DEFAULT NULL,
  `diskon` int(1) DEFAULT NULL,
  `harga_diskon` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `slug`, `category`, `subcategory`, `deskripsi`, `warna`, `merk`, `stok`, `harga`, `list_popular`, `diskon`, `harga_diskon`, `gambar`) VALUES
(17, 'Baby walker 136L', 'Baby-walker-136L', 'Balita', '', '', 'Pink', 'Family', 5, 500000, 1, 1, 250000, '136L.png'),
(18, 'Baby walker 1817', 'Baby-walker-1817', 'Balita', '', '', 'Biru', 'Family', 5, 50000, NULL, NULL, 0, '1817.png'),
(19, 'Baby walker 2115', 'Baby-walker-2115', 'Balita', '', '', 'Blue', 'Family', 5, 50000, NULL, NULL, 0, '2115.png'),
(20, 'Stroller 5012', 'Stroller-5012', 'Balita', '', '', 'Abu', 'Space Baby', 5, 300000, 1, NULL, 0, 'sb5012.png'),
(21, 'Batman Size 12', 'Batman-Size-12', 'Anak', '', '', 'Abu Yellow', 'Pasific', 5, 300000, NULL, NULL, 0, 'batman12.png'),
(22, 'Batman Size 16', 'Batman-Size-16', 'Anak', '', '', 'Abu Yellow', 'Pasific', 1, 500000, 1, NULL, 0, 'batman16.png'),
(23, 'Batman Size 18', 'Batman-Size-18', 'Anak', '', '', 'Abu Yellow', 'Pasific', 5, 500000, NULL, NULL, 0, 'batman18.png'),
(24, 'Transformer Size 12', 'Transformer-Size-12', 'Anak', '', '', 'Kuning', 'Pasific', 1, 500000, 1, NULL, 0, 'bumblebee12.png'),
(25, 'Transformer Size 16', 'Transformer-Size-16', 'Anak', '', '', 'Kuning', 'Pasific', 3, 600000, NULL, NULL, 0, 'bumblebee16.png'),
(26, 'Transformer Size 18', 'Transformer-Size-18', 'Anak', '', '', 'Kuning', 'Pasific', 3, 700000, NULL, NULL, 0, 'bumblebee18.png'),
(27, 'Flux 70 Sepeda Lipat', 'Flux-70-Sepeda-Lipat', 'Dewasa', 'City Bike', '', 'Hitam', 'Pasific', 5, 1000000, 1, NULL, 0, 'flux70.png'),
(28, 'Splendid 300 sepeda lipat', 'Splendid-300-sepeda-lipat', 'Dewasa', 'City Bike', '', 'Hitam', 'Pasific', 3, 3000000, 1, NULL, 0, 'splendid300.png'),
(29, 'Nigma Sepeda lipat', 'Nigma-Sepeda-lipat', 'Dewasa', 'City Bike', '', 'Hitam', 'United', 2, 5000000, NULL, NULL, 0, 'nigma.png'),
(30, 'Detroit 1.0', 'Detroit-10', 'Dewasa', 'MTB', '', 'Hitam', 'United', 3, 10000000, 1, NULL, 0, 'detroit_10.png'),
(31, 'Detroit 2.0', 'Detroit-20', 'Dewasa', 'MTB', '', 'Hitam', 'United', 3, 13000000, NULL, NULL, 0, 'detroit_20.png'),
(32, 'Sepeda Gunung Fastron', 'Sepeda-Gunung-Fastron', 'Dewasa', 'MTB', '', 'Hitam Biru', 'Fastron', 2, 15000000, NULL, NULL, 0, 'fastron.png'),
(33, 'Exotik 2689', 'Exotik-2689', 'Dewasa', 'MTB', '', 'Hitam Orange', 'Exotik', 3, 18000000, 1, NULL, 0, 'exotic2689.png'),
(34, 'Sepeda Listrik Selis Murai', 'Sepeda-Listrik-Selis-Murai', 'Listrik', '', '', 'Merah', 'Selis Murai', 1, 15000000, NULL, NULL, 0, 'selismurai.png'),
(35, 'Sepeda Listrik Hornet', 'Sepeda-Listrik-Hornet', 'Listrik', '', '', 'Hitam', 'Hornet', 1, 15000000, NULL, NULL, 0, 'hornet.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slug`
--

CREATE TABLE `slug` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slug`
--

INSERT INTO `slug` (`id`, `nama`, `category`) VALUES
(6, 'City Bike', 'Dewasa'),
(7, 'MTB', 'Dewasa'),
(9, 'sfs', 'lipat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role_id`) VALUES
(2, 'fauzi.scorpio78@gmail.com', '$2y$10$Zf9rE7/lpL9oHvJE5.xcduApSbVvty./7nBdlH5V9i/Lo9uVFamhC', 2),
(3, 'hoppascreative@gmail.com', '$2y$10$vU2cnGPybJMCHUz0GelVWemSRZPUBMHBx3v/y0/j4D32zrwyr2/x.', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `slug`
--
ALTER TABLE `slug`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `slug`
--
ALTER TABLE `slug`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
