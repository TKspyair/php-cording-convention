<?php

//======================================================================
// 理解しやすいコード
//======================================================================

//-----------------------------------------------------
// 改行位置に一貫性をもたせる
//-----------------------------------------------------

# 悪い例：改行位置が不揃いで見にくい
    class Calculator {
        public function add($a, $b) { return $a + $b; }

        public function 
        subtract($a, $b) { 
            return $a - $b; 
        }

        public function multiply($a, $b) { return $a * $b;
        }
    }

# 良い例：それぞれの機能ごとに改行位置が揃っていて見やすい
    class Calculator {
        public function add($a, $b) {
            return $a + $b;
        }

        public function subtract($a, $b) {
            return $a - $b;
        }

        public function multiply($a, $b) {
            return $a * $b;
        }
    }

//-----------------------------------------------------
// 縦のラインを揃える
//-----------------------------------------------------

# 悪い例: 「=」の位置が不揃いで見づらい
    $age = 30;
    $name = "John Doe";
    $email = "john.doe@example.com";
    $is_active = true;

# 良い例: 「=」の位置が揃うことで、それぞれに代入されている値がわかりやすい
    $age       = 30;
    $name      = "John Doe";
    $email     = "john.doe@example.com";
    $is_active = true;

//-----------------------------------------------------
// 意味のある並びにする
//-----------------------------------------------------

# 悪い例: ユーザー情報の変数を定義しているブロックに関係ない変数あり、一貫性に欠けている
    $userName  = '';
    $carModel  = 'Honda'; //関係ない変数
    $userAge   = 10;
    $userEmail = 'taro@email';

# 良い例: 関連する変数ごとにまとめられていて見やすい
    $userName  = '';
    $userAge   = 10;
    $userEmail = 'taro@email';
    
    $carModel  = 'Honda';

    /** 備考
     * 重要度順に並べる
     * 一貫性のある並び順にする
     */

//-----------------------------------------------------
// 関連するコードをまとめる
//-----------------------------------------------------
# 悪い例: コードが一塊になっていて、それぞれのグループごとの区切りがなく読みづらい
    class User {
        private string $name;
        private int    $age;
        public function __construct(string $name, int $age) {
            $this->name = $name;
            $this->age  = $age;
        }
        public function register() {
            echo "ユーザー名: ". $this->name . "<br>";
            echo "年齢: ". $this->age . "<br>";
            echo "登録が完了しました。<br>";
        }
    }
# 良い例: メソッドやプロパティが区切られていて読みやすい
    class User {
        // Userクラスのプロパティ
        private string $name;
        private int    $age;

        // 初期化処理
        public function __construct(string $name, int $age) {
            $this->name = $name;
            $this->age  = $age;
        }

        // ユーザー情報に関する処理
        public function register() {
            echo "ユーザー名: ". $this->name . "<br>";
            echo "年齢: ". $this->age . "<br>";
            echo "登録が完了しました。<br>";
        }
    }
?>