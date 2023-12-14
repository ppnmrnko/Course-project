//Формирование главного меню
<?php
	echo "<table>\n";
		echo "<tr>\n";
			echo "<td><button style='width: 300px;'>Вывод списка всех служащих</button></td>\n";
			echo "<td><button style='width: 300px;'>Вывод списка офицерских составов</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td><button style='width: 300px;'>Вывод списка всех обладателей золотого значка ГТО</button></td>\n";
			echo "<td><button style='width: 300px;'>Вывод колличества вооружения в определённой части</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td colspan='2'><button style='width: 604px;'>Вывод колличества должностей</button></td>";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td><button style='width: 300px;'>Редактирование таблицы служащих</button></td>\n";
			echo "<td><button style='width: 300px;');'>Редактирование таблицы вооружений</button></td>\n";
		echo "</tr>\n";
		echo "<tr>\n";
			echo "<td colspan='2'><button style='width: 604px;'>Просмотр аудита</button></td>\n";
		echo "</tr>\n";
	echo "</table>\n";
?>
