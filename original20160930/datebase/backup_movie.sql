-- MySQL dump 10.11
--
-- Host: localhost    Database: iw32movie
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `janrus`
--

DROP TABLE IF EXISTS `janrus`;
CREATE TABLE `janrus` (
  `janru_id` int(11) NOT NULL auto_increment,
  `janru_name` varchar(20) default NULL,
  PRIMARY KEY  (`janru_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `janrus`
--

LOCK TABLES `janrus` WRITE;
/*!40000 ALTER TABLE `janrus` DISABLE KEYS */;
INSERT INTO `janrus` VALUES (1,'アクション'),(2,'SF'),(3,'コメディ'),(4,'サスペンス'),(5,'時代劇'),(6,'ドラマ'),(7,'スリラー'),(8,'青春'),(9,'恋愛'),(10,'音楽'),(11,'スポーツ');
/*!40000 ALTER TABLE `janrus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL auto_increment,
  `janru_id01` int(11) NOT NULL,
  `janru_id02` int(11) default NULL,
  `movie_name` varchar(100) default NULL,
  `start_day` varchar(8) default NULL,
  `end_day` varchar(8) default NULL,
  `text` varchar(600) default NULL,
  `director_name` varchar(20) default NULL,
  `cast_names` varchar(150) default NULL,
  `movie_time` varchar(10) default NULL,
  `sold` varchar(100) default NULL,
  PRIMARY KEY  (`movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,1,6,'世界から猫が消えたなら','20160514','20160714','主人公は30歳の郵便配達員。愛猫キャベツとふたりぐらし。母を病気で亡くしてから、実家の父とは疎遠になってしまいました。恋人はいません。別れてしまった彼女のことを、まだ想い続けています。趣味は映画観賞。友だちは映画マニアの親友が一人だけ。そんな彼が、ある日突然、余命わずかの宣告を受けてしまいます。脳に悪性の腫瘍ができていたのです。ショックで呆然とする彼の前に、とつぜん、自分と同じ姿をした悪魔が現れて言いました。「世界から何かひとつ、ものを消すことで、1日の命をあげよう」・・・。悪魔のささやきに乗せられた主人公は、次々とものを消していきます。電話、映画、時計、そして、猫。ところが、何かを消すと、大切な人たちとの思い出も一緒に消えてしまうことになり・・・。','永井聡 ','佐藤健、宮崎あおい、濱田岳 ','103','0'),(2,1,1,'HK/変態仮面 アブノーマル・クライシス','20160514','20160714','パンティが消えるニュースが連日メディアを賑わせている中、狂介は相変わらず愛子のパンティを被って悪を倒していた。複雑な想いを抱く愛子はパンティを返してもらうが、徐々に二人の心はすれ違い始める。気づかぬうちに愛子を傷つける狂介の事を、同級生の真琴正が憎しみに満ちた目で見つめていた。愛子を失い、さらに世界中からパンティが消えるという未曾有の危機を迎えた変態仮面の前に、史上最強の敵が現れる。 アブノーマル・クライシス 全てのパンティと一緒に変態仮面は消えるのか・・・。','福田雄一','鈴木亮平、清水富美加、柳楽優弥','117','0'),(4,3,6,'殿、利息でござる！','20160507','20160707','庶民 VS お上！ 破産寸前、絶体絶命の大ピンチ。必要なのは3億円！？ビンボー庶民が、殿を相手に一世一代の大勝負！一発逆転！ 身の程知らずな男たちが、お上相手に立ち向かう！ 藩の重い年貢により、夜逃げが相次ぐ宿場町・吉岡宿に住む十三郎は、知恵者の篤平治から町を救う計画を聞く。それは藩に大金を貸付け、利息を巻き上げる「庶民がお上から年貢を取り戻す」逆転の発想だった！ \"知恵\"と\"勇気\"と\"我慢\"の銭戦が、今、はじまる―。','中村義洋','阿部サダヲ、瑛太、妻夫木聡','129','0'),(5,1,3,'ヒーローマニア-生活-','20160507','20160707','ここはさびれた地方都市・堂堂市。リサイクル店の中古テレビに映し出されるニュースは環境汚染、貧困、テロなど暗いものばかり。そんな街で、中津はコンビニでバイトをしながら生活していた。バイト中、中津はチンピラに絡まれお金を巻き上げられてしまうが、チンピラが店を出た途端にその姿が消え、道端で倒れているのを発見する。 傍にいたのは、赤いニット帽の青年、土志田だった。土志田の後を追う中津は、彼が袖口のガジェットからワイヤを放ち、女性の下着を盗むところを目撃。下着泥棒はともかく、チンピラをやっつけた強さに惹かれた中津は「俺と一緒に戦わないか？」と声をかけ、\"ヒーロー\"になろうと持ちかける・・・。','豊島圭介','東出昌大、窪田正孝、小松菜奈、片岡鶴太郎 ','109','0'),(6,4,6,'64-ロクヨン-前編-','20160507','20160707','わずか7日間で幕を閉じた、昭和64年。 その間に起きた少女誘拐殺人事件、通称「ロクヨン」。 未解決のまま時は過ぎ、時効まで1年と迫ったある日、「ロクヨン」を模した誘拐事件が発生する―。','瀬々敬久','佐藤浩市、綾野剛、榮倉奈々 ','121','0'),(7,4,6,'64-ロクヨン-後編-','20160611','20160811','わずか7日間で幕を閉じた、昭和64年。 その間に起きた少女誘拐殺人事件、通称「ロクヨン」。 未解決のまま時は過ぎ、時効まで1年と迫ったある日、「ロクヨン」を模した誘拐事件が発生する―。','瀬々敬久','佐藤浩市、綾野剛、榮倉奈々 ','119','0'),(8,3,4,'スキャナー 記憶のカケラをよむ男','20160429','20160629','[モノに宿る\"想い\"を読み取る]能力を使った人探し。 それは、あまりに切ない事件の幕開けだった・・・。','金子修介','野村萬斎、宮迫博之、風間杜夫','109','0'),(9,6,8,'ちはやふる -上の句-','20160319','20160519','舞台はいよいよ全国大会へ―-。 新に都大会優勝を報告する千早に、思わぬ新の告白「俺、かるたはもうやらん・・・」。ショックを受ける千早だが、全国大会へ向けて仲間たちと懸命に練習に励む。そんな中、千早は、同級生ながら最強のクイーンと呼ばれる若宮詩暢の存在を知る。全国大会の個人戦で詩暢と対決する可能性がある。新に会って「強くなったな」って言われたい、詩暢に勝てばもう一度新とかるたを取れるかもしれない…！「クイーンに勝ちたい。」千早の気持ちは次第に詩暢にとらわれ、\"競技かるた部\"の仲間たちから離れていってしまう。そして、そんな千早の目を覚まさせようとする太一。千早、太一、新の気持ちが少しずつバラバラになっていく・・・。 果たして、全国大会の行方は？今、泣きたくなるほど熱いクライマックスの、幕が上がるー！！！','小泉徳宏','広瀬すず、野村周平、真剣佑 ','111','0'),(10,6,8,'ちはやふる -下の句-','20160429','20160629','舞台はいよいよ全国大会へ―-。 新に都大会優勝を報告する千早に、思わぬ新の告白「俺、かるたはもうやらん・・・」。ショックを受ける千早だが、全国大会へ向けて仲間たちと懸命に練習に励む。そんな中、千早は、同級生ながら最強のクイーンと呼ばれる若宮詩暢の存在を知る。全国大会の個人戦で詩暢と対決する可能性がある。新に会って「強くなったな」って言われたい、詩暢に勝てばもう一度新とかるたを取れるかもしれない…！「クイーンに勝ちたい。」千早の気持ちは次第に詩暢にとらわれ、\"競技かるた部\"の仲間たちから離れていってしまう。そして、そんな千早の目を覚まさせようとする太一。千早、太一、新の気持ちが少しずつバラバラになっていく・・・。 果たして、全国大会の行方は？今、泣きたくなるほど熱いクライマックスの、幕が上がるー！！！','小泉徳宏','広瀬すず、野村周平、真剣佑 ','102','0'),(11,3,9,'オオカミ少女と黒王子','20160528','20160728','高校に入学したばかりの篠原エリカは恋愛経験ゼロなのに彼氏とのラブ話を語る\"オオカミ少女\"。恋愛経験豊富な友達にその存在を疑われ、街で見かけたイケメンを盗撮し、自分の彼氏として写真を見せて、その場をしのごうとする。ところが、その彼は同じ学校に通う、学校イチのイケメン\"王子\"佐田恭也だった！ 事情を打ち明けると、彼氏のフリをしてくれることになった恭也。しかし、彼が出した条件はエリカの\"絶対服従\"。ドSな恭也にふりまわされるうちに、ウソから始まった2人の関係が発展して・・・？','廣木隆一','二階堂ふみ、山崎賢人、鈴木伸之','116','0'),(12,3,4,'ヒメアノ〜ル','20160528','20160728','「なにも起こらない日々」に焦りを感じながら、ビル清掃会社のパートタイマーとして働く岡田。同僚の安藤に、想いを寄せるユカとの恋のキューピット役を頼まれ、ユカが働くカフェに向かうと、そこで高校時代の同級生・森田正一と出会う。 ユカから、森田にストーキングされていると知らされた岡田は、高校時代、過酷ないじめを受けていた森田に対して、不穏な気持ちを抱くが・・・。岡田とユカ、そして友人の安藤らの恋や性に悩む平凡な日常。ユカをつけ狙い、次々と殺人を重ねるサイコキラー森田正一の絶望。今、2つの物語が危険に交錯する。','吉田恵輔','森田剛、濱田岳、佐津川愛美','99','0'),(13,1,3,'デッドプール','20160601','20160801','元特殊部隊の隊員から傭兵に転身した男ウェイド・ウイルソンは、突然末期ガンを宣告され、悲惨な人体実験の被験者となったために、驚異的な治癒能力を手に入れる。デッドプールと名乗った彼は、自分を死なせかけた男を追跡し始める──。','ティム・ミラー','ライアン・レイノルズ、モリーナ・バッカリン、エド・スクライン','108','0'),(14,1,NULL,'テスト１','20160601','20160801','元特殊部隊の隊員から傭兵に転身した男ウェイド・ウイルソンは、突然末期ガンを宣告され、悲惨な人体実験の被験者となったために、驚異的な治癒能力を手に入れる。デッドプールと名乗った彼は、自分を死なせかけた男を追跡し始める──。','ティム・ミラー','ライアン・レイノルズ、モリーナ・バッカリン、エド・スクライン','108','10'),(15,1,NULL,'テスト２','20160601','20160801','元特殊部隊の隊員から傭兵に転身した男ウェイド・ウイルソンは、突然末期ガンを宣告され、悲惨な人体実験の被験者となったために、驚異的な治癒能力を手に入れる。デッドプールと名乗った彼は、自分を死なせかけた男を追跡し始める──。','ティム・ミラー','ライアン・レイノルズ、モリーナ・バッカリン、エド・スクライン','108','100'),(16,1,NULL,'テスト３','20160601','20160801','元特殊部隊の隊員から傭兵に転身した男ウェイド・ウイルソンは、突然末期ガンを宣告され、悲惨な人体実験の被験者となったために、驚異的な治癒能力を手に入れる。デッドプールと名乗った彼は、自分を死なせかけた男を追跡し始める──。','ティム・ミラー','ライアン・レイノルズ、モリーナ・バッカリン、エド・スクライン','108','1000');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prefectures`
--

DROP TABLE IF EXISTS `prefectures`;
CREATE TABLE `prefectures` (
  `prefecture_id` int(11) NOT NULL auto_increment,
  `prefecture_name` varchar(10) default NULL,
  PRIMARY KEY  (`prefecture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prefectures`
--

LOCK TABLES `prefectures` WRITE;
/*!40000 ALTER TABLE `prefectures` DISABLE KEYS */;
INSERT INTO `prefectures` VALUES (1,'北海道'),(2,'青森県'),(3,'岩手県'),(4,'宮城県'),(5,'秋田県'),(6,'山形県'),(7,'福島県'),(8,'茨城県'),(9,'栃木県'),(10,'群馬県'),(11,'埼玉県'),(12,'千葉県'),(13,'東京都'),(14,'神奈川県'),(15,'新潟県'),(16,'富山県'),(17,'石川県'),(18,'福井県'),(19,'山梨県'),(20,'長野県'),(21,'岐阜県'),(22,'静岡県'),(23,'愛知県'),(24,'三重県'),(25,'滋賀県'),(26,'京都府'),(27,'大阪府'),(28,'兵庫県'),(29,'奈良県'),(30,'和歌山県'),(31,'鳥取県'),(32,'島根県'),(33,'岡山県'),(34,'広島県'),(35,'山口県'),(36,'徳島県'),(37,'香川県'),(38,'愛媛県'),(39,'高知県'),(40,'福岡県'),(41,'佐賀県'),(42,'長崎県'),(43,'熊本県'),(44,'大分県'),(45,'宮城県'),(46,'鹿児島県'),(47,'沖縄県');
/*!40000 ALTER TABLE `prefectures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rights`
--

DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `rights_id` int(11) NOT NULL auto_increment,
  `rights_name` varchar(3) default NULL,
  PRIMARY KEY  (`rights_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rights`
--

LOCK TABLES `rights` WRITE;
/*!40000 ALTER TABLE `rights` DISABLE KEYS */;
INSERT INTO `rights` VALUES (1,'管理者'),(2,'ユーザ');
/*!40000 ALTER TABLE `rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scrieens`
--

DROP TABLE IF EXISTS `scrieens`;
CREATE TABLE `scrieens` (
  `scrieen_id` int(11) NOT NULL default '0',
  `thrater_id` int(11) NOT NULL default '0',
  `scrieen_name` varchar(20) default NULL,
  PRIMARY KEY  (`scrieen_id`,`thrater_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scrieens`
--

LOCK TABLES `scrieens` WRITE;
/*!40000 ALTER TABLE `scrieens` DISABLE KEYS */;
INSERT INTO `scrieens` VALUES (1,1,'スクリーン1'),(1,2,'スクリーン1'),(1,3,'スクリーン1'),(2,1,'スクリーン2'),(2,2,'スクリーン2'),(2,3,'スクリーン2'),(3,1,'スクリーン3'),(3,2,'スクリーン3'),(3,3,'スクリーン3'),(4,1,'スクリーン4'),(4,2,'スクリーン4'),(4,3,'スクリーン4'),(5,1,'スクリーン5'),(5,2,'スクリーン5'),(5,3,'スクリーン5'),(6,1,'スクリーン6'),(6,2,'スクリーン6'),(6,3,'スクリーン6'),(7,1,'スクリーン7'),(7,2,'スクリーン7'),(7,3,'スクリーン7'),(8,1,'スクリーン8'),(8,2,'スクリーン8'),(8,3,'スクリーン8'),(9,1,'スクリーン9'),(9,2,'スクリーン9'),(9,3,'スクリーン9'),(10,1,'スクリーン10'),(10,2,'スクリーン10'),(10,3,'スクリーン10');
/*!40000 ALTER TABLE `scrieens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL auto_increment,
  `seat_name` varchar(10) default NULL,
  PRIMARY KEY  (`seat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seats`
--

LOCK TABLES `seats` WRITE;
/*!40000 ALTER TABLE `seats` DISABLE KEYS */;
/*!40000 ALTER TABLE `seats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sexs`
--

DROP TABLE IF EXISTS `sexs`;
CREATE TABLE `sexs` (
  `sex_id` int(11) NOT NULL auto_increment,
  `sex_name` varchar(5) default NULL,
  PRIMARY KEY  (`sex_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sexs`
--

LOCK TABLES `sexs` WRITE;
/*!40000 ALTER TABLE `sexs` DISABLE KEYS */;
INSERT INTO `sexs` VALUES (1,'男'),(2,'女');
/*!40000 ALTER TABLE `sexs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shows`
--

DROP TABLE IF EXISTS `shows`;
CREATE TABLE `shows` (
  `show_id` bigint(20) default NULL,
  `movie_id` int(11) default NULL,
  `scrieen_id` int(11) default NULL,
  `thrater_id` int(11) default NULL,
  `showstart_id` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shows`
--

LOCK TABLES `shows` WRITE;
/*!40000 ALTER TABLE `shows` DISABLE KEYS */;
INSERT INTO `shows` VALUES (201606010930,1,1,1,1),(201606011230,1,1,1,4),(201606011630,1,1,1,8),(201606012030,1,1,1,12),(201606011130,2,6,1,3),(201606011430,3,4,1,6),(201606011730,4,3,1,9),(201606012130,5,8,1,13);
/*!40000 ALTER TABLE `shows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `showseats`
--

DROP TABLE IF EXISTS `showseats`;
CREATE TABLE `showseats` (
  `seat_id` int(11) NOT NULL default '0',
  `movie_id` int(11) NOT NULL default '0',
  `show_id` bigint(20) NOT NULL default '0',
  `yoyaku` varchar(1) default NULL,
  PRIMARY KEY  (`seat_id`,`movie_id`,`show_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `showseats`
--

LOCK TABLES `showseats` WRITE;
/*!40000 ALTER TABLE `showseats` DISABLE KEYS */;
INSERT INTO `showseats` VALUES (1,1,201606010930,'0'),(2,1,201606010930,'0'),(3,1,201606010930,'0'),(4,1,201606010930,'0'),(5,1,201606010930,'0'),(6,1,201606010930,'0'),(7,1,201606010930,'0'),(8,1,201606010930,'0'),(9,1,201606010930,'0'),(10,1,201606010930,'0'),(11,1,201606010930,'0'),(12,1,201606010930,'0'),(13,1,201606010930,'0'),(14,1,201606010930,'0'),(15,1,201606010930,'0'),(16,1,201606010930,'0'),(17,1,201606010930,'0'),(18,1,201606010930,'0'),(19,1,201606010930,'0'),(20,1,201606010930,'0'),(21,1,201606010930,'0'),(22,1,201606010930,'0'),(23,1,201606010930,'0'),(24,1,201606010930,'0'),(25,1,201606010930,'0'),(26,1,201606010930,'0'),(27,1,201606010930,'0'),(28,1,201606010930,'0'),(29,1,201606010930,'0'),(30,1,201606010930,'0'),(31,1,201606010930,'0'),(32,1,201606010930,'0'),(33,1,201606010930,'0'),(34,1,201606010930,'0'),(35,1,201606010930,'0'),(36,1,201606010930,'0'),(37,1,201606010930,'0'),(38,1,201606010930,'0'),(39,1,201606010930,'0'),(40,1,201606010930,'0'),(41,1,201606010930,'0'),(42,1,201606010930,'0'),(43,1,201606010930,'0'),(44,1,201606010930,'0'),(45,1,201606010930,'0'),(46,1,201606010930,'0'),(47,1,201606010930,'0'),(48,1,201606010930,'0'),(49,1,201606010930,'0'),(50,1,201606010930,'0'),(51,1,201606010930,'0'),(52,1,201606010930,'0'),(53,1,201606010930,'0'),(54,1,201606010930,'0'),(55,1,201606010930,'0'),(56,1,201606010930,'0'),(57,1,201606010930,'0'),(58,1,201606010930,'0'),(59,1,201606010930,'0'),(60,1,201606010930,'0'),(61,1,201606010930,'0'),(62,1,201606010930,'0'),(63,1,201606010930,'0'),(64,1,201606010930,'0'),(65,1,201606010930,'0'),(66,1,201606010930,'0'),(67,1,201606010930,'0'),(68,1,201606010930,'0'),(69,1,201606010930,'0'),(70,1,201606010930,'0'),(71,1,201606010930,'0'),(72,1,201606010930,'0'),(73,1,201606010930,'0'),(74,1,201606010930,'0'),(75,1,201606010930,'0'),(76,1,201606010930,'0'),(77,1,201606010930,'0'),(78,1,201606010930,'0'),(79,1,201606010930,'0'),(80,1,201606010930,'0'),(81,1,201606010930,'0'),(82,1,201606010930,'0'),(83,1,201606010930,'0'),(84,1,201606010930,'0'),(85,1,201606010930,'0'),(86,1,201606010930,'0'),(87,1,201606010930,'0'),(88,1,201606010930,'0'),(89,1,201606010930,'0'),(90,1,201606010930,'0'),(91,1,201606010930,'0'),(92,1,201606010930,'0'),(93,1,201606010930,'0'),(94,1,201606010930,'0'),(95,1,201606010930,'0'),(96,1,201606010930,'0'),(97,1,201606010930,'0'),(98,1,201606010930,'0'),(99,1,201606010930,'0'),(100,1,201606010930,'0');
/*!40000 ALTER TABLE `showseats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `showstarts`
--

DROP TABLE IF EXISTS `showstarts`;
CREATE TABLE `showstarts` (
  `showstart_id` int(11) NOT NULL auto_increment,
  `showstart_time` varchar(10) default NULL,
  PRIMARY KEY  (`showstart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `showstarts`
--

LOCK TABLES `showstarts` WRITE;
/*!40000 ALTER TABLE `showstarts` DISABLE KEYS */;
INSERT INTO `showstarts` VALUES (1,'930'),(2,'1030'),(3,'1130'),(4,'1230'),(5,'1330'),(6,'1430'),(7,'1530'),(8,'1630'),(9,'1730'),(10,'1830'),(11,'1930'),(12,'2030'),(13,'2130');
/*!40000 ALTER TABLE `showstarts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `thraters`
--

DROP TABLE IF EXISTS `thraters`;
CREATE TABLE `thraters` (
  `thrater_id` int(11) NOT NULL auto_increment,
  `thrater_name` varchar(10) default NULL,
  PRIMARY KEY  (`thrater_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thraters`
--

LOCK TABLES `thraters` WRITE;
/*!40000 ALTER TABLE `thraters` DISABLE KEYS */;
INSERT INTO `thraters` VALUES (1,'東京'),(2,'名古屋'),(3,'大阪');
/*!40000 ALTER TABLE `thraters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(100) default NULL,
  `sex_id` int(11) default NULL,
  `prefecture_id` int(11) default NULL,
  `telephone` varchar(13) default NULL,
  `old` varchar(8) default NULL,
  `mail_add` varchar(100) default NULL,
  `pass` varchar(16) default NULL,
  `rights_id` int(11) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'IW32班管理者',1,23,'052-303-4356','19930423','mailaddress@gmail.com','password',1),(2,'青山拓人',1,35,'052-394-3457','19910523','taku00523@gmail.com','takuto555',2),(3,'市川進',1,3,'052-742-5567','19780704','4356susumu@gmail.com','webproming3456',2),(4,'柳楓',NULL,NULL,'080-3034-4216',NULL,'meeeepuru7777@gmail.com','pass34567',2),(5,'大橋まい',2,22,'090-3043-2256','19961010','maimaime@gmail.com','tukurimasu34',2),(6,'西岡裕也',1,45,'052-645-9643','19631225','tanoh27s43da2fj@ezweb.ne.jp','964213www',2),(7,'加藤慎太郎',1,25,'052-234-7511','19720109','njyro2agh22@docomo.co.jp','4567ttre',2),(8,'福岡諒',1,38,'052-009-0095','19850923','addadd4567@gmail.com','momoko1225',2),(9,'岡山あずさ',2,32,'052-123-4567','19870611','uverworld2000@ezweb.ne.jp','sleeping0000',2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `waribikis`
--

DROP TABLE IF EXISTS `waribikis`;
CREATE TABLE `waribikis` (
  `waribiki_id` int(11) NOT NULL auto_increment,
  `waribiki_neme` varchar(20) default NULL,
  `waribiki_price` varchar(5) default NULL,
  PRIMARY KEY  (`waribiki_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waribikis`
--

LOCK TABLES `waribikis` WRITE;
/*!40000 ALTER TABLE `waribikis` DISABLE KEYS */;
INSERT INTO `waribikis` VALUES (1,'子供割','500'),(2,'ファースト割','700'),(3,'ナイト割','500'),(4,'レディース割','700'),(5,'シニア割','700'),(6,'障がい者手帳割','800'),(7,'HAL学生割','1000');
/*!40000 ALTER TABLE `waribikis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yoyakus`
--

DROP TABLE IF EXISTS `yoyakus`;
CREATE TABLE `yoyakus` (
  `yoyaku_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  `seat_id` int(11) default NULL,
  `show_id` int(11) NOT NULL default '0',
  `waribiki_id` int(11) default NULL,
  PRIMARY KEY  (`show_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `yoyakus`
--

LOCK TABLES `yoyakus` WRITE;
/*!40000 ALTER TABLE `yoyakus` DISABLE KEYS */;
/*!40000 ALTER TABLE `yoyakus` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-16 18:30:15
