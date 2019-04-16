<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql_stockcontrol')->insert("INSERT INTO `equipment` (`id`, `equipment_model_id`, `mac`, `ns`, `purchase_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, '180D2C18953D', 'BEPG4600552AB', '2018-12-28', 3, '2019-02-08 17:30:06', '2019-03-06 13:24:20'),
(2, 2, '180D2C18984B', 'BEPG46001138T', '2018-12-28', 3, '2019-02-08 17:31:44', '2019-03-04 18:25:28'),
(3, 5, '180D2C18954B', 'BEPG46005506F', '2018-12-28', 3, '2019-02-08 17:33:29', '2019-03-15 14:52:53'),
(4, 5, '180D2C189837', 'BEPG4600109WE', '2018-12-20', 3, '2019-02-08 17:35:48', '2019-02-28 16:40:52'),
(5, 5, '180D2C189849', 'BEPG4600117DP', '2018-12-28', 3, '2019-02-08 17:45:11', '2019-03-04 18:35:04'),
(6, 6, '001A3FFB2547', '0UCG3103419P0', '2019-01-22', 1, '2019-02-08 17:48:50', '2019-03-19 18:07:37'),
(7, 3, '001A3FFB20A9', '0UCG3103854EQ', '2019-01-22', 3, '2019-02-08 17:51:37', '2019-02-15 13:12:20'),
(8, 3, '001A3FFC7B50', '0UCG31034959R', '2019-01-22', 3, '2019-02-08 17:54:01', '2019-03-04 18:31:56'),
(9, 3, '001A3FE6F941', '0UCG2501253YK', '2019-01-22', 3, '2019-02-08 17:56:25', '2019-02-19 19:51:48'),
(10, 2, '001A3F7DB96C', '4R7G1406902YO', '2019-02-05', 3, '2019-02-08 17:59:37', '2019-03-13 20:56:48'),
(11, 4, '180D2C1BA2BE', 'R1VG46101305L', '2019-11-23', 3, '2019-02-08 18:01:07', '2019-02-19 19:59:49'),
(12, 4, '180D2C1BA2BC', 'R1VG4610133Y8', '2018-11-23', 1, '2019-02-08 18:03:04', '2019-02-19 19:53:22'),
(13, 4, '180D2C1AE0B0', 'R1VG4619131FM', '2018-12-07', 3, '2019-02-08 18:04:40', '2019-02-15 13:10:47'),
(14, 6, '58108C511B62', '302F2303127U0', '2019-02-09', 3, '2019-02-09 12:21:03', '2019-03-13 20:57:57'),
(15, 1, '58108C3032A5', 'EVAE5002659MX', '2019-01-01', 1, '2019-02-09 13:02:53', '2019-02-09 13:02:53'),
(16, 1, '001A3F62FC53', 'EVAD5002697C7', '2019-01-01', 1, '2019-02-11 18:57:05', '2019-02-12 13:35:29'),
(17, 1, '58108C368911', 'EVAF05007369T', '2019-01-01', 1, '2019-02-11 19:20:07', '2019-02-11 19:20:07'),
(18, 1, '58108C0723AB', 'CHYD2502555U4', '2019-01-01', 4, '2019-02-11 19:40:30', '2019-03-28 19:45:33'),
(19, 1, '58108C668E60', 'EVAF3209849AL', '2019-01-01', 1, '2019-02-11 19:45:54', '2019-02-12 13:35:32'),
(20, 1, '001A3F96E47D', '0UCG23017004F', '2019-02-12', 1, '2019-02-12 16:41:39', '2019-02-12 16:41:39'),
(21, 8, '00194629D6F0', '00194629D6F0', '2019-01-01', 3, '2019-02-14 10:57:40', '2019-03-04 18:41:46'),
(22, 9, 'C4E9847A5BCE', '2154050013942', '2019-01-01', 3, '2019-02-14 15:46:33', '2019-03-26 17:06:49'),
(23, 10, '58108C1735AB', '5V0E26002790U', '2019-01-01', 3, '2019-02-14 15:48:24', '2019-02-26 19:19:42'),
(24, 3, '180D2C1DA8BC', '0UCG4800115X6', '2019-02-18', 1, '2019-02-19 12:21:31', '2019-03-13 19:53:06'),
(25, 3, '180D2C1DA8D6', '0UCG480011ID', '0019-02-18', 1, '2019-02-19 12:23:14', '2019-02-19 12:23:14'),
(26, 3, '180D2C1DA8FC', '0UCG4800114VF', '2019-02-18', 1, '2019-02-19 12:24:46', '2019-02-19 12:24:46'),
(27, 3, '180D2C1DA8DE', '0UCG4800111IV', '2019-02-18', 1, '2019-02-19 12:26:42', '2019-03-13 21:17:56'),
(28, 3, '180D2C1A926', '0UCG4800113WH', '2019-02-18', 3, '2019-02-19 12:28:10', '2019-03-19 20:04:05'),
(29, 4, '180D2C511C1B', 'R1VH042187618', '2019-02-18', 3, '2019-02-19 12:30:26', '2019-03-29 16:39:12'),
(30, 4, '180D2C50DF72', 'R1VH04134677M', '2019-02-18', 3, '2019-02-19 12:31:23', '2019-03-25 20:16:09'),
(31, 4, '180D2C50DF84', 'R1VH0413468QS', '2019-02-18', 3, '2019-02-19 12:32:23', '2019-04-05 16:33:59'),
(32, 4, '180D2C511BED', 'R1VH0421897D7', '2019-02-18', 3, '2019-02-19 12:34:08', '2019-04-03 11:55:15'),
(33, 4, '180D2C511C33', 'R1VH0421867HB', '2019-02-18', 1, '2019-02-19 12:35:59', '2019-02-19 12:35:59'),
(34, 4, '180D2C511BFB', 'R1VH0421874TS', '2019-02-18', 3, '2019-02-19 12:37:14', '2019-04-13 12:07:44'),
(35, 4, '180D2C50DF86', 'R1VH04134644C', '2019-02-18', 3, '2019-02-19 12:38:59', '2019-04-11 12:42:24'),
(36, 4, '180D2C50DF82', 'R1VH0413466YL', '2019-02-18', 3, '2019-02-19 12:40:12', '2019-04-03 11:57:31'),
(37, 4, '180D2C511C29', 'R1VH042186826', '2019-02-18', 3, '2019-02-19 12:42:28', '2019-04-05 20:10:14'),
(38, 6, '58108C560E64', '302F2400705Q7', '2019-01-01', 3, '2019-02-19 13:36:43', '2019-02-26 19:29:20'),
(39, 4, '180D2C511E17', 'R1VH0439995WT', '2019-02-20', 3, '2019-02-20 17:55:41', '2019-03-26 14:42:39'),
(40, 4, '180D2C511B81', 'R1VH042195098', '2019-02-20', 3, '2019-02-20 17:57:16', '2019-03-29 17:17:30'),
(41, 4, '180D2C511B87', 'R1VH0421951MG', '2019-02-20', 3, '2019-02-20 17:58:17', '2019-03-26 20:00:09'),
(42, 4, '180D2C511B83', 'R1VH0421952KJ', '2019-02-20', 1, '2019-02-20 17:59:30', '2019-02-20 17:59:30'),
(43, 4, '180D2C511B8B', 'R1VH0421948QR', '2019-02-20', 3, '2019-02-20 18:00:31', '2019-03-19 19:07:11'),
(44, 4, '180D2C511B77', 'R1VH0421949Z1', '2019-02-20', 3, '2019-02-20 18:01:45', '2019-03-13 20:16:56'),
(45, 4, '180D2C511E1B', 'R1VH04399930S', '2019-02-20', 3, '2019-02-20 18:02:38', '2019-03-04 18:07:48'),
(46, 4, '180D2C511E19', 'R1VH043999411', '2019-02-20', 1, '2019-02-20 18:04:53', '2019-02-20 18:04:53'),
(47, 4, '180D2C511E0B', 'R1VH043999247', '2019-02-20', 3, '2019-02-20 18:05:55', '2019-03-04 18:35:08'),
(48, 4, '180D2C511DBF', 'R1VH0439991M4', '2019-02-20', 3, '2019-02-20 18:07:31', '2019-03-04 18:13:07'),
(49, 2, '180D2C175BA8', '4R7G450389346', '2019-02-20', 3, '2019-02-20 18:52:44', '2019-03-19 20:04:22'),
(50, 2, '180D2C175BE2', '4R7G4503930JL', '2019-02-20', 3, '2019-02-20 18:55:44', '2019-03-13 21:18:31'),
(51, 2, '180D2C1A69EC', '4R7G4507135L3', '2019-02-20', 3, '2019-02-20 18:57:19', '2019-03-13 19:59:21'),
(52, 2, '180D2C175BF0', '4R7G45039336R', '2019-02-20', 3, '2019-02-20 18:59:57', '2019-03-13 15:01:50'),
(53, 2, '180D2C175BE0', '4R7G45039310K', '2019-02-20', 3, '2019-02-20 19:03:07', '2019-03-15 13:14:14'),
(54, 2, '180D2C1A6E80', '4R7G450487140', '2019-02-20', 3, '2019-02-20 19:05:05', '2019-03-14 11:51:49'),
(55, 2, '180D2C17602E', '4R7G4503368E2', '2019-02-20', 3, '2019-02-20 19:07:29', '2019-03-04 18:25:32'),
(56, 2, '180D2C1A6E82', '4R7G45048690B', '2019-02-20', 3, '2019-02-20 19:09:34', '2019-03-13 21:18:53'),
(57, 2, '180D2C176030', '4R7G450337133', '2019-02-20', 3, '2019-02-20 19:10:51', '2019-03-04 18:32:08'),
(58, 2, '180D2C190565', '4R7G45018308T', '2019-02-20', 3, '2019-02-20 19:12:26', '2019-03-12 13:58:10'),
(59, 3, '180D2C158C8D', '0UCG4300599VB', '2019-02-20', 3, '2019-02-20 19:54:41', '2019-03-26 14:42:57'),
(60, 3, '180D2C158C69', '0UCG430060028', '2019-02-20', 1, '2019-02-20 19:55:54', '2019-02-20 19:55:54'),
(61, 3, '180D2C158C93', '0UCG4300601LF', '2019-02-20', 3, '2019-02-20 19:57:20', '2019-02-26 19:09:13'),
(62, 3, '180D2C158C75', '0UCG4300602JZ', '2019-02-20', 3, '2019-02-20 19:58:43', '2019-03-23 14:28:33'),
(63, 3, '180D2C158C79', '0UCG43006035D', '2019-02-20', 3, '2019-02-20 19:59:50', '2019-03-25 20:18:21'),
(64, 6, '001A3FFCC23A', '302G31011690T', '2019-02-28', 1, '2019-03-01 17:15:54', '2019-03-01 17:15:54'),
(65, 6, '001', '302G31011671W', '2019-02-28', 1, '2019-03-01 17:19:47', '2019-03-14 11:50:13'),
(66, 6, '001A3FFCC9C2', '302G3101166UH', '2019-02-28', 1, '2019-03-01 17:26:21', '2019-03-01 17:26:21'),
(67, 6, '001A3FFCC978', '302G3101178PJ', '2019-02-28', 1, '2019-03-01 17:33:29', '2019-03-19 20:00:46'),
(68, 6, '001A3FFCC1A0', '302G3101175TS', '2019-02-28', 1, '2019-03-01 17:38:25', '2019-03-01 17:38:25'),
(69, 6, '001A3FFCC960', '302G31011766Q', '2019-02-28', 1, '2019-03-01 17:40:50', '2019-03-01 17:40:50'),
(70, 6, '001A3FFCC98C', '302G3101165RM', '2019-02-28', 1, '2019-03-01 17:46:58', '2019-03-01 17:46:58'),
(71, 6, '001A3FFCC9BA', '302G3101163CK', '2019-02-28', 1, '2019-03-01 17:49:31', '2019-03-01 17:49:31'),
(72, 6, '001A3FFCC9A0', '302G3101168A7', '2019-02-28', 1, '2019-03-01 17:51:36', '2019-03-01 17:51:36'),
(73, 6, '001A3FFCC9BE', '302G3101173SC', '2019-02-28', 1, '2019-03-01 17:54:38', '2019-03-01 17:54:38'),
(74, 6, '001A3FFCC9E2', '302G3101162R9', '2019-02-28', 3, '2019-03-01 17:56:27', '2019-04-10 11:49:52'),
(75, 6, '001AFFCC994', '302G3101177E0', '2019-02-28', 1, '2019-03-01 17:58:28', '2019-03-01 17:58:28'),
(76, 6, '001A3FFCC9B8', '302G3101171T6', '2019-02-28', 1, '2019-03-01 18:00:05', '2019-03-01 18:00:05'),
(77, 6, '001A3FFCC98E', '302G31011725S', '2019-02-28', 1, '2019-03-01 18:12:09', '2019-03-14 11:51:03'),
(78, 6, '001A3FFCC9B6', '302G31011704W', '2019-02-28', 1, '2019-03-01 18:13:48', '2019-03-01 18:13:48'),
(79, 6, '001A3FFCC240', '302G31011648D', '2019-02-28', 1, '2019-03-01 18:15:28', '2019-03-01 18:15:28'),
(80, 6, '001A3FFCC242', '302G31011602V', '2019-02-28', 1, '2019-03-01 18:22:42', '2019-03-01 18:22:42'),
(81, 6, '001A3FFCC9AA', '302G31011741P', '2019-02-28', 1, '2019-03-01 18:25:27', '2019-03-01 18:25:27'),
(82, 6, '001A3FFCC9D2', '302G31011790A', '2019-02-28', 3, '2019-03-01 18:26:47', '2019-03-13 19:36:53'),
(83, 6, '58108C2D5AA7', '302E4700797CN', '2019-03-19', 1, '2019-03-04 16:55:30', '2019-03-21 17:00:57'),
(84, 5, 'BEPG4600110NS', 'BEPG4600110BS', '2018-12-28', 3, '2019-03-04 18:10:34', '2019-03-04 18:12:48'),
(85, 6, '58108C6EA907', '302F3604493WX', '2019-03-19', 3, '2019-03-06 12:40:32', '2019-03-28 14:36:57'),
(86, 12, '00A102042878', '00A102042878NS', '2019-01-01', 1, '2019-03-06 12:43:09', '2019-03-16 11:39:17'),
(87, 6, '58108C5605EE', '302F2400029RL', '2018-09-20', 1, '2019-03-11 13:24:13', '2019-04-04 20:55:57'),
(88, 3, '001A3FFB2547', 'TESTE', '2019-01-01', 4, '2019-03-11 14:28:45', '2019-03-11 14:28:54'),
(89, 8, '0019462B46AC', 'EB-01V2045318', '2018-07-18', 3, '2019-03-11 17:09:46', '2019-04-12 11:56:15'),
(90, 5, '180D2C5326AD', 'BEPH0602143CA', '2019-03-11', 3, '2019-03-11 20:39:23', '2019-03-12 13:58:36'),
(91, 1, 'C58108C789067', 'EVAF4000860827', '2019-02-27', 3, '2019-03-12 13:46:56', '2019-03-12 13:48:41'),
(92, 5, '180D2C5326B1', 'BEPH0602142G5', '2019-03-11', 3, '2019-03-12 17:34:13', '2019-04-13 12:07:29'),
(93, 5, '180D2C53269D', 'BEPH060215GQ', '2019-03-11', 1, '2019-03-12 17:35:06', '2019-03-12 17:35:06'),
(94, 5, '180D2C5326AB', 'BEPH0602146BG', '2019-03-11', 3, '2019-03-12 17:35:54', '2019-04-15 11:35:16'),
(95, 5, '180D2C5326A1', 'BEPH0602149FD', '2019-03-11', 3, '2019-03-12 23:02:17', '2019-04-15 16:53:23'),
(96, 5, '180D2C532299', 'BEPH0602148AH', '2019-03-11', 3, '2019-03-12 23:03:22', '2019-03-29 14:42:46'),
(97, 5, '180D2C5326A7', 'BEPH0602147QE', '2019-03-11', 3, '2019-03-12 23:04:46', '2019-04-05 20:10:53'),
(98, 5, '180D2C5326AF', 'BEPH060214480', '2019-03-11', 1, '2019-03-12 23:05:41', '2019-03-12 23:05:41'),
(99, 5, '180D2C5326B3', 'BEPH0602141X3', '2019-03-11', 3, '2019-03-12 23:06:25', '2019-03-19 13:34:29'),
(100, 5, '180D2C190565', 'BEPH062143CA', '2019-03-11', 1, '2019-03-13 12:42:24', '2019-03-13 12:42:24'),
(101, 1, 'MAC001A3F625CA4', 'EVAD49020150F', '2019-02-27', 1, '2019-03-13 13:59:55', '2019-03-13 13:59:55'),
(102, 1, '58108C17AB99', 'EVAE29000659QW', '2019-02-27', 2, '2019-03-13 14:01:37', '2019-04-13 11:56:13'),
(103, 1, '58108C24E38B', 'EVAE4001709PV', '2019-02-27', 1, '2019-03-13 14:02:56', '2019-03-13 14:02:56'),
(104, 1, '58108C067452', 'EVAD22044382Y', '2019-02-27', 1, '2019-03-13 14:05:12', '2019-03-13 14:05:12'),
(105, 6, '58108C6EA98F', '302F3604487II', '2019-02-27', 3, '2019-03-13 14:06:39', '2019-04-05 16:40:25'),
(106, 1, '58108C24E33B', 'EVAE40017061U', '2019-02-27', 1, '2019-03-13 14:09:58', '2019-03-13 14:09:58'),
(107, 1, '58108C29651B', 'EVAE4600746CC', '2019-02-27', 3, '2019-03-13 14:11:33', '2019-03-19 18:51:07'),
(108, 1, '001A3FB3D231', 'SEMNS', '2019-02-27', 1, '2019-03-13 14:12:44', '2019-03-13 14:12:44'),
(109, 1, '001A3FB5536F', 'SEMNSEQ', '2019-02-27', 1, '2019-03-13 14:13:50', '2019-03-13 14:13:50'),
(110, 1, '58108C0723C6', 'CHYDD2502560GX', '2019-02-27', 1, '2019-03-13 14:15:08', '2019-03-13 14:15:08'),
(111, 13, '58108C203A75', 'EQIE470197110', '2019-02-27', 1, '2019-03-13 14:17:13', '2019-03-13 14:17:13'),
(112, 10, '58108C1D5DAF', '5V0E330220556', '2019-03-13', 3, '2019-03-13 14:39:06', '2019-03-19 14:44:23'),
(113, 3, '5V0E3000226BX', 'NSAPAGAD0', '2019-03-13', 1, '2019-03-13 14:39:42', '2019-03-13 14:39:42'),
(114, 1, '58108C2BAC4F', 'EVAE4602378U0', '2019-03-13', 3, '2019-03-13 14:41:00', '2019-04-13 11:46:28'),
(115, 6, '58108C55600FE', '58108C5600FE', '2019-03-13', 1, '2019-03-13 14:41:40', '2019-03-13 14:41:40'),
(116, 6, '58108C560118', '302F2400701P', '2019-03-13', 3, '2019-03-13 14:42:25', '2019-03-19 20:03:02'),
(117, 1, '58108C58F1F0', 'EVAF2609661SB', '2019-03-13', 3, '2019-03-13 14:43:02', '2019-04-11 16:41:35'),
(118, 1, '58108C36892F', 'EVAF050007565A', '2019-03-13', 3, '2019-03-13 14:43:40', '2019-04-11 20:21:10'),
(119, 5, '180D2C5326A5', 'BEPH0602145AD', '2019-03-11', 3, '2019-03-13 16:47:51', '2019-04-13 11:52:54'),
(120, 3, 'SEM MAC', '0UCG4800112ID', '2019-02-19', 3, '2019-03-13 21:22:39', '2019-03-13 21:24:02'),
(121, 2, '4R7G2611890WL', '001A3FE7FB07', '2019-01-01', 1, '2019-03-14 16:59:29', '2019-03-14 16:59:29'),
(122, 6, '58108C56061A', '302F2400024NM', '2018-10-01', 3, '2019-03-14 17:29:15', '2019-03-15 13:14:19'),
(123, 1, '58108C6EF4BE', 'EVAF36048467G', '2019-03-19', 1, '2019-03-14 20:36:53', '2019-04-13 11:50:59'),
(124, 1, '58108C2019C8', 'EVAE3801741LS', '2016-10-05', 3, '2019-03-15 12:03:18', '2019-03-21 14:16:07'),
(125, 2, '001A3F6836EC', 'VG5E03042980S', '2019-01-01', 3, '2019-03-15 12:05:00', '2019-03-15 19:56:04'),
(126, 14, '58108C1D5C84', '5V0E33021101M', '2019-03-15', 1, '2019-03-15 14:14:30', '2019-03-15 14:14:30'),
(127, 14, '58108C1D6616', '5V0E33041465K', '2019-03-15', 1, '2019-03-15 14:15:15', '2019-03-15 14:15:15'),
(128, 1, '58108C5B926B', 'EVAF2804150W1', '2019-03-15', 3, '2019-03-15 14:17:08', '2019-03-21 14:15:36'),
(129, 14, '58108C1733E5', '5V0E2600354NF', '2019-01-01', 1, '2019-03-15 14:19:21', '2019-04-08 12:24:15'),
(130, 1, '001A3FCEAB5F', 'EVAC1501260UV', '2019-01-01', 3, '2019-03-15 14:23:40', '2019-03-28 19:46:42'),
(131, 10, '58108C1A9DB1', '5V0E30001129A', '2019-03-19', 1, '2019-03-15 14:27:21', '2019-03-21 17:04:39'),
(132, 2, '180D2C06C0A4', '4R7G3705633PH', '2018-10-31', 3, '2019-03-15 14:37:28', '2019-03-28 19:43:55'),
(133, 8, '0019462B4664', 'EB01V204594', '2018-07-18', 3, '2019-03-15 14:38:32', '2019-03-25 11:37:56'),
(134, 15, 'C4700B04A898', 'V1804141705', '2018-07-17', 3, '2019-03-15 14:39:55', '2019-04-15 16:52:50'),
(135, 16, '58108C411022', 'HW0F1310925YL', '2019-03-19', 3, '2019-03-15 14:41:31', '2019-04-08 19:19:25'),
(136, 1, '58108C699D5B', 'EVAF3501975TM', '2018-01-19', 3, '2019-03-16 14:44:53', '2019-03-20 12:32:40'),
(137, 2, '58108C99EDC7', '4R7G0315165KU', '2018-02-09', 2, '2019-03-16 15:16:58', '2019-03-16 15:17:20'),
(138, 14, 'APAGAD0', '5V0E3000226BX', '2019-01-01', 1, '2019-03-18 11:53:21', '2019-03-29 19:18:16'),
(139, 6, '58108C511B44', '302F2303126TB', '2019-03-19', 3, '2019-03-19 16:45:43', '2019-04-08 19:22:55'),
(140, 17, '001A3FA11B68', 'WF12110943382', '2019-03-19', 1, '2019-03-19 17:52:48', '2019-03-19 17:52:48'),
(141, 1, '28108C58E67E', 'EVAF2606297SX', '2019-03-19', 3, '2019-03-19 18:21:32', '2019-04-04 19:48:46'),
(142, 1, '001A3F62FC51', 'EVAD5006298FG', '2019-03-19', 4, '2019-03-21 14:41:22', '2019-03-28 16:49:40'),
(143, 1, '58108C3032AD', 'EVAE5002657HQ', '2019-03-19', 4, '2019-03-21 14:44:30', '2019-03-26 20:15:47'),
(144, 6, '58108C2D5C48', '302E4700783V0', '2019-03-19', 1, '2019-03-21 16:48:18', '2019-04-05 12:09:12'),
(145, 6, '58108C512000', '302F231956YI', '2019-03-19', 1, '2019-03-21 16:49:08', '2019-03-21 16:49:08'),
(146, 8, '0019462B4649', 'EB01V2045285', '2019-01-01', 3, '2019-03-25 11:47:40', '2019-03-28 11:45:55'),
(147, 14, '58108C1D449E', '5V0E3301172GS', '2019-03-26', 1, '2019-03-26 17:57:53', '2019-03-26 17:57:53'),
(148, 6, '58108C512C0C', '302F2301956YL', '2019-03-19', 3, '2019-03-26 20:08:57', '2019-03-26 20:10:22'),
(149, 2, '180D2C0651B8', '4R7G37007999F', '2019-03-19', 2, '2019-03-28 16:43:36', '2019-04-03 16:42:45'),
(150, 8, '00194629A006', 'EB01V2009252', '2019-03-19', 3, '2019-03-28 18:34:26', '2019-03-28 18:36:53'),
(151, 18, 'E067B3026DC0', '(01)0789890108457021)2702B21521', '2019-03-28', 1, '2019-03-28 19:31:56', '2019-03-28 19:31:56'),
(152, 2, '58108C8BF3C1', '4R7F490022538', '2018-01-19', 3, '2019-03-29 12:09:51', '2019-04-04 19:47:55'),
(153, 8, '0019462B4697', 'EB01V2045311', '2018-07-18', 3, '2019-03-29 12:11:24', '2019-04-03 11:57:19'),
(154, 19, '8014A874C668', 'V1707116490', '2019-01-01', 3, '2019-03-29 14:35:40', '2019-04-08 20:04:14'),
(155, 14, 'V0E30001206M', '5V0E30001206M', '2019-01-01', 1, '2019-03-29 14:39:45', '2019-03-29 14:39:45'),
(156, 8, 'R0CKETM5', '802AA8AEDB71', '2871-08-05', 4, '2019-03-29 17:32:39', '2019-03-29 17:33:34'),
(157, 1, '001A3FE0D92D', 'EVAC31042490E', '2019-03-30', 1, '2019-03-30 14:33:35', '2019-03-30 14:35:27'),
(158, 2, 'APAGAD0', '4R7G03115480A', '2018-02-20', 1, '2019-04-03 11:48:19', '2019-04-05 12:09:30'),
(159, 6, '58108C511B44', '302F2303126TB', '2019-01-01', 1, '2019-04-03 11:57:37', '2019-04-08 19:25:15'),
(160, 21, '8014A863EE50', 'V17041806292', '2019-01-01', 2, '2019-04-04 18:56:50', '2019-04-15 16:54:17'),
(161, 1, '58108C17AB99', 'EVAD50035930T', '2019-01-01', 4, '2019-04-05 11:48:54', '2019-04-05 11:50:11'),
(162, 5, '180D2C53269D', 'BEPH0602150GQ', '2019-03-11', 3, '2019-04-06 12:03:25', '2019-04-15 11:38:44'),
(163, 2, '58108C948FDD', '4R7G0100869K4', '2018-08-01', 1, '2019-04-10 11:50:39', '2019-04-10 11:50:39'),
(164, 2, '58108C948FDD', '4R7G0100869L4', '2018-08-01', 3, '2019-04-10 11:52:10', '2019-04-10 11:52:40'),
(165, 2, '58108C2DD7DA', 'VG5E4710228VQ', '2017-06-19', 1, '2019-04-10 14:25:34', '2019-04-13 11:51:16'),
(166, 4, '180D2C567FA9', 'R1VH0624875PD', '2019-04-11', 2, '2019-04-11 14:50:20', '2019-04-12 20:27:10'),
(167, 4, '180D2C567FA7', 'R1VH0624876C5', '2019-04-11', 3, '2019-04-11 16:34:44', '2019-04-15 11:38:19'),
(168, 4, '180D2C567FAB', 'R1VH06248747D', '2019-04-11', 1, '2019-04-11 16:36:41', '2019-04-11 16:36:41'),
(169, 4, '180D2C567FAD', 'R1VH0624873JK', '2019-04-11', 1, '2019-04-11 16:38:10', '2019-04-11 16:38:10'),
(170, 4, '180D2C567FAF', 'R1VH0624872M1', '2019-04-11', 3, '2019-04-11 16:39:18', '2019-04-15 16:55:24'),
(171, 2, '58108CA441CC', '4R7G0813112P8', '2018-03-15', 3, '2019-04-11 16:55:18', '2019-04-13 11:46:13'),
(172, 4, '180D2C567F9D', 'R1VH06248825SX', '2019-04-11', 1, '2019-04-11 17:02:56', '2019-04-11 17:02:56'),
(173, 4, '180D2C567F9B', 'R1VH0624883ZK', '2019-04-11', 1, '2019-04-11 17:04:30', '2019-04-11 17:04:30'),
(174, 4, '180D2C567F97', 'R1VH0624886I5', '2019-04-11', 1, '2019-04-11 17:05:52', '2019-04-11 17:07:48'),
(175, 4, '180D2C567F99', 'R1VH06248855Z', '2019-04-11', 1, '2019-04-11 17:09:19', '2019-04-11 17:09:19'),
(176, 4, '180D2C567F95', 'R1VH0624884XN', '2019-04-11', 1, '2019-04-11 17:10:31', '2019-04-11 17:10:31'),
(177, 4, '180D2C567FB1', 'R1VH06248718W', '2019-04-11', 1, '2019-04-11 17:47:38', '2019-04-11 17:47:38'),
(178, 4, '180D2C567FB3', 'R1VH0624870AB', '2019-04-11', 1, '2019-04-11 17:49:01', '2019-04-11 17:49:01'),
(179, 4, '180D2C567FB5', 'R1VH062486998', '2019-04-11', 2, '2019-04-11 17:50:19', '2019-04-15 16:54:17'),
(180, 4, '180D2C567FB7', 'R1VH06248680X', '2019-04-11', 1, '2019-04-11 17:51:53', '2019-04-11 17:51:53'),
(181, 4, '180D2C567FBB', 'R1VH0624867VC', '2019-04-11', 1, '2019-04-11 17:53:39', '2019-04-11 17:53:39'),
(182, 4, '180D2C56804B', 'R1VH0624801GI', '2019-04-11', 1, '2019-04-11 18:40:27', '2019-04-11 18:40:27'),
(183, 4, '180D2C568049', 'R1VH0624800EB', '2019-04-11', 1, '2019-04-11 18:41:58', '2019-04-11 18:41:58'),
(184, 4, '180D2C56804F', 'R1VH0624799XW', '2019-04-11', 1, '2019-04-11 18:51:55', '2019-04-11 18:51:55'),
(185, 4, '180D2C568047', 'R1VH0624798G9', '2019-04-11', 1, '2019-04-11 18:53:36', '2019-04-11 18:53:36'),
(186, 4, '180D2C56804D', 'R1VH0624797SH', '2019-04-11', 1, '2019-04-11 18:58:20', '2019-04-11 18:58:20'),
(187, 1, '58108C0BFE55', 'EVAD4002843WM', '2019-04-13', 1, '2019-04-13 12:15:56', '2019-04-13 12:15:56'),
(188, 3, '180D2C158099', '0UCG43010570U', '2018-01-19', 1, '2019-04-13 12:17:36', '2019-04-13 12:17:36'),
(189, 2, '58108CB767BC', 'VG5D2808047AE', '2019-04-13', 1, '2019-04-13 12:20:41', '2019-04-13 12:20:41'),
(190, 5, '180D2C189847', 'BEPG4600114ML', '2018-12-28', 2, '2019-04-15 11:49:44', '2019-04-15 16:54:17');
");
    }
}
