{3, 7, 0, 8, 4, 1, 9, 6, 5, 2}で初期化される大きさ10の整数型配列を宣言し、最初は参照する要素番号を0とし、この参照する要素番号の配列要素の値を表示し、次にその配列要素の値を次の参照する要素番号とし、この次の参照する要素番号の配列要素の値を表示し、さらにその配列要素の値を次の参照する要素番号とし、……を10回繰り返すプログラムを作成せよ。（具体的にどのような手順かは実行例を見て考えよう。）

【実行例】

```
$ ./knock38
3
8
5
1
7
6
9
2
0
3
$
```

配列の初期化は

```
int array[10] = {3, 7, 0, 8, 4, 1, 9, 6, 5, 2};
```

のようにすればよい。結果は常に同じになるが固定的に値を表示するのではなく、指定された手順で表示するプログラムとすること。

