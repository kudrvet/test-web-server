<?php
/** Реализуйте вывод массива $links в виде набора ссылок. Каждый элемент этого массива представляет собой ассоциативный массив с двумя ключами: name и url. Имя должно стать текстом ссылки, а адрес значением свойства href.

Результат:

<div>
    <a href="https://google.com">Google</a>
</div>
<div>
    <a href="https://yandex.com">Yandex</a>
</div>
<div>
    <a href="https://bingo.com">Bingo</a>
</div>
Подсказки
Для вывода вам понадобится сокращенная форма цикла foreach. */

$links = [
    ['url' => 'https://google.com', 'name' => 'Google'],
    ['url' => 'https://yandex.com', 'name' => 'Yandex'],
    ['url' => 'https://bingo.com', 'name' => 'Bingo']
];

?>

<?php foreach ($links as $link) : ?>
	<div>
		<a href=<?php echo $link['url']?>><?php echo $link['name']?></a>
	</div>
	<?php endforeach; ?>

<!-- BEGIN (write your solution here) -->

<!-- END -->