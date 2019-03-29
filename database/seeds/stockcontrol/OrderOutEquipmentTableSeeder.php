<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderOutEquipmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::connection('mysql_stockcontrol')->insert("INSERT INTO `order_out_equipment` (`id`, `order_out_id`, `equipment_id`, `created_at`, `updated_at`) VALUES
(1, 1, 10, NULL, NULL),
(2, 1, 14, NULL, NULL),
(3, 2, 16, NULL, NULL),
(4, 2, 19, NULL, NULL),
(5, 3, 13, NULL, NULL),
(6, 4, 7, NULL, NULL),
(7, 5, 5, NULL, NULL),
(8, 5, 12, NULL, NULL),
(9, 6, 21, NULL, NULL),
(10, 7, 9, NULL, NULL),
(11, 7, 22, NULL, NULL),
(12, 7, 23, NULL, NULL),
(13, 8, 38, NULL, NULL),
(14, 9, 11, NULL, NULL),
(15, 10, 61, NULL, NULL),
(16, 11, 4, NULL, NULL),
(17, 12, 2, NULL, NULL),
(18, 12, 55, NULL, NULL),
(19, 13, 3, NULL, NULL),
(20, 13, 51, NULL, NULL),
(21, 14, 83, NULL, NULL),
(22, 15, 45, NULL, NULL),
(23, 16, 48, NULL, NULL),
(24, 17, 84, NULL, NULL),
(25, 18, 2, NULL, NULL),
(26, 18, 55, NULL, NULL),
(27, 19, 8, NULL, NULL),
(28, 19, 57, NULL, NULL),
(29, 20, 5, NULL, NULL),
(30, 20, 47, NULL, NULL),
(31, 21, 77, NULL, NULL),
(32, 22, 59, NULL, NULL),
(33, 23, 86, NULL, NULL),
(34, 24, 1, NULL, NULL),
(35, 25, 86, NULL, NULL),
(36, 26, 44, NULL, NULL),
(37, 27, 62, NULL, NULL),
(38, 28, 62, NULL, NULL),
(39, 29, 10, NULL, NULL),
(40, 30, 58, NULL, NULL),
(41, 31, 89, NULL, NULL),
(42, 32, 90, NULL, NULL),
(43, 33, 24, NULL, NULL),
(44, 33, 54, NULL, NULL),
(45, 34, 91, NULL, NULL),
(46, 35, 49, NULL, NULL),
(47, 35, 53, NULL, NULL),
(48, 35, 65, NULL, NULL),
(49, 35, 82, NULL, NULL),
(50, 36, 52, NULL, NULL),
(51, 37, 119, NULL, NULL),
(52, 38, 74, NULL, NULL),
(53, 39, 27, NULL, NULL),
(54, 39, 50, NULL, NULL),
(55, 39, 56, NULL, NULL),
(56, 40, 120, NULL, NULL),
(57, 41, 53, NULL, NULL),
(58, 41, 122, NULL, NULL),
(59, 42, 49, NULL, NULL),
(60, 42, 114, NULL, NULL),
(61, 42, 116, NULL, NULL),
(62, 43, 85, NULL, NULL),
(63, 43, 124, NULL, NULL),
(64, 43, 125, NULL, NULL),
(65, 44, 112, NULL, NULL),
(66, 44, 137, NULL, NULL),
(67, 45, 119, NULL, NULL),
(68, 46, 117, NULL, NULL),
(69, 46, 138, NULL, NULL),
(70, 47, 49, NULL, NULL),
(71, 48, 99, NULL, NULL),
(72, 49, 28, NULL, NULL),
(73, 49, 41, NULL, NULL),
(74, 49, 49, NULL, NULL),
(75, 49, 67, NULL, NULL),
(76, 49, 116, NULL, NULL),
(77, 50, 43, NULL, NULL),
(78, 51, 107, NULL, NULL),
(79, 52, 124, NULL, NULL),
(80, 52, 128, NULL, NULL),
(81, 53, 136, NULL, NULL),
(82, 54, 30, NULL, NULL),
(83, 54, 89, NULL, NULL),
(84, 54, 119, NULL, NULL),
(85, 55, 39, NULL, NULL),
(86, 55, 63, NULL, NULL),
(87, 56, 39, NULL, NULL),
(88, 56, 63, NULL, NULL);");
    }
}