-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 07:36 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE IF NOT EXISTS `administration` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `address`, `name`, `qualification`, `description`) VALUES
(1, 'photos/nagraj.jpg', 'nagaraju', 'phd', 'director'),
(2, 'photos/CPJ.jpg', 'cpjoglekar', 'mtech', 'registar'),
(4, 'photos/nigam.jpg', 'nigam raval', 'mtech', 'clerk');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `hashed_password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `hashed_password`) VALUES
(1, 'hussain', 'secret'),
(5, 'mah', 'password'),
(6, 'mulla', 'confir'),
(7, 'pabba', 'sai'),
(8, 'ajit', 'oy'),
(9, 'id', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `directmess`
--

CREATE TABLE IF NOT EXISTS `directmess` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directmess`
--

INSERT INTO `directmess` (`id`, `name`) VALUES
(1, 'Dr. R Nagaraj\nDirector DA-IICT,\nMentor Director, IIITV\n\nDr. R Nagaraj obtained his PhD from Visvesvaraya Technological University in the field of Fault Tolerant Flight Controllers using Artificial Neural Network (ANN). His areas of interest include fault tolerant control, Non linear control systems, neural networks and reconfigurable control systems.\n\nDr. Nagaraj has twenty five years of experience in research, teaching and academic administration.\n\nPrior to joining DA-IICT, he was the Principal of The Oxford College of Engineering; Bangalore where he held positions of Vice-Principal, Professor and Head of the Department of Electronics & Communication Engineering.\n\nHe was the national merit scholar and received academic excellence award from RSST and mentorship award from RV VLSI Design Center, Bangalore.\n\nDr. Nagaraj is IEEE Senior Member, Life Member of Institution of Electronics & Telecommunication Engineers, and Indian Society for Technical Education and Computer Society of India.\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `image`, `name`, `qualification`, `description`) VALUES
(1, 0xffd8ffe000104a4649460001010100c800c80000ffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc20011080064007803011100021101031101ffc4001c0000020301010101000000000000000000050603040702010008ffc40014010100000000000000000000000000000000ffda000c03010002100310000001562521298a6082e06877253d299c9e9f1681c0e3372b16038083d358273c299211940ecccc187c3297000441f1fce08c98f8ae0114c84e0ddcd3458031f9fcd28e0b47a767c289506c1c06c34e154583000b17cec8c989c06513761c0683933c1201c01390802cf02255041b5950b2742217c613220d131e1c95c1c101e0a43b8688462114c1c581cce4f0347c426ac68a09170541d858308021fa10b27667658201c078079003ca600314231fc2e09184aa7a5d19c2a593d059850a85d0f9c118fa465c1acc90ac6b21531b128a635170b2783f908ea65e28808141325049e1a012958e8fffc40023100002020202030100030100000000000002030104000512130611142122232432ffda0008010100010502857b829cee184bacc5653b712c81b8d6e0ec2d0cd6dddd4156bc16b39f09ec932e99c58fe90ff2999039b41f3917117d952537361370c16059d301889e90b0e16151d81d0b4cb63673bbd8f28c299c9224afb794c2cfd9b245776d130ff3d7bfda9566d0200b2c56312e83f5a3bb226b318c2fc819f63d92c92f423cf865f29fa1b533e02e3358827c1b48b6d76e8eb0267588ebb1ac40d6bdfe6b8af6680648cadec9c9211c64f33688a59b289ae69ff466a691596ee74c0d1f16d35aa596d7dcb6ae071ebfcf25d4cd566ac1814a78948c440ba323fb1649908ddabbe978d23e99d5d38408510b014eb0d34bd8b08d86faa899edde45b057dd52b872a8073308aa5d4c986e0aa2318ee78b3fcf125fcfb13be14c1fe61f18d0f2c8beff0024fabad5a501556d17d1676552135ed91ebec43601637097922a2c908f5d5c1311c5d4971f7d9aad72ea69d6591ad3583d1f4ebb5e41c788c06d4e33c99c494522ef256b2e0812ed2e3bac7193e62e708e56b13599a93e6badc386c1abf6bf22a69451dad9db586dae9cb07c99e57620db40a5372ab7f884f6104011f54ce4d723c093cd4db2325ec78afee5f0f5afb0162ec2175aad980dbed2032db3e9b2964c353e4565411e46d3c3dfda75b2700adaf2f51d925164858bbd058a1ad609235f5d2dbacbd1b499d7d4da6c21b25ef8a97d8e1571c614c4545c89088b244302bb887554a6bd6f22be457aa795babe69bcd299aac79cd45e6ffc89bb630196cb0ffb29abe7571961718c5972c918eb5ffa1ce3f910fbcf765c58c1b163385fd64a39cb1f812f381447b68c67afd74fa5a3fe3fffc40014110100000000000000000000000000000070ffda0008010301013f0143ffc40014110100000000000000000000000000000070ffda0008010201013f0143ffc4002e100001030204050304020300000000000001000211122103314151041322326142527110238191628233a1b1ffda0008010100063f02b2036d51d71364ec47c226a8d9a1449fdaa5ae70fca35b862b4e61c8d0293b287031ed5190ff0089d7a91aac98e2e81e1100a6320543540ef64f716d82f6b3daba9d0ac4a25c7f0ba0a0ff0047a82e7b3b0e50a67c59774a3710986254954b539d9da11664d59a08c77009e1ecfda98fd29a53b872601b895054b4b5f39f8595b3c953937ca31f943ca386264e69c54808073613b14993942a9d8413a3082739ac5533755224b6405548136b6cad882e8dea0066b386bb4d93388f7dae80cd024748298e608742188d7743b4549fa387a4ae736ec71c961d6ed325791bc23e344eab2cd0157ca87f53f294f372ec3563d49cd8b4a01c1060360a4bd72d879989ed6a356086b744f91f099a4669d1dbee2b9e44b5b72897e44e88b3209b034b2c5a4cb9d685c4613bb9a855fa4270489430e1c27709adc2777eabaf89c4c3e20f74041ec6bf96332e50173419e1df670f284c3411608100f2d17b32d3c207fb4a970895f3ea0b0f1d83ae21d1b2ab0bbb74c763603f89e246a5733169188fd864b7a552f027c85a2a1503d460ac36dcb9e2d75d2d31add5dae1f8576dbe17dc25d1ba6dbfaa0f6b6f90426c76286415cc3466b1e3125be537978219c307779500caa8a0d1bae1bf8909fb05d5a5eebb44215f685320e89a036fb2735e297051aa3cc70eaf7287d388cfe02551c170d6f485cfe25e2a26681a27062926c133135ad0c8ce8bfc6d0e22eba4d0d1b28bcf94e22c261139029b44b9edf0baba5db2ea68703ba3f63edecc5470dc1f287b8a1cd75d52c51ab8aa5b961b5349c822ed175d9751cb7599845cc6bb1313fd2ab147dd7675689bca7c1c2b59462b27c85f76cef28d267e02db0c64a07e50a6f160afdcecd751b28d14a661c7494cc37186d5904797192eac42aad4e7f4b21f4a66014cf951f4282fffc40020100100020301000203010000000000000001001121314151617191a1b181ffda0008010100013f216c06dc6a660b76a790a7b831f28438175f11dffa01192cfdc6e7ec56909183dd02b55d65eee2bcdb4c10b2881a859a306c62582864ccd851aaea004173925ea4ff00566ad5c9983ceabc3959db1e844ea83c884cebc4513d6c458ff84b56bfa128f06dee10c55c607d66f916dd38b8a16aff00104bd4bc4477395753961fe10e8a3b17707252e191d8a2d6d54d25c4390e9d520eac43c879b29e1f2196169a3acb37ae62eb36de9326c0d9040a17d6e65a237fdc7a416eccad5ce63b058bc17c92db4b923c74acb50d9dadd57216c1af350662aae54aecf3487c4bb32f351ba97052aa2edb1eb92d21ac7656542a0a777e935db247f529573262612f10c3ece23a3076c700f42620e4f41b08cafc8789c74b5bc870881f05404ab5663895faa330bad78c43c98219814af88ab457f92ae5e92ecc719e100b639315f317f8dc90dec1b39841af1b7b2cd63c2c4bae51a0b0c23b73d1fb80b6aa55b4c4d2cb5d65364622965416efc999205116acde86581e735c73e8b210135c6532f12d624f22fc6958c243a21540be3f0c612090ec42b56b193e98377eeda7d1949b7d7a22c70ab2f90042ca581f92051d3e53e515267af32d806ed6afd894d2b42230956d188353d5598a4187c4528cdc534d653c894148c9865c0fb8ea2aaa8bb217c81c139aac7d4c98d3a1fa969cb51c7ee6d5e9025a1f2207e107bcd457e2085dabb291db47f715f9934265a521f33e66e96ea8de7187895ac13552adbe411405932652c00e27569be65a7021536d66d454b66d0d23f110e0b098cc09b30f59783276505aceac2719e03e113689dc512d01962611552a081ae8b00656a2897688aaef507064be51629eabb17271486e1e6ec889fc869f6eadc40a61c6976c62ae08a397f6222c00c4a2d86896516731162d07afa834976d82e2de4603489af6f6118e396e2e387df92b4c0f11a294d12d79d43b8f36ed3a262b07e64abade65011c5d5469298666c727ccc3976fb13a61e98cd013a25c3fe36610fea82e4bc4e8b108724e3950ec9a8777b9c3c71294391ea75a861fffda000c03010002000300000010804804800004924020920004120104020924824120824824000100024004820124920920104920824820900900800800020904124120824024000120120024000124104820800800007fffc40014110100000000000000000000000000000070ffda0008010301013f1043ffc40014110100000000000000000000000000000070ffda0008010201013f1043ffc4002410010002020203000203010100000000000100112131415161718191a1b1c1e1d1f1ffda0008010100013f104f9e37551db5185e836314f10894124605dc3cc10089da3e9ceb5f81bee0f042f5d4b16cb2a850409b0ae1d3f65b88b34af277a222a45b5b3bb21fb40367a54565acbabf72996f2983006616d30aadb2c95d31041aa4a0e66300a8383fd405e02d42e0cb16b665f72f2f586d89c654073071072b1646a821978a843b2156ef9544980c73a26a08048dfc9600a5e2e87ae606a5e2fd54bc3add341e211294a5597e7cc439c56ee9fd7a84a0a8d70ace6ba22c96ab0bf6f98d5e96a38906d589a3a78b3f5022554285c7647c16ac9a3dc761f691fe4bf68644e41fa94a6cefb89e22210b0b1e876cd705aa490f372bc6893a3d9180e1312faf13216f2179175ea23010d18e71c4b1b6402ef329ddd15f88aef5a9430019eb357c88463686bccd69156fd097d25d6c9b71f751cdc6096904b5470c500317a2778fc478f8fac147e479ebb95858cbd41293d3b1db8e23ab72b2e70ae2f31c363938baafafea66872e833146d00706ae1c1a380520a731dfcd46b3aa5761dcb80a051888dc08c48fa4799cc0d10ba99ea40c5d603d1ed95c61baccec22825bc23487a95a2c58e178497c4345cc9cb9ef11365aa2ecb71d46f3382bcbdc0d28d2b2968e9d8448b5401971694310b996416fa93095c5423d4cd5add97e115e40ef84ddf889642b1f387ea33ca26ed1e61a26aea4ecfd3c4b688561690d7f6d96736df72bea9a545735e2553a19de5b4811b9c7b3e113dcd941ae31bb7a8a0660403ddea5418cb3007cc3cdb9b3d031cd39827ba60004a707e48712fb616c3acb166d4055f751d11ace4d68e312c3ec09f23d0d54b254b93af631303422836a83329db7d983fc25ff003974c568e53fb80500d579f8604adcd971aa6b1d54ad6f4e9e3446378b0773943aabd2d25549f02bf88020aff2209a29144583711c19c420fbb07f06028ccb429aef198561e66d0f9307e9fc50398fd48daeb076eb71356087da5b8d6610ea5c037cca329c354c29472dad0732e49ddd5d3b3866b1c6236c25a7ae326327846ae25c0f4f705f1b5ed73fc4a9711b76be25c10956be96464abf5483d4b6b0a22df97c30664c3087a85125e5618f314f0a82e51bafd42cef19ee02dc5821c86e0690c064756123b9070a95cbd6b982acdb24e02f9855f0526266a1e3b8838293a1c0fee155b1236f7332608563f11e273b01ab8c7ad35a9d1cd42fd4124bee9264056b02da2863e44400bd7684ac60e953b25661441fb8dab350b5e30c8730e547d952dfccba056e5acc447228f30071a3d87fec311a453beff880060c18bf915cc003e5811aab8ebc4bf33751a5e5aa8a491494b3c7a975b98a87ed67d4a5617010e03c6e1c3beef2b69adea5b9061a0df9b8271261440d4d07fc9e46c5fb54a2a763afa4ca1b21cf2613ac15336b2f05a588c1777ef32cb4b3441daa06c70e98dc0f0a58342d456e906eac47d62a9541048bdc25bcbb80f3b2b96c20baa58d959bb8ac4831c56050a5fb01aed47941b55934c716ae846954d87c410b73ffd9, 'jignesh s bhatt', 'phd', 'proffessor'),
(2, 0xffd8ffe000104a46494600010101012c012c0000ffe10a2745786966000049492a000800000004001a010500010000003e0000001b010500010000004600000028010300010000000200000069870400010000004e000000780000002c010000010000002c01000001000000030000900700040000003032313000a00700040000003031303001a0030001000000ffff00000000000006000301030001000000060000001a01050001000000c60000001b01050001000000ce0000002801030001000000020000000102040001000000d60000000202040001000000490900000000000048000000010000004800000001000000ffd8ffe000104a46494600010100000100010000ffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffc00011080053006403012200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffda000c03010002110311003f00edbc07e04f0adff81344babad06c66b896d51a491e204b1f535d0ffc2b9f06ff00d0b7a77fdf9147c38ff9273a07fd79a7f2aea280397ff8573e0dff00a16f4eff00bf22b99f18d9fc33f04d8acfa9e83a7995ff00d5411c20bbff0080f7af4c7758e3691ce154124fa015f25ea12dff00c4cf1ddd5ddc3116a256118c711c40e147d71fad0050d6bc4d6fe20bd91346f0d69da7599e176c019f1ea4fafd2b023b1926baf2843939c7dd15ee769e05d33ecc91431f96aa31f2f53f8d6ce99e07d32d640e210cc3bb500790699e0dd424943436b01e323cf8815fe55d7d8eade1fd01e3b5f187812cd53a7dbada00cbf523fc2bd38e9d1429844031c71599aa5a4135b341711a491b0c15619a00bda1683f0d3c496cb3e95a569370a464a88c6e1f51dab5ff00e15cf837fe85bd3bfefc8af9aaeed6efc07e2737b617525ba2c9e64254f51fdd3ea3b57d65a5dd35f6936776c30d3429211e848068030bfe15cf837fe85bd3bfefc8a3fe15cf837fe85bd3bfefc8aea28a00f94fe32e89a668de3bfb2e9b630dadbfd9636f2e25c0c9dd93455ff8efff002518ff00d79c5fcda8a00f75f871ff0024e740ff00af34fe55d4572ff0e3fe49ce81ff005e69fcaba8a008ae82b5a4cac32a51811ed8af9c3e1d5b2456372f8c33cc79f6afa2b51bd4d3b4f9aedd19d635c955ea6be7fb4b7bb8f4ebb366be4c8f3bb201fc009c81f95007a2d8a0c28079adc8a2602bc512d358dd0b3cda8b3cae54323e029e393ed5d9f85ceab677062b8bb9a60491fbd39a00ee258e423a5616a087249158de26bad6ee6636d657124409037a7635c43dcebc565963bdbecc2e119a54e0b7f8714011fc4bb41736b62401bbed0b1e7d89c57d256307d974fb6b7ff9e512a7e400af9e6e60b8d42d74c7d400675bc89dc0e0300d93fa57d0d637697f6515cc6085906403d450058a28a2803e62f8efff002518ff00d79c5fcda8a3e3bffc9463ff005e717f36a2803dd7e1c7fc939d03febcd3f957515cbfc38ff9273a07fd79a7f2aea28033f5b8ccba35d2a8c9d84e2bcb74f8e3fb64ca01c7984907debd81d0491b21e8c306bccf59d28e85aa2e1b74732e54e3d2803620b0b7281b60ce2a08844ba96ddf1a9e7009f4ac1bef1645a25b46d246f2b3b6d555ea4d734d79aa6b5a88b88638ada35f99438dcc73dbda803d15bc83a83465a36271919f5a5bad26dde33f28c7a579c1bcd6b43d424bb9a386ea00db95114ab63b735d3687e335d7209736ef0b46704350025d594315dc0a541557cafb1c57a6e8d0b41a5408c3076e71e99ae0f4fb5fed8d7a083761554bb1f615e94aa15428e806280168a28a00f98be3bffc9463ff005e717f36a28f8eff00f2518ffd79c5fcda8a00f75f871ff24e740ffaf34fe55d4572ff000e3fe49ce81ff5e69fcaba8a002b17c4fa426ada53286093c5f3c4e7b1f4fa1adaae57c75a81d3f498df7b2879021dbd4f7fe9401e66b7b1cb3089f69643d0f635b36b148cde6c370b0b77e0106b99bbb069585d459cbf355a4bad4a28fcb5dff5519a00ebef1641fbcb8b81330e9c60560c9aa476f3b2260679205643dcea92c5e57ef31d3246292d34bb89241e61e33cd007a97c3f96dcbcd77349fbe98f9710f451c9af41af13b7d49f4792de355629907e5ea0f4feb5ed11922152dd71cd004945355d5c6558114ea00f98be3bff00c9463ff5e717f36a28f8efff002518ff00d79c5fcda8a00f75f873ff0024e340ff00af34fe55d1497291f1d4fa0ae3be1fcae7e1e682b9e059a71f856fcd2c7046649180514017eda49269199b851c0158de33d31b51d1098d773c0e240a3b8e87f426b5ed6658ecd1e61e5b30c953d45482eeddc603822803c92084247b18714e7d3038ca915dc6a3e1ab7ba7696cd95493929d07e158874abab56d9344c07661c8a00e78e98d90187152ad8ac4b9adc364dd734f874b9aee611c684fafb5006369ba3b6a7acdb26dca2c819ffdd0726bd67b566e9fa75b6936ecd801c2e5df1530d4ed8f4663ff0001a00af3a1826382403c8c5392ea55ef91ef4b7532dd40c2dc6e9979553c67daa94530941e0abaf0c8dd54d007cf7f1c65f37e216e231fe8710fd5a8a8be35ff00c8fe7febd23ffd9a8a00e774df881e2bd3f4db7b4b4d6a78ade14091a00b8503b74a99be2478bde58d9b5db8250e572abc1f5e945140160fc4ff001a31c9d7ee09f754ff000a07c50f1a8e9afdc0ff008027ff0013451400d93e2778d1c7cdafdc9ff80a7f8522fc4df1985dbfdbf738f4da9fe145140103fc44f1693ceb73ff00df2bfe15341f133c65021116bd70a0fa2a7f85145003dfe28f8d5d486f105c907b6d4ff0a51f143c6a3a7882e3fef94ffe268a28001f147c6a0e47882e73feea7f85432fc49f18bce256d76e3ccc6376d5ff000a28a00e675dd7753d6b51fb5ea378f7171b026f603381d07145145007ffd9ffe10354687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c3f787061636b657420626567696e3d27efbbbf272069643d2757354d304d7043656869487a7265537a4e54637a6b633964273f3e0a3c783a786d706d65746120786d6c6e733a783d2761646f62653a6e733a6d6574612f273e0a3c7264663a52444620786d6c6e733a7264663d27687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323273e0a0a203c7264663a4465736372697074696f6e20786d6c6e733a657869663d27687474703a2f2f6e732e61646f62652e636f6d2f657869662f312e302f273e0a20203c657869663a585265736f6c7574696f6e3e3330302e30303030303c2f657869663a585265736f6c7574696f6e3e0a20203c657869663a595265736f6c7574696f6e3e3330302e30303030303c2f657869663a595265736f6c7574696f6e3e0a20203c657869663a5265736f6c7574696f6e556e69743e496e63683c2f657869663a5265736f6c7574696f6e556e69743e0a20203c657869663a436f6d7072657373696f6e3e4a50454720636f6d7072657373696f6e3c2f657869663a436f6d7072657373696f6e3e0a20203c657869663a585265736f6c7574696f6e3e37323c2f657869663a585265736f6c7574696f6e3e0a20203c657869663a595265736f6c7574696f6e3e37323c2f657869663a595265736f6c7574696f6e3e0a20203c657869663a5265736f6c7574696f6e556e69743e496e63683c2f657869663a5265736f6c7574696f6e556e69743e0a20203c657869663a4578696656657273696f6e3e457869662056657273696f6e20322e313c2f657869663a4578696656657273696f6e3e0a20203c657869663a466c61736850697856657273696f6e3e466c6173685069782056657273696f6e20312e303c2f657869663a466c61736850697856657273696f6e3e0a20203c657869663a436f6c6f7253706163653e496e7465726e616c206572726f722028756e6b6e6f776e2076616c7565203635353335293c2f657869663a436f6c6f7253706163653e0a203c2f7264663a4465736372697074696f6e3e0a0a3c2f7264663a5244463e0a3c2f783a786d706d6574613e0a3c3f787061636b657420656e643d2772273f3e0affe20c584943435f50524f46494c4500010100000c484c696e6f021000006d6e74725247422058595a2007ce00020009000600310000616373704d5346540000000049454320735247420000000000000000000000000000f6d6000100000000d32d4850202000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000001163707274000001500000003364657363000001840000006c77747074000001f000000014626b707400000204000000147258595a00000218000000146758595a0000022c000000146258595a0000024000000014646d6e640000025400000070646d6464000002c400000088767565640000034c0000008676696577000003d4000000246c756d69000003f8000000146d6561730000040c0000002474656368000004300000000c725452430000043c0000080c675452430000043c0000080c625452430000043c0000080c7465787400000000436f70797269676874202863292031393938204865776c6574742d5061636b61726420436f6d70616e790000646573630000000000000012735247422049454336313936362d322e31000000000000000000000012735247422049454336313936362d322e31000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000058595a20000000000000f35100010000000116cc58595a200000000000000000000000000000000058595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf64657363000000000000001649454320687474703a2f2f7777772e6965632e636800000000000000000000001649454320687474703a2f2f7777772e6965632e63680000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000064657363000000000000002e4945432036313936362d322e312044656661756c742052474220636f6c6f7572207370616365202d207352474200000000000000000000002e4945432036313936362d322e312044656661756c742052474220636f6c6f7572207370616365202d20735247420000000000000000000000000000000000000000000064657363000000000000002c5265666572656e63652056696577696e6720436f6e646974696f6e20696e2049454336313936362d322e3100000000000000000000002c5265666572656e63652056696577696e6720436f6e646974696f6e20696e2049454336313936362d322e31000000000000000000000000000000000000000000000000000076696577000000000013a4fe00145f2e0010cf140003edcc0004130b00035c9e0000000158595a2000000000004c09560050000000571fe76d6561730000000000000001000000000000000000000000000000000000028f0000000273696720000000004352542063757276000000000000040000000005000a000f00140019001e00230028002d00320037003b00400045004a004f00540059005e00630068006d00720077007c00810086008b00900095009a009f00a400a900ae00b200b700bc00c100c600cb00d000d500db00e000e500eb00f000f600fb01010107010d01130119011f0125012b01320138013e0145014c0152015901600167016e0175017c0183018b0192019a01a101a901b101b901c101c901d101d901e101e901f201fa0203020c0214021d0226022f02380241024b0254025d02670271027a0284028e029802a202ac02b602c102cb02d502e002eb02f50300030b03160321032d03380343034f035a03660372037e038a039603a203ae03ba03c703d303e003ec03f9040604130420042d043b0448045504630471047e048c049a04a804b604c404d304e104f004fe050d051c052b053a05490558056705770586059605a605b505c505d505e505f6060606160627063706480659066a067b068c069d06af06c006d106e306f507070719072b073d074f076107740786079907ac07bf07d207e507f8080b081f08320846085a086e0882089608aa08be08d208e708fb09100925093a094f09640979098f09a409ba09cf09e509fb0a110a270a3d0a540a6a0a810a980aae0ac50adc0af30b0b0b220b390b510b690b800b980bb00bc80be10bf90c120c2a0c430c5c0c750c8e0ca70cc00cd90cf30d0d0d260d400d5a0d740d8e0da90dc30dde0df80e130e2e0e490e640e7f0e9b0eb60ed20eee0f090f250f410f5e0f7a0f960fb30fcf0fec1009102610431061107e109b10b910d710f511131131114f116d118c11aa11c911e81207122612451264128412a312c312e31303132313431363138313a413c513e5140614271449146a148b14ad14ce14f01512153415561578159b15bd15e0160316261649166c168f16b216d616fa171d17411765178917ae17d217f7181b18401865188a18af18d518fa19201945196b199119b719dd1a041a2a1a511a771a9e1ac51aec1b141b3b1b631b8a1bb21bda1c021c2a1c521c7b1ca31ccc1cf51d1e1d471d701d991dc31dec1e161e401e6a1e941ebe1ee91f131f3e1f691f941fbf1fea20152041206c209820c420f0211c2148217521a121ce21fb22272255228222af22dd230a23382366239423c223f0241f244d247c24ab24da250925382568259725c725f726272657268726b726e827182749277a27ab27dc280d283f287128a228d429062938296b299d29d02a022a352a682a9b2acf2b022b362b692b9d2bd12c052c392c6e2ca22cd72d0c2d412d762dab2de12e162e4c2e822eb72eee2f242f5a2f912fc72ffe3035306c30a430db3112314a318231ba31f2322a3263329b32d4330d3346337f33b833f1342b3465349e34d83513354d358735c235fd3637367236ae36e937243760379c37d738143850388c38c839053942397f39bc39f93a363a743ab23aef3b2d3b6b3baa3be83c273c653ca43ce33d223d613da13de03e203e603ea03ee03f213f613fa23fe24023406440a640e74129416a41ac41ee4230427242b542f7433a437d43c044034447448a44ce45124555459a45de4622466746ab46f04735477b47c04805484b489148d7491d496349a949f04a374a7d4ac44b0c4b534b9a4be24c2a4c724cba4d024d4a4d934ddc4e254e6e4eb74f004f494f934fdd5027507150bb51065150519b51e65231527c52c75313535f53aa53f65442548f54db5528557555c2560f565c56a956f75744579257e0582f587d58cb591a596959b85a075a565aa65af55b455b955be55c355c865cd65d275d785dc95e1a5e6c5ebd5f0f5f615fb36005605760aa60fc614f61a261f56249629c62f06343639763eb6440649464e9653d659265e7663d669266e8673d679367e9683f689668ec6943699a69f16a486a9f6af76b4f6ba76bff6c576caf6d086d606db96e126e6b6ec46f1e6f786fd1702b708670e0713a719571f0724b72a67301735d73b87414747074cc7528758575e1763e769b76f8775677b37811786e78cc792a798979e77a467aa57b047b637bc27c217c817ce17d417da17e017e627ec27f237f847fe5804780a8810a816b81cd8230829282f4835783ba841d848084e3854785ab860e867286d7873b879f8804886988ce8933899989fe8a648aca8b308b968bfc8c638cca8d318d988dff8e668ece8f368f9e9006906e90d6913f91a89211927a92e3934d93b69420948a94f4955f95c99634969f970a977597e0984c98b89924999099fc9a689ad59b429baf9c1c9c899cf79d649dd29e409eae9f1d9f8b9ffaa069a0d8a147a1b6a226a296a306a376a3e6a456a4c7a538a5a9a61aa68ba6fda76ea7e0a852a8c4a937a9a9aa1caa8fab02ab75abe9ac5cacd0ad44adb8ae2daea1af16af8bb000b075b0eab160b1d6b24bb2c2b338b3aeb425b49cb513b58ab601b679b6f0b768b7e0b859b8d1b94ab9c2ba3bbab5bb2ebba7bc21bc9bbd15bd8fbe0abe84beffbf7abff5c070c0ecc167c1e3c25fc2dbc358c3d4c451c4cec54bc5c8c646c6c3c741c7bfc83dc8bcc93ac9b9ca38cab7cb36cbb6cc35ccb5cd35cdb5ce36ceb6cf37cfb8d039d0bad13cd1bed23fd2c1d344d3c6d449d4cbd54ed5d1d655d6d8d75cd7e0d864d8e8d96cd9f1da76dafbdb80dc05dc8add10dd96de1cdea2df29dfafe036e0bde144e1cce253e2dbe363e3ebe473e4fce584e60de696e71fe7a9e832e8bce946e9d0ea5beae5eb70ebfbec86ed11ed9cee28eeb4ef40efccf058f0e5f172f1fff28cf319f3a7f434f4c2f550f5def66df6fbf78af819f8a8f938f9c7fa57fae7fb77fc07fc98fd29fdbafe4bfedcff6dffffffdb0043000302020302020303030304030304050805050404050a070706080c0a0c0c0b0a0b0b0d0e12100d0e110e0b0b1016101113141515150c0f171816141812141514ffdb00430103040405040509050509140d0b0d1414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414ffc20011080064007803011100021101031101ffc4001c0000020203010100000000000000000000000605070203040801ffc40014010100000000000000000000000000000000ffda000c03010002100310000001751d000493ccc2a8c03e1708f8000258e85800291e152d4240b20ef291244f5c8015f816001e7c174b2c9b3a48b150a10f780015f816001488b2488e64d8984209a7ad400afc0b000a58af8d0330c0564700d47a60da057e0580055a408e4451d4741142f9789b40afc0b0005c2a7248ae8d4340de6e2d6002bf02c0002a0100922405824cb986a002bf02c0002bf283198cc533e17d9628015f81601f00a305d208d06d180ee3d0c711d42180ec7013020884749a4ccc4722c6224e4124cc7930254f82a8b2647c26c7439c083140f2b9de6c32333581cc60499a8c80d0461fffc40029100000060103030403010100000000000001020304050600071036121316111415172122312432ffda0008010100010502a653211fd5fc02bd9e015ecf00af65858d2eb45929c6b22b093f7422cc6063d889c836f479f2f80d7b3c02bd9e015ecf00af65ce9908c2af40e1bb5a6793adc23662eed72a9d33b056946ea51b40a4dc876e5f4b855920474feecf9b3edeff00c3681c376d66030c256e3cac58370fc2650c362dff002e03ab116629deb7bff0da070ddb561a99c423678935451b5c714cc2698bfc5554522b9b0c661a45b380896e0bea5ef7fe1b40e1bb6a01d75c8fa205e81605c01d844fb45e61a1970755e592cf80149f47f5b3b0a66eb4f6bff0da070ddade9fef1c006c2224c3f4fb97820512a4559372cc98d53ff6244eda7b5ff86d0386ed371a322837116f8bcf211e9bd955249cba73208aac6e4d4a0abb0502bcccce9eef7fe1b40e1bbd998999bc72d907ca22811132c7ef11c4634130bd2816b4d4cda337bff0da070ddecefc3db11751baa84c11327901152bb94ee999f52c78694ea5f7bff0da070ddbfb96e32bf2cb3405caa4667c50e271840c6ed8120af24a1ac23fc2ba0c2a85365ff86d07869d700c318cb087e02cf182b8103a33b053e0b20c06c1872656633b6ae394fa4d978507c468c61f10c6ab775d19c2641efa66075049ad831eb351f6deb9d8f4c8e88154c65126a9fc825865d37054953755e38946ea34cc5313eaa4f1ca96ab4ea097daf3d9f6dcfe1b55e7cd85d589f2e1b53e6cc25d4d9a29beddb0e1b5667cd9f6d4fe7db53feabeaa4eb9091d44989463ffc40014110100000000000000000000000000000070ffda0008010301013f0143ffc40014110100000000000000000000000000000070ffda0008010201013f0143ffc400391000010203040804040309000000000000010002030411051221731013223132415191203571931433528142618206232443626392b1c1ffda0008010100063f02b366262cd831634485573dc312bca65fb2f2997ecbca65fb2fe2e425f5b4a884c157273246c7949384776cde77754ba3fc42696c36bbf4555eb4ff0067e04dcb7d70db4210f8793956c5386a626cbfb2f2997ecbca65fb2f2997ecbca65fb2b4a625ecd830a3438556bda310ac9c9d3313cfc4b70637ea71dc9f162b9ce744379f10aa4003d4abd15503550b411d13a7245baa8ccc5c19cd4bc8cf3cc6968c4436976f61e5e0b5b2559393a6429c1f1388fd2543a0db7ed12869c110559d2ade0f8986683a57c16b64ab27274ca3870b2645eec5335af0c14e680317ef45481143955ef0110265b50898519ae5661a54063de7ecd77fdf05ad92ac9c9d2d95069030887d714da0bd7791505ad10b567e66ca146818f21c90604cd44084f7bf8cbbf0aab45dba789bcd4398862b119048ee535dd4574dad92ac9c9d3522ad73102b72e2031a04cda6d4a070d05ade2340135bd0534dad92ac9c9d2d0de2694619c1cc342818cea577202565eadade0f88a13be158e65d17b6b71e69905c1d0dfcc1551b93e63f031de0b5b2559393e0f8968fdcc6dff93943315b78b372061c0be3e9575b29abfea726bdd0c17b4d6a894c2fc1f14df23c16b64ab2727c1125695be3b2dac42a946a7d151bbbaa1d106175e6bb7782d6c9564e4f82eb4d19ab04f72af5160485f316eafaac14b80e372ae2e1f950e8da1458156b64ab2725618aa6864cb054b3077a69dfa2813e68f4b8345ee4745a82bfc9565f4d4e87068ab183177e7d162e0b78215e807ecb6d86ef5d37e20a33fda15a35bc96f45a0e256ae2b6e451cbafa2b4f29419480f8220c2175b5875446b608af48484363a5c3072d52e296f6571cbfb2be6401e9097cc81ed2e281f684ab7a01f584be64bfb2855f2e69fd95c72fecae397f6500f7c0c371d528b291df08c28adbaea43a15fffc400271001000201010705010101000000000000010011213110415161a1b1d120718191f1c1e1f0ffda0008010100013f21061c716db9733f51e67ea3ccfd4799aefecc5e757a738924b3b89ee6ba426db34c07f23fc1dc912c899bef34a621ca360e4f94fdc799fa8f33f51e67ea3cc461c716d99333a077769a15cf6e87f7e23096afa46048aa5e09d57ae2070639453e318c45039d154f313ae4792d65c2fd1d43b93a077768e2ce9c6707f605623dd3ba5049099a8008c16f41a9b1c24d5f24e42f6f4750ee4e81dddb92d7fe4675c7cca1d8730d1eb9951652462478acb1a0249422775e676d7209e8f4750ee4e81ddda6a07de8fc4a0cdc684a3140095339af8966bfc71427e966f8cbd35fc5ae9c22384582d1f18375e471404e5d5b5d43b93a077768d3186b8a3006c8928582e502ede53ac4e7482dd651357096d13097dd33390f6d750ee4e81dddb44d61077d915cf12e63387ae1ab28b3674157ba3cec8b59dc0870d630e98152d1734882cf3af4750ee4e81ddf42bb6999ff0059993aefb4f75b6aa9948b89a6ce0c012380d20b169c25e87d57a3a8772740eefa30cd2dbddf728a286a5f8e72ad43a612e0eb8909fadf3ce2e05596ec36743d1d43b93a077762816e2082cd27dfe81fc2531aa1be46085a93da2065cd173139069eff00a925ed5aee9a04534119d53b91d5dc1dd9c5c849b438a21a0e12a622b35e0652a4c4a570ba416b1737247334dede74af436621cc8333711587dc8815c063e59ac2b18386635f4b94c132f0b897623397a4acf001a4c188a188437e33ac39ad1c5bbdf529aa58be33b06d1c7889d6fb9280434d57bca2a05580cd2a994f98178101d3e94bdbb5c1205455c12c64a2f24fec0d7870255e045f8305207e140ed97d91e8556044987ff110f79fffda000c03010002000300000010924824924924920820024924920920924924820000924924000004924920104104924904824124924804824924920900020924924900900104820920120800104800024900920800027fffc40014110100000000000000000000000000000070ffda0008010301013f1043ffc40014110100000000000000000000000000000070ffda0008010201013f1043ffc400271001000201030402020203000000000000010011213141516171819120a130b1d1f010c1e1ffda0008010100013f107ac11144c1ab07c03060d4fc0455da9b89c42dda83b4cea10b51b6005f81324215d0ee900a9b01ae41546d45f332382072295d2f735839621f04183063ac11144c9ab2fc17837751a51f6f2e899641b945db6b833808a41d0d6bcd46a516ce57177d3ad31da22a25237d22023526fd4ac83597db4806a8dcd5236e6ef1f817af6cb46c616dbd8fbc1ba06965c8781899812b897e341751a154d18222ec6f0e20f64c26f120740cd71f16f5f817af2b2851b0b3d8f044744adad8d20b21ca129a712923ba8fd9193f330012ec1ad8de9a4ba96041d5d2583e18603d297d7f02f5ec93586aca0f4117a98a8d8f76e5f504e681239b0df47525f28d70bdac50f3352f12b0f48d475a1175ad4bcdf2433ad5e3339a07318be5fb2ca1f13c7a9d41f9af5f782dd05e4d3d27a80c0125ca1679d461b86152b70967e14536d6895428d6b4da51d7d6a1920379bd065661fb6198d969d8af9af5e8cdb028143981fe6834409f50338b991419c7f7522b8000dc1b32c0e01abfdf444aed0139d6ea3297a99bf30ff845e8cb460713942683c9f857af668220c574df056fbdf243985b15a30bc1da67c8da313a4014877607a4266a4d4b46f9e6a534d00340096b706d492eeb44f55fc0bd7ad4b2ee705b44ae86c45f7002b56448000a3cb4313b2cb1459016956f1fd4192964a6a8f58eb0346e945d9f641f92f5ea9006ec36d68b1e6148db0b6ae2ed8b00054da5472eb752bf465094d40932b53adfb95e251ad4b676a5bcc60db8b02c109ab98c53b69ac906be8915d13c1880df9d887b7a45ae9361046c000978c912d3cf81bf710881de65e55f10752ae25d914e919761b110b8063517d11eff00c25764d1b3035d1e481a9254b92fda1364b66dd25242dbf1a0eed93c6399b63aab8ae10a472232a7355ac3b3fea37bc342b87214a58b6a309ba87a0748e65a185192c08030bda2f3b055a6c7dc0ba3ad4de8aee4bcf463a9903f092255ca72e620ed80a1d1bc40160d0fab6aba955652560fefacd1cf6fe799706a507ee58e6b54afb6364dab00525360a2fb5c0c0106c7f2c4d11db5278b8351fd7eb2990e5ff797f3858f911c6e798dedd9b08e03871acfffd9, 'naveen', 'phd', 'hjkl');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `address`) VALUES
(1, 'photos/i1.jpg'),
(2, 'photos/i2.jpg'),
(3, 'photos/i3.jpg'),
(4, 'photos/i4.jpg'),
(5, 'photos/i5.jpg'),
(6, 'photos/vlcsnap-2016-09-10-12h51m04s033.png'),
(7, 'photos/Screenshot (136).png');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `address`) VALUES
(1, 'photos/20160529_115740.jpg'),
(2, 'photos/20160529_115742.jpg'),
(3, 'photos/20160529_193621.jpg'),
(4, 'photos/20160601_155926.jpg'),
(5, 'photos/20160601_155952.jpg'),
(6, 'photos/20160601_155954.jpg'),
(7, 'photos/20160601_160020.jpg'),
(8, 'photos/20160601_163517.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `address`) VALUES
(1, 'photos/nagg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pabba`
--

CREATE TABLE IF NOT EXISTS `pabba` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pabba`
--

INSERT INTO `pabba` (`id`, `address`, `name`, `qualification`, `description`) VALUES
(1, 'photos/naveen.jpg', 'naveen kumar', 'phd', 'professor'),
(2, 'photos/Jignesh.jpg', 'jignesh', 'phd', 'professor'),
(3, 'photos/pratik.jpg', 'pratik shah', 'phd', 'professor'),
(4, 'photos/rahul_dubey.jpg', 'rahul dubay', 'phd', 'professor'),
(5, 'photos/hemant_patil.jpg', 'bharat', 'ms', 'good professor'),
(6, 'photos/dbms.png', 'sai shiva', 'uyhcsah', 'cuiaui'),
(7, 'photos/PHOTO.jpg', 'jitendra', 'mtech', 'intelligent');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `address`) VALUES
(1, 'photos/playground1.jpg'),
(2, 'photos/playground2.jpg'),
(3, 'photos/playground3.jpg'),
(4, 'photos/institute-gym.jpg'),
(5, 'photos/football.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `qualification`, `description`) VALUES
(1, 'pabba', 'mtech', 'ta');

-- --------------------------------------------------------

--
-- Table structure for table `studentlife`
--

CREATE TABLE IF NOT EXISTS `studentlife` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `studentlife`
--

INSERT INTO `studentlife` (`id`, `address`) VALUES
(1, 'photos/2_cynosure.jpg'),
(2, 'photos/3_cynosure.jpg'),
(3, 'photos/11_cynosure.jpg'),
(4, 'photos/18_cynosure.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visitingfaculty`
--

CREATE TABLE IF NOT EXISTS `visitingfaculty` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `address` varchar(50) NOT NULL,
  `name` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `visitingfaculty`
--

INSERT INTO `visitingfaculty` (`id`, `address`, `name`, `qualification`, `description`) VALUES
(1, 'photos/nagraj.jpg', 'nagaraju', 'phd(Fault Tolerant Flight Controllers using Artificial Neura', 'Visiting Faculty'),
(2, 'photos/mishra_biswajit.jpg', 'mishra', 'phd', 'professor'),
(3, 'photos/alka_parikh.jpg', 'alka parikh', 'phd', 'professor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
