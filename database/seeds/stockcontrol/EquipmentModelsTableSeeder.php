<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipmentModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql_stockcontrol')->insert("INSERT INTO `equipment_models` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'WOM 5000 MIMO', '2019-02-08 17:25:02', '2019-02-08 17:25:02'),
(2, 'IWR 1000N', '2019-02-08 17:25:20', '2019-02-08 17:25:20'),
(3, 'WOM 5A MIMO', '2019-02-08 17:25:40', '2019-02-08 17:25:40'),
(4, 'IWR 3000N', '2019-02-08 17:26:42', '2019-02-08 17:26:42'),
(5, 'ONU 110', '2019-02-08 17:27:17', '2019-02-08 17:27:17'),
(6, 'APC 5A-20', '2019-02-09 12:19:16', '2019-02-09 12:19:16'),
(7, 'WOM 5000 CISO', '2019-02-11 19:40:59', '2019-02-11 19:40:59'),
(8, 'ONU GEPON EB01 v2', '2019-02-14 10:56:21', '2019-02-14 10:56:21'),
(9, 'TL-WR720N', '2019-02-14 15:45:13', '2019-02-14 15:45:13'),
(10, 'APC 5M-18+', '2019-02-14 15:47:30', '2019-02-14 15:47:30'),
(11, 'Roteador N 300 MBPS', '2019-02-26 19:14:14', '2019-02-26 19:14:14'),
(12, 'ONU GEPON CTS 2702B', '2019-03-06 12:41:57', '2019-03-06 12:41:57'),
(13, 'APC5 A 15', '2019-03-13 14:16:13', '2019-03-13 14:16:13'),
(14, 'APC 5M-18', '2019-03-15 14:12:09', '2019-03-15 14:12:09'),
(15, 'ONU GEPON FW-01-GE', '2019-03-15 14:39:19', '2019-03-15 14:39:19'),
(16, 'KEO KLR300N', '2019-03-15 14:40:52', '2019-03-15 14:40:52'),
(17, 'Intelbras WRN 150', '2019-03-19 17:51:58', '2019-03-19 17:51:58'),
(18, 'ONT GEPON CTS 2702B', '2019-03-28 19:30:56', '2019-03-28 19:30:56'),
(19, 'ONU EPON V2801E', '2019-03-29 14:34:48', '2019-03-29 14:34:48'),
(21, 'ONU EPON V2801HW', '2019-04-04 18:56:10', '2019-04-04 18:56:10');
");
    }
}
