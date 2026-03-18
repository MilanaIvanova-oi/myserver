<?php
// session_start();
// $param1 = $_GET["param1"];
// $param2 = $_GET["param2"];
// $res = $param1 + $param2;
// $res1= $param1 - $param2;
// $res2= $param1 / $param2;
// $res3= $param1 * $param2;
// $data = array('p1' => $param1, 'p2' => $param2, 'res' => $res, 'res1' => $res1, 'res2' => $res2, 'res3' => $res3);
// $jsonString = json_encode($data);
// echo $jsonString;
// echo "test";

// $data = array('p1' => 123, 'p2' => 456, 'res' => 78);
// foreach ($data as $key => $value) {
//     echo $key. ":".$value."<br>";
//     echo "sum(data) =". array_sum($data). "\n";
// }
// $arr = array(1,2,3,4,5,6,7,8,9);
// for($i=0;$i<count($arr);$i++){
//     echo $arr[$i]."<br>";

// }
/**
 * Задача 1
 * Создать функцию вычисления квадрата числа, без использования встроенной функции
 */
// function a($b){
// return $b * $b;
// }
// print(a(2));

/**
 * Задача 2
 * Создать функцию, которая определяет наибольшее значение из двух чисел, без использования встроенной функции
 */
// function a1($c,$d){
//     if ($c >$d){
//         return $c;
//     }else{
//         return $d;
//     }
// } 
// print(a1(2,3));
/**
 * Задача 3
 * Создать фнкцию,которая приимает в аргументе массив, определяет максимальный элемент и возвращает его
 * 
 */
// function u(array $arr) {
//     if (empty($arr)) {
//         return null;
//     }

//     $max = $arr[0];

//     foreach ($arr as $v) {
//         if ($v > $max) {
//             $max = $v;
//         }
//     }
//     return $max;
// }
// $n = [10, 5, 20, 15, 30, 25];
// print(u($arr));

/**
 * Задача 4
 * Создать функцию, которая вычисляет площадь круга или квадрата, по заданным парамерам
 *
 */
// function p($r){
//     return M_Pi*($r*$r);
// }
// print (p(2));


/**
 * Задача 5
 * Создать функцию, которая определяет длину ассоциативного массива
 */
// function a3(array $g){
//     return count($g);
// }
// $k = array ('name' => 'Alisa', 'age'=> 30);
// print(a3($k));
// Задача 1
//function kv_ch($a)
//{
//    return $a*$a;
//}
//echo "<br>";
//print ("Число в квадрате:");
//print (kv_ch(3));
//
//// Задача 2
//function max_ch($a=6, $b=2)
//{
//    if ($a > $b){
//        echo "Число а больше числа б";
//    }
//    else{
//        echo "Число б больше числа а";
//    }
//}
//echo "<br>";
//max_ch();
//
//// Задача 3
//$arr_1 = array(1,2,3,4,5,6,7,8,33);

//function max_el($arr_1)
//{
//    echo max($arr_1);
//}
//echo "<br>";
//print ("Максимальный элемент:");
//print(max_el($arr_1));

//function max_el($arr_1)
//{
//    if (isset($arr_1)){
//        $max_i = 0;
//        for($i=0;$i<count($arr_1);$i++){
//
//        }
//    }
//}

// Задача 4
//function pl_kv ($a)
//{
//    return $a*$a;
//}
//echo "<br>";
//print("Площадь квадрата:");
//print (pl_kv(4));

// Задача 5
//$arr = array('a1' => 1, 'a2' => 2, 'a3' => 3);
//function dlina_mas($arr)
//{
//    return count($arr);
//}
//echo "<br>";
//print ("Длина ассоциативного массива:");
//print (dlina_mas($arr));

//class Test{
//    public $a=4;
//    public $b=2;
//
//    public function sub() {
//        return $this->a - $this->b;
//    }
//
//    public function mul() {
//        return $this->a * $this->b;
//    }
//}
//
//$obj = new Test();
//print $obj->sub();
//echo "<br>";
//print $obj->mul();

// Класс со свойствами : ФИО,ВОЗРАСТ, ВЕС, РОСТ, МЕТОД ВЫЧЕСТЬ ИНДЕКС МАССЫ ТЕЛА

