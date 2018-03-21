<?php

// Class, Object
// Class データと関数をセットで持っている変数
// プロパティ：　データ
// メソッド：　処理のかたまり、関数

class Cat
{
	public $name = "Himawa";
	public function meow(){
		echo "ニャー";
	}
}

$a = new Cat();     //オブジェクトの生成

$a->meow();
echo "\n";

echo $a->name;
echo "\n";

