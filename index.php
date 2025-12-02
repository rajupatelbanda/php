 <?php

          // class Car
          // {
          //           public $name, $color, $model;

          //           public function __construct($name, $color, $model)
          //           {
          //                     $this->name = $name;
          //                     $this->color = $color;
          //                     $this->model = $model;
          //           }

          //           public function message()
          //           {
          //                     return "My car is a " . $this->color . " " . $this->name . " " . $this->model . "!";
          //           }
          // }

          // $newCar = new Car("Toyota", "black", "2020");
          // $newCar1 = new Car("Suzuki", "Red", "2022");
          // echo $newCar->message();
          // echo "<br/>";
          // echo $newCar1->message(); 

          // function myFunction($name = "Raju")
          // {
          //           echo "Hello World!" . $name;
          // }

          // myFunction("John");
          // myFunction();
          // myFunction("David");
          // 


          // $arr = ["apple", "bat", "cat", "dog", "elephnat"];
          // $result = implode(' ', $arr);

          // echo $result;

          // $str = "Hello World Welcome to New World";
          // $result = strlen($str);
          // $result = str_word_count($str);
          // $result = strrev($str);
          // $result = strpos($str, "New");
          // $result = str_replace("World", "Universe", $str);

          // echo $result;
          // $result = explode(" ", $str);
          // print_r($result);


          // $arr_1 = [1, 2, 3, 4, 5];
          // $arr_2 = [6, 7, 8, 9, 10];
          // $result = array_merge($arr_1, $arr_2);
          // $result = array_combine($arr_1, $arr_2);
          // print_r($result);



          //define associative array 2 arrays and combine them-->
          // $arr_1 = ["a" => "apple", "b" => "bat", "c" => "cat"];
          // $arr_2 = [1, 2, 3];
          // $result = array_combine($arr_1, $arr_2);
          // print_r($result);

          // $arr = ['apple', 'banana', 'grape', 'mango'];
          // // echo $arr[1];
          // foreach ($arr as $a) {
          //           echo $a;
          //           echo "<br/>";
          // }


          // $fruits = ["apple", "banana", "cherries", "dates", "elderberry"];
          // for ($i = 0; $i < count($fruits); $i++) {
          //           echo $fruits[$i];
          //           echo "<br/>";
          // }



          // $employees = [
          //           ["name" => "John", "age" => 30, "position" => "Manager"],
          //           ["name" => "Jane", "age" => 25, "position" => "Developer"],
          //           ["name" => "Doe", "age" => 28, "position" => "Designer"]
          // ];

          // foreach ($employees as $employee) {
          //           echo "Name: " . $employee['name'] . ", Age: " . $employee['age'] . ", Position: " . $employee['position'];
          //           echo "<br/>";
          // }


          //define associate array with print key and value-->
          // $person = ['name' => 'John', 'age' => 30, 'city' => 'New York'];
          // foreach ($person as $key => $value) {
          //           echo $key . ": " . $value;
          //           echo "<br/>";
          // }


          // $a = "Hello World";


          // $fruits = ["apple", "banana", "cherries", "dates", "elderberry"];
          // echo count($fruits);
          // echo sizeof($fruits);
          // if (array_key_exists(2, $fruits)) {
          //           echo "The key exists in the array.";
          // } else {
          //           echo "The key does not exist in the array.";
          // }

          // array_push($fruits, "fig", "grape");
          // // print_r($fruits);
          // unset($fruits[1]);
          // print_r($fruits);


          // sort($fruits);
          // print_r($fruits);

          //magic constants in PHP
          // echo __LINE__;
          // echo "<br/>";
          // echo __FILE__;
          // echo "<br/>";
          // echo __DIR__;
          // echo "<br/>";

          // function test()
          // {
          //           echo __FUNCTION__;
          // }
          // test();

          echo "<br/>";
          //Super Globals in PHP
          // echo $_SERVER['PHP_SELF'];
          // echo "<br/>";
          // echo 'Server Name:' . $_SERVER['SERVER_NAME'];
          // echo "<br/>";
          // echo 'HTTP Host:' . $_SERVER['HTTP_HOST'];
          // echo "<br/>";
          // echo 'User Agent:' . $_SERVER['HTTP_USER_AGENT'];
          // echo "<br/>";
          // echo 'Server Address:' . $_SERVER['SERVER_ADDR'];
          // echo "<br/>";
          // echo 'Request Method:' . $_SERVER['REQUEST_METHOD'];
          // echo "<br/>";
          // echo 'Script Name:' . $_SERVER['SCRIPT_NAME'];
          // echo "<br/>";
          // echo 'Query String:' . $_SERVER['QUERY_STRING'];


          //session in PHP
          session_start();
          $_SESSION['username'] = 'Raju';
          echo "Session variable 'username' is set to " . $_SESSION['username'];

          echo " <a href='dashboard.php'>Dashboard</a>";
          echo "<br/>";
          echo " <a href='logout.php'>logout</a>";
          ?>