//class Person{
//    public $fam;
//    public $name;
//    public $ote;
//    public $age;
//    public $weight;
//    public $height;
//
//    public $ind_mas;
//
////    function __destruct(){
////        print "destruct";
////    } // Функция __destruct
//
//
//    function __construct($fam,$name,$ote,$age,$weight,$height){
//        $this->fam=$fam;
//        $this->name=$name;
//        $this->ote=$ote;
//        $this->age=$age;
//        $this->weight=$weight;
//        $this->height=$height;
//    } // Функция __construct
//
//    function index_mas(){
//        $h = $this->height/100;
//        $this->ind_mas= $this->weight/($h*$h);
//        print $this->ind_mas;
//    }
//
//
//} // Класс Person
//
//$obj = new Person("Иванов", "Иван", "Иванович", 23, 78, 179);
//print "Фамилия: ".$obj->fam."<br>";
//print "Имя: ".$obj->name."<br>";
//print "Отчество: ".$obj->ote."<br>";
//print "Возраст: ".$obj->age."<br>";
//print "Вес: ".$obj->weight."<br>";
//print "Рост: ".$obj->height."<br>";
//print "ИМТ:" .$obj->ind_mas."<br>";

//class Circle {
//    public $r;
//    const pi=3.14;
//
//    function __construct($r) {
//        $this->r = $r;
//    }
//
//    function pl_circle() {
//        return self::pi*($this->r * $this->r);
//    }
//}
//$obj = new Circle(4);
//print_r("Площадь круга:".$obj->pl_circle());


// class People{
//     public $name; // Имя
//     public $town; // Поселение
//     public $xp; // Хп
//     public $damage; //Урон


//     function __construct($name, $town, $damage)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//         $this->damage = rand(0,20);
//     }

//     function damage_voin($xp, $damage) //Урон воина
//     {

//     }
// }


// class Zhitel extends People{
//     function __construct($name, $town)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//     }
// } //Zhitel

// class Voin extends People{

//     function __construct($name, $town)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//     }

// } //Voin

// class Doctor extends People{
//     public $hilks; //Хилка, лечение

//     function __construct($name, $town, $hilks)
//     {
//         $this->name = $name;
//         $this->town = $town;
//         $this->xp = 100;
//         $this->hilks = $hilks;
//     }

// } //Doctor

// $zh_1 = new Zhitel("Боб", "Суманара");
// $zh_2 = new Zhitel("Тод", "Анара")


/*
try {
    $host = '127.0.0.1';
    $db = 'test_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    // Получение объекта PDO
    $pdo = new PDO($dsn, $user, $pass, $opt);
    var_dump($pdo);
    echo "<br/>";

    // Получение данных из таблицы student по полю name
    $stmt = $pdo->query('SELECT * FROM students');
    var_dump($stmt);
    echo "<br/>";
    while ($row = $stmt->fetch()) {
        echo $row['id'] . " " . $row['first_name'];
        echo "<br/>";
    }

   //INSERT

//    $first_name = 'Федр';

//    $stmt = $pdo->prepare("INSERT INTO students(first_name) VALUES(?)");
//    $stmt->bindParam(1, $first_name);
//    $stmt->execute();

   //1.DELETE

//    $stmt = $pdo->exec('DELETE FROM students WHERE id = 12');

//    2.UPDATE

//    $stmt = $pdo->prepare("UPDATE `students` SET `first_name` = :first_name WHERE `id` = :id");
//    $stmt->execute(array('first_name' => 'Tom', 'id' => 7));


//     3.Вытащить промежуточную таблицу

   echo "<h3>Промежуточная таблица:</h3>";
   $stmt = $pdo->query('SELECT students.first_name, groups.group_name FROM students JOIN groups ON students.group_id = groups.id');
   while ($row = $stmt->fetch()) {
       echo $row['first_name'] . " - " . $row['group_name'] . "<br/>";
   }



} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}
*/



if($_GET !== null && ($_GET['param1'] === $_GET['param2'])){

    $txt1 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis reprehenderit expedita tenetur eligendi perferendis deleniti fugit laborum nisi iusto vitae cum neque cupiditate corrupti, vero obcaecati sunt voluptatem recusandae nobis, consequatur architecto libero eum. Libero rerum distinctio autem amet?';
    $txt2 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis reprehenderit expedita tenetur eligendi perferendis deleniti fugit laborum nisi iusto vitae cum neque cupiditate corrupti, vero obcaecati sunt voluptatem recusandae nobis, consequatur architecto libero eum. Libero rerum distinctio autem amet?';
    $txt3 = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis reprehenderit expedita tenetur eligendi perferendis deleniti fugit laborum nisi iusto vitae cum neque cupiditate corrupti, vero obcaecati sunt voluptatem recusandae nobis, consequatur architecto libero eum. Libero rerum distinctio autem amet?';


    $arr = array('txt1' => $txt1, 'txt2' => $txt2, 'txt3' => $txt3);
    $result = json_encode($arr);
    echo $result;
}else{
    return false;
}



?>
