<?php
include_once("templates/header.php");
include_once("process/pizza.php");
?>


<!-- home section -->
		<section class="home" id="home">
			<div class="home-text">
			<h1><span>Bem vindos</span> a Pizzaria do João</h1>
				<p> Nossas pizzas são mais do que um simples prato; são uma experiência celestial que leva você a uma <br> jornada de sabores autênticos e ingredientes frescos.</p>
			</div>

			<div class="home-img">
				<img src="img/home.png" alt="home">
			</div>
		</section>

	<!-- about section -->
		<section class="about" id="about">
			<div class="about-img">
				<img src="img/a.png" alt="">
			</div>

			<div class="about-text">
			<h2>Uma <span>boa</span> comida<br> Em troca de um <span>sorriso</span></h2>
				<p>Na Jhon's Pizza, nossos valores vão além dos ingredientes. Cada pizza <br> é preparada com carinho, e o preço é simplesmente um sorriso satisfeito em cada cliente.</p>
			</div>

		</section>

	<!-- menu section -->

		<section class="menu" id="menu">
			<div class="main-text">
				<h2>Menu</h2>
			</div>

			<div class="menu-content">
				<div class="row">
					<img src="img/4cheese.jpg" alt="main-product1">
					<div class="menu-text">
						<div class="menu-left">
							<h4>4 queijos</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 30.00</h5>
						</div>
					</div>
					<p>Uma sinfonia celestial de queijos premium cuidadosamente selecionados, fundindo-se em uma explosão de sabores gastronômico.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>

				<div class="row">
					<img src="img/frangoCatupiry.jpg" alt="main-product2">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Frango com catupiry</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 32.00</h5>
						</div>
					</div>
					<p>Uma combinação celestial entre o sabor suave do frango e a cremosidade inigualável do Catupiry, equilibrando a ternura do frango com o toque especial do queijo.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>

				<div class="row">
					<img src="img/calabresa.jpg" alt="main-product3">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Calabresa</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 26.00</h5>
						</div>
					</div>
					<p>A nossa pizza de calabresa é uma explosão de sabores robustos e picantes. A massa crocante é complementada <br> pela generosa camada de calabresa defumada.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>

				<div class="row">
					<img src="img/lombinho.jpg" alt="main-product4">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Lombinho</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 42.00</h5>
						</div>
					</div>
					<p>Uma opção premium que eleva a pizza a novas alturas. O lombinho macio e suculento, <br> combinado com ingredientes frescos, oferece uma experiência gastronômica única e irresistível.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>
				<div class="row">
					<img src="img/margherita.jpg" alt="main-product4">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Margherita</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 26.00</h5>
						</div>
					</div>
					<p>Clássica Margherita é a personificação da simplicidade e elegância. Tomates frescos, mozzarella de alta qualidade e <br> manjericão cuidadosamente escolhido criam uma obra-prima que honra a tradição italiana.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>
				<div class="row">
					<img src="img/fileCheedar.jpg" alt="main-product4">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Filé com cheedar</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 50.00</h5>
						</div>
					</div>
					<p>Uma extravagância de sabor! O filé macio encontra o cremoso cheddar, resultando em uma explosão de sabores que vai <br> encantar os amantes de carne e queijo. Uma escolha ousada para paladares sofisticados.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>
				<div class="row">
					<img src="img/portuguesa.jpg" alt="main-product4">
					<div class="menu-text">
						<div class="menu-left">
							<h4>Portuguesa</h4>
						</div>
						<div class="menu-right">
							<h5>R$ 28.00</h5>
						</div>
					</div>
					<p>Um passeio pelos sabores tradicionais portugueses. A combinação equilibrada de presunto, ovos, cebola, azeitonas e queijo derrete na boca.</p>
					<div class="star">
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
						<a href="#"><i class='bx bxs-star' ></i></a>
					</div>
				</div>
			</div>

		</section>

	<!-- scroll top -->
	<a href="#home" class="scroll-top">
		<i class='bx bx-up-arrow-alt' ></i>
	</a>

	<!-- custom scrollreveal link -->

	<script src="https://unpkg.com/scrollreveal"></script>
	
	<?php
include_once("templates/footer.php");
?>

	