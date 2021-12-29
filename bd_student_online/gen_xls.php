
<?php
/**
 * PHPExcel
 *
 * Copyright (c) 2006 - 2015 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2015 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt	LGPL
 * @version    ##VERSION##, ##DATE##
 */
require "isUser.php";
require "connectToDB.php";

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');



define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once 'Classes/PHPExcel.php';


// Create new PHPExcel object
echo date('H:i:s') , " Create new PHPExcel object" , EOL;
$objPHPExcel = new PHPExcel();



// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;

$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
							 ->setLastModifiedBy("Maarten Balliauw")
							 ->setTitle("PHPExcel Test Document")
							 ->setSubject("PHPExcel Test Document")
							 ->setDescription("Test document for PHPExcel, generated using PHP classes.")
							 ->setKeywords("office PHPExcel php")
							 ->setCategory("Test result file");


// students
$linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_stud, stud_fio, stud_faculty, stud_gr, stud_no_zk, stud_no_tel
FROM stud"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 
 
  // Для записи
 $numst=$row['id_stud'];
 //$rez[$num]=$row['stud_fio'] . ';' . $row['stud_faculty']. ';' . $row['stud_gr'] .';' . $row['stud_no_zk'];
 $rfio[$numst]=$row['stud_fio'];
 $rfac[$numst]=$row['stud_faculty'];
 $rgr[$numst]=$row['stud_gr'];
 $rzk[$numst]=$row['stud_no_zk'];
 
 

}
// subject 

 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:

 $result=mysqli_query($linkmy, "SELECT id_subj, subj_name ,subj_fio_prepod
FROM subject"); // запрос на выборку сведений о пользователях
while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса

 // Для записи
 $numsubj=$row['id_subj'];
 $rname[$numsubj]=$row['subj_name'];
 $rfioprepod[$numsubj]=$row['subj_fio_prepod'];
}

// zachetnaya vedomost'
$linkmy=mysqli_connect("localhost", "root") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($linkmy, 'SET NAMES utf8'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($linkmy, "students") or die("Нет такой таблицы!");
 $result=mysqli_query($linkmy, "SELECT id_zachved, zv_data ,id_stud, id_subj, zv_grade, zv_npp
FROM zachved"); // запрос на выборку сведений о пользователях

	// Add some data

$x=2;

while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
 $stnum=$row['id_stud'];
 $subjnum=$row['id_subj'];
  // Запись в файл
 $numzv=$row['id_zachved'];
// $rezzv[]=$row['zv_npp'] . ';' . $rez[$stnum] . ';' . $row['zv_data'] . ';' . $rezsubj[$subjnum]. ';' . $row['zv_grade'] . "\n";
 $rnpp['id_zachved']=$row['zv_npp'];
 $rstnum['id_zachved']=$row['id_stud'];
  $rsubjnum['id_zachved']=$row['id_subj'];
   $rdata['id_zachved']=$row['zv_data'];
    $rgrade['id_zachved']=$row['zv_grade'];

$zvfio = $rfio[$rstnum['id_zachved']];
$zvfac = $rfac[$rstnum['id_zachved']];
$zvgr = $rgr[$rstnum['id_zachved']];
$zvzk = $rzk[$rstnum['id_zachved']];

 $zvsubjname=$rname[$rsubjnum['id_zachved']];
 $zvsubjfioprepod= $rfioprepod[$rsubjnum['id_zachved']];
 

echo date('H:i:s') , " Add some data" , EOL;
$objPHPExcel->setActiveSheetIndex(0)

          
          ->setCellValue('A'.$x, $rnpp['id_zachved'])
          ->setCellValue('B'.$x, $zvfio)
		  ->setCellValue('C'.$x, $zvfac)
		  ->setCellValue('D'.$x, $zvgr)
		  ->setCellValue('E'.$x, $zvzk)
		  ->setCellValue('F'.$x, $rdata['id_zachved'])
		  ->setCellValue('G'.$x, $zvsubjname)
		  ->setCellValue('H'.$x, $rgrade['id_zachved'])
		  ->setCellValue('I'.$x, $zvsubjfioprepod);

$x++;
}






// Miscellaneous glyphs, UTF-8
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'НПП')
            ->setCellValue('B1', 'ФИО студента')
			 ->setCellValue('C1', 'Факультет')
			  ->setCellValue('D1', 'Группа')
			  ->setCellValue('E1', 'Номер ЗК')
			  ->setCellValue('F1', 'Дата СЗ')
			  ->setCellValue('G1', 'Название предмета')
			  ->setCellValue('H1', 'Оценка')
			  ->setCellValue('I1', 'ФИО преподавателя');

$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(0)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(1)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(2)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(3)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(4)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(5)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(6)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(7)->setAutoSize(true);
$objPHPExcel->getActiveSheet()->getColumnDimensionByColumn(8)->setAutoSize(true);

// Rename worksheet
echo date('H:i:s') , " Rename worksheet" , EOL;
$objPHPExcel->getActiveSheet()->setTitle('Simple');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Save Excel 2007 file
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save(str_replace('.php', '.xlsx', __FILE__));
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Save Excel5 file
echo date('H:i:s') , " Write to Excel5 format" , EOL;
$callStartTime = microtime(true);

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save(str_replace('.php', '.xls', __FILE__));

$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xls', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;
// Echo memory usage
echo date('H:i:s') , ' Current memory usage: ' , (memory_get_usage(true) / 1024 / 1024) , " MB" , EOL;


// Echo memory peak usage
echo date('H:i:s') , " Peak memory usage: " , (memory_get_peak_usage(true) / 1024 / 1024) , " MB" , EOL;

// Echo done
echo date('H:i:s') , " Done writing files" , EOL;
echo 'Files have been created in ' , getcwd() , EOL;

echo "<br>";
echo "<a href='gen_xls.xls' download='gen_xls'>Скачать Excel File (xls) </a>";
echo "<br>";
echo "<br>";
echo "<a href='gen_xls.xlsx' download='gen_xls'>Скачать Excel File (xlsx) </a>";
