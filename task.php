<Html>
<Head> 
<meta charset="utf-8">
<Link rel ="stylesheet"href="task1.css">
<Title> </Title>
</Head>
<Body>
<div class='metro'>
<?php
	
	$metro = [
		'Ленинская' => [
			[
				'name' => 'Площадь Ленина',
				'photos' => [
					'https://upload.wikimedia.org/wikipedia/commons/4/4b/PlashadLenina_NM.jpeg',
					'https://upload.wikimedia.org/wikipedia/ru/thumb/4/45/%D0%9F%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C_%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0_-_%D0%BB%D0%B5%D1%81%D1%82%D0%BD%D0%B8%D1%87%D0%BD%D1%8B%D0%B9_%D1%81%D0%BF%D1%83%D1%81%D0%BA%2C_%D1%81%D0%BE_%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%8B_%D0%BC%D1%8D%D1%80%D0%B8%D0%B8.jpg/800px-%D0%9F%D0%BB%D0%BE%D1%89%D0%B0%D0%B4%D1%8C_%D0%9B%D0%B5%D0%BD%D0%B8%D0%BD%D0%B0_-_%D0%BB%D0%B5%D1%81%D1%82%D0%BD%D0%B8%D1%87%D0%BD%D1%8B%D0%B9_%D1%81%D0%BF%D1%83%D1%81%D0%BA%2C_%D1%81%D0%BE_%D1%81%D1%82%D0%BE%D1%80%D0%BE%D0%BD%D1%8B_%D0%BC%D1%8D%D1%80%D0%B8%D0%B8.jpg'
				],
				'description' => 'Введена в эксплуатацию 28 декабря 1985 года (открыта для пассажиров 7 января 1986 года) в составе 1-го пускового участка первой очереди из пяти станций.'
			],
			[
				'name' => 'Площадь Маркса',
				'photos' => [
					'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Novosibirsk_Metro_PMarksa_station_07-2016.jpg/800px-Novosibirsk_Metro_PMarksa_station_07-2016.jpg'
				],
				'description' => 'Первоначальный пуск станции был запланирован на 1990 год — вместе с «Гагаринской» и «Заельцовской». Однако, в связи с начавшимися переменами в стране и перебоями с финансированием и поставками материалов, торжественное открытие состоялось только в следующем году — 26 июля 1991 года. Первых же пассажиров станция приняла 28 июля 1991 года.'
			],
			[
				'name' => 'Заельцовская',
				'photos' => [
					'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg/800px-Novosibirsk_Metro_Zaeltsovskaya_station_07-2016.jpg'
				],
				'description' => 'Первоначально станцию хотели назвать «Площадь Калинина», в честь одноимённой площади, под которой она располагается. На всех схемах советской эпохи станция имела такое название. Однако это название так и осталось рабочим. Во время её строительства, в 1991 году, случился распад Советского Союза и после этого события станции метро перестали называть в честь коммунистических деятелей. Решили остановиться на названии реки Верхней Ельцовки, за которой она располагается. И назвали станцию «Заельцовской».'
			]
		],
		'Дзержинская' => [
			[
				'name' => 'Площадь Гарина-Михайловского',
				'description' => 'Первоначально станцию предполагалось назвать «Вокзальной». Однако, это название так и осталось на бумаге. Станция была названа по площади, носящей, в свою очередь, имя писателя и железнодорожного инженера — Николая Георгиевича Гарина-Михайловского, считающегося одним из основателей Новосибирска.'
			],
			[
				'name' => 'Золотая Нива',
				'description' => 'Изначально станция была открыта 7 октября 2010 года (и закрыта 26 октября 2010 года, на 30 суток, в связи с конструкционными проблемами, выявленными на перегоне станций «Берёзовая Роща — Золотая Нива») с одним перегонным тоннелем — правым. Открытие второго тоннеля запланировано до 2017 года. После его открытия, ожидается, что существующий тоннель будет закрыт на реконструкцию из-за проблем с гидроизоляцией.'
			]
		]
	];
	foreach ($metro as $key_line=>$line) { 
		echo "<div class='line_name'>Линия метро:".$key_line."</div>";
			foreach($line as $station) {
				if ($key_line =="Ленинская") {
					if (isset($station['name'])) {
						echo "<div class = 'station_name'> ".htmlspecialchars($station['name'])."</div>";
					}
					if (isset($station['photos'])) {
						foreach ($station['photos'] as $photo) {
							echo "<div class = 'photo'>	<img src = '".htmlspecialchars($photo)."'/></div>";
						}
					}
					if (isset($station['description'])) {
						echo "<div class = 'description'>".htmlspecialchars($station['description'])."</div><hr>";
					}
				}
				else {
					if (isset($station['name'])) {
						echo "<div class = 'station_name'>".htmlspecialchars($station['name'])."</div>";
					}
					if (isset($station['description'])) {
						echo "<div class = 'description'>".htmlspecialchars($station['description'])."</div>";
				
				}	}
			}
		
			
	}

?>	
 </div>
 </body>
 </html>