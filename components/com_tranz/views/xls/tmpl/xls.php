<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
$table=JRequest::getint('table');
$user = & JFactory::getUser ();
$database =& JFactory::getDBO();
if ($table==1) {
error_reporting(E_ALL);

date_default_timezone_set('Asia/Tbilisi');
$date55=date("Y-m-d");
/** PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Time Bank")
							 ->setLastModifiedBy("Time Bank")
							 ->setTitle("Office 2007 XLSX Document")
							 ->setSubject("Office 2007 XLSX Document")
							 ->setDescription("")
							 ->setKeywords("office 2007 openxml php time bank")
							 ->setCategory("Work file");

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('C1', 'Список встреч и мероприятий Банка Времени "Свобода"')
            ->setCellValue('A3', '№')
            ->setCellValue('B3', 'Название')
            ->setCellValue('C3', 'Дата ↓')
            ->setCellValue('D3', 'Адрес')
			->setCellValue('E3', 'Приглашение');
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(50);
$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A:E')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A:E')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A:E')->getAlignment()->setWrapText(true);
$database->setQuery("SELECT * FROM `#__tranz_vstrechi` where (dov='На рассмотрении' or dov='Проверено') order by dov desc, date asc");
$table1=$database->loadObjectList();
foreach ($table1 as $key => $tabb) {
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.(($key)+4), $tabb->id)
			->setCellValue('B'.(($key)+4), $tabb->name)
			->setCellValue('C'.(($key)+4), $tabb->date)
			->setCellValue('D'.(($key)+4), $tabb->adres)
			->setCellValue('E'.(($key)+4), $tabb->comment);

}
$objPHPExcel->getActiveSheet()->setTitle('Все встречи');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Таблица встреч-'.$date55.'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
}
if ($user->get('guest') != 1) {
if ($table==2) {
error_reporting(E_ALL);

date_default_timezone_set('Asia/Tbilisi');
$date55=date("Y-m-d");
/** PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Time Bank")
							 ->setLastModifiedBy("Time Bank")
							 ->setTitle("Office 2007 XLSX Document")
							 ->setSubject("Office 2007 XLSX Document")
							 ->setDescription("")
							 ->setKeywords("office 2007 openxml php time bank")
							 ->setCategory("Work file");

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('C1', 'Мои подтверждённые платежи')
            ->setCellValue('A3', '№↑')
            ->setCellValue('B3', 'От участника')
            ->setCellValue('C3', 'Участнику')
            ->setCellValue('D3', 'Часов')
			->setCellValue('E3', 'Рейт')
			->setCellValue('F3', 'Дата создания')
			->setCellValue('G3', 'Дата подтверждения')
			->setCellValue('H3', 'Объявление');
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(7.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(6);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(17.71);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(26);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(30);
$objPHPExcel->getActiveSheet()->getStyle('C1')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
// Rename sheet
$database->setQuery("SELECT a.id as id, b.name as name1, a.touserid as touserid, a.fromuserid as fromuserid , c.name as name2, a.points as points, a.insert_date as insert_date, a.keyreference as keyreference, a.datareference as datareference, a.rank as rank, a.accept_date as accept_date, a.namereference as namereference, d.category as category, e.name as delname1, f.name as delname2, d.published as publ FROM `#__tranz_data` a left join `#__users` b on a.fromuserid = b.id left join `#__users` c on a.touserid = c.id left join `#__adsmanager_ads` d on a.keyreference = d.id left join `#__users_del` e on a.fromuserid = e.id left join `#__users_del` f on a.touserid = f.id where (a.touserid = ".$user->id." or a.fromuserid = ".$user->id.")    ORDER BY a.id DESC");
$table1=$database->loadObjectList();
foreach ($table1 as $key => $tabb) {
$del='';
$del1='';
$del2='';
 if ($user->id==$tabb->touserid) {$del3="+".$tabb->points;
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+4))->getFill()->getStartColor()->setRGB('e0ffdf');
} else {$del3="-".$tabb->points;
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+4))->getFill()->getStartColor()->setRGB('ffdfdf');
}
if ($tabb->insert_date==$tabb->accept_date) {
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+4))->getFill()->getStartColor()->setRGB('e0ffdf');
$objPHPExcel->getActiveSheet()->getStyle('G'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('G'.(($key)+4))->getFill()->getStartColor()->setRGB('e0ffdf');
}
if ($tabb->name1 !='') {$del1 =$tabb->name1." ($tabb->fromuserid)";} else {$del1=$tabb->delname1." ($tabb->fromuserid) Удалён";
$objPHPExcel->getActiveSheet()->getStyle('B'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('B'.(($key)+4))->getFill()->getStartColor()->setRGB('f7f7f7');
}
if ($tabb->name2 !='') {$del2 =$tabb->name2." ($tabb->touserid)";} else {$del2=$tabb->delname2." ($tabb->touserid) Удалён";
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+4))->getFill()->getStartColor()->setRGB('f7f7f7');
}
if ((($tabb->category =='') and ($tabb->keyreference !=0) ) or ($tabb->publ==0)) {$del=$tabb->namereference." (".$tabb->keyreference.") Удалено";
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->getFill()->getStartColor()->setRGB('f7f7f7');
}
elseif (($tabb->category !='') and ($tabb->keyreference !=0)) {$del=$tabb->namereference." (".$tabb->keyreference.")";}
elseif ($tabb->keyreference ==0) {$del=$tabb->namereference." (".$tabb->keyreference.")";
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->getFill()->getStartColor()->setRGB('f7f7f7');
};
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.(($key)+4), $tabb->id)
			->setCellValue('B'.(($key)+4), $del1)
			->setCellValue('C'.(($key)+4), $del2)
			->setCellValue('D'.(($key)+4), $del3)
			->setCellValue('E'.(($key)+4), $tabb->rank)
			->setCellValue('F'.(($key)+4), $tabb->insert_date)
			->setCellValue('G'.(($key)+4), $tabb->accept_date)
			->setCellValue('H'.(($key)+4), $del);
}
$objPHPExcel->getActiveSheet()->setTitle('Все перечисления');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Таблица платежей-'.$date55.'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
}
if ($table==3) {
error_reporting(E_ALL);

date_default_timezone_set('Asia/Tbilisi');
$date55=date("Y-m-d");
$date22=date("Y-m-d H:i:s");
/** PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Time Bank")
							 ->setLastModifiedBy("Time Bank")
							 ->setTitle("Office 2007 XLSX Document")
							 ->setSubject("Office 2007 XLSX Document")
							 ->setDescription("")
							 ->setKeywords("office 2007 openxml php time bank")
							 ->setCategory("Work file");

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B1', 'Список участников на '.$date22)
            ->setCellValue('A3', '№')
            ->setCellValue('B3', 'Ф.И.О. ↓')
            ->setCellValue('C3', 'Друзья')
            ->setCellValue('D3', 'Рейтинг')
			->setCellValue('E3', 'Минимум')
			->setCellValue('F3', 'Максимум')
			->setCellValue('G3', 'Часы');
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(42);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(9.29);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(13.71);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(10.14);
$objPHPExcel->getActiveSheet()->getStyle('B1')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
// Rename sheet
$database->setQuery("select * from #__users where block=0 order by name");
$table1=$database->loadObjectList();
$summ=0;
foreach ($table1 as $key => $tabb) {
if ($tabb->dov==0) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->getStartColor()->setRGB('FFFFF0');
}
if ($tabb->dov==1) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->getStartColor()->setRGB('f2fff3');
}
if ($tabb->dov==2) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':G'.(($key)+4))->getFill()->getStartColor()->setRGB('c8ffcd');
}
if (($tabb->rating !=0) && ($tabb->count1 !=0)) {$rat=round($tabb->rating/$tabb->count1);} else {$rat=0;};
$cc=0;
$database->setQuery('select * from #__comprofiler_members where ((referenceid='.$tabb->id.') and (accepted=1))');
$table2=$database->loadObjectList();
$cc=count ($table2);
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.(($key)+4), $tabb->id)
			->setCellValue('B'.(($key)+4), $tabb->name)
			->setCellValue('C'.(($key)+4), $cc)
			->setCellValue('D'.(($key)+4), $rat)
			->setCellValue('E'.(($key)+4), $tabb->min_points)
			->setCellValue('F'.(($key)+4), $tabb->max_points)
			->setCellValue('G'.(($key)+4), $tabb->points);
$summ=$summ+$tabb->points;
}
$database->setQuery('select * from #__tranz_gen where id=1');
$table3=$database->loadObjectList();
foreach ($table3 as $tabr);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+5))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+5))->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G'.(($key)+5))->getFont()->setBold(true);
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('F'.(($key)+5), 'Итого:')
			->setCellValue('G'.(($key)+5), $summ);
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('B'.(($key)+6), 'Общий минимум: '.$tabr->min_points.'                          Общий максимум: '.$tabr->max_points.'                       Количество участников: '.count ($table1))
			->setCellValue('B'.(($key)+8), 'Жёлтые - не активированные')
			->setCellValue('C'.(($key)+8), 'Светло зелёные активированные')
			->setCellValue('F'.(($key)+8), 'Зелёные - доверенные');
$objPHPExcel->getActiveSheet()->getStyle('B'.(($key)+8))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('B'.(($key)+8))->getFill()->getStartColor()->setRGB('FFFFF0');
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+8).':E'.(($key)+8))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+8).':E'.(($key)+8))->getFill()->getStartColor()->setRGB('f2fff3');
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+8).':G'.(($key)+8))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+8).':G'.(($key)+8))->getFill()->getStartColor()->setRGB('c8ffcd');
$objPHPExcel->getActiveSheet()->setTitle('Все участники');

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="Таблица участников-'.$date55.'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
}
if ($table==4) {
error_reporting(E_ALL);

date_default_timezone_set('Asia/Tbilisi');
$date55=date("Y-m-d");
$date22=date("Y-m-d H:i:s");
/** PHPExcel */
require_once 'Classes/PHPExcel.php';

// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set properties
$objPHPExcel->getProperties()->setCreator("Time Bank")
							 ->setLastModifiedBy("Time Bank")
							 ->setTitle("Office 2007 XLSX Document")
							 ->setSubject("Office 2007 XLSX Document")
							 ->setDescription("")
							 ->setKeywords("office 2007 openxml php time bank")
							 ->setCategory("Work file");
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('I3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setBold(true);
$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(4);
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(40);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(10.7);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(30);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(13);
$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(22);
$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(22);
$objPHPExcel->getActiveSheet()->getStyle('D1')->getFont()->setSize(18);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('I3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('J3')->getFont()->setSize(14);
$objPHPExcel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('B3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('C3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('D3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('E3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('F3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('G3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('H3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('I3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('J3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

$vid=JRequest::getint('vid');
$usr='';
if ($vid==0) {
$uss=JRequest::getint('user', -1);
if ($uss==(-1)) {
$tx='Все объявления';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id  where published=1 order by ad_headline");
} else {
$database->setQuery("select name from #__users where id=".$database->Quote($uss));
$usr=' '.($database->loadResult());
$tx='Объявления';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id  where a.published=1 and a.userid=".$database->Quote($uss)." order by ad_headline");
}} elseif ($vid==4) { $tx='Все предложения';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id  where published=1 and root_cat=4 order by ad_headline");
} elseif ($vid==3) { $tx='Весь спрос';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id  where published=1 and root_cat=3 order by ad_headline");
} elseif (($vid==1) or ($vid==2) or ($vid==5) or ($vid==6)) { $tx='Объявления';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id inner join #__adsmanager_categories as c on a.category=c.id where a.published=1 and c.parent=".$database->Quote($vid)." order by ad_headline");
}
 elseif ($vid>6) { $tx='Объявления';
$database->setQuery("select a.*, b.name, b.dov from #__adsmanager_ads as a inner join #__users as b on a.userid=b.id  where published=1 and category=".$database->Quote($vid)." order by ad_headline");
} else {jexit();}

$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('D1', $tx.$usr.' на '.$date22)
            ->setCellValue('A3', '№')
            ->setCellValue('B3', 'Картинка')
            ->setCellValue('C3', 'Название ↓')
            ->setCellValue('D3', 'Содержание')
			->setCellValue('E3', 'Рейтинг')
			->setCellValue('F3', 'Цена')
			->setCellValue('G3', 'Автор')
			->setCellValue('H3', 'Контакты')
			->setCellValue('I3', 'Дата публикации')
			->setCellValue('J3', 'Обязательное');
$table1=$database->loadObjectList();
$styleArray = array(
'borders' => array(
	'outline' => array(
		'style' => PHPExcel_Style_Border::BORDER_MEDIUMDASHDOT,
		'color' => array('argb' => '00000000')
		)
	)
);
$styleArray1 = array(
'borders' => array(
	'outline' => array(
		'style' => PHPExcel_Style_Border::BORDER_MEDIUM,
		'color' => array('argb' => '00000000')
		)
	)
);
		$database->setQuery('SELECT id FROM #__tranz_groups where (FIND_IN_SET (\''.$user->id.'\', users))');
		$erg=$database->loadResultArray();
		foreach($table1 as $kkey=>$content)
		{
			$fv=array_unique(array_diff(explode (',', $content->ad_group), array('')));
			if (!(((count (array_intersect ($erg, $fv)))>0) or (count ($fv)==0) or ($fv[1]==0) or (($user->id == $content->userid)&&($content->userid != 0)))) {unset ($table1 [$kkey]);}
		}
/* 		print_r ($table1); */
$key=0;
foreach ($table1 as $tabb) {
$iDrowing = new PHPExcel_Worksheet_Drawing();
if (file_exists ('images/com_adsmanager/img/'.$tabb->id.'a_t.jpg')==true) {$pt='images/com_adsmanager/img/'.$tabb->id.'a_t.jpg';} else {$pt='components/com_adsmanager/images/nopic.gif';}
$iDrowing->setPath($pt);
$iDrowing->setCoordinates('B'.(($key)+4));
/* $iDrowing->setResizeProportional(false); */
$iDrowing->setWidth(140);
 
 if ((($objPHPExcel->getActiveSheet()->getRowDimension((($key)+4))->GetRowHeight())<$iDrowing->getHeight()) and ((strlen ($tabb->ad_text))<350)) {$objPHPExcel->getActiveSheet()->getRowDimension((($key)+4))->setRowHeight($iDrowing->getHeight());} else {
$iDrowing->setResizeProportional(false);
$iDrowing->setHeight(10);
 }
$iDrowing->setWorksheet($objPHPExcel->getActiveSheet());
if ($tabb->dov==0) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->getStartColor()->setRGB('FFFFF0');
}
if ($tabb->dov==1) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->getStartColor()->setRGB('f2fff3');
}
if ($tabb->dov==2) {
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getFill()->getStartColor()->setRGB('c8ffcd');
}
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('B'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('E'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('G'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('H'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('I'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('J'.(($key)+4))->applyFromArray($styleArray);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle('A'.(($key)+4).':J'.(($key)+4))->getAlignment()->setWrapText(true);
$zv='';
if (($tabb->ad_datestart!='') or ($tabb->ad_dateend!='')) {$zv='     Желательно звонить с '.$tabb->ad_datestart.' до '.$tabb->ad_dateend;}
if ($tabb->ad_important==1) {$imp='Да';} else {$imp='Нет';}
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.(($key)+4), $tabb->id)
			->setCellValue('C'.(($key)+4), $tabb->ad_headline)
			->setCellValue('D'.(($key)+4), $tabb->ad_text)
			->setCellValue('E'.(($key)+4), $tabb->ad_rating)
			->setCellValue('F'.(($key)+4), $tabb->ad_price)
			->setCellValue('G'.(($key)+4), $tabb->name)
			->setCellValue('H'.(($key)+4), $tabb->ad_phone.$zv)
			->setCellValue('I'.(($key)+4), $tabb->date_created)
			->setCellValue('J'.(($key)+4), $imp);
$key=$key+1;
			}

$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('C'.(($key)+6), 'Жёлтые - не проверенные')
			->setCellValue('D'.(($key)+6), 'Светло зелёные - поданные впервые, проверенные')
			->setCellValue('F'.(($key)+6), 'Зелёные - проверенные, рабочие')
			->setCellValue('I'.(($key)+6), 'Всего: '.count ($table1));
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+6))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+6))->getFill()->getStartColor()->setRGB('FFFFF0');
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+6).':E'.(($key)+6))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+6).':E'.(($key)+6))->getFill()->getStartColor()->setRGB('f2fff3');
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+6).':G'.(($key)+6))->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+6).':G'.(($key)+6))->getFill()->getStartColor()->setRGB('c8ffcd');
$objPHPExcel->getActiveSheet()->getStyle('C'.(($key)+6))->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('D'.(($key)+6).':E'.(($key)+6))->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('F'.(($key)+6).':G'.(($key)+6))->applyFromArray($styleArray1);
if ($usr!='') {$objPHPExcel->getActiveSheet()->getStyle('D1:H1')->applyFromArray($styleArray1);} else {$objPHPExcel->getActiveSheet()->getStyle('D1:F1')->applyFromArray($styleArray1);}
$objPHPExcel->getActiveSheet()->getStyle('A3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('B3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('C3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('D3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('E3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('F3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('G3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('H3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('I3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('J3')->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->getStyle('J'.(($key)+6))->applyFromArray($styleArray1);
$objPHPExcel->getActiveSheet()->setTitle($tx);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$tx.$usr.' на '.$date55.'.xls"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
}
} else {
echo '<script language="JavaScript" type="text/JavaScript">	
location.href = "/component/comprofiler/login";
</script>';
}
?